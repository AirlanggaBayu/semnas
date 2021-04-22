<?php
class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
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
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = ['gambar' => $gambar, 'deskripsi' => $keterangan];
        print_r($data);
        $this->M_admin->insertdata('tentang_kami', $data);
        redirect(base_url('admin/profil/'));
    }
    public function getjadwal()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('tentang_kami', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = ['gambar' => $gambar, 'deskripsi' => $keterangan];
        print_r($data);
        $this->M_admin->updatedata('tentang_kami', ['no' => $this->input->post('kode')], $data);
        redirect(base_url('admin/profil/'));
    }
}
