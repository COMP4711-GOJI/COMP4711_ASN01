<?php
class MProperties extends MY_Model {

    public function __construct()
    {
        parent::__construct('properties', 'team');
    }


    public function registerme(){
        $catagory = 'work';
        $command = 'registerme';
        $team = $GLOBALS['team'];
        $pass = $GLOBALS['password'];

        $result =  $this->server_fetch_param($catagory, $command, $team, $pass);
        $array = explode(' ', $result);
        $apikey = $array[1];

        $this->newTeam($team, $pass);

        $record = $this->get($team);
        $record->apikey = $apikey;

        $this->update($record);
    }

    public function getApiKey(){
    	$team = $GLOBALS['team'];
        $record = $this->get($team);
        return $record->apikey;
    }

    public function rebootme(){
        $catagory = 'work';
        $command = 'rebootme';
        $result = $this->server_fetch_key($catagory, $command);
        return $result;
    }

    public function goodbye(){
        $catagory = 'work';
        $command = 'goodbye';
        $result = $this->server_fetch_key($catagory, $command);
        return $result;
    }

    public function balance(){
    	$team = $GLOBALS['team'];
        $catagory = 'info';
        $command = 'balance';
        $result = $this->server_fetch_param($catagory, $command, $team);
        return $result;
    }

    public function scoop($team){
        $catagory = 'info';
        $command = 'scoop';
        $result = $this->server_fetch_param($catagory, $command, $team);
        return json_decode($result);
    }

    //this needs to be tested, json might need to be decoded
    public function verify($cacode){
        $catagory = 'info';
        $command = 'verify';
        $result = $this->server_fetch_param($catagory, $command, $cacode);
        return $result;
    }

    //this needs to be tested, json might need to be decoded
    public function whomakes($parttype){
        $catagory = 'info';
        $command = 'whomakes';
        $result = $this->server_fetch_param($catagory, $command, $parttype);
        return $result;
    }


    public function whoami($apikey){
        $catagory = 'info';
        $command = 'whoami';
        $result = $this->server_fetch_key($catagory, $command, $apikey);
        return $result;
    }

    public function job($team){
        $catagory = 'info';
        $command = 'job';
        $result = $this->server_fetch_param($catagory, $command, $team);
        return $result;
    }

    public function teams(){
        $catagory = 'info';
        $command = 'teams';
        $result = $this->server_fetch_param($catagory, $command);
        return json_decode($result);
    }



    public function server_fetch_key($catagory, $command, $apikey = null){
        if($apikey == null)
            $apikey = $this->getApiKey();
        $result = file_get_contents('https://umbrella.jlparry.com/'. $catagory .'/' . $command . '?key=' . $apikey);
        return $result;
    }

    public function server_fetch_param($catagory, $command, $param1 = null, $param2 = null, $param3 = null){
        $querry = 'https://umbrella.jlparry.com/' . $catagory . '/'. $command;
        if($param1 != null){
            $querry .= '/';
            $querry .= $param1;
        }
        if($param2 != null){
            $querry .= '/';
            $querry .= $param2;
        }
        if($param3 != null){
            $querry .= '/';
            $querry .= $param3;
        }
        $result = file_get_contents($querry);
        return $result;
    }



    private function newTeam($team, $pass){
    	if($this->exists($team)){
        	return;
        }
    	$record = $this->create();
    	$record->team = $team;
        $record->password = $pass;
        $this->add($record);
    }

}
