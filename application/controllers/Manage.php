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
		// $role = $this->session->userdata('userrole');
	 //    if ($role != ROLE_BOSS) redirect('/manage/notboss');

		// $this->mproperties->registerme();		

		$robots = $this->mrobots->all();
		foreach ($robots as $robot) 
		{
			$robotsbuilt[] = array('robotid' => $robot->r_id, 'head' => $robot->head, 'torso' => $robot->torso, 'legs' => $robot->legs, 'available' => $robot->available);
		}

		// this is the view we want shown
		$this->data['robots_built'] = $robotsbuilt;
		$this->data['pagebody'] = 'manage';
		$this->render();
	}

	function notBoss(){
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


	

	// function sellbot($rid){
	// 	$robot = $this->mrobots->get($rid);
	// 	$top = $robot->top;
	// 	$torso = $robot->torso;
	// 	$legs = $robots->legs;
 //    	$result = $this->mrobots->sellbot($top, $torso, $legs);
 //    	if ($result[1] == 'ok'){
 //    		$rec = $this->mrobots->get($rid);
 //    		$rec->available = 0;
 //    		$this->mrobots->update($rec);
 //    	}
 //    	redirect('/manage');
	// }
}