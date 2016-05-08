<?php

class Uploads extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function upload()
	{
		$this->load->library("uploadhandler");
	}
}