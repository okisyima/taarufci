<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Model_kita');
    }

    public function index()
    {
        $this->load->view('liatlogin');
    }

    public function cobaLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->Model_kita->cek_login('admin', $where)->num_rows;

        if ($cek > 0) {
            $data_session = array(
                'nama'    => $username,
                'status'  => "Login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('admin'));
        } else {
            echo "username dan passwrod salah !";
        }
    }
}

/* End of file Login.php */
