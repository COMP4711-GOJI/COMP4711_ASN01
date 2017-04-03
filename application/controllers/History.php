<?php
/**
 * Controller for the history page.  Collects all the information from the Transactions model and
 * prepares it to be rendered by the history view.
 * @author Robert Arendac
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{

	// How many items will be displayed at once
	private $items_per_page = 15;

	// Default constructor
	function __construct()
	{
		parent::__construct();
		// $this->mproperties->registerme();
	}

	/**
	 * History page for our app
	 */
	public function index()
	{
		$this->page(1);
	}

	/**
	 * Show a page of history transactions
	 * @param pHistory - parts history
	 * @param rHistory - robot history
	 * @author Robert Arendac
	 */
	private function show_page($pHistory, $rHistory)
	{
	    $this->data['pagetitle'] = 'History of Transactions';
	    $this->data['pagebody'] = 'history';
	    
	    $result = ''; // start with an empty array      
	    foreach ($pHistory as $trans)
	    {
        	$result .= $this->parser->parse('onepart', (array) $trans, true);   
	    }

	    // and then pass them on
	    $this->data['p_data'] = $result;

	    $result = ''; // start with an empty array      
	    foreach ($rHistory as $trans)
	    {
        	$result .= $this->parser->parse('onerobot', (array) $trans, true);   
	    }

	    // and then pass them on
	    $this->data['r_data'] = $result;
	    $this->render();
	}

	/**
	 * Show a single page with sorting capabilities
	 * @param num - page to show
	 * @param sort - column  to sort by
	 * @param table - table to be sorted
	 * @author Robert Arendac
	 */
	function page($num = 1, $sort = null, $table = null)
	{
		// Check to see if user wants to sort
		if (isset($sort) && isset($table))
		{
			if (strcmp($table, "robots"))
			{
	    		$robotRecords = $this->mrhistory->sort($sort);
	    		$partRecords = $this->mphistory->all();
			}
			else
			{
				$partRecords = $this->mphistory->sort($sort); // get all the tasks
				$robotRecords = $this->mrhistory->all();
			}
		}
		else
		{
			$partRecords = $this->mphistory->all(); // get all the tasks
	    	$robotRecords = $this->mrhistory->all();
		}
	    
	    $history = array(); // start with an empty extract

	    // use a foreach loop, because the record indices may not be sequential
	    $index = 0; // where are we in the history list
	    $count = 0; // how many items have we added to the extract
	    $start = ($num - 1) * $this->items_per_page;
	    $pHistories = array();
	    $rHistories = array();
	    if ($this->mphistory->size() > 0)	//Check if db is empty first
	    {
		    foreach($partRecords as $history) 
		    {
		        if ($index++ >= $start) 
		        {
		            $pHistories[] = $history;
		            $count++;
		        }
		        if ($count >= $this->items_per_page) break;
		    }
		}
		if ($this->mrhistory->size() > 0) //Check if db is empty first
		{
		    $count = 0;
		    $index = 0;
		    foreach($robotRecords as $history) 
		    {
		        if ($index++ >= $start) 
		        {
		            $rHistories[] = $history;
		            $count++;
		        }
		        if ($count >= $this->items_per_page) break;
		    }
		}

		$this->data['page'] = $num;
	    $this->data['pagination'] = $this->pagenav($num);
	    $this->show_page($pHistories, $rHistories);
	}

	/**
	 * Build the navbar
	 * @param num - page currently on
	 * @author Robert Arendac
	 */
	private function pagenav($num) 
	{
		$maxp = ceil($this->mphistory->size() / $this->items_per_page);
		$maxr = ceil($this->mrhistory->size() / $this->items_per_page);

	    // check which table has more data
	    $lastpage = max($maxp, $maxr);

	    $parms = array(
	        'first' => 1,
	        'previous' => (max($num-1,1)),
	        'next' => min($num+1,$lastpage),
	        'last' => $lastpage
	    );

	    return $this->parser->parse('itemnav', $parms, true);
	}
}
