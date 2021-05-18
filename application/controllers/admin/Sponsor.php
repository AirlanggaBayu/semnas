<?php
class Sponsor extends CI_Controller
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
        $data['sponsor'] = $this->M_admin->getdata('sponsor');
        $this->load->view('admin/header');
        $this->load->view('admin/sponsor', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        // $sponsor = $this->input->post('sponsor');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'nama_pembicara' => $sponsor];
        // print_r($data);
        // $this->M_admin->insertdata('sponsor', $data);
        // redirect(base_url('admin/sponsor/'));
        $config = [
            'file_name' => random_string('alnum', 8),
            'upload_path' => './img/sponsor',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect(base_url('admin/sponsor/'));
        } else {
            $file = $this->upload->data();
            $keterangan = $this->input->post('keterangan');
            $data = ['gambar' => $file['file_name'], 'keterangan' => $keterangan];
            $this->M_admin->insertdata('sponsor', $data);
            redirect(base_url('admin/sponsor/'));
        }
    }
    public function getsponsor()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('sponsor', ['id' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        // $sponsor = $this->input->post('sponsor');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'deskripsi' => $sponsor];
        // print_r($data);
        // $this->M_admin->updatedata('sponsor', ['id' => $this->input->post('kode')], $data);
        // redirect(base_url('admin/sponsor/'));
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $keterangan = $this->input->post('keterangan');
            $data = ['keterangan' => $keterangan];
            $this->M_admin->updatedata('sponsor', ['id' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/sponsor/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/sponsor',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/sponsor/'));
            } else {
                $file = $this->upload->data();
                $keterangan = $this->input->post('keterangan');
                $data = ['gambar' => $file['file_name'], 'keterangan' => $keterangan];
                $this->M_admin->updatedata('sponsor', ['id' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/sponsor/'));
            }
        }
    }
    public function delete($id)
    {
        $this->M_admin->delete('sponsor', ['id' => $id]);
        redirect(base_url('admin/sponsor/'));
    }
}
