<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{

    public function index()
    {
        $this->load->view('Template/Header');
        $this->load->view('Utama/utama');
        $this->load->view('Template/Footer');
    }
}
