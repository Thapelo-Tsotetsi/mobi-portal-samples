<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<b>Form Post Results:</b>
		<br /><br />
		<?php 
			print_r($_POST);	
		?>
		<br />
	Body Length: <?php echo strlen(file_get_contents('php://input')); ?> | <?php echo strlen($HTTP_RAW_POST_DATA); ?>

<br />
		<a href="form_index.html">Back</a> | <a href="index.html">Home</a>
	</body>
</html>		
