<?php

/*
 *
 * This is a model to represent the Robots
 *
 * @author Eva
 */
class Robots extends CI_Model {

	$lineage=array(
		'household'=>array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'),
		'butler'=>array('M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'),
		'companion'=>array('W', 'X', 'Y', 'Z')
	);
	
	var $data = array(
		array('id' => 'A1', 'top'=>'A','torso'=>'A','bottom'=>'A' ),
		array('id' => 'B2',  'top'=>'B','torso'=>'B','bottom'=>'B' )
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

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

	// retrieve all of the quotes
	public function getLineage($robot)
	{ 
		foreach($lineageas $key=>$val)
			if(in_array($robot['top'], $val)
			 		&& in_array($robot['torso'],$val)
			 		&& in_array($robot['bottom'],$val)
			 	return $key;
		return 'motley';
	}
}
