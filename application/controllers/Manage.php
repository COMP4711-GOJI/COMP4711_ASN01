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
	}

	/**
	 * Manage page for our app
	 */
	public function index()
	{
		// $role = $this->session->userdata('userrole');
		// $role = ROLE_USER;
	 //    if ($role != ROLE_OWNER) redirect('/manage/notboss');

		// $this->mproperties->registerme();		


		// this is the view we want shown
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
}