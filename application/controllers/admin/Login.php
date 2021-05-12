<?php
class Login extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/login');
    }
    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username === 'admin' && $password === 'admin') {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('is_login', TRUE);
            redirect(base_url('admin/jadwal'));
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
