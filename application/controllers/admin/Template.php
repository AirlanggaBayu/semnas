<?php
class Template extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['template'] = $this->M_admin->getdata('template');
        $this->load->view('admin/header');
        $this->load->view('admin/template', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $link = $this->input->post('link');
        $keterangan = $this->input->post('keterangan');
        $data = ['keterangan' => $keterangan, 'link' => $link];
        print_r($data);
        $this->M_admin->insertdata('template', $data);
        redirect(base_url('admin/template/'));
    }
    public function getemplate()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('template', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $link = $this->input->post('link');
        $keterangan = $this->input->post('keterangan');
        $data = ['keterangan' => $keterangan, 'link' => $link];
        print_r($data);
        $this->M_admin->updatedata('template', ['no' => $this->input->post('kode')], $data);
        redirect(base_url('admin/template/'));
    }
    public function delete($id)
    {
        $this->M_admin->delete('template', ['no' => $id]);
        redirect(base_url('admin/template/'));
    }
}
