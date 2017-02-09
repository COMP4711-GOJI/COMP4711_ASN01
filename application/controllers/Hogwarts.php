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
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	public function shucks()
    {
      // this is the view we want shown
      $this->data['pagebody'] = 'justone'; 

      // build the list of authors, to pass on to our view
      $record = $this->quotes->get(2);

      $this->data = array_merge($this->data, $record);
      $this->render();
	}

	/**
	 * Random function, display a random picture and quote
	 */
	public function random()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		
		// select a random quote to display
		$selected = rand(1, 6);
		$record = $this->quotes->get($selected);
     	$this->data = array_merge($this->data, $record);
		$this->render();
	}
}