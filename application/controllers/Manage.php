<?php
/**
 * Controller for the Manage page. Provides functions to reboot, register, configure settings, and sell assembled bot to PRC.
 * @author Trista H
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{

	function __construct()
	{
		parent::__construct();
		$this->data['umbrella'] = 'https://umbrella.jlparry.com';
	}

	/**
	 * Manage page for our app
	 */
	public function index()
	{
		$role = $this->session->userdata('userrole');
	    if ($role != 'boss') redirect('/manage/notboss');

		// $this->mproperties->registerme();		

		$robots = $this->mrobots->all();

		foreach ($robots as $robot) 
		{
			$robotsbuilt[] = array('robotid' => $robot->r_id, 'head' => $robot->head, 'torso' => $robot->torso, 'legs' => $robot->legs, 'available' => $robot->available);
		}

		// this is the view we want shown
		// $bottable = '';	
		// foreach ($robots as $bot) 
		// {
		// 	$robotentry = array('r_id' => $bot->r_id , 'head' => $bot->head , 'torso' => $bot->torso , 'legs' => $bot->legs, 'bot_id' => $bot->r_id  );
			
  //       	$bottable .= $this->parser->parse('oneassembledbot', $robotentry);    
		// }
		$this->data['robots_built'] = $robotsbuilt;
		// $this->data['robottable'] = $bottable;
		$this->data['pagebody'] = 'manage';
		$this->render();
	}

	function notBoss(){
		$role = $this->session->userdata('userrole');
		if ($role == 'boss') redirect('/manage');
		$this->data['pagetitle'] = 'Manage ('. $role .')';
		$this->data['pagebody'] = 'bossonly';
		$this->render();
	}

	function reboot() {	
    	$this->mproperties->rebootme();
    	redirect('/manage');
	}

	function register(){
		$team = $_POST['plantname'];
    	$pass = $_POST['token'];
    	$this->mproperties->registerme($team, $pass);
    	redirect('/manage');
	}

	function config(){		
		$team = $_POST['plantname1'];
		$baseurl = $_POST['baseurl'];
		$GLOBALS['baseurl'] = $baseurl;
		$this->mproperties->updateurl($team, $baseurl);
    	redirect('/manage');
	}

	// public function shipbot($bot)
	// {
	// 	//$role = $this->session->userdata('userrole');
	// 	//if(role == ROLE_BOSS)
	// 	//{
	// 		$server = $this->data['umbrella'] . '/work/buymybot';
	// 		$apik = $this->mproperties->getApiKey();
	// 		$robot = $this->mrobot->get($bot);
	// 		$result = file_get_contents($server . '/' . $robot->head . '/' . $robot->torso . '/' . $robot->legs . '?key=' . $apik);
	// 		if ( $res[0] == 'OK')
	// 		{
	// 			$robot->available = 0;
	// 			$this->mrobot->update($rec);
	// 			$histrec = array('r_id' => $robot->r_id, 'catagory' => 'shipment');
	// 			$this->mrhistory->add($histrec);
	// 		}
	// 		redirect('/manage');
	// 	//}
	// }

	function sellbot($rid){
		$robots = $this->mrobots->all();
		foreach ($robots as $robot) 
		{
			if($robot->r_id == $rid){
				$top = $robot->head;
				$torso = $robot->torso;
				$legs = $robot->legs;
		    	$result = $this->mrobots->sellbot($top, $torso, $legs);
		    	if ($result[0] == 'Ok'){
		    		$robot->available = 0;
					$this->mrobots->update($robot);
					$histrec = array('r_id' => $robot->r_id, 'catagory' => 'shipment');
					$this->mrhistory->add($histrec);
		    	}
			}
		}
    	redirect('/manage');
	}
}