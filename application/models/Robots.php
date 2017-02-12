<?php

/*
 *
 * This is a model to represent the Robots
 *
 * @author Eva
 */
class Robots extends CI_Model {

	var $lineage=array(
		'household'=>array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'),
		'butler'=>array('M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'),
		'companion'=>array('W', 'X', 'Y', 'Z')
	);
	
	var $data = array(
		array('id' => '1', 'model'=>'AAA', 'top'=>'A','torso'=>'A','bottom'=>'A', 'img' => 'a.jpg', 'retail' => '800.00'),
		array('id' => '2', 'model'=>'BBB', 'top'=>'B','torso'=>'B','bottom'=>'B', 'img' => 'b.jpg', 'retail' => '850.00'),
		array('id' => '3', 'model'=>'CCC', 'top'=>'C','torso'=>'C','bottom'=>'C', 'img' => 'c.jpg', 'retail' => '890.00'),
		array('id' => '4', 'model'=>'MMM', 'top'=>'M','torso'=>'M','bottom'=>'M', 'img' => 'm.jpg', 'retail' => '910.00'),
		array('id' => '5', 'model'=>'RRR', 'top'=>'R','torso'=>'R','bottom'=>'R', 'img' => 'r.jpg', 'retail' => '920.00'),
		array('id' => '6', 'model'=>'WWW', 'top'=>'W','torso'=>'W','bottom'=>'W', 'img' => 'w.jpg', 'retail' => '980.00')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a robot 
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the robots
	public function all()
	{
		return $this->data;
	}

	public function getLineage($robot)
	{ 
		foreach($lineageas as $key=>$val)
			if(in_array($robot['top'], $val)
			 		&& in_array($robot['torso'],$val)
			 		&& in_array($robot['bottom'],$val))
			 	return $key;
		return 'motley';
	}
}
