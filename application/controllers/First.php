<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
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
		// get the first record, to pass on to our view
		$record = $this->quotes->get(1);
		$this->data['what'] = $record['what'];
		$this->data['who'] = $record['who'];
		$this->data['mug'] = $record['mug'];
		$this->render();
	}

   public function zzz()
   {
      // this is the view we want shown
      $this->data['pagebody'] = 'justone'; 

      // build the list of authors, to pass on to our view
      $record = $this->quotes->get(1);


      $this->data = array_merge($this->data, $record);
      $this->render();
	}

	public function gimme($id)
   	{
      // this is the view we want shown
      $this->data['pagebody'] = 'justone'; 

      // get the requested record, to pass on to our view
      $record = $this->quotes->get($id);

      $this->data = array_merge($this->data, $record);
      $this->render();
	}
}