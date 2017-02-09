<?php

/*
 *
 * This is a model to represent the Robots
 *
 * @author Eva
 */
class Robots extends CI_Model {

	// The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
	var $data = array(
		array('id' => 'A1', 'top'=>'A1','torso'=>'A1','bottom'=>'A1' ),
		array('id' => 'B2',  'top'=>'B1','torso'=>'B1','bottom'=>'B1' )
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
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

}
