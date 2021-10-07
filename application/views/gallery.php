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
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-tilanga.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Kolam Tilanga' </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto masapi sedang berenang </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/featured/img-payung-alam.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Entah Dimana </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto tidak tahu dimana </h3>
				</div>
			</div>

			<div class="fh5co-cover text-center mySlides fade" data-stellar-background-ratio="0.5" style="
			background-image: url(/assets/images/slideshow/img-8.jpg);
			background-width: 100%;
			background-repeat: no-repeat;
			background-height: 100%; ">
				<div class="desc animate-box">
					<h2 style="text-shadow: 3px 3px #000000;"> Kopi Toraja </h2>
					<h3 style="color: #EEEEEE; text-shadow: 2px 2px #000000;"> Ini sampel foto kopi Toraja </h3>
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

		<div class="fh5co-listing">
			<div class="container">
				<div class="row">

					<?php
						foreach($content->result_array() as $x):

						$id=$x['wisata_id'];
						$title=$x['wisata_name'];
						$docs_url=$x['wisata_url'];
					?>

					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<form id="<?php echo $id; ?>" method="post" enctype="multipart/form-data" action="show_wisata_detail/<?php echo encrypt($id); ?>">
						  <input type="text" style="display: none;" name="validation" value="valid">
						  <a class="fh5co-listing-item" onclick="document.getElementById('<?php echo $id; ?>').submit(); return false;" style="border-radius: 20px;">
							<img src="/uploads/wisata/<?php echo $docs_url;?>" style="border-radius: 20px;" class="img-responsive img-thumbnail">
							<div class="fh5co-listing-copy">
								<h2 style="text-shadow: 2px 2px #000000;"> <?php echo $title; ?> </h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						  </a>
						</form>
					</div>

					<?php endforeach;?>

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

