<?php
class Blank extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/blank');
        $this->load->view('admin/footer');
    }
}
