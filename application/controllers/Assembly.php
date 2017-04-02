<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*--------------------------------------------------------------------------
-- Controller: Assmebly
--
-- DATE: Feb. 11, 2017
--
-- REVISIONS: 
-- Version 1.0 - [DM] - 2016/Feb/11 - created base
-- Version 1.0 - [EY] - 2016/Feb/11 - added the grid structure 
--
-- DESIGNER: Eva Yu
--
-- PROGRAMMER: Eva Yu
--
-- NOTES:
-- This controller fills out the Robot Assembly Page of the WebApp
--------------------------------------------------------------------------*/
class Assembly extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Assembly for our app
	 */
	public function index()
	{
		$this->data['pagebody'] = 'assembly';

		/*
		
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

		*/
		$this->render();
	}

}
