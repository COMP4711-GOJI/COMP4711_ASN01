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

		//$this->mproperties->registerme();
		$parts = $this->mparts->all();
		$usedparts = $this->mrobots->all();

		foreach ($parts as $part) 
		{
			$img = $part->model . $part->piece;

			if( $part->piece == 1 && $part->available == 1)
				$topgallery[] = array( 'robotpartimg' => $img , 'topid' => $part->cacode);

			if( $part->piece == 2 && $part->available == 1)
				$torsogallery[] = array( 'robotpartimg' => $img , 'torsoid' => $part->cacode);

			if( $part->piece == 3 && $part->available == 1)
				$legsgallery[] = array( 'robotpartimg' => $img , 'legsid' => $part->cacode);
			
			// if($part->piece == 1 && 
			// 	 ! array_search($part->cacode, array_column($usedparts, 'head'))
			// 	 )
				
			// 	$topgallery[] = array( 'robotpartimg' => $part['image'] , 'topid' => $part['CACode']);

			// if($part->piece == 2 && 
			// 	 ! array_search($part->cacode, array_column($usedparts, 'torso')) )
				
			// 	$torsogallery[] = array( 'robotpartimg' => $part['image'] , 'torsoid' => $part['CACode']);

			// if($part->piece == 3 && 
			// 	 ! array_search($part->cacode, array_column($usedparts, 'legs')))
				
			// 	$legsgallery[] = array( 'robotpartimg' => $part['image'] , 'legsid' => $part['CACode']);

		}
		$bottable = '';	
		foreach ($usedparts as $bot) 
		{
			$robotentry = array('r_id' => $bot->r_id , 'head' => $bot->head , 'torso' => $bot->torso , 'legs' => $bot->legs, 'bot_id' => $bot->r_id  );
			
        	$bottable .= $this->parser->parse('oneassembledbot', $robotentry);    
		}

		if(empty($topgallery))
			$topgallery[] = array( 'robotpartimg' => 'ofs' , 'topid' => '-1');
		if(empty($torsogallery))
			$torsogallery[] = array( 'robotpartimg' => 'ofs' , 'topid' => '-1');
		if(empty($legsgallery)){}
			$legsgallery[] = array( 'robotpartimg' => 'ofs' , 'topid' => '-1');

		$this->data['assembly_gallery_top'] = $topgallery;
		$this->data['assembly_gallery_torso'] = $torsogallery;
		$this->data['assembly_gallery_legs'] = $legsgallery;
		$this->data['robottable'] = $bottable;
		$this->render();
	}

	public function assemblebot($top, $torso, $legs)
	{
		//$role = $this->session->userdata('userrole');
		// if(role == ROLE_SUPERVISOR)
		// {

			// validate the selected parts
			if( $this->mparts->exists($top)
				&& $this->mparts->exists($torso)
				&& $this->mparts->exists($legs))
			{
				//make part inaccessible from part table
				$toprec = $this->mparts->get($top);
				$torsorec = $this->mparts->get($torso);
				$legsrec = $this->mparts->get($legs);

				$toprec->available = 0;
				$torsorec->available = 0;
				$legsrec->available = 0;
				
				$this->mparts->update($toprec);
				$this->mparts->update($torsorec);
				$this->mparts->update($legsrec);

				//add a record to your "robots" table, with the chosen parts	
				$robotrec = array('head' => $top, 'torso' => $torso, 'legs' => $legs, 'available' => 1);
				$this->mrobots->add($robotrec);

				// update the history table(s)
				$getrec = $this->mrobots->tail(1);
				$mostrecentbotrec = reset($getrec);
				$histrec = array('r_id' => $mostrecentbotrec->r_id, 'catagory' => 'assembly');
				$this->mrhistory->add($histrec);
			}
			
		//}
		redirect('/assembly');
		//$this->index();
		//$this->render();
	}

	public function shipbot($bot)
	{
		//$role = $this->session->userdata('userrole');
		//if(role == ROLE_BOSS)
		//{
			$server = $this->data['umbrella'] . '/work/buymybot';
			$apik = $this->mproperties->getApiKey();
			$robot = $this->mrobot->get($bot);
			$result = file_get_contents($server . '/' . $robot->head . '/' . $robot->torso . '/' . $robot->legs . '?key=' . $apik);
			if ( $res[0] == 'OK')
			{
				$robot->available = 0;
				$this->mrobot->update($rec);
				$histrec = array('r_id' => $robot->r_id, 'catagory' => 'shipment');
				$this->mrhistory->add($histrec);
			}
			redirect('/assembly');
		//}
	}

	public function recycle($part1, $part2, $part3)
	{
		//$role = $this->session->userdata('userrole');
		//if(role == ROLE_SUPERVISOR)
		//{
			$server = $this->data['umbrella'] . '/work/recycle';
			$apik = $this->mproperties->getApiKey();	
			if($part1 == '-1' || $part1 == 'undefined' ){
				$result = -1; // not OK
			} else if($part2 == '-1' || $part2 == 'undefined' ) {
				$result = file_get_contents($server . '/' . $part1 . '?key=' . $apik);
			} else if($part3 == '-1' || $part3 == 'undefined' ) {
				$result = file_get_contents($server . '/' . $part1 . '/' . $part2 . '?key=' . $apik);
			} else {
				$result = file_get_contents($server . '/' . $part1 . '/' . $part2 . '/' . $part3 . '?key=' . $apik);
			}

			$res = str_split($result, 2);
			if ( $res[0] == 'OK')
			{
				$rec = $this->mparts->get($part);
				$rec->available = 0;
				$this->mparts->update($rec);
				$histrec = array('cacode' => $rec->cacode, 'catagory' => 'recycled');
				$this->mrhistory->add($histrec);
			}

			//parse results
			redirect('/assembly');
		//}
	}	

}
