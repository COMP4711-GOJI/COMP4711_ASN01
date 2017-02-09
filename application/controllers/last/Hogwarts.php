<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
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
		$this->data['pagebody'] = 'justone';

		$record = $this->quotes->get(6);
		$this->data = array_merge($this->data, $record);

		// $this->data['who'] = $author['who'];
		// $this->data['what'] = $author['what'];
		$this->render();  
	}

}
