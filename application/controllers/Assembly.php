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
		
		$robots = $this->robots->all();
		$parts = $this->inventory->all_parts();

		foreach ($parts as $top) 
		{
			if($top['part'] == 1)
				$topgallery[] = array( 'robotpartimg' => $top['image'] , 'topid' => $top['CACode']);
		}

		foreach ($parts as $torso) 
		{
			if($torso['part'] == 2)
				$torsogallery[] = array( 'robotpartimg' => $torso['image'] , 'torsoid' => $top['CACode']);
		}

		foreach ($parts as $legs) 
		{
			if($legs['part'] == 3)
				$legsgallery[] = array( 'robotpartimg' => $legs['image'] , 'legsid' => $top['CACode']);
		}
		
		$this->data['assembly_gallery_top'] = $topgallery;
		$this->data['assembly_gallery_torso'] = $torsogallery;
		$this->data['assembly_gallery_legs'] = $legsgallery;
		$this->render();
	}

}
