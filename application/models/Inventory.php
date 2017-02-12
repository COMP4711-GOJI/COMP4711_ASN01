<?php
class Inventory extends CI_Model {

	var $parts = array(
		array('id' => '1',  'part'  => '1', 'CACode' => '1', 'buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm', 'image' => 'a1.jpeg'),
		array('id' => '2',  'part'  => '2', 'CACode' => '2','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'a2.jpeg'),
		array('id' => '3',  'part'  => '3', 'CACode' => '3','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'a3.jpeg'),

		array('id' => '4',  'part'  => '1', 'CACode' => '4','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b1.jpeg'),
		array('id' => '5',  'part'  => '2', 'CACode' => '5','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b2.jpeg'),
		array('id' => '6',  'part'  => '3', 'CACode' => '6','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b3.jpeg')
	);

    var $partsModelLine = array(
        array('part' => '1', 'model' => 'a', 'line' => 'household'),
        array('part' => '2', 'model' => 'b', 'line' => 'household'),
        array('part' => '2', 'model' => 'c', 'line' => 'household'),
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

    /**
     * @param $partCode The code of the part you want model line info on.
     * @return mixed|null If there is a part with that code, its info is
     *     returned in assoc array containing part code, model, and line.
     *     If there isn't, null is returned.
     *
     * Retrieves the model and line of a part specified by the partCode
     * parameter. Data is returned in the form of an assoc array, containing
     * part code, model, and line.
     */
	public function get_part_modelline($partCode) {
        foreach ($this->partsModelLine as $part) {
            if($part['part'] = $partCode) {
                return $part;
            }
        }
        return null;
    }


    /**
     * @return array An assoc containing info on every part. Info includes
     *     unique id, part code, certificate of authenticity code, build
     *     location, build data, and build time.
     *
     * Returns all info on parts.
     */
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
