<?php
/**
 * Controller for the history page.  Collects all the information from the Transactions model and
 * prepares it to be rendered by the history view.
 * @author Robert Arendac
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{

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
	}

}