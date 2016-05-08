<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
       $this->landingpage();
	}

	public function landingpage()
	{
		$this->_set_title('Times Dental Clinic: Request an Appointment');

		$this->_set_section('offcanvas', 'section/offcanvas');
		$this->_set_layout('default');

        $this->_render_page('welcome_message');
	}
}
