<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas  extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kelas');

        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }


    public function index()
    {
        $data['kelas'] = $this->M_kelas->tampil_data();
        $this->load->view('Admin/List.kelas.php', $data);
    }
    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $nama_kelas = $this->input->post('nama_kelas');
        $tahun_angkatan = $this->input->post('tahun_angkatan');
        $data = array(
            'nama_kelas' => $nama_kelas,
            'tahun_angkatan' => $tahun_angkatan,
        );

        $this->M_kelas->input_data($data, 'tbl_kelas');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Admin/Kelas');
    }

    public function delete($id_kelas)
    {
        $id_kelas = $this->input->post('id_kelas');
        $this->M_kelas->delete_data($id_kelas);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/Kelas');
    }

    public function update($id_kelas)
    {
        date_default_timezone_set("Asia/Jakarta");
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $tahun_angkatan = $this->input->post('tahun_angkatan');
        $data = array(
            'nama_kelas' => $nama_kelas,
            'tahun_angkatan' => $tahun_angkatan,
        );
        $where = array(
            'id_kelas' => $id_kelas
        );

        $this->M_kelas->update_data($where, $data, 'tbl_kelas');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Admin/Kelas');
    }
}
