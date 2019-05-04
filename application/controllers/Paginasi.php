<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paginasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper(array('url'));
        $this->load->model('Model_kita');
    }

    public function index()
    {
        $this->load->database();
        $jumData = $this->Model_kita->jumData();
        $this->load->library('pagination');
        $config['base_url'] = base_url('Paginasi/liat');
        $config['total_rows'] = $jumData;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['pengguna'] = $this->Model_kita->iniData($config['per_page'], $from);
        $this->load->view('liat', $data);
    }
}

/* End of file Controllername.php */
