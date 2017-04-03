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


		$scoop = $this->mproperties->scoop($GLOBALS['team']);

		$id             = $scoop->id;
		$balance        = $scoop->balance;
		$boxes_bought   = $scoop->boxes_bought;
		$parts_returned = $scoop->parts_returned;
		$parts_made     = $scoop->parts_made;
		$bots_built     = $scoop->bots_built;
		$making         = $scoop->making;
		$last_made      = $scoop->last_made;

		$this->data['id']             = $id;
		$this->data['balance']        = $balance;
		$this->data['boxes_bought']   = $boxes_bought;
		$this->data['parts_returned'] = $parts_returned;
		$this->data['parts_made']     = $parts_made;
		$this->data['bots_built']     = $bots_built;
		$this->data['making']         = $making;
		$this->data['last_made']      = $last_made;

		$this->render();
	}

}