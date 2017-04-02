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
		$this->data['umbrella'] = 'https://umbrella.jlparry.com';
	}

	/**
	 * Assembly for our app
	 */
	public function index()
	{
		$this->data['pagebody'] = 'assembly';

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

	public function assemblebot($top, $torso, $legs)
	{
		$role = $this->session->userdata('userrole');
		// if(role == ROLE_SUPERVISOR)
		// {
			//$server = $this->data['umbrella'] . '/info/balance';
			//$result = file_get_contents($server . '/' . $top . $torso . $legs);

			// validate the selected parts, to make sure there is one of each needed for a complete bot
			// add a record to your "robots" table, with the chosen parts
			// remove the parts from the "parts" table
			// update the history table(s)
		//}
		$this->index();
		//$this->render();
	}

	public function shipbot($bot)
	{
		$role = $this->session->userdata('userrole');
		//if(role == ROLE_BOSS)
		//{
			$server = $this->data['umbrella'] . '/work/buymybot/';
			
			$top = "TBD";
			$torso = "TBD";
			$legs = "TBD";

			$result = file_get_contents($server . '/' . $top . $torso . $legs);
			//parse results
		//}
	}

	public function recycle($part)
	{
		$role = $this->session->userdata('userrole');
		//if(role == ROLE_SUPERVISOR)
		//{
			$server = $this->data['umbrella'] . '/work/recycle';
			$result = file_get_contents($server . '/' . $part);
			//parse results
		//}
	}	

}
