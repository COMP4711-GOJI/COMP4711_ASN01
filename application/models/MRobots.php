<?php
class MRobots extends MY_Model {

    public function __construct()
    {
        parent::__construct('robots', 'r_id');
    }

    public function sellbot($top, $torso, $legs){
        $catagory = 'work';
        $command = 'buymybot';

        $result =  $this->mproperties->server_fetch_param($catagory, $command, $top, $torso, $legs);
        
       return $result;
    }
    
}
