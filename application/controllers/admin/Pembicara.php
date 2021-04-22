<?php
class Pembicara extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['pembicara'] = $this->M_admin->getdata('pembicara');
        $this->load->view('admin/header');
        $this->load->view('admin/pembicara', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $pembicara = $this->input->post('pembicara');
        $keterangan = $this->input->post('keterangan');
        $data = ['keterangan' => $keterangan, 'nama_pembicara' => $pembicara];
        print_r($data);
        $this->M_admin->insertdata('pembicara', $data);
        redirect(base_url('admin/pembicara/'));
    }
    public function getpembicara()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('pembicara', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $pembicara = $this->input->post('pembicara');
        $keterangan = $this->input->post('keterangan');
        $data = ['keterangan' => $keterangan, 'deskripsi' => $pembicara];
        print_r($data);
        $this->M_admin->updatedata('pembicara', ['no' => $this->input->post('kode')], $data);
        redirect(base_url('admin/pembicara/'));
    }
    public function delete($id)
    {
        $this->M_admin->delete('pembicara', ['no' => $id]);
        redirect(base_url('admin/pembicara/'));
    }
}
