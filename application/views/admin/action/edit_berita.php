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
	<script src="/assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
	<div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      
      
    </div>
	<?php 
		function encrypt( $plaintext = NULL )
	      {
	          $cryptkey = '5b3bb3e5458e02aa356f2fc671ae08d9'; // MD5
	          $ivkey = '3ba6bbc5b6d58568bfb6f0023379b5ec'; // MD5

	          $output = false;
	          $encrypt_method = "AES-256-CBC";
	          $key = hash( 'sha256', $cryptkey );
	          $iv = substr( hash( 'sha256', $ivkey ), 0, 16 );
	          $output = base64_encode( openssl_encrypt( $plaintext, $encrypt_method, $key, 0, $iv ) );

	          return $output;
	      }
		foreach ($content->result() as $key):
	?>

	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
		<h3 style="text-align: center; color: #f1f1f1;"> Edit Berita </h3>
	       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/aksi_update_berita/<?php echo encrypt($key->berita_id); ?>">
             <div class="form-group">
                <label class="col-md-4 control-label">Judul Berita</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-text-background"></i></span><input id="fullName" name="berita_title" placeholder="" class="form-control" required="true" value="<?php echo $key->berita_title; ?>" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Isi Berita</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="addressLine1" name="berita_desc" placeholder="" class="form-control" required="true" value="<?php echo $key->berita_desc; ?>" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Tanggal</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="addressLine2" name="berita_date" placeholder="" class="form-control" required="true" value="<?php echo $key->berita_date; ?>" type="date"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">URL Gambar/Dokumen</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>

                   	<table width="100%">
                   		<tr>
                   			<td width="2%"></td>
                   			<td>
                   				<div class="file-upload">
								  <label for="upload-1" class="btn">Upload</label>
								  <input type="file" id="upload-1" name="berita_url">
								  <p class="file-name">Please select a file.</p>
								</div>
							</td>
						</tr>
					</table>

	                </div>
	             </div>
	         </div>
             <div class="form-group">
                <div class="col-md-10 inputGroupContainer">
                   <center><div class="input-group">
                   	<input type="submit" value="Simpan" class="btn btn-primary btn-md"> &nbsp&nbsp
                   	<a href="/admin/berita" class="btn btn-primary btn-md"> Batal </a>
                   </div></center>
                </div>
             </div>
	       </form>
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

	<style>
		input#upload-1 {
		  visibility: hidden;
		}
	</style>

	<script>
		  jQuery(function($) {
		  $('input[type="file"]').change(function() {
		    if ($(this).val()) {
		         var filename = $(this).val();
		         $(this).closest('.file-upload').find('.file-name').html(filename);
		    }
		  });
		});
	</script>

	</body>
</html>

