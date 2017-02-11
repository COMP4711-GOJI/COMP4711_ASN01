<?php
class Inventory extends CI_Model {

	var $parts = array(
		array('id' => '1',  'model' => 'a', 'part'  => '1', 'image' => 'a1.jpeg', 'cost' => '100.00', 'stock' => '21'),
		array('id' => '2',  'model' => 'a', 'part'  => '2', 'image' => 'a2.jpeg', 'cost' => '250.00', 'stock' => '22'),
		array('id' => '3',  'model' => 'a', 'part'  => '3', 'image' => 'a3.jpeg', 'cost' => '130.00', 'stock' => '16'),

		array('id' => '4',  'model' => 'b', 'part'  => '1', 'image' => 'b1.jpeg', 'cost' => '100.00', 'stock' => '42'),
		array('id' => '5',  'model' => 'b', 'part'  => '2', 'image' => 'b2.jpeg', 'cost' => '260.00', 'stock' => '45'),
		array('id' => '6',  'model' => 'b', 'part'  => '3', 'image' => 'b3.jpeg', 'cost' => '140.00', 'stock' => '47'),

		array('id' => '7',  'model' => 'c', 'part'  => '1', 'image' => 'c1.jpeg', 'cost' => '110.00', 'stock' => '11'),
		array('id' => '8',  'model' => 'c', 'part'  => '2', 'image' => 'c2.jpeg', 'cost' => '270.00', 'stock' => '7'),
		array('id' => '9',  'model' => 'c', 'part'  => '3', 'image' => 'c3.jpeg', 'cost' => '150.00', 'stock' => '18'),

		array('id' => '10', 'model' => 'm', 'part'  => '1', 'image' => 'm1.jpeg', 'cost' => '120.00', 'stock' => '31'),
		array('id' => '11', 'model' => 'm', 'part'  => '2', 'image' => 'm2.jpeg', 'cost' => '300.00', 'stock' => '33'),
		array('id' => '12', 'model' => 'm', 'part'  => '3', 'image' => 'm3.jpeg', 'cost' => '180.00', 'stock' => '25'),

		array('id' => '13', 'model' => 'r', 'part'  => '1', 'image' => 'r1.jpeg', 'cost' => '120.00', 'stock' => '5'),
		array('id' => '14', 'model' => 'r', 'part'  => '2', 'image' => 'r2.jpeg', 'cost' => '310.00', 'stock' => '9'),
		array('id' => '15', 'model' => 'r', 'part'  => '3', 'image' => 'r3.jpeg', 'cost' => '180.00', 'stock' => '2'),

		array('id' => '16', 'model' => 'w', 'part'  => '1', 'image' => 'w1.jpeg', 'cost' => '130.00', 'stock' => '23'),
		array('id' => '17', 'model' => 'w', 'part'  => '2', 'image' => 'w2.jpeg', 'cost' => '320.00', 'stock' => '11'),
		array('id' => '18', 'model' => 'w', 'part'  => '3', 'image' => 'w3.jpeg', 'cost' => '190.00', 'stock' => '17'),
	);


	var $robots = array(
		array('model' => 'aaa',  'head' => 'a', 'torso'  => 'a', 'legs' => 'a', 'retail' => '700.00', 'stock' => '21'),
		array('model' => 'bbb',  'head' => 'b', 'torso'  => 'b', 'legs' => 'b', 'retail' => '750.00', 'stock' => '11'),
		array('model' => 'ccc',  'head' => 'c', 'torso'  => 'c', 'legs' => 'c', 'retail' => '800.00', 'stock' => '31'),
		array('model' => 'mmm',  'head' => 'm', 'torso'  => 'm', 'legs' => 'm', 'retail' => '850.00', 'stock' => '23'),
		array('model' => 'rrr',  'head' => 'r', 'torso'  => 'r', 'legs' => 'r', 'retail' => '900.00', 'stock' => '3'),
		array('model' => 'www',  'head' => 'w', 'torso'  => 'w', 'legs' => 'w', 'retail' => '950.00', 'stock' => '9'),
		array('model' => 'abc',  'head' => 'a', 'torso'  => 'b', 'legs' => 'c', 'retail' => '800.00', 'stock' => '5'),
		array('model' => 'arw',  'head' => 'a', 'torso'  => 'r', 'legs' => 'w', 'retail' => '850.00', 'stock' => '8'),
		array('model' => 'abw',  'head' => 'a', 'torso'  => 'b', 'legs' => 'w', 'retail' => '870.00', 'stock' => '12'),
		array('model' => 'bac',  'head' => 'b', 'torso'  => 'a', 'legs' => 'c', 'retail' => '920.00', 'stock' => '21'),
		array('model' => 'brw',  'head' => 'b', 'torso'  => 'r', 'legs' => 'w', 'retail' => '710.00', 'stock' => '1'),
		array('model' => 'baw',  'head' => 'b', 'torso'  => 'a', 'legs' => 'w', 'retail' => '810.00', 'stock' => '2'),
		array('model' => 'cab',  'head' => 'c', 'torso'  => 'a', 'legs' => 'b', 'retail' => '860.00', 'stock' => '6'),
		array('model' => 'crw',  'head' => 'c', 'torso'  => 'r', 'legs' => 'w', 'retail' => '860.00', 'stock' => '7'),
		array('model' => 'caw',  'head' => 'c', 'torso'  => 'a', 'legs' => 'w', 'retail' => '850.00', 'stock' => '2'),
		array('model' => 'mab',  'head' => 'm', 'torso'  => 'a', 'legs' => 'b', 'retail' => '910.00', 'stock' => '5'),
		array('model' => 'mrw',  'head' => 'm', 'torso'  => 'r', 'legs' => 'w', 'retail' => '940.00', 'stock' => '8'),
		array('model' => 'mmw',  'head' => 'm', 'torso'  => 'm', 'legs' => 'w', 'retail' => '670.00', 'stock' => '2'),
		array('model' => 'rac',  'head' => 'r', 'torso'  => 'a', 'legs' => 'c', 'retail' => '830.00', 'stock' => '6'),
		array('model' => 'rww',  'head' => 'r', 'torso'  => 'w', 'legs' => 'w', 'retail' => '880.00', 'stock' => '17'),
		array('model' => 'rmw',  'head' => 'r', 'torso'  => 'm', 'legs' => 'w', 'retail' => '890.00', 'stock' => '12'),
		array('model' => 'wab',  'head' => 'w', 'torso'  => 'a', 'legs' => 'b', 'retail' => '790.00', 'stock' => '2'),
		array('model' => 'wrm',  'head' => 'w', 'torso'  => 'r', 'legs' => 'm', 'retail' => '740.00', 'stock' => '9'),
		array('model' => 'wma',  'head' => 'w', 'torso'  => 'm', 'legs' => 'a', 'retail' => '750.00', 'stock' => '7'),
	);


	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get_part($id)
	{
		// iterate over the data until we find the one we want
		foreach ($this->parts as $record)
			if ($record['id'] == $id)
				return $record;
		return null;
	}

	public function get_part_mp($model, $part)
	{
		// iterate over the data until we find the one we want
		foreach ($this->parts as $record)
			if ($record['model'] == $model && $record['part'] == $part)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all_parts()
	{
		return $this->parts;
	}




	// retrieve a single quote
	public function get_robot($model)
	{
		// iterate over the data until we find the one we want
		foreach ($this->robots as $record)
			if ($record['model'] == $model)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all_robots()
	{
		return $this->robots;
	}

}
