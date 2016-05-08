<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends MY_Controller 
{	
	public function __construct() 
	{
		parent::__construct();

		$this->_set_section('header', 'section/header');
		$this->_set_section('offcanvas', 'section/offcanvas');
		$this->_set_section('footer', 'section/footer');

		$this->_set_layout('default');
	}

	public function index()
	{	
		$this->landingpage();
	}

	public function landingpage()
	{
		$this->_set_title('Dion Online | Home');
        $this->_render_page('home');
	}

	public function about()
	{
		$this->_set_title('Dion Online | About Us');
		$this->_render_page('about');
	}

	public function faq()
	{
		$this->_set_title('Dion Online | FAQ');
		$this->_render_page('faq');
	}

	public function services()
	{
		$this->_set_title('Dion Online | Services');
		$this->_render_page('services');
	}

	public function terms()
	{
		$this->_set_title('Dion Online | Terms and Conditions');
		$this->_render_page('terms');
	}

	public function contact()
	{
		$this->_set_title('Dion Online | Services');

		$this->form_validation->set_rules('fullname', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('email_address', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('contact_number', 'Contact Number ', 'required|regex_match[/^[0-9\-.]{6,20}$/]');
		$this->form_validation->set_rules('subject', 'Subject', 'required' );
		$this->form_validation->set_rules('body_message', 'Message', 'required' );

		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_error_delimiters('<span class="form-error is-visible">','</span>');
			$this->_render_page('contact');
		}
		else {
			$this->send_email_request((object)($this->input->post()));
		}
	}

	public function signup()
	{
		// $this->load->css(base_url().'min/?g=');
		$this->_set_title('Dion Online | Sign-up');

		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[12]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('terms', 'Terms & Condition', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_error_delimiters('<span class="form-error is-visible">','</span>');
			$this->_render_page('register');
		} 
		else {
			$this->load->model('authenticate/Authenticate_model');
			$this->load->library('phppass/Passwordhash');
			$input = (object) $this->input->post();

			$data = array(
				'first_name' => trim($input->first_name),
				'last_name' => trim($input->last_name),
				'email_address' => trim($input->email_address),
				'password' => $this->passwordhash->HashPassword(trim($input->password)),
				'type' => $input->type,
				'status' => '1',
 				'location' => $input->location
			);

			$result = $this->Authenticate_model->createUserAction($data);

			$this->data['resp'] = (object) $result;

			$this->_render_page('confirmation', $this->data);
		}
	}	

	public function login()
	{
		$this->_set_title('Dion Online | Login');

		$this->load->model('authenticate/Authenticate_model');

		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[12]');

		if ($this->form_validation->run() == FALSE) {

			$this->form_validation->set_error_delimiters('<span class="form-error is-visible">','</span>');

			$data = array(
				'error_status' => false,
				'message' => ''
			);

			$this->data['resp'] = (object) $data;

			$this->_render_page('login', $this->data);

		} else {

			$return = $this->Authenticate_model->validateUserAction((object)$this->input->post());

			if ($return['isAuthorized']) {

				// var_dump($return); die();
				$this->session->set_userdata($return);

				if ($return['type'] == 'cs') {
					redirect('careseeker/dashboard');
				}
				
				redirect('caregiver/dashboard');
			} 
			else {

				$data = array(
					"error_status" => true,
					"message" => "Incorrect Email Address or Password"
				);

				$this->data['resp'] = (object) $data;

				$this->_render_page('login', $this->data);

			}
			// redirect()
		}
	}

	private function send_email_request($input=array())
	{
		$this->load->library('email');

		$config = array(
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'priority' => '1',
		);

		$this->email->initialize($config);

		$this->email->from('rcrimbz@gmail.com');
		$this->email->to($input->fullname); 
		$this->email->subject($input->subject);
		$this->email->message($input->body_message);
		
		if ($this->email->send()) {
			$data = array(
				'message' => 'Email Sent!',
				'error' => '',
				'status' => TRUE
			);
		}
		else {
			$data = array(
				'message' => 'Sending email failed!',
				'error' => show_error($this->email->print_debugger()),
				'status' => FALSE
			);
		}

		$this->data['resp'] = (object) $data;
		$this->_render_page('confirmation', $this->data);

	}
}
