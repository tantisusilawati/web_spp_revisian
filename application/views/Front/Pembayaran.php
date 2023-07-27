<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
	<?php include 'Part/Css.php';?>

	<!-- midtrans -->

	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-d9sPNQlmOYyByj7f"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


	
</head>
<body>
	
	<!-- Header -->
	<?php include 'Part/Header.php';?>
	<!--/ End Header -->
	<style type="text/css">
		.btn_pembayaran{
			background: #ae1d23 !important ;
		}
		.btn_cek_nis{
			background: #ae1d23 !important ;
			margin-top: 20px;
		}
		.btn_bayar{
			background: green !important;
		}
	</style>
	<!-- Breadcrumb -->
	<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<h2>Pembayaran SPP Rumah Qur'an Al-Mubarok</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<ul class="bread-list">
						<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
						<li><a href="#">Events<i class="fa fa-angle-right"></i></a></li>
						<li class="active"><a href="events.html">Events</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Breadcrumb -->

	<!-- Events -->
	<section class="events archive section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="section-title bg">
						<h2>Info Pembayaran SPP</h2>
						<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
						<div class="icon"><i class="fa fa-paper-plane"></i></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1">
					
				</div>
				<div class="col-lg-10">
					<div class="container">
						<!-- button -->
						<button type="button" class="btn btn_pembayaran mb-2" data-toggle="modal" data-target="#exampleModal">
							Bayar SPP
						</button>
						<!-- end button -->

						<!-- modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Pembayaran SPP</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<form>
												<div class="row">
													<div class="col-md-6">
														<label>Cek Nis</label>
														<input type="text" name="nis" class="form-control" required>
													</div>
													<div class="col-md-6">
														<button onclick="check_nis()" id="cek_nisn" class="btn btn_cek_nis" >CEK NIS</button>
													</div>
												</div>
											</form>
											<hr style="padding-bottom: 4px;">
											<form id="payment-form" method="post" action="<?= site_url() ?>midtrans/snap/finish">
												<div class="row form-group mt-4">
													<div class="col-md-6">
														<label>Nama Siswa</label>
														<input type="text" name="nama" class="form-control" id="nama_siswa">
													</div>
													<div class="col-md-6">
														<label>Kelas</label>
														<input type="text" name="kelas" class="form-control" id="kelas">
													</div>
												</div>
												<div class="row form-group mt-4">
													<div class="col-md-12">
														<label>Jumlah Pembayaran</label>
														<input type="text" name="" class="form-control" id="jumlah_bayar_tampil">
														<input type="hidden" name="jumlah_bayar" id="jumlah_bayar">
													</div>
													<div class="col-md-12">
														<label>Pesan</label>
														<textarea name="pesan" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" id="pay-button" class="btn btn_bayar">Bayar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- end modal -->
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>NIS</th>
									<th>Nama Siswa</th>
									<th>Kelas</th>
									<th>Jumlah Pembayaran</th>
									<th>Tanggal Transaksi</th>
									<th>Bulan Pembayaran</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2022336170</td>
									<td>Tanti</td>
									<td>Ustadzah Syifa</td>
									<td>Rp.</td>
									<td>12-07-2023</td>
									<td>Juli</td>
								</tr>
							</tbody>
							
						</table>
					</div>
				</div>
				<div class="col-lg-1">

				</div>
			</div>
		</div>
	</section>
	<!--/ End Events -->

	<!-- Footer -->
	<?php include 'Part/Footer.php';?>
	<!--/ End Footer -->

	<?php include 'Part/Js.php';?>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#cek_nisn').click(function(){     

				var id =  $('#data_nisn').val(); 
				if (id != '') {


				}
				else {
					alert("Masukan NIS Siswa");
				}

			});
			// $('.paginate_button.next').hide();
			$('#example').DataTable({
				paging: false,
				ordering: true,
				info: true,
			});
		});

		function check_nisn() {
			$('#cek_nisn').text('Sedang mencari...');
			$('#cek_nisn').attr('disabled', true);
			$("#myDIV").removeAttr("style").hide();


			var input_check_nisn = $('[name="nis"]').val();
			alert(input_check_nisn)
			if (!$.trim(input_check_nisn)){   
				alert("NISN Belum Di Input" + input_check_nisn);
				$('#cek_nisn').text('Cek NISN');
				$('#cek_nisn').attr('disabled', false);
				$('#pay-button').attr('disabled', true);
			}
			else{   

				console.log(input_check_nisn);

    // alert(input_check_nip);
    $.ajax({
    	url: "<?= site_url('Pembayaran/cek_pembayaran/') ?>",
    	type: "POST",
    	dataType: "JSON",
    	data: {
    		input_check_nisn: input_check_nisn
    	},



    	success: function(data) {

    		if (data.result.nama_siswa ){
    			console.log(data.result.nama_siswa);
    			alert('Siswa Ditemukan.');
    			$('#nisn_baru').val(data.result.nisn);
    			$('#nama_siswa').val(data.result.nama_siswa);
    			$('#no_hp_ortu').val(data.result.no_hp_ortu);
    			$('#kelas').val(data.result.kelas);
    			$('#email').val(data.result.email);
    			$('#alamat').val(data.result.alamat);



    			// alert(jml);


    			$('#jumlah_bayar_tampil').val(new Intl.NumberFormat('id-ID',
    				{ style: 'currency', currency: 'IDR' }
    				).format(data.result.jumlah_bayar));
    			$('#jumlah_bayar').val(data.result.jumlah_bayar);
    			$('#cek_nisn').text('Cek NISN');
    			$('#cek_nisn').attr('disabled', false);
    			$('#pay-button').attr('disabled', false);
    			$("#myDIV").show();

    		}else if (data.result == 'sudah_bayar'){
    			alert('Sudah Melakukan Pembayaran Bulan ini. Silahkan Menyelesaikan Pembayaran Sebelumnya atau Hubungi Admin.');
    			console.log(data.result);
    			$('#nama_siswa').val('');
    			$('#kelas').val('');
    			$('#cek_nisn').text('CEK NISN');
    			$('#cek_nisn').attr('disabled', false);
    			$('#pay-button').attr('disabled', true);
    		}else if (!data.result.nama_siswa){
    			alert('NISN Tidak Ditemukan.');
    			console.log(data.result);
    			$('#nama_siswa').val('');
    			$('#kelas').val('');
    			$('#cek_nisn').text('CEK NISN');
    			$('#cek_nisn').attr('disabled', false);
    			$('#pay-button').attr('disabled', true);
    		}



    	},
    	error: function(jqXHR, textStatus, errorThrown) {



    		$('#cek_nisn').attr('disabled', false);
    	}
    })
}
}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#masking1').mask('#.##0', {
			reverse: true
		});
		$('#masking2').mask('#.##0,0', {
			reverse: true
		});
		$('#masking3').mask('#,##0.00', {
			reverse: true
		});
	});

	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		var nis = $('#nis').val();
		var nama_siswa = $('#nama_siswa').val();
		var kelas = $('#kelas').val();
		var no_hp_ortu = $('#no_hp_ortu').val();
		var bulan = $('#bulan').val();
		var pesan = $('#pesan').val();
		var jumlah_bayar = $('#jumlah_bayar').val();
		var email = $('#email').val();
		var alamat = $('#alamat').val();

		$.ajax({
			type: 'POST',
			url: '<?= base_url () ?>midtrans/snap/token',
			data: {
				nis: nis,
				nama_siswa: nama_siswa,
				kelas: kelas,
				no_hp_ortu: no_hp_ortu,
				bulan: bulan,
				pesan: pesan,
				jumlah_bayar: jumlah_bayar,
				email: email,
				alamat: alamat,
			},
			cache: false,

			success: function(data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                    	$("#result-type").val(type);
                    	$("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                    	onSuccess: function(result) {
                    		changeResult('success', result);
                    		console.log(result.status_message);
                    		console.log(result);
                    		$("#payment-form").submit();
                    	},
                    	onPending: function(result) {
                    		changeResult('pending', result);
                    		console.log(result.status_message);
                    		$("#payment-form").submit();
                    	},
                    	onError: function(result) {
                    		changeResult('error', result);
                    		console.log(result.status_message);
                    		$("#payment-form").submit();
                    	}
                    });
                }
            });
	});
</script>

</body>
</html>