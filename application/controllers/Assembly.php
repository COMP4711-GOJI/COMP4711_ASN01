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

		// show all the robots from Robot Model
		$gallery = '<div class="row">';
		foreach ($robots as $gridblock) {
			$gallery .= '<div class="col-lg-4 col-sm-6 col-xs-12">';
			$gallery .= '<a href="#">';
			$gallery .= '<img src="./assets/images/bots/';
			$gallery .= $gridblock['img'];
			$gallery .= '" class="thumbnail img-responsive">';
			$gallery .= '</a>';
			//add a button for delete
			$gallery .= '<button type="button" class="btn btn-primary btn-radio-sellbot">Sell</button>';
			$gallery .= '<input type="checkbox" id="sell-robot-button" class="hidden">';
			$gallery .= '</div>';
		}

		//show all the parts from the inventory
		$gallery .= '</div>';	
		foreach ($parts as $gridblock) {
			$gallery .= '<div class="col-lg-4 col-sm-6 col-xs-12">';
			$gallery .= '<a href="#">';
			$gallery .= '<img src="./assets/images/parts/';
			$gallery .= $gridblock['image'];
			$gallery .= '" class="thumbnail img-responsive">';
			$gallery .= '</a>';
			//add a button for delete
			$gallery .= '<button type="button" class="btn btn-primary btn-radio-sellpart">Sell</button>';
			$gallery .= '<input type="checkbox" id="sell-robot-button" class="hidden">';
			//add a button for select
			$gallery .= '<button type="button" class="btn btn-primary btn-radio-selectpart">Select</button>';
			$gallery .= '<input type="checkbox" id="select-part-button" class="hidden">';
			$gallery .= '</div>';
		}

		//dispaly it as a grid gallery
		$this->data['assembly_gallery'] = $gallery;
		$this->render();
	}

}
