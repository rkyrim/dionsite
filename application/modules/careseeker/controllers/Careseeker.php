<?php
error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Careseeker extends MY_Controller 
{	
	protected $path_img_upload_folder;
    protected $path_img_thumb_upload_folder;
    protected $path_url_img_upload_folder;
    protected $path_url_img_thumb_upload_folder;

    protected $delete_img_url;

	public function __construct() 
	{
		parent::__construct();

		$this->load->model('authenticate/Authenticate_model');
		$this->Authenticate_model->isAuthorized();

		$this->data['type'] = 'careseeker';
		$this->_set_active_theme('dashboard');
		$this->_set_layout('default');
		$this->_set_section('header', 'section/header');
		$this->_set_section('offcanvas', 'section/offcanvas');
		$this->_set_section('footer', 'section/footer');
		$this->_set_section('navigation', 'section/navigation', $this->data);

		$this->setPath_img_upload_folder('assets/images/uploads/');
		$this->setPath_img_thumb_upload_folder("assets/images/uploads/thumbs/");
		
		//delete image
		$this->setDelete_img_url(base_url() . 'assets/images/deleted_image/');

		//set url img with base_url
		$this->setPath_url_img_upload_folder(base_url() . "assets/images/uploads/");
        $this->setPath_url_img_thumb_upload_folder(base_url() . "assets/images/uploads/thumbs/");
	}

	public function index() 
	{
		redirect('dashboard');
	}

	public function dashboard()
	{
		$this->_set_title('Dion Online | Dashboard');
        $this->_render_page('dashboard');
	}

	public function post() {
		$this->_set_title('Dion Online | Post a Job');
        $this->_render_page('profile');
	}

	public function profile()
	{
		$this->_set_title('Dion Online | Profile');
        $this->_render_page('profile');
	}

	public function safety()
	{
		$this->_set_title('Dion Online | Safety');
        $this->_render_page('safety');
	}

	public function find()
	{
		$this->_set_title('Dion Online | Find A Job');
        $this->_render_page('find');
	}

	public function bookings()
	{
		$this->_set_title('Dion Online | Safety');
        $this->_render_page('bookings');
	}

	public function features()
	{
		$this->_set_title('Dion Online | Features');
        $this->_render_page('features');
	}

	public function upload()
	{
		$config['upload_path'] = $this->getPath_img_upload_folder();
		$config['allowed_types'] = 'gif|jpg|png|JPG|GIF|PNG';

		$this->load->library('upload', $config);
		if ( $this->upload->do_upload() ) {

		} else {
			echo "File cannot be uploaded";
		}
	}

	// GETTER & SETTER 
    public function getPath_img_upload_folder()
    {
        return $this->path_img_upload_folder;
    }

    public function setPath_img_upload_folder($path_img_upload_folder)
    {
        $this->path_img_upload_folder = $path_img_upload_folder;
    }

    public function getPath_img_thumb_upload_folder()
    {
        return $this->path_img_thumb_upload_folder;
    }

    public function setPath_img_thumb_upload_folder($path_img_thumb_upload_folder)
    {
        $this->path_img_thumb_upload_folder = $path_img_thumb_upload_folder;
    }

    public function getPath_url_img_upload_folder()
    {
        return $this->path_url_img_upload_folder;
    }

    public function setPath_url_img_upload_folder($path_url_img_upload_folder)
    {
        $this->path_url_img_upload_folder = $path_url_img_upload_folder;
    }

    public function getPath_url_img_thumb_upload_folder()
    {
        return $this->path_url_img_thumb_upload_folder;
    }

    public function setPath_url_img_thumb_upload_folder($path_url_img_thumb_upload_folder)
    {
        $this->path_url_img_thumb_upload_folder = $path_url_img_thumb_upload_folder;
    }

    public function getDelete_img_url()
    {
        return $this->delete_img_url;
    }

    public function setDelete_img_url($delete_img_url)
    {
        $this->delete_img_url = $delete_img_url;
    }
}