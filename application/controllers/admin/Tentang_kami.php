<?php
class Tentang_Kami extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
        if (empty($this->session->userdata('is_login'))) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['profil'] = $this->M_admin->getdata('tentang_kami');
        $this->load->view('admin/header');
        $this->load->view('admin/profil', $data);
        $this->load->view('admin/footer');
    }

    public function simpan()
    {
        // $keterangan = $this->input->post('keterangan');
        // $gambar = $this->input->post('gambar');
        // $data = ['gambar' => $gambar, 'keterangan' => $keterangan];
        // print_r($data);
        // $this->M_admin->insertdata('tentang_kami', $data);
        // redirect(base_url('admin/tentang_kami/'));
        $config = [
            'file_name' => random_string('alnum', 8),
            'upload_path' => './img/tentang_kami',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect(base_url('admin/tentang_kami/'));
        } else {
            $file = $this->upload->data();
            $keterangan = $this->input->post('keterangan');
            $data = ['gambar' => $file['file_name'], 'keterangan' => $keterangan];
            $this->M_admin->insertdata('tentang_kami', $data);
            redirect(base_url('admin/tentang_kami/'));
        }
    }
    public function getketerangan()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('tentang_kami', ['no' => $id]);
        echo json_encode($data);
    }
    public function update1()
    {
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = ['gambar' => $gambar, 'deskripsi' => $keterangan];
        print_r($data);
        $this->M_admin->updatedata('tentang_kami', ['no' => $this->input->post('kode')], $data);
        redirect(base_url('admin/tentang_kami/'));
    }
    public function update()
    {
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $keterangan = $this->input->post('keterangan');
            $data = ['keterangan' => $keterangan];
            $this->M_admin->updatedata('tentang_kami', ['no' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/tentang_kami/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/tentang_kami',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/tentang_kami/'));
            } else {
                $file = $this->upload->data();
                $keterangan = $this->input->post('keterangan');
                $data = ['gambar' => $file['file_name'], 'keterangan' => $keterangan];
                $this->M_admin->updatedata('tentang_kami', ['no' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/tentang_kami/'));
            }
        }
    }
    public function delete($id)
    {
        $this->M_admin->delete('tentang_kami', ['no' => $id]);
        redirect(base_url('admin/tentang_kami/'));
    }
}
