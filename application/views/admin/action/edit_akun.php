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
  	<?php foreach ($content->result() as $key): ?>
  	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
		<h3 style="text-align: center; color: #f1f1f1;"> Pengaturan Akun </h3>
	       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/aksi_update_akun" oninput='confirm_user_password.setCustomValidity(confirm_user_password.value != user_password.value ? "Password tidak cocok." : "")'>
             <div class="form-group">
                <label class="col-md-4 control-label">Username</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input name="user_name" placeholder="" class="form-control" required="true" value="<?php echo $key->user_name; ?>" type="text"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label" for="password1">Password</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="password1" name="user_password" class="form-control" required="true" type="password"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label" for="password2">Re-enter Password</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="password2" name="confirm_user_password" class="form-control" required="true" type="password"></div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Enable Comment</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group">
                      <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-comment"></i></span>
                      <select class="selectpicker form-control" name="comment_enabled">
                      	<?php
	                      	$varSel = array('0' => 'False','1'=>'True' );
	                      	foreach ($varSel as $varOpt => $value) { ?>
                        		<option value="<?php echo $varOpt;?>" <?php echo ($varOpt ==  $key->comment_enabled) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
                        <?php } ?>
                      </select>
                   </div>
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-4 control-label">Maintenance</label>
                <div class="col-md-8 inputGroupContainer">
                   <div class="input-group">
                      <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-wrench"></i></span>
                      <select class="selectpicker form-control" name="is_maintenance">
                      	<?php
	                      	$sel = array('0' => 'False','1'=>'True' );
	                      	foreach ($sel as $opt => $value) { ?>
                        		<option value="<?php echo $opt;?>" <?php echo ($opt ==  $key->is_maintenance) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
                        <?php } ?>
                      </select>
                   </div>
                </div>
             </div>
             <div class="form-group">
                <div class="col-md-10 inputGroupContainer">
                   <center><div class="input-group">
                   	<a style="visibility: hidden;" class="btn btn-primary btn-md"> Batal </a> &nbsp&nbsp
                   	<input type="submit" value="Simpan" class="btn btn-primary btn-md">
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

