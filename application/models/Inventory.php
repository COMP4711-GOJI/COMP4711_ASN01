<?php
class Inventory extends CI_Model {

	var $parts = array(
		array('id' => '1',  'part'  => '1', 'CACode' => '1', 'buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'a1.jpeg', 'cost' => '30.00'),
		array('id' => '2',  'part'  => '2', 'CACode' => '2','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'a2.jpeg', 'cost' => '120.00'),
		array('id' => '3',  'part'  => '3', 'CACode' => '3','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'a3.jpeg', 'cost' => '60.00'),

		array('id' => '4',  'part'  => '1', 'CACode' => '4','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b1.jpeg', 'cost' => '40.00'),
		array('id' => '5',  'part'  => '2', 'CACode' => '5','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b2.jpeg', 'cost' => '130.00'),
		array('id' => '6',  'part'  => '3', 'CACode' => '6','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'b3.jpeg', 'cost' => '70.00'),

        array('id' => '7',  'part'  => '2', 'CACode' => '7','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'c1.jpeg', 'cost' => '130.00'),
		array('id' => '8',  'part'  => '3', 'CACode' => '8','buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm',  'image' => 'c2.jpeg', 'cost' => '70.00')
	);

    var $partsModelLine = array(
        array('part' => '1', 'model' => 'a', 'line' => 'household'),
        array('part' => '2', 'model' => 'b', 'line' => 'household'),
        array('part' => '3', 'model' => 'c', 'line' => 'household'),
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
            if($part['part'] == $partCode) {
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

}
