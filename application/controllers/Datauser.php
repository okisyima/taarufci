<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('user_agent');
    }

    public function index()
    {
        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . '' . $this->agent->version();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Data user gagal di dapatkan';
        }

        echo "di akses dari :<br/>";
        echo "browser = " . $agent . "<br/>";
        echo "sistem operasi = " . $this->agent->platform() . "<br/>";
        echo "IP = " . $this->input->ip_address();
    }
}

/* End of file Controllername.php */
