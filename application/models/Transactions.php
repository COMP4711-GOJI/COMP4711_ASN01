<?php
class Transactions extends CI_Model {

	var $history = array(
		array('id' => '1',  'rid' => '3', 'date' => '17-02-10'),
		array('id' => '2',  'rid' => '2', 'date' => '17-02-10'),
		array('id' => '3',  'rid' => '4', 'date' => '17-02-10'),
		array('id' => '4',  'rid' => '5', 'date' => '17-02-10'),
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
