<?php

/*
 *
 * This is a model to represent the Robots
 *
 * @author Eva
 */
class Robots extends CI_Model {

	//Lineage groups
	var $lineage=array(
		'household'=>array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'),
		'butler'=>array('M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'),
		'companion'=>array('W', 'X', 'Y', 'Z')
	);
	
	//Dummy Robot data
	var $data = array(
		array('id' => '1', 'top'=>'A','torso'=>'A','bottom'=>'A', 'img' => 'a.jpg' ),
		array('id' => '2', 'top'=>'B','torso'=>'B','bottom'=>'B', 'img' => 'b.jpg' ),
		array('id' => '3', 'top'=>'C','torso'=>'C','bottom'=>'C', 'img' => 'c.jpg' ),
		array('id' => '4', 'top'=>'M','torso'=>'M','bottom'=>'M', 'img' => 'm.jpg' ),
		array('id' => '5', 'top'=>'R','torso'=>'R','bottom'=>'R', 'img' => 'r.jpg' ),
		array('id' => '6', 'top'=>'W','torso'=>'W','bottom'=>'W', 'img' => 'w.jpg' )
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

	//get lineage of a robot 
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
