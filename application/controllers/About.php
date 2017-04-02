<?php
/**
 * Controller for the About page.  Displays a discription about the company.
 * @author DericM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * About for our app
	 */
	public function index()
	{
		$this->data['pagebody'] = 'about';
		$this->render();
	}

}