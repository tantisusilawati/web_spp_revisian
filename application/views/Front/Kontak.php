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
	<?php include 'Part/Css.php';?>

</head>
<body>
	
	<!-- Header -->
	<?php include 'Part/Header.php';?>
	<!--/ End Header -->

	<!-- Breadcrumb -->
	<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<h2>Kontak</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<ul class="bread-list">
						<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
						<li class="active"><a href="contact.html">contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Breadcrumb -->

	<!-- Contact Us -->
	<section id="contact" class="contact section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="section-title bg">
						<h2>Hubungi Kami</h2>
						<div class="icon"><i class="fa fa-paper-plane"></i></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="form-head">
						<p><?php echo $this->session->flashdata('msg'); ?></p>
						<!-- Contact Form -->
						<form class="form" action="<?php echo base_url() . 'Kontak/add'; ?>" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<i class="fa fa-user"></i>
										<input name="nama" type="text" placeholder="Nama Lengkap">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<i class="fa fa-phone"></i>
										<input name="no_hp" type="text" placeholder="089xxxxxxx">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group message">
										<i class="fa fa-pencil"></i>
										<textarea name="pesan" placeholder="Isi Pesan"></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary">Kirim Pesan</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<!--/ End Contact Form -->
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="contact-right">
						<!-- Contact-Info -->
						<div class="contact-info">
							<div class="icon"><i class="fa fa-map"></i></div>
							<h3>Alamat</h3>
							<p>Kampung Tahfidz, Kampung Alang Kecil, Ds. Kebon Cau, Teluk Naga, Kab. Tangerang</p>
						</div>
						<!-- Contact-Info -->
						<div class="contact-info">
							<div class="icon"><i class="fa fa-envelope"></i></div>
							<h3>Kontak</h3>
							<p><a href="mailto:info@example.com">rumahquranalmubarok@gmail.com</a></p>
							<p>081807953866</p>
						</div>
						<!-- Contact-Info -->
					</div>
				</div>
			</div>
		</div>		
	</section>
	<!--/ End Contact Us -->

	<!-- Footer -->
	<?php include 'Part/Footer.php';?>
	<!--/ End Footer -->
	<?php include 'Part/Js.php';?>
</body>
</html>