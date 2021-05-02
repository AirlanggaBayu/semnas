<?php
class Tentang_Kami extends CI_Controller
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
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
    public function simpan()
    {
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = ['gambar' => $gambar, 'keterangan' => $keterangan];
        print_r($data);
        $this->M_admin->insertdata('tentang_kami', $data);
        redirect(base_url('admin/tentang_kami/'));
    }
    public function getketerangan()
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
        redirect(base_url('admin/tentang_kami/'));
    }
    public function delete($id)
    {
        $this->M_admin->delete('tentang_kami', ['no' => $id]);
        redirect(base_url('admin/tentang_kami/'));
    }
}
