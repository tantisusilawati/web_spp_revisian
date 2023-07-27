<?php defined('BASEPATH') or exit('No direct script access allowed');

class Info_bayar  extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_info_bayar');

        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }


    public function index()
    {
        $data['info'] = $this->M_info_bayar->tampil_data();
        $this->load->view('Admin/List.info.bayar.php', $data);
    }

    public function update($kode_pegawai)
    {
        date_default_timezone_set("Asia/Jakarta");
        $id_info_bayar = $this->input->post('id_info_bayar');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $tahun_angkatan = $this->input->post('tahun_angkatan');



        $data = array(
            'jumlah_bayar' => $jumlah_bayar,
            'tahun_angkatan' => $tahun_angkatan
        );

        $where = array(
            'id_info_bayar' => $id_info_bayar
        );

        $this->M_info_bayar->update_data($where, $data, 'tbl_info_bayar');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Admin/Info_bayar');
    }
}
