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
$txtEmail = CheckString($_POST['email']);
$txtPostCode = CheckString($_POST['reg_pcode']);
$txtAddr1 = CheckString($_POST['reg_addr1']);
$txtAddr2 = CheckString($_POST['reg_addr2']);
$txtAddr3 = CheckString($_POST['reg_tcity']);
$txtAddr4 = CheckString($_POST['reg_county']);
$txtPhone = CheckString($_POST['dynumber']);
$txtMobile = CheckString($_POST['onumber']);
$txtMessage = CheckString($_POST['message']);

// message
$message = "
<html>
<head>
  <title>VizzNet - Contact Us Enquiry</title>
</head>
<body>
<p style='font-family:arial;'>Dear Customer Services,</p>
<p style='font-family:arial;'>Following enquiry has been received through VizzNet website contact us form. Below are the details:</p>
<table cellpadding='0' cellspacing='0' border='0'>
    <tr>
        <td style='font-family:arial;width:200px'>Name</td>
        <td style='font-family:arial;'>$txtName</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Email</td>
        <td style='font-family:arial;'>$txtEmail</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Address Line 1 &nbsp; </td>
        <td style='font-family:arial;'>$txtAddr1</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Address Line 2 &nbsp; </td>
        <td style='font-family:arial;'>$txtAddr2</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Town/City</td>
        <td style='font-family:arial;'>$txtAddr3</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>County</td>
        <td style='font-family:arial;'>$txtAddr4</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Postcode</td>
        <td style='font-family:arial;'>$txtPostCode</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Phone</td>
        <td style='font-family:arial;'>$txtPhone</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Mobile</td>
        <td style='font-family:arial;'>$txtMobile</td>
    </tr>
    <tr>
        <td style='font-family:arial;width:200px'>Message</td>
        <td style='font-family:arial;'>$txtMessage</td>
    </tr>
</table>
<p style='font-family:arial;'>
<br /><br />
Warm Regards,<br />
VizzNet Web Development Team.<br />
</p>
</body>
</html>";

$subject = "VizzNet website enquiry";
//$to  = 'help@vizznet.co.uk';
$to  = 'karen.pasquel@qicomm.com';
$toName  = 'Customer Services';
$from = 'no-reply@vizznet.co.uk';
$fromName = 'VizzNet Web Team';

// Mail it

$nMResu = email($to, $toName, $from, 'VizzNet Web Team', $from, 'Do Not Reply', $subject, $message, "contact");

header("Location:contact-thankyou.php");
exit;
?>