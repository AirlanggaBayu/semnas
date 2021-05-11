<?php
class Pembicara extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
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
        // $pembicara = $this->input->post('pembicara');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'nama_pembicara' => $pembicara];
        // print_r($data);
        // $this->M_admin->insertdata('pembicara', $data);
        // redirect(base_url('admin/pembicara/'));
        $config = [
            'file_name' => random_string('alnum', 8),
            'upload_path' => './img/pembicara',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect(base_url('admin/pembicara/'));
        } else {
            $file = $this->upload->data();
            $pembicara = $this->input->post('pembicara');
            $keterangan = $this->input->post('keterangan');
            $data = ['gambar_pembicara' => $file['file_name'], 'keterangan' => $keterangan, 'nama_pembicara' => $pembicara];
            $this->M_admin->insertdata('pembicara', $data);
            redirect(base_url('admin/pembicara/'));
        }
    }
    public function getpembicara()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('pembicara', ['no' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        // $pembicara = $this->input->post('pembicara');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'deskripsi' => $pembicara];
        // print_r($data);
        // $this->M_admin->updatedata('pembicara', ['no' => $this->input->post('kode')], $data);
        // redirect(base_url('admin/pembicara/'));
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $pembicara = $this->input->post('pembicara');
            $keterangan = $this->input->post('keterangan');
            $data = ['keterangan' => $keterangan, 'nama_pembicara' => $pembicara];
            $this->M_admin->updatedata('pembicara', ['no' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/pembicara/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/pembicara',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/pembicara/'));
            } else {
                $file = $this->upload->data();
                $keterangan = $this->input->post('keterangan');
                $pembicara = $this->input->post('pembicara');
                $data = ['gambar_pembicara' => $file['file_name'], 'keterangan' => $keterangan, 'nama_pembicara' => $pembicara];
                $this->M_admin->updatedata('pembicara', ['no' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/pembicara/'));
            }
        }
    }
    public function delete($id)
    {
        $this->M_admin->delete('pembicara', ['no' => $id]);
        redirect(base_url('admin/pembicara/'));
    }
}
