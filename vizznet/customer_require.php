<?php
    /////////////////////////////////
    // v1.3
    // Author: Karen Pasquel
    // filename: contact_email.php
    // Project: VizzNet
    //
    // Notes:
    // Sends 'Contact Us' email.
    //
    // Log:
    // v1.0 Karen Pasquel 19/09/2012
    // Initial version
    //
    session_start();       
    define('SEND_EMAIL', 'true');     
    require_once 'common_functions.php';         
    set_time_limit(60);

// subject
$subject = "Welcome to VizzNet";
$txtName = CheckString($_POST['fullname']);
$txtDSLnum = CheckString($_POST['DSLnumber']);
$txtPostCode = CheckString($_POST['postcode']);
$txtPhone = CheckString($_POST['dynumber']);
$txtEmail = CheckString($_POST['email']);
$txtpreftime = CheckString($_POST['preftime']);

// message
$message = "
<html>
<head>
  <title>Phone and Broadband Subscription Request</title>
</head>
<body>
<p style='font-family:arial;'>Dear Customer Services,</p>
<p style='font-family:arial;'>Following enquiry has been received through VizzNet website, phone and broadband subscription request. Below are the details:</p>
<table cellpadding='0' cellspacing='0' border='0'>
    <tr>
        <td style='font-family:arial;width:200px'>Name</td>
        <td style='font-family:arial;'>$txtName</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>DSL Number</td>
        <td style='font-family:arial;'>$txtDSLnum</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Postcode</td>
        <td style='font-family:arial;'>$txtPostCode</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Mobile</td>
        <td style='font-family:arial;'>$txtPhone</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Email</td>
        <td style='font-family:arial;'>$txtEmail</td>
    </tr>
	<tr>
        <td style='font-family:arial;width:200px'>Preferred date/time to be contacted</td>
        <td style='font-family:arial;'>$txtpreftime</td>
    </tr>
</table>
<p style='font-family:arial;'>
<br /><br />
Warm Regards,<br />
VizzNet Web Development Team.<br />
</p>
</body>
</html>";

$subject = "Phone and Broadband Subscription Request";
//$to  = 'help@vizznet.co.uk';
$to  = 'karen.pasquel@qicomm.com';
$toName  = 'Customer Services';
$from = 'no-reply@vizznet.co.uk';
$fromName = 'VizzNet Web Team';

// Mail it

$nMResu = email($to, $toName, $from, 'VizzNet Web Team', $from, 'Do Not Reply', $subject, $message, "contact");

header("Location:customer-thankyou.php");
exit;
?>