<?php

  //variable de validacion
	define('SEND_EMAIL', 'true');     
    require_once 'common_functions.php';         
    set_time_limit(60);
	$error=1;
	$email=$_POST['reg_email'];
	$message="<html>
			<head>
			  <title>Welcome to VizzNet</title>
			</head>
			<body>
			<p style='font-family:arial;'>$email have subscribed to VizzNet newsletter.</p>
			</body>
			</html>";
			//$to="info@vizznet.co.uk";
	
	$subject="VizzNet newsletter susbscrition";
	$to  = 'karen.pasquel@qicomm.com';
	$toName  = 'Customer Services';
	$from = 'no-reply@vizznet.co.uk';
	$fromName = 'VizzNet Web Team';
	if(!email($to, $toName, $from, $fromName, 'no-reply@vizznet.co.uk', 'Do Not Reply', $subject, $message, "contact"))
	{
		$error=-1;
	}
	header("Location:thankyou-newsletter.php?error=$error");
    exit;
?>

