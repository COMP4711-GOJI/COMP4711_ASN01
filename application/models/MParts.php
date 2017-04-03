<?php
class MParts extends MY_Model {

    public function __construct()
    {
        parent::__construct('parts', 'cacode');
    }


    public function buybox(){
        $catagory = 'work';
        $command = 'buybox';

        $result =  $this->mproperties->server_fetch_key($catagory, $command);
        $parts = json_decode($result);

        foreach($parts as $part){
            $this->newPart($part->id, $part->model, $part->piece, $part->plant, $part->stamp);
			$historyRecord = $this->mphistory->create();
			$historyRecord->cacode = $part->id;
			$historyRecord->category = "box";
			$this->mphistory->add($historyRecord);
        }
    }

    public function mybuilds(){
        $catagory = 'work';
        $command = 'mybuilds';

        $result =  $this->mproperties->server_fetch_key($catagory, $command);
        $parts = json_decode($result);

        foreach($parts as $part){
            $this->newPart($part->id, $part->model, $part->piece, $part->plant, $part->stamp);
			$historyRecord = $this->mphistory->create();
			$historyRecord->cacode = $part->id;
			$historyRecord->category = "build";
			$this->mphistory->add($historyRecord);
        }
		
		
    }


    public function newPart($cacode, $model, $piece, $plant, $stamp){
        if($this->exists($cacode)){
            return;
        }
        $record = $this->create();
        $record->cacode = $cacode;
        $record->model = $model;
        $record->piece = $piece;
        $record->plant = $plant;
        $record->stamp = $stamp;
        $this->add($record);
    }
   
}
