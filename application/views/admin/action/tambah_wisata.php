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
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
		<h3 style="text-align: center; color: #f1f1f1;"> Tambah Obyek Wisata </h3>
	       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/aksi_tambah_wisata">
             <div class="form-group">
                <label class="col-md-4 control-label">Obyek Wisata</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-text-background"></i></span><input name="wisata_name" placeholder="" class="form-control" required="true" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Deskripsi</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                   	<textarea name="wisata_desc" class="form-control" cols="30" rows="7" required=""></textarea>
                   </div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Latitude</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span><input name="wisata_lat" placeholder="" class="form-control" required="true" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Longitude</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span><input name="wisata_lng" placeholder="" class="form-control" required="true" type="text"></div>
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
								  <input type="file" id="upload-1" name="wisata_url">
								  <p class="file-name">Please select a file.</p>
								</div>
							</td>
						</tr>
					</table>

	                </div>
	             </div>
	         </div>

             <div class="form-group">
                <label class="col-md-4 control-label">Penanggung Jawab</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input name="wisata_pic" placeholder="" class="form-control" required="true" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <div class="col-md-10 inputGroupContainer">
                   <center><div class="input-group">
                   	<input type="text" style="display: none;" name="validation" value="valid">
                   	<input type="submit" value="+ Tambah" class="btn btn-primary btn-md"> &nbsp&nbsp
                   	<a href="/admin/wisata" class="btn btn-primary btn-md"> Batal </a>
                   </div></center>
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

