<?php
class MPHistory extends MY_Model {

    public function __construct()
    {
        parent::__construct('p_history', 'h_id');
    }
	
	public function addPart($cacode, $category) {
		$historyRecord = $this->create();
		$historyRecord->cacode = $cacode;
		$this->add($historyRecord);
	}
}
