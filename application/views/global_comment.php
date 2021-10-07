<?php
	if (isset($msgbody)){
    foreach ($msgbody as $msg) {
?>
    <script language='javascript' type='text/javascript'>
		alert('<?php echo $msg->msgcontent; ?>');
	</script>
<?php } } ?>