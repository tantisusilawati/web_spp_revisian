<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods:GET,OPTIONS");

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-b7RcyfpoyYsstWMRzTNyF4uj', 'production' => false);
		$this->load->library('midtrans');
		$this->load->Model('M_pembayaran');
		$this->load->Model('M_status_pembayaran');
		$this->midtrans->config($params);
		$this->load->helper('url');	
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{
		

		$nis = $this->input->post('nis');
		$nama_siswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$no_hp_ortu = $this->input->post('no_hp_ortu');
		$pesan = $this->input->post('pesan');
		$bulan = $this->input->post('bulan');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$tanggal_upload = date('Y-m-d h:i:s');

		// Required
		$transaction_details = array(
			'order_id' => rand(),
		  'gross_amount' => $jumlah_bayar, // no decimal allowed for creditcard
		  'nis' => $nis,
		  'nama_siswa' => $nama_siswa
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $jumlah_bayar,
			'quantity' => 1,
			'name' => "Pembayaran SPP Bulan".$bulan
		);



		// Optional
		$item_details = array ($item1_details);

		// Optional
		// $billing_address = array(
		// 	'first_name'    => $nama_siswa,
		// 	'address'       => $alamat,
		// 	'phone'         => $no_hp_ortu,
		// 	'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		// 	'first_name'    => $nama_siswa,
		// 	'address'       => $alamat,
		// 	'phone'         => $no_hp_ortu,
		// 	'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
			'first_name'    => $nama_siswa,
			'kelas'     => $kelas,
			'email'         => $email,
			'phone'         => $no_hp_ortu
			// 'billing_address'  => $billing_address,
			// 'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O",$time),
			'unit' => 'minute', 
			'duration'  => 120
		);

		$transaction_data = array(
			'transaction_details'=> $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);


		$data = array(
			'nis' => $nis,
			'nama_siswa' => $nama_siswa,
			'kelas' => $kelas,
			'no_hp_ortu' => $no_hp_ortu,
			'pesan' => $pesan,
			'jumlah_bayar' => $jumlah_bayar,
			'email' => $email,
			'alamat' => $alamat,
			'bulan' => $bulan,
			'tanggal_upload' => $tanggal_upload
		);



		error_log(json_encode($transaction_data));
		// $this->M_pembayaran->input_data($data,'tbl_pembayaran');
		$snapToken = $this->midtrans->getSnapToken($transaction_data);

		

		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'),true);

		$nama_siswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$nis = $this->input->post('nis');
		$bulan =  date('F');
		$tanggal_upload =  date('Y-m-d h:i:s');


		$data  = [

			'order_id' => $result['order_id'],	
			'nis' => $nis,
			'nama_siswa' => $nama_siswa,
			'kelas' => $kelas,
			'bulan' => $bulan,
			'tanggal_upload' => $tanggal_upload,

			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]["bank"],
			'va_number' => $result['va_numbers'][0]["va_number"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code']
		];

		$simpan = $this->M_status_pembayaran->input_data($data,'tbl_status_pembayaran');
		if ($simpan == true) {
			echo "berhasil";
		}else{
			echo "gagal";
		}
	}
}
