<?php
/**
 * Controller for the Home page.  Lists important information. 
 * @author DericM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		$this->data['pagebody'] = 'homepage';

		$scoop = $this->mproperties->scoop('goji');

		$report = json_decode($scoop[0]);
		$timestamp = $scoop[1];

		$id             = $report->id;
		$balance        = $report->balance;
		$boxes_bought   = $report->boxes_bought;
		$parts_returned = $report->parts_returned;
		$parts_made     = $report->parts_made;
		$bots_built     = $report->bots_built;
		$making         = $report->making;
		$last_made      = $report->last_made;


		$this->data['id']             = $id;
		$this->data['balance']        = $balance;
		$this->data['boxes_bought']   = $boxes_bought;
		$this->data['parts_returned'] = $parts_returned;
		$this->data['parts_made']     = $parts_made;
		$this->data['bots_built']     = $bots_built;
		$this->data['making']         = $making;
		$this->data['last_made']      = $last_made;
		$this->data['timestamp']      = $timestamp;

		$this->render();
	}

}