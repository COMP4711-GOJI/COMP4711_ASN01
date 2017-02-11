<?php
class Transactions extends CI_Model {

	var $history = array(
		array('id' => '1',  'model' => 'aaa', 'amount' => '1', 'date' => '17-02-10'),
		array('id' => '2',  'model' => 'bbb', 'amount' => '2', 'date' => '17-02-10'),
		array('id' => '3',  'model' => 'ccc', 'amount' => '1', 'date' => '17-02-10'),
		array('id' => '4',  'model' => 'bac', 'amount' => '1', 'date' => '17-02-10'),
		array('id' => '5',  'model' => 'cab', 'amount' => '5', 'date' => '17-02-10'),
		array('id' => '6',  'model' => 'rac', 'amount' => '1', 'date' => '17-02-10'),
		array('id' => '7',  'model' => 'wab', 'amount' => '1', 'date' => '17-02-10'),
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($id)
	{
		// iterate over the data until we find the one we want
		foreach ($this->history as $record)
			if ($record['id'] == $id)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->history;
	}

}
