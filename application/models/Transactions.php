<?php
/**
 * Model to represent the history of all transactions.  The data is split into three
 * "tables": purchases, assemblies, and shipping locations.
 * @author Robert Arendac
 */

class Transactions extends CI_Model {
	// Purchases table, includes item purchased and date of purchase
	var $purchase = array(
		array('p_id' => '1', 'r_id' => '5', 'item' => 'top', 	 'date' => '05/01/2017', 'time' => '15:30'),
		array('p_id' => '2', 'r_id' => '3', 'item' => 'top', 	 'date' => '23/01/2017', 'time' => '12:00'),
		array('p_id' => '3', 'r_id' => '1', 'item' => 'bottom',  'date' => '01/01/2017', 'time' => '16:45'),
		array('p_id' => '4', 'r_id' => '2', 'item' => 'torso',   'date' => '02/02/2017', 'time' => '09:10'),
		array('p_id' => '5', 'r_id' => '4', 'item' => 'bottom',  'date' => '21/12/2016', 'time' => '13:25'),
		array('p_id' => '6', 'r_id' => '6', 'item' => 'torso',   'date' => '09/02/2017', 'time' => '14:55')
	);

	// Assemblies table, includes piece id, action performed, and date of assembly
	var $assembly = array(
		array('id' => '1', 'pieceid' => 'A2', 'action' => 'returned', 'date' => '10/01/2017', 'time' => '20:30'),
		array('id' => '2', 'pieceid' => 'Z1', 'action' => 'returned', 'date' => '12/01/2017', 'time' => '11:11'),
		array('id' => '3', 'pieceid' => 'M3', 'action' => 'assembled', 'date' => '01/01/2016', 'time' => '13:30'),
		array('id' => '4', 'pieceid' => 'P1', 'action' => 'assembled', 'date' => '07/02/2017', 'time' => '09:00'),
		array('id' => '5', 'pieceid' => 'F1', 'action' => 'returned', 'date' => '17/08/2016', 'time' => '16:45'),
		array('id' => '6', 'pieceid' => 'U2', 'action' => 'returned', 'date' => '11/11/2016', 'time' => '00:00')
	);

	// Shipments table, includes office of shipment and date where shipment occured
	var $shipment = array(
		array('id' => '1', 'office' => 'Vancouver', 	'date' => '14/01/2017', 'time' => '15:30'),
		array('id' => '2', 'office' => 'Shiraz', 		'date' => '20/01/2017', 'time' => '12:00'),
		array('id' => '3', 'office' => 'Nice', 			'date' => '10/02/2017', 'time' => '16:45'),
		array('id' => '4', 'office' => 'Nurburg', 		'date' => '02/02/2016', 'time' => '09:10'),
		array('id' => '5', 'office' => 'Dubrovnik', 	'date' => '04/05/2016', 'time' => '13:25'),
		array('id' => '6', 'office' => 'Semuc Champey', 'date' => '09/02/2016', 'time' => '14:55')
	);

	// Default constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Gets a specific purchase
	public function getPurchase($which)
	{
		foreach ($this->purchase as $record) 
		{
			if ($record['p_id'] == $which)
				return $record;
		}

		return null;
	}

	// Gets a specific assembly
	public function getAssembly($which)
	{
		foreach ($this->assembly as $record) 
		{
			if ($record['id'] == $which)
				return $record;
		}

		return null;
	}

	// Gets a specific shipment
	public function getShipment($which)
	{
		foreach ($this->shipment as $record) 
		{
			if ($record['id'] == $which)
				return $record;
		}

		return null;
	}

	// Returns all purchases
	public function allPurchase()
	{
		return $this->purchase;
	}

	// Returns all assemblies
	public function allAssembly()
	{
		return $this->assembly;
	}

	// Returns all shipments
	public function allShipment()
	{
		return $this->shipment;
	}

	// Returns all data in the form of an array composed of the three tables.
	public function getAll()
	{
		return array('purchases' => $this->purchase, 'assemblies' => $this->assembly,
			'shipments' => $this->shipment);
	}

	public function size()
	{
		return (count($this->purchase) + count($this->assembly) + count($this->shipment));
	}
}
