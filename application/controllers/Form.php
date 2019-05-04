<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('v_form');
    }

    public function action()
    {
        $this->form_validation->set_rules('jeneng', 'Nama Elo', 'required');
        $this->form_validation->set_rules('imail', 'Email Elo', 'required');
        $this->form_validation->set_rules('konfir_imail', 'Samain ama email atas Elo', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_form');
        } else {
            echo "Form Oke Rek";
        }
    }
}
