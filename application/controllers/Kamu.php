<?php

class Kamu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('Model_kita');
    }

    public function index()
    {
        $data['title'] = "Halaman Piew";

        $this->load->view('header', $data);
        $this->load->view('piew', $data);
        $this->load->view('footer');
    }

    public function apalo()
    {
        $data['hasatu'] = "ini parsing data dari method apalo";

        $tada = array(
            'tema'  => "andai aku jatuh sakit",
            'how'   => "Jadi gini bre"
        );

        $this->load->view('aku', $tada);
    }

    public function tentang()
    {
        $data['title'] = "Halaman Tentang";

        $this->load->view('header', $data);
        $this->load->view('tentang', $data);
        $this->load->view('footer');
    }

    public function ambil_Data_Model()
    {
        $data['pengguna'] = $this->Model_kita->ambil_Data()->result();
        $this->load->view('piew', $data);
    }
}
