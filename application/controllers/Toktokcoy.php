<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toktokcoy extends CI_Controller
{

    public function index()
    {
        $this->load->library('Tokcoy');
        $this->tokcoy->myName();
        echo "<br/>";
        $this->tokcoy->yourName('Kuns');
    }
}

/* End of file Toktokcoy.php */
