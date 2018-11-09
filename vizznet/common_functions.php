<?php
    /////////////////////////////////
    // v2.3
    // Author: Roger Hull
    // filename: common_functions.php
    // Project: Dialog Vizz Mobile
    //
    // Notes:
    // Common PHP functions.
    //
    // Log:
    // v1.0 Roger Hull 24/12/2010
    // Initial version
    //
    // v1.1 Muhammad Rehman 25/01/2011
    // Added a parameter $email_log_type to function email
    //
    // v1.2 Roger Hull 27/01/2011
    // In function email():
    //    Added a parameter $nSubsciberId to function email.
    //    Corrected $FromName to $fromName.
    //    Corrected $email to $to.
    // Added function service5Link($SubscriberId)
    // Added function QiCommEmailFooter()
    //
    // v1.3 Roger Hull 09/02/2011
    // Added trim in CheckString function:
    //
    // v1.4 Roger Hull 14/02/2011
    // Added one more parameter to Function email "Data".
    // This parameter can have any data written in the log file.
    // e.g. I thought about this when I wanted to store Transaction #
    // for airtime transfers.
    //
    // v1.5 Muhammad Rehman 25/02/2011
    // Added the function validate_user & is_CS_login.
    //
    // v1.6 Roger Hull 28/02/2011
    // Added the function get_CS_username().
    // Support validate_use by MSISDN.
    //
    // v1.7 Roger Hull 28/02/2011
    // validate_user renamed find_subscriber.
    //
    // v1.8 Roger Hull 28/06/2011
    // Emergency fix while we can't access DNS server, use ip address
    //
    // v1.9 Muhammad Rehman 21/10/2011
    // Added UKDateTime function to format the datetime string into given format.
    //
    // v2.0 Sivanathan Sivakuhan 01/11/2011
    // Added function "GET_value" 
    //
    // v2.1 Muhammad Rehman 07/12/2011
    // Added a new function lastday().
    //
    // v2.2 Muhammad Rehman 10/02/2012
    // Added parameters to mail function due as this is
    // very useful to relay email through SMTP server. So
    // the receiving server does not consider it as spam email.

    // v2.3 Muhammad Rehman 12/04/2012
    // Added new function for SL New Year Promotion.

//include "security.php";

if (defined('SEND_EMAIL'))
    require_once("class.phpmailer.php");

function email($to, $toName, $from, $fromName, $replyTo, $replyToName, $subject, $message, $email_log_type="register", $nSubscriberId=0, $eData = "")
{
    $mail = new PHPMailer();

    $mail->IsSMTP();                                // set mailer to use SMTP
    $mail->Host = "ssl://smtp.gmail.com";           // specify main and backup server
    //$mail->Host = "ssl://209.85.143.109";		   // Emergency fix while we can't access DNS server
    $mail->SMTPAuth = true;                         // turn on SMTP authentication
    $mail->Username = "no-reply@vizznet.co.uk";  // SMTP username
    $mail->Password = "no8294re"; // SMTP password
    $mail->From = $from;
    $mail->FromName = $fromName;
    $mail->AddReplyTo($replyTo, $replyToName);

    $mail->WordWrap = 50;                           // set word wrap to 50 characters
    $mail->IsHTML(true);                            // set email format to HTML

    $mail->AddAddress($to, $toName);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $file = fopen(".ht_email_log_".$email_log_type."_".date("Ym").".txt", "a+");
    $timestamp = "Datetime:".date("Y-m-d H:i:s");
    
    // Mail it, try with remote SMTP server first
    
    ob_start();                 // capture any printed output from mail class
    $nMResu = $mail->Send();
    $mail_output = ob_get_contents();
    ob_end_clean(); 

    if($nMResu)
        fwrite($file, $timestamp . "SubscriberId: $nSubscriberId, Email:$to, Server:GMAIL SMTP, Status:Sent, $eData\r\n");
    else
    {
        fwrite($file, $timestamp . "SubscriberId: $nSubscriberId, Email:$to, Server:GMAIL SMTP, Status:Failed, $eData (".$mail->ErrorInfo.")\r\n");

        // Now try local server
        
        // To send HTML mail, the Content-type header must be set
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

        // Additional headers
        $headers .= "To: $toName<$to>\r\n";
        $headers .= "From: $fromName<$from>\r\n";

        $nMResu = mail($to, $subject, $message, $headers, "-f no-reply@dialogvizz.co.uk");
        if ($nMResu)
            fwrite($file, $timestamp . ", SubscriberId: $nSubscriberId, Email:$to, Server:Local SMTP, Status:Sent, $eData\r\n");
        else
            fwrite($file, $timestamp . ", SubscriberId: $nSubscriberId, Email:$to, Server:Local SMTP, Status:Failed, $eData\r\n");

    }

    fclose($file);
    
    return $nMResu;
}

function CheckString($strString)
{
    $strString = trim(str_replace ("'", "''", $strString));
    return $strString;
}

function LogWebEntry($str, $filename="")
{
    $mytimestamp = date('H:i:s d/m/Y');
    $log_file_name = '.ht_website_log_'.date('Ym').'.txt';
    $handle = fopen($log_file_name, 'a');
    $filename_str = $filename ? " $filename" : '';
    fwrite($handle, "$mytimestamp: ".' '.$_SERVER['REMOTE_ADDR'].$filename_str." $str\n");
    fclose($handle);
}

