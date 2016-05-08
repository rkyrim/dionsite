<?php if (!defined('BASEPATH')) exit('No direct script access allowed...');

class Authenticate_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();

		$this->load->library('phppass/Passwordhash');
	}

	public function createUserAction($data)
	{
		$this->load->database();

		$this->db->db_debug = FALSE;

		$query = $this->db->insert('accounts', $data);

		$resp = array();

		if ($query) {
			$resp['error'] = '';
			$resp['message'] = 'Account has been successfully created.';
			$resp['status'] = TRUE;
		} 
		else {
			$resp['error'] = $this->db->error();
			$resp['message'] = 'Creating account failed. Please try again!';
			$resp['status'] = FALSE;
		}

		return $resp;
	}

	public function validateUserAction($input = array())
	{
		$this->db->where('email_address', trim($input->email_address));

		$query = $this->db->get('accounts');

		$user_data = array();

		$user_data['isAuthorized'] = false;

		if ($query->num_rows() == 1) {

			$result = $query->result();

			if ( $this->passwordhash->CheckPassword(trim($input->password), $result[0]->password) ) {

				$user_data['isAuthorized'] = true;
				$user_data['type'] = $result[0]->type;
				$user_data['email_address'] = $result[0]->email_address;

				return $user_data;

			}

		}

		return (object) $user_data;
	}

	public function isAuthorized()
	{
		if ( !$this->session->userdata('isAuthorized') ) {
			redirect('login');
		}
	}

	public function getUserAccountDetails()
	{
		$this->db->where('email_address', $this->session->userdata('email_address'));
		$query = $this->db->get('accounts');

		if ( $query->num_rows() == 1 ) {

			$rs = $query->result();

			$data = array(
				'first_name' => $rs[0]->first_name,
				'last_name' => $rs[0]->last_name,
			);

		}

		return (object) $data;
	}
}

