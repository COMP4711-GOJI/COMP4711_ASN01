<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'Robot Pandas';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->getMenu(), true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->parser->parse('template', $this->data);
	}



	function getMenu(){
		return array(
		    'menudata' => array(
		    	array('name' => 'Manage',   'link' => '/manage'),
		        array('name' => 'Homepage', 'link' => '/homepage'),
		        array('name' => 'Parts',    'link' => '/parts'),
		        array('name' => 'Assembly', 'link' => '/assembly'),
		        array('name' => 'History',  'link' => '/history'),
		        array('name' => 'About',    'link' => '/about'),
	        ),
	    	'user' =>  $this->session->userdata('userrole')
    	);
	}

}