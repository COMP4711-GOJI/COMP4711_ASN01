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
        /*
		$inv_parts  = $this->inventory->all_parts();
		$inv_robots = $this->inventory->all_robots();
		$history    = $this->transactions->all();

		$total_assembled = 0;
		$total_parts     = 0;
		$total_spent     = 0;
		$total_earned    = 0;

		foreach ($inv_parts as $item)
		{
			$total_parts += $item['stock'];
			$total_spent += ($item['stock'] * $item['cost']);
		}
		foreach ($inv_robots as $item)
		{
			$total_assembled += $item['stock'];
		}
		foreach ($history as $item)
		{
			$model = $item['model'];
			$amount = $item['amount'];
			$robot = $this->inventory->get_robot($model);
			$total_earned += ($amount * $robot['retail']);
		}
        */


//$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);

        /*
		$this->data['total_assembled'] = $total_assembled;
		$this->data['total_parts']     = $total_parts;
		$this->data['total_spent']     = $total_spent;
		$this->data['total_earned']    = $total_earned;
*/
		$this->render();
	}

}