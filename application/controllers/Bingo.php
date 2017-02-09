<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
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
      $this->data['pagebody'] = 'justone'; 

      // build the list of authors, to pass on to our view
      $record = $this->quotes->get(5);

      $this->data = array_merge($this->data, $record);
      $this->render();
	}


}
