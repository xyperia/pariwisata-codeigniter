<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Visit Toraja</title>
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
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-toraja-from-above.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Toraja Dari Awan </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto Toraja dari atas awan </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-sawah.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Pemandangan Sawah </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto persawahan </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-ingin-pulang.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Anak Alam </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto anak alam </h3>
				</div>
			</div>

		</div>

		<?php
			function encrypt( $plaintext = NULL )
			{
			    $cryptkey = '5b3bb3e5458e02aa356f2fc671ae08d9'; // Author's MD5
			    $ivkey = '3ba6bbc5b6d58568bfb6f0023379b5ec'; // Author's MD5

			    $output = false;
			    $encrypt_method = "AES-256-CBC";
			    $key = hash( 'sha256', $cryptkey );
			    $iv = substr( hash( 'sha256', $ivkey ), 0, 16 );
			    $output = base64_encode( openssl_encrypt( $plaintext, $encrypt_method, $key, 0, $iv ) );

			    return $output;
			}
		?>

		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fh5co-news">
						<h3>Berita Terbaru</h3>

						<?php
							foreach($content->result_array() as $x):

							$id=$x['berita_id'];
							$title=$x['berita_title'];
							$date=$x['berita_date'];
							$desc=$x['berita_desc'];
							$docs_url=$x['berita_url'];

							$substrDate = date('F', strtotime($date));
				            $substrDate = substr($substrDate,0,3).". ";
				            $substrDate .= date('d', strtotime($date)).", ";
				            $substrDate .= date('Y', strtotime($date));

						    if (strlen($desc) > 150) {
						       $stringCut = substr($desc, 0, 150);// change 15 top what ever text length you want to show.
						       $endPoint = strrpos($stringCut, ' ');
						       $desc = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
						       $desc .= ' ... ';
						    }
						?>

						<ul>
							<li>

								<form id="<?php echo $id; ?>" method="post" enctype="multipart/form-data" action="/home/show_berita_detail/<?php echo encrypt($id); ?>">
								  <input type="text" style="display: none;" name="validation" value="valid">
								  <a class="fh5co-listing-item" onclick="document.getElementById('<?php echo $id; ?>').submit(); return false;" style="border-radius: 20px;">
									<span class="fh5co-date"> <?php echo $substrDate;?> </span>
									<h3> <?php echo $title;?> </h3>
									<p> <?php echo $desc;?> </p>
								  </a>
								</form>

							</li>
						</ul>

						<?php endforeach;?>

					</div>

					<div class="col-md-6 fh5co-testimonial"> <br />
						<img src="/assets/images/splash/img-splash-1.jpg" class="img-responsive mb20" style="height: 215px; border-radius: 25px;">
						<img src="/assets/images/splash/img-splash-2.jpg" class="img-responsive" style="height: 215px; border-radius: 25px;">
					</div>

				</div>
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

	<!-- Main JS -->
	<script src="/assets/js/main.js"></script>

	</body>
	
</html>

