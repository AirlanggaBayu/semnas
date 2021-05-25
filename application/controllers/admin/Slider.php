<?php
class Slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
        if (empty($this->session->userdata('is_login'))) {
            redirect('admin');
        }
    }
    public function index()
    {
        $data['slider'] = $this->M_admin->getdata('slider');
        $this->load->view('admin/header');
        $this->load->view('admin/slider', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        // $slider = $this->input->post('slider');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'nama_pembicara' => $slider];
        // print_r($data);
        // $this->M_admin->insertdata('slider', $data);
        // redirect(base_url('admin/slider/'));
        $config = [
            'file_name' => random_string('alnum', 8),
            'upload_path' => './img/slider',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect(base_url('admin/slider/'));
        } else {
            $file = $this->upload->data();
            $keterangan = $this->input->post('keterangan');
            $data = ['gambar_slider' => $file['file_name'], 'keterangan' => $keterangan];
            $this->M_admin->insertdata('slider', $data);
            redirect(base_url('admin/slider/'));
        }
    }
    public function getslider()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('slider', ['id' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        // $slider = $this->input->post('slider');
        // $keterangan = $this->input->post('keterangan');
        // $data = ['keterangan' => $keterangan, 'deskripsi' => $slider];
        // print_r($data);
        // $this->M_admin->updatedata('slider', ['id' => $this->input->post('kode')], $data);
        // redirect(base_url('admin/slider/'));
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $keterangan = $this->input->post('keterangan');
            $data = ['keterangan' => $keterangan];
            $this->M_admin->updatedata('slider', ['id' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/slider/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/slider',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/slider/'));
            } else {
                $file = $this->upload->data();
                $keterangan = $this->input->post('keterangan');
                $data = ['gambar_slider' => $file['file_name'], 'keterangan' => $keterangan];
                $this->M_admin->updatedata('slider', ['id' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/slider/'));
            }
        }
    }
    public function delete($id)
    {
        $this->M_admin->delete('slider', ['id' => $id]);
        redirect(base_url('admin/slider/'));
    }
}
