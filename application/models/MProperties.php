<?php
class MProperties extends MY_Model {

    public function __construct()
    {
        parent::__construct('properties', 'team');
    }


    public function registerme(){
    	$team = $GLOBALS['team'];
    	$pass = $GLOBALS['password'];

        $result = file_get_contents('https://umbrella.jlparry.com/work/registerme/' . $team . '/' . $pass);
        $array = explode(' ', $result); 
        print_r($array);
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
    	$key = $this->getApiKey();
        $result = file_get_contents('https://umbrella.jlparry.com/work/rebootme/?key=' . $key);
        $array = explode(' ', $result); 
        print_r($array);
    }

    public function goodbye(){
    	$key = $this->getApiKey();
        $result = file_get_contents('https://umbrella.jlparry.com/work/goodbye/?key=' . $key);
        $array = explode(' ', $result); 
        print_r($array);
    }

    public function balance(){
    	$team = $GLOBALS['team'];
        $result = file_get_contents('https://umbrella.jlparry.com/info/balance/' . $team);
        $array = explode(' ', $result); 
        print_r($array);
        $amount = $array[0];
        return $amount;
    }

    public function scoop($team){
        $result = file_get_contents('https://umbrella.jlparry.com/info/scoop/' . $team);
        $array = explode(' ', $result); 
        $array[0] .= '"}';//need this to fix an error in scoop
        $array[1] = substr($array[1], 0, -2);//need this to fix an error in scoop
        return $array;
    }

    public function verify($cacode){
        $result = file_get_contents('https://umbrella.jlparry.com/info/verify/' . $cacode);
        $array = explode(' ', $result); 
        print_r($array);
        return $array;
    }

    public function whomakes($parttype){
        $result = file_get_contents('https://umbrella.jlparry.com/info/whomakes/' . $parttype);
        $array = explode(' ', $result); 
        print_r($array);
        return $array;
    }


    public function whoami($apikey){
        $result = file_get_contents('https://umbrella.jlparry.com/info/whoami?key=' . $apikey);
        $array = explode(' ', $result); 
        print_r($array);
        return $array;
    }

    public function job($team){
        $result = file_get_contents('https://umbrella.jlparry.com/info/job/' . $team);
        $array = explode(' ', $result); 
        print_r($array);
        return $array;
    }

    public function teams(){
        $result = file_get_contents('https://umbrella.jlparry.com/info/teams');
        $array = explode(' ', $result); 
        print_r($array);
        return $array;
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
