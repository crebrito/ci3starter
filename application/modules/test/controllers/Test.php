<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if (!$this->smarty_acl->logged_in(FALSE)) {
            return redirect('login');
		}
		
		$this->load->view('test');
	}
}
