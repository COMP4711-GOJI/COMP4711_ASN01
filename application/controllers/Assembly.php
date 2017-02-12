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
		
		$gallery = '<div class="row">';
		foreach ($robots as $gridblock) {
			$gallery .= '<div class="col-lg-4 col-sm-6 col-xs-12">';
			$gallery .= '<a href="#">';
			$gallery .= '<img src="./assets/images/bots/';
			$gallery .= $gridblock['img'];
			$gallery .= '" class="thumbnail img-responsive">';
			$gallery .= '</a>';
			$gallery .= '<button type="button" class="btn btn-primary btn-radio">Sell</button>';
			$gallery .= '<input type="checkbox" id="sell-robot-button" class="hidden">';
			$gallery .= '</div>';
		}
		$gallery .= '</div>';	
		foreach ($parts as $gridblock) {
			$gallery .= '<div class="col-lg-4 col-sm-6 col-xs-12">';
			$gallery .= '<a href="#">';
			$gallery .= '<img src="./assets/images/parts/';
			$gallery .= $gridblock['image'];
			$gallery .= '" class="thumbnail img-responsive">';
			$gallery .= '</a>';
			$gallery .= '<button type="button" class="btn btn-primary btn-radio">Sell</button>';
			$gallery .= '<input type="checkbox" id="sell-robot-button" class="hidden">';
			$gallery .= '</div>';
		}
		$this->data['assembly_gallery'] = $gallery;
		$this->render();
	}

}
