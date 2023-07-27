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

	<!-- Title -->
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
					<h2>Kegiatan Rumah Qur'an Al-Mubarok</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<ul class="bread-list">
						<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
						<li class="active"><a href="#">Kegiatan<i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Breadcrumb -->

	<!-- Courses -->
	<section class="courses archive section">
		<div class="container">
			<div class="row">
				<?php foreach ($kegiatan->result_array() as $data_kegiatan) { 
					$nama_kegiatan = $data_kegiatan['nama_kegiatan'];
					$isi_kegiatan  = $data_kegiatan['isi_kegiatan'];
					$foto          = $data_kegiatan['foto'];
					$waktu_kegiatan = $data_kegiatan['waktu'];
					?>

					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<!-- Course Head -->
							<style type="text/css">
								.gambar_kegiatan{
									width: 379px !important;
									height: 300px !important;
								}
							</style>
							<div class="course-head overlay ">
								<img  class="gambar_kegiatan" src="<?php echo base_url() . "assets/"; ?>admin/upload/<?php echo $foto ?>" alt="foto_kegiatan">
							</div>
							<!-- Course Body -->
							<div class="course-body">
								<div class="name-price">
									<div class="teacher-info">
										<img class="" src="<?php echo base_url()."assets/Front/images/"; ?>icon.png" alt="#">
										<h4 class="title"><?php echo $nama_kegiatan;?></h4>
									</div>
									<!-- <span class="price">$350</span> -->
								</div>
								<h4 class="c-title"><a href="course-single.html"><?php echo $nama_kegiatan;?></a></h4>
								<p><?php echo $isi_kegiatan;?></p>
							</div>
							<!-- Course Meta -->
							<div class="course-meta">
								<!-- Course Info -->
								<div class="course-info">
									<?php 
									$old_date = $waktu_kegiatan;
									$new_date = date('d-m-y', strtotime($old_date));
									?>
									<span><i class="fa fa-calendar-o"></i><?php echo $new_date;?></span>
									
								</div>
							</div>
							<!--/ End Course Meta -->
						</div>
						<!--/ End Single Course -->
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!--/ End Courses -->	

	<!-- Footer -->
	<?php include 'Part/Footer.php';?>
	<!--/ End Footer -->

	<?php include 'Part/Js.php';?>
</body>
</html>