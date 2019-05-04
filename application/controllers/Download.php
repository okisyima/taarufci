<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
    }

    public function index()
    {
        $this->load->view('v_download');
    }

    public function hajarbleh()
    {
        force_download('file/ini.html', NULL);
    }
}

/* End of file Controllername.php */
