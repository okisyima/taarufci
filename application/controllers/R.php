<?php

defined('BASEPATH') or exit('No direct script access allowed');

class R extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Model_kita');
        $this->load->helper('url');
    }

    public function index()
    {
        $dida['pengguna'] = $this->Model_kita->ambil_Data()->result();
        $this->load->view('depan', $dida);

        // $this->load->database();
        // $jumData = $this->Model_kita->jumData();
        // $this->load->library('pagination');
        // $config['base_url'] = base_url('R/depan');
        // $config['total_rows'] = $jumData;
        // $config['per_page'] = 10;
        // $from = $this->uri->segment(3);
        // $this->pagination->initialize($config);
        // $data['pengguna'] = $this->Model_kita;
    }

    public function add()
    {
        $this->load->view('v_add');
    }

    public function cobaAdd()
    {
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $pekerjaan  = $this->input->post('pekerjaan');

        $data = array(
            'nama'      => $nama,
            'alamat'    => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $this->Model_kita->addData($data, 'pengguna');
        redirect('R');
    }

    public function cobaDelete($id)
    {
        $where = array('id' => $id);
        $this->Model_kita->deleteData($where, 'pengguna');
        redirect('R/index');
    }

    public function cobaEdit($id)
    {
        $dimana = array('id' => $id);
        $data['pengguna'] = $this->Model_kita->editData($dimana, 'pengguna')->result();
        $this->load->view('v_edit', $data);
    }

    public function aksiEdit()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $pekerjaan  = $this->input->post('pekerjaan');

        $data = array(
            'nama'      => $nama,
            'alamat'    => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $dimana = array(
            'id' => $id
        );

        $this->Model_kita->editDataAct($dimana, $data, 'pengguna');
        redirect('R/index');
    }
}

/* End of file R.php */
