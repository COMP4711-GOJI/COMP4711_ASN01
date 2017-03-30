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
		$this->data['pagebody'] = 'assembly';
		
		$robots = $this->robots->all();
		$parts = $this->inventory->all_parts();

		foreach ($robots as $robotpart) 
		{
			$robotgallery[] = array( 'robotimg' => $robotpart['img'] );
		}

		foreach ($parts as $robotpart) 
		{
			$partsgallery[] = array( 'robotpartimg' => $robotpart['image'] );
		}
		
		$this->data['assembly_gallery'] = $robotgallery ;
		$this->data['assembly_gallery'] = $partsgallery ;
		$this->render();
	}

}
