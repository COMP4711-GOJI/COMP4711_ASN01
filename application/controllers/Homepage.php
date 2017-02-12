<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
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
		$this->data['pagebody'] = 'homepage';
        
		$parts   = $this->inventory->all_parts();
		$robots  = $this->robots->all();
		$history = $this->transactions->allPurchase();

		$total_assembled = sizeof($robots);
		$total_parts     = sizeof($parts);
		$total_spent     = 0;
		$total_earned    = 0;


		foreach ($parts as $item)
		{
			$total_spent += $item['cost'];
		}
		foreach ($history as $item)
		{
			$id = $item['r_id'];
			$robot = $this->robots->get($id);
			$total_earned += $robot['retail'];
		}
                
		$this->data['total_assembled'] = $total_assembled;
		$this->data['total_parts']     = $total_parts;
		$this->data['total_spent']     = $total_spent;
		$this->data['total_earned']    = $total_earned;

		$this->render();
	}

}