<?php
/**
 * Controller for the history page.  Collects all the information from the Transactions model and
 * prepares it to be rendered by the history view.
 * @author Robert Arendac
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{

	private $items_per_page = 5;

	// Default constructor
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * History page for our app
	 */
	public function index()
	{
		$this->page(1);
		/*
		// this is the view we want shown
		$this->data['pagebody'] = 'history';
		
		// Builds the list of purchases to be displayed
		$p_source = $this->transactions->allPurchase();
		$purchases = array();
		foreach ($p_source as $record)
		{
			$purchases[] = array('p_id' => $record['p_id'], 'item' => $record['item'], 'p_date' => $record['date'], 'p_time' => $record['time']);
		}

		// Builds the list of assemblies to be displayed
		$a_source = $this->transactions->allAssembly();
		$assemblies = array();
		foreach ($a_source as $record)
		{
			$assemblies[] = array('a_id' => $record['id'], 'action' => $record['action'], 'piece_id' => $record['pieceid'], 'a_date' => $record['date'], 'a_time' => $record['time']);
		}

		// Builds the list of shipments to be displayed
		$s_source = $this->transactions->allShipment();
		$shipments = array();
		foreach ($s_source as $record)
		{
			$shipments[] = array('s_id' => $record['id'], 'office' => $record['office'], 's_date' => $record['date'], 's_time' => $record['time']);
		}



		$this->data['p_data'] = $purchases;
		$this->data['a_data'] = $assemblies;
		$this->data['s_data'] = $shipments;
		
		$this->render();
		*/
	}

	// Show a single page of todo items
	private function show_page($history)
	{
	    $this->data['pagetitle'] = 'History of Transactions';
	    $this->data['pagebody'] = 'history';
	    
	    $result = ''; // start with an empty array      
	    foreach ($history as $trans)
	    {
        	$result .= $this->parser->parse('oneitem', (array) $trans, true);   
	    }

	    // and then pass them on
	    $this->data['p_data'] = $result;
	    $this->render();
	}

	// Extract & handle a page of items, defaulting to the beginning
	function page($num = 1)
	{
	    $records = $this->transactions->allPurchase(); // get all the tasks
	    $history = array(); // start with an empty extract

	    // use a foreach loop, because the record indices may not be sequential
	    $index = 0; // where are we in the tasks list
	    $count = 0; // how many items have we added to the extract
	    $start = ($num - 1) * $this->items_per_page;
	    foreach($records as $history) {
	        if ($index++ >= $start) {
	            $histories[] = $history;
	            $count++;
	        }
	        if ($count >= $this->items_per_page) break;
	    }
	    $this->show_page($histories);
	}

	private function pagenav($num) 
	{
	    $lastpage = ceil($this->transactions->size() / $this->items_per_page);

	    $parms = array(
	        'first' => 1,
	        'previous' => (max($num-1,1)),
	        'next' => min($num+1,$lastpage),
	        'last' => $lastpage
	    );

	    return $this->parser->parse('itemnav', $parms, true);
	}

}