<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="xyperia" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/superfish.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
	<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
	<script src="/assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<?php foreach ($content->result() as $key): ?>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<div id="fh5co-header"></div>		
				
				<div class="fh5co-hero">
					<div class="fh5co-overlay"></div>
					<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="
					background-image: url(/assets/images/cover_bg_1.jpg);
					background-width: 100%;
					background-repeat: no-repeat;
					background-height: 100%; ">
						<div class="desc animate-box">
							<h2 style="color: #EEEEEE; text-shadow: 3px 3px #000000;"><?php echo $key->berita_title; ?></h2>
							<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"><b style="color: #a1a1a1;"><?php
								$date = $key->berita_date;
								$substrDate = date('F', strtotime($date));
					            $substrDate = substr($substrDate,0,3).". ";
					            $substrDate .= date('d', strtotime($date)).", ";
					            $substrDate .= date('Y', strtotime($date));
								echo $substrDate;
							?></b></h3>
							<img src="/uploads/berita/<?php echo $key->berita_url;?>" width="90%" alt="Responsive image" style="border-radius: 35px;" class="img-thumbnail" />
							<center>
								<p class="text-justify" style="width: 90%;">
									<br /> &nbsp&nbsp&nbsp&nbsp <?php echo $key->berita_desc; ?> <br /> <br />
								</p>
							</center>
						</div>
					</div>
				</div>

		</div>
	</div>

	<?php endforeach ?>

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.easing.1.3.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.waypoints.min.js"></script>
	<script src="/assets/js/jquery.stellar.min.js"></script>
	<script src="/assets/js/hoverIntent.js"></script>
	<script src="/assets/js/superfish.js"></script>

	<!-- Main JS -->
	<script src="/assets/js/main.js"></script>

	</body>
</html>

