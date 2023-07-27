<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_kegiatan');


        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert"> Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }
    }

    public function index()
    {

       $data['kegiatan'] = $this->M_kegiatan->tampil_data();
       $this->load->view('Admin/List.kegiatan.php',$data);
   }

   public function add()
   {
    date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/admin/upload'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|jfif'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 200000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/admin/upload' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 500;
                $config['height'] = 337;
                $config['new_image'] = './assets/admin/upload' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $foto = $gbr['file_name'];

                $nama_kegiatan     = $this->input->post('nama_kegiatan');
                $isi_kegiatan      = $this->input->post('isi_kegiatan');
                $waktu             = $this->input->post('waktu');
                $id_user             = $this->input->post('id_user');

                $data = array(

                    'nama_kegiatan' => $nama_kegiatan,
                    'isi_kegiatan' => $isi_kegiatan,
                    'foto' => $foto,
                    'waktu' => $waktu,
                    'id_user' => $id_user

                );

                $this->M_kegiatan->input_data($data, 'tbl_kegiatan');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/Kegiatan');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Kegiatan');
            }
        } else {

          echo $this->session->set_flashdata('msg', 'warning');
          redirect('Admin/Kegiatan');
      }
  }
  public function delete($id_kegiatan)
  {
    $id_kegiatan = $this->input->post('id_kegiatan');
    $this->M_kegiatan->delete_data($id_kegiatan);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('Admin/Kegiatan');
}
public function update()
{

 date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/admin/upload'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 200000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/admin/upload' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 500;
                $config['height'] = 337;
                $config['new_image'] = './assets/admin/upload' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $foto = $gbr['file_name'];
                $id_kegiatan = $this->input->post('id_kegiatan');
                $nama_kegiatan      = $this->input->post('nama_kegiatan');
                $isi_kegiatan      = $this->input->post('isi_kegiatan');
                $waktu      = $this->input->post('waktu');
                $id_user             = $this->input->post('id_user');

                $data = array(

                    'nama_kegiatan' => $nama_kegiatan,
                    'isi_kegiatan' => $isi_kegiatan,
                    'foto' => $foto,
                    'waktu' => $waktu,
                    'id_user' => $id_user,

                );

                $where = array(
                    'id_kegiatan' => $id_kegiatan
                );

                $this->M_kegiatan->update_data($where, $data, 'tbl_kegiatan');
                echo $this->session->set_flashdata('msg', 'info-update');
                redirect('Admin/Kegiatan');

            } else {


               echo $this->session->set_flashdata('msg', 'warning');
               redirect('Admin/Kegiatan');
           }
       } else {


         $id_kegiatan = $this->input->post('id_kegiatan');
         $nama_kegiatan   = $this->input->post('nama_kegiatan');
         $isi_kegiatan    = $this->input->post('isi_kegiatan');
         $waktu      = $this->input->post('waktu');
         $id_user             = $this->input->post('id_user');

         $data = array(

            'nama_kegiatan' => $nama_kegiatan,
            'isi_kegiatan' => $isi_kegiatan,
            'waktu' => $waktu,
            'id_user' => $id_user

        );
         $where = array(
            'id_kegiatan' => $id_kegiatan
        );


         $this->M_kegiatan->update_data($where, $data, 'tbl_kegiatan');
         echo $this->session->set_flashdata('msg', 'info-update');
         redirect('Admin/Kegiatan');
     } 
 }
}
