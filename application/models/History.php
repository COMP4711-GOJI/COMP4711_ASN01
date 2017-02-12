<?php

/**
 * A model for history
 * @author Robert Arendac
 */

class History extends CI_Model
{
	var $purchase = array(
		array('id' => '1', 'item' => 'top', 'date' => '05/01/2017', 'time' => '15:30'),
		array('id' => '2', 'item' => 'top', 'date' => '23/01/2017', 'time' => '12:00'),
		array('id' => '3', 'item' => 'bottom', 'date' => '01/01/2017', 'time' => '16:45'),
		array('id' => '4', 'item' => 'torso', 'date' => '02/02/2017', 'time' => '09:10'),
		array('id' => '5', 'item' => 'bottom', 'date' => '21/12/2016', 'time' => '13:25'),
		array('id' => '6', 'item' => 'torso', 'date' => '09/02/2017', 'time' => '14:55')
	);

	var $assembly = array(
		array('id' => '1', 'pieceid' => 'A2', 'action' => 'returned', 'date' => '10/01/2017', 'time' => '20:30'),
		array('id' => '2', 'pieceid' => 'Z1', 'action' => 'returned', 'date' => '12/01/2017', 'time' => '11:11'),
		array('id' => '3', 'pieceid' => 'M3', 'action' => 'assembled', 'date' => '01/01/2016', 'time' => '13:30'),
		array('id' => '4', 'pieceid' => 'P1', 'action' => 'assembled', 'date' => '07/02/2017', 'time' => '09:00'),
		array('id' => '5', 'pieceid' => 'F1', 'action' => 'returned', 'date' => '17/08/2016', 'time' => '16:45'),
		array('id' => '6', 'pieceid' => 'U2', 'action' => 'returned', 'date' => '11/11/2016', 'time' => '00:00')
	);

	var $shipment = array(
		array('id' => '1', 'office' => 'Vancouver', 	'date' => '14/01/2017', 'time' => '15:30'),
		array('id' => '2', 'office' => 'Shiraz', 		'date' => '20/01/2017', 'time' => '12:00'),
		array('id' => '3', 'office' => 'Nice', 			'date' => '10/02/2017', 'time' => '16:45'),
		array('id' => '4', 'office' => 'Nurburg', 		'date' => '02/02/2016', 'time' => '09:10'),
		array('id' => '5', 'office' => 'dubrovnik', 	'date' => '04/05/2016', 'time' => '13:25'),
		array('id' => '6', 'office' => 'Semuc Champey', 'date' => '09/02/2016', 'time' => '14:55')
	);

	public funtion __construct()
	{
		parent::__construct();
	}

	public function getPurchase($which)
	{
		foreach ($this->purchase as $record) 
		{
			if ($record['id'] == $which)
				return $record;
		}

		return null;
	}

	public function getAssembly($which)
	{
		foreach ($this->assembly as $record) 
		{
			if ($record['id'] == $which)
				return $record;
		}

		return null;
	}

	public function getShipment($which)
	{
		foreach ($this->shipment as $record) 
		{
			if ($record['id'] == $which)
				return $record;
		}

		return null;
	}

	public function allPurchase()
	{
		return $this->purchase;
	}

	public function allAssembly()
	{
		return $this->assembly;
	}

	public function allShipment()
	{
		return $this->shipment;
	}

	public function getAll()
	{
		return array('purchases' => $purchase, 'assemblies' => $assembly, 'shipments' => $assembly);
	}
}