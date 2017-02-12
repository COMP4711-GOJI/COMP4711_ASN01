<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application
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
		// this is the view we want shown
		$this->data['pagebody'] = 'assembly';
		//$source = $this->robots->all();
		//$robotimg = array ();
		/*foreach ($source as $record)
		{
			$robotimg[] = array ('img' => $record['img']);
		}*/
		//$this->data['img'] = $robotimg;
		$this->render();
	}

}
