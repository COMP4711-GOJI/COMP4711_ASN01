<?php
/**
 * Model to represent the history of all transactions.  The data is split into three
 * "tables": purchases, assemblies, and shipping locations.
 * @author Robert Arendac
 */

class PartTransactions extends MY_Model {
	// Purchases table, includes item purchased and date of purchase
	public function __construct()
	{
		parent::__construct('p_history', 'h_id');
	}
}
