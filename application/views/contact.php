<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="xyperia" />

	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/superfish.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/slideshow.css">

	<script src="/assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
						
		</div>
		
		<!-- MODAL STARTS -->
	    <div id="modal" class="modal fade" role='dialog'>
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title" id="modal-title">Pemberitahuan</h4>
	                </div>
	                <p class="modal-body text-justify" id= "modal-body" />
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
	                </div>
	            </div>
	          </div>
	      </div>
	    <!-- MODAL ENDS -->
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-waterfall.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Air Terjun </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto Air Terjun </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-gunung-batu.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Bukit Batu </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto Bukit Batu </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/slideshow/img-1.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Patung Yesus, Burake </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto Patung Yesus di Burake </h3>
				</div>
			</div>

		</div>

		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url('home/kirim_komentar'); ?>">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Alamat</h3>
							<p>Dinas Kebudayaan & Pariwisata</p>
							<ul class="contact-info">
								<li>
									<i class="icon-location-pin"></i>
									<a href="https://goo.gl/maps/myyraut8vutTg7d76" target="_blank"> Jl. Ahmad Yani 62A, Rantepao - Toraja Utara 91831 Sulawesi Selatan </a>
								</li>
								<li><i class="icon-phone2"></i>+62 (423) 21277 / +62 (423) 25455</li>
								<li><i class="icon-mail"></i><a href="mailto:info@halotorajautara.com" target="_blank">info@halotorajautara.com</a></li>
								<li><i class="icon-facebook2"></i><a href="https://www.facebook.com/visittorajautara" target="_blank">Visit Toraja Utara</a></li>
								<li><i class="icon-instagram2"></i><a href="https://www.instagram.com/visittorajautara/" target="_blank">@visittorajautara</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input name="input-name" type="text" class="form-control" placeholder="Nama" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input name="input-email" type="text" class="form-control" placeholder="Email" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="input-comment" class="form-control" id="" cols="30" rows="7" placeholder="Komentar" required=""></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Kirim" class="btn btn-primary btn-lg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	</div>

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.easing.1.3.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.waypoints.min.js"></script>
	<script src="/assets/js/jquery.stellar.min.js"></script>
	<script src="/assets/js/hoverIntent.js"></script>
	<script src="/assets/js/superfish.js"></script>
	<script src="/assets/js/slideshow.js"></script>

	<!-- Google Map
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="/assets/js/google_map.js"></script>
	-->

	<!-- Main JS -->
	<script src="/assets/js/main.js"></script>
	<script type="text/javascript">
	   $(document).on("click", ".open-modal", function () {
	   $("#modal-title").html("<p> <b> Pengirim </b> : " + varAuthor + " (" + varEmail + ")</p>");   
	   $("#modal-body").html("<p> <b> Komentar </b> : " + varComment + "</p>");
	   $('#modal').modal('show');
	   });

	</script>

	</body>
</html>

