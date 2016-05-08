<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller 
{	
	public function __construct() 
	{
		parent::__construct();

		$this->_set_section('header', 'section/header');
		$this->_set_section('offcanvas', 'section/offcanvas');
		$this->_set_section('footer', 'section/footer');

		$this->_set_layout('default');

		
	}

	public function dashboard()
	{
		$this->_set_title('Dion Online | Dashboard');
        $this->_render_page('dashboard');
	}
}