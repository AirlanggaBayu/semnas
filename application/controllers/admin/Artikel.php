<?php
class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        $data['artikel'] = $this->M_admin->getdata('artikel');
        $this->load->view('admin/header');
        $this->load->view('admin/artikel', $data);
        $this->load->view('admin/footer');
    }
    // public function simpan()
    // {
    //     $keterangan = $this->input->post('isi');
    //     $gambar = $this->input->post('gambar');
    //     $data = ['gambar' => $gambar, 'isi' => $keterangan];
    //     print_r($data);
    //     $this->M_admin->insertdata('artikel', $data);
    //     redirect(base_url('admin/artikel/'));
    // }
    public function getjadwal()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('tentang_kami', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $isi = $this->input->post('isi');
            $data = ['isi' => $isi];
            $this->M_admin->updatedata('artikel', ['id' => '1'], $data);
            redirect(base_url('admin/artikel/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/artikel',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/artikel/'));
            } else {
                $file = $this->upload->data();
                $isi = $this->input->post('isi');
                $data = ['gambar' => $file['file_name'], 'isi' => $isi];
                $this->M_admin->updatedata('artikel', ['id' => '1'], $data);
                redirect(base_url('admin/artikel/'));
            }
        }
    }
}