function service5Link($SubscriberId)
{
    return "https://172.16.21.12/Subscribers/$SubscriberId";
}

function QiCommEmailFooter()
{
    return "QiComm Limited is a company registered in England and Wales under number 05422551 having its registered office at Network House, 15 High Street, Hampton Hill, Middlesex, TW12 1NB, United Kingdom";
}

///////////////////////////////////////////////////
// Function to find subscriber when BS logged in.
//
function find_subscriber($nSubscriberId = 0, $txtAccount = "", $txtEmail = "", $MSISDN = "")
{
    if (!$nSubscriberId && !$txtAccount && !$txtEmail && !$MSISDN)
        return array();
        
    if ($MSISDN)
    {
        $strQuery = "SELECT TOP 1      
            sub.[subscriber_id], sub.[account]
            FROM subscribers sub (NOLOCK), users_general ug (NOLOCK), user_clis uc (NOLOCK)
            WHERE sub.[account] = ug.[account] AND ug.[serial] = uc.[serial] AND uc.[cli] = '$MSISDN'";
    }
    else
    {
        $strWhere = "";

        if($nSubscriberId)
            $strWhere = " subscriber_id = $nSubscriberId";
        elseif ($txtAccount)
            $strWhere = " account = '$txtAccount'";
        elseif ($txtEmail)
            $strWhere = " email = '$txtEmail'";
        
        $strQuery = " SELECT TOP 1
                          subscriber_id,
                          account
                      FROM
                          subscribers (NOLOCK)
                      WHERE
                          $strWhere";
    }
    $SubResult = digitalk_execute_query($strQuery);
    $array = digitalk_fetch_array($SubResult);

    return $array;

}

///////////////////////////////////////////////////
// function to check if the logged in user is a BS user
//
function is_CS_login()
{
    if (isset($_SESSION['S5Login']) && $_SESSION['S5Login']==1)
        return TRUE;
    else
        return FALSE;
}

///////////////////////////////////////////////////
// function to return the logged in user if it is a BS user
//
function get_CS_username()
{
    if ($_SESSION['S5Login']==1)
        return $_SESSION['LoginString'];
    else
        return FALSE;
}


// This function returns the date time to any desired format.
function UKDateTime($datetime="", $format="d F Y h:i a")
{
    if($datetime)
    {
        $nDate = explode (" ", $datetime);
        $nDate1 = explode("-", $nDate[0]);

        if($nDate[1])
            $nDate2 = explode(":", $nDate[1]);
        else
            $nDate2 = explode(":", "00:00:00");

        // Converting and formatting time
        $mytime = mktime($nDate2[0], $nDate2[1], $nDate2[2], $nDate1[1], $nDate1[2], $nDate1[0] );
        $datetime = date($format, $mytime);
    }

    return $datetime;
}


function GET_value($string)
{
    if (isset($_GET[$string]))
        return $_GET[$string];
    else
        return '';
}


// Function to return the last date of the month
function lastday($month = '', $year = '') {
   if (empty($month)) {
      $month = date('m');
   }
   if (empty($year)) {
      $year = date('Y');
   }
   $result = strtotime("{$year}-{$month}-01");
   $result = strtotime('-1 second', strtotime('+1 month', $result));
   return date('Y-m-d', $result);
}

function SLNewYearPromotion($SubscriberId, $destination_number, $amountGBP)
{
    $destination_number = doubleval($destination_number);
    if((date("Y-m-d") == "2012-04-13" || date("Y-m-d") == "2012-04-14") &&  $amountGBP >= 5 && substr($destination_number, 0,2) == "94" )
    {
        //echo substr($destination_number, 0,2);
        $timestamp = date('H:i:s d/m/Y');
        $file = fopen(".ht_SL_NewYear_Promotion_Apr2012.txt", "a+");

        $account = $_SESSION["Account"];
        $bundle_id = "915CD595-5C91-4360-82FE-EDF6478FD151";

        $strQuery = "   SELECT COUNT(*) as count
                            FROM
                        subscriber_package_audit (nolock)
                        WHERE
                            account = '$account' AND
                            package_name = 'Srilanka Free 30 MINS'";
        $uResult = digitalk_execute_query($strQuery);
        $array = digitalk_fetch_array($uResult);
        if ($array['count'] > 0 and $account!="50019962" )
        {
            fwrite($file, "Account=".trim($account).", Timestamp=$timestamp, Bundle already added\r\n");
            fclose($file);
            return;
        }

        $strQuery = "   EXEC bbt_AccountsAddBundle
                                @account='$account',
                                @product_id = '2',
                                @bundle_id = '$bundle_id',
                                @isAutoBundle = '0',
                                @show_output = 1,
                                @username = 'admin'";
        $nSPResult = digitalk_execute_query($strQuery);
        $SParray = digitalk_fetch_array($nSPResult);
        $call_status = $SParray["call_status"];
        $result = $SParray["errortext"];



        fwrite($file, "Account=".trim($account).", Timestamp=$timestamp, Call Status=$call_status, Result=$result\r\n");
        fclose($file);

    }

    return;
}


?>