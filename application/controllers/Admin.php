<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('status') != 'Login') {
            redirect(base_url('Login'));
        }
    }

    public function index()
    {
        $this->load->view('liatadmin');
    }
}

/* End of file Admin.php */
