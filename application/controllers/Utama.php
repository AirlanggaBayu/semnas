<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['jadwal'] = $this->M_admin->getdata('jadwal');
        $data['template'] = $this->M_admin->getdata('template');
        $data['pembicara'] = $this->M_admin->getdata('pembicara');
        $this->load->view('Template/Header');
        $this->load->view('Utama/utama', $data);
        $this->load->view('Template/Footer');
    }
}
