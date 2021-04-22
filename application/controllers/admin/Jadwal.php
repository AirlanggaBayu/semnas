<?php
class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['jadwal'] = $this->M_admin->getdata('jadwal');
        $this->load->view('admin/header');
        $this->load->view('admin/jadwal', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $jadwal = $this->input->post('jadwal');
        $tanggal = $this->input->post('tanggal');
        $data = ['tanggal' => $tanggal, 'deskripsi' => $jadwal];
        print_r($data);
        $this->M_admin->insertdata('jadwal', $data);
        redirect(base_url('admin/jadwal/'));
    }
    public function getjadwal()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('jadwal', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $jadwal = $this->input->post('jadwal');
        $tanggal = $this->input->post('tanggal');
        $data = ['tanggal' => $tanggal, 'deskripsi' => $jadwal];
        print_r($data);
        $this->M_admin->updatedata('jadwal', ['no' => $this->input->post('kode')], $data);
        redirect(base_url('admin/jadwal/'));
    }
    public function delete($id)
    {
        $this->M_admin->delete('jadwal', ['no' => $id]);
        redirect(base_url('admin/jadwal/'));
    }
}
