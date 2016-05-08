<?php if (!defined('BASEPATH')) exit('No direct script access allowed...');

class Frontend_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create_user()
	{
		return 'test';
	}
}