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

	<!-- Slider Area -->
	<section class="home-slider">
		<div class="slider-active">
			<!-- Single Slider -->
			<div class="single-slider overlay">
				<div class="slider-image" style="background-image:url('<?php echo base_url()."assets/front/images/bg.jpg"; ?>')"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-10 col-12">
							<!-- Slider Content -->
							<div class="slider-content">
								<h1 class="slider-title"><b> Rumah Qur'an Al-Mubarok</b></h1>
								<p class="slider-text"> Rumah Qur'an Al-Mubarok merupakan sebuah lembaga pendidikan Al-Qur'an Sebagai sarana pendidikan dalam belajar membaca dan menghafal Al-Qur'an dengan mengembangkan konsep nilai-nilai Al-Qur'an dan As-Sunnah dengan menekankan kurikulum karakter iman agar bisa terbentuknya generasi Qur’ani yang berilmu dan beradab calon pemimpin bangsa. </p>
								<!-- Button -->
								<div class="button">
									<a href="about.html" class="btn white">Informasi Lebih Lanjut</a>
									<a href="courses.html" class="btn white primary">Lihat Data Santri</a>
								</div>
								<!--/ End Button -->
							</div>
							<!--/ End Slider Content -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Single Slider -->
		</div>
	</section>
	<!--/ End Slider Area -->

	<!-- Courses -->
	<section class="courses section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="section-title bg">
						<h2>Kegiatan Rumah qur'an Al-Mubarok</h2>
						<p> Rumah Qur'an Al-Mubarok merupakan sebuah lembaga pendidikan Al-Qur'an Sebagai sarana pendidikan dalam belajar membaca dan menghafal Al-Qur'an dengan mengembangkan konsep nilai-nilai Al-Qur'an dan As-Sunnah dengan menekankan kurikulum karakter iman agar bisa terbentuknya generasi Qur’ani yang berilmu dan beradab calon pemimpin bangsa. </p>
						<div class="icon"><i class="fa fa-clone"></i></div>
					</div>
				</div>
			</div>
			<div class="row">

				<?php foreach ($kegiatan->result_array() as $data_kegiatan) : 
					$nama_kegiatan  = $data_kegiatan['nama_kegiatan'];
					$foto         = $data_kegiatan['foto'];
					$isi_kegiatan   = $data_kegiatan['isi_kegiatan'];
					$waktu_kegiatan = $data_kegiatan['waktu'];
					?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<!-- Course Head -->
							<div class="course-head overlay">
								<img src="<?php echo base_url() . "assets/"; ?>admin/upload/<?php echo $foto ?>" alt="#">
								<!-- <a href="course-single.html" class="btn white primary">Register Now</a> -->
							</div>
							<!-- Course Body -->
							<div class="course-body">
								<div class="name-price">
									<div class="teacher-info">
										<img src="<?php echo base_url()."assets/Front/images/"; ?>icon.png" alt="#">
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
				<?php endforeach;?>
			</div>
		</div>
	</section>
	<!--/ End Courses -->	

	<!-- Call To Action -->
	<section class="cta">
		<div class="cta-inner overlay section" style="background-image:url('images/cta-bg.jpg')" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">					
					<div class="col-lg-8 col-md-8 col-12">
						<div class="text-content">
							<h2>We <span>Focus on</span> Brands, Products & Campaigns</h2>
							<p>facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla</p>
							<!-- CTA Button -->
							<div class="button">
								<a class="btn white" href="contact.html">Join With Now</a>
								<a class="btn white primary" href="courses.html">View Courses</a>
							</div>
							<!--/ End CTA Button -->
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Cta Image -->
						<div class="cta-image">
							<img src="images/girl-1.png" alt="#">
						</div>
						<!--/ End Cta Image -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Call To Action -->
	<!-- Faqs -->
	<section class="faqs section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="section-title bg">
						<h2>Frequently Asked <span>Questions</span></h2>
						<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
						<div class="icon"><i class="fa fa-question"></i></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-12">
					<div class="faq-image">
						<img src="images/faq.png" alt="#">
					</div>
				</div>
				<div class="col-lg-7 col-12">
					<div class="faq-main">
						<div class="faq-content">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<!-- Single Faq -->
								<div class="panel panel-default">
									<div class="faq-heading"  id="FaqTitle1">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq1"><i class="fa fa-question"></i>We have launches a new software house!</a>
										</h4>
									</div>
									<div id="faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle1">
										<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
									</div>
								</div>
								<!--/ End Single Faq -->
								<!-- Single Faq -->
								<div class="panel panel-default active">
									<div class="faq-heading"  id="FaqTitle2">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2"><i class="fa fa-question"></i>Curabitur rhoncus commodo rutrum. Pellentesque</a>
										</h4>
									</div>
									<div id="faq2" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="FaqTitle2">
										<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
									</div>
								</div>
								<!--/ End Single Faq -->
								<!-- Single Faq -->
								<div class="panel panel-default">
									<div class="faq-heading"  id="FaqTitle3">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3"><i class="fa fa-question"></i>Suspendisse facilisis ultricies tortor, nec sollicitudin</a>
										</h4>
									</div>
									<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle3">
										<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
									</div>
								</div>
								<!--/ End Single Faq -->
								<!-- Single Faq -->
								<div class="panel panel-default">
									<div class="faq-heading"  id="FaqTitle4">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4"><i class="fa fa-question"></i>Tristique senectus et netus et malesuada fames ac turpis </a>
										</h4>
									</div>
									<div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle4">
										<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
									</div>
								</div>
								<!--/ End Single Faq -->
								<!-- Single Faq -->
								<div class="panel panel-default">
									<div class="faq-heading"  id="FaqTitle5">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq5"><i class="fa fa-question"></i>Cras nulla orci, pharetra at dictum consequat</a>
										</h4>
									</div>
									<div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle5">
										<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
									</div>
								</div>
								<!--/ End Single Faq -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Blogs -->

	<!-- Footer -->
	<?php include 'Part/Footer.php';?>
	<!--/ End Footer -->
	<?php include 'Part/Js.php';?>

</body>
</html>