<?php
//  vim: tabstop=4:softtabstop=4:shiftwidth=4:expandtab
    /////////////////////////////////
    // v1.0
    // Author: John Hull
    // filename: customer_dv.php
    // Project: Dialog Vizz Mobile
    //
    // Notes:
    //
    // Log:
    // v1.0 John Hull 17/10/2011
    //
    // customer registration details
    // php only
	//
	//v1.0.6 Karen Pasquel 29/11/2011
	//add logical condition for required fields

//@include_once('FirePHPCore/fb.PHP'); // Enable for debugging using Firefox
//require_once('headmenu_dv.php');


// Customer field labels
$custlabs = array (
'reg_number'    => "Dialog Vizz Mobile Number",
'reg_puk'       => "Your PUK Code",
'reg_email'     => "Email Address",
'Xreg_emailchk' => "Confirm Email Address",
'reg_pwd'       => "Password",
'Xreg_pwdchk'   => "Re-type Password",
'reg_question'  => "Security Question",
'reg_answer'    => "Security Answer",

'reg_title'     => "Title",
'reg_fst_name'  => "First Name",
'reg_lst_name'  => "Last Name",
'reg_fone'      => "Contact no. (Home/Mobile)",

'promo_code'      => "Promotional Code",

'reg_country'   => "Country",
'reg_pcode'     => "Postcode",
'reg_addr1'     => "Address Line 1",
'reg_addr2'     => "Address Line 2",
'reg_tcity'     => "Town/City",
'reg_county'    => "County",
'reg_howhear_sim'  => "How did you hear about us?",
'reg_howhear'   => "How did you hear about us?",
'reg_landmost'  => "Which country do you call most?",
'reg_agree'     => "I have read and agree to the Terms & Conditions.",
'reg_contactme' => "If you would like to be contacted about new products or promotions, please tick here."
);


$custdata  = array();
$custvldn  = array();
$custclass = array();
$custhints = array();
$custmands = array();
$custgroup = array();
$custtype  = array();
$custlengs = array();
$custwidth = array();
$custdisab = array();
$regcustdata = array();


foreach($custlabs as $key => $value)
{
  $regcustdata[$key] = "";
  $custdata[$key]  = "";
  $custvldn[$key]  = "";
  $custclass[$key] = "nonz";
  $custhints[$key] = "";
  $custmands[$key] = 1;
  $custgroup[$key] = "";
  $custtype[$key]  = 'text';
  $custlengs[$key] = 34;
  $custwidth[$key] = 200;
  $custdisab[$key] = "";
  if($key{0} != 'X'){
    $k = substr($key, 4);
    $custdata[$k]  = "";
  }
}

// fb($custwidth, "CD");

$custclass['reg_number']   .= " telno";
$custclass['reg_pwd']      .= " min6";
$custclass['Xreg_pwdchk']  .= " min6 pwconf";
$custclass['reg_agree']     = "mustset";
$custclass['reg_contactme'] = "check";
$custclass['reg_fone'] = "";
$custclass['reg_county'] = "";
$custclass['reg_addr2']   = "";
$custclass['promo_code']   = "";
$custclass['reg_question']  = 'select';
$custclass['reg_title']     = 'select';
$custclass['reg_howhear']   = 'select';
$custclass['reg_landmost']  = 'select';
$custclass['reg_howhear_sim']   = 'select';

$custvldn['reg_fst_name'] = "chklen 1";
$custvldn['reg_lst_name'] = "chklen 1";
$custvldn['reg_email']    = "chkemail";
$custvldn['reg_number']   = "chkpnum";
$custvldn['reg_addr1']    = "chklen 1";
$custvldn['reg_tcity']    = "chklen 1";
$custvldn['reg_pcode']    = "chklen 1";
$custvldn['reg_pwd']      = "chklen 6";
$custvldn['reg_agree']    = "chkagree";
$custvldn['Xreg_pwdchk']  = 'chkpass $regcustdata $regcustdata[reg_pwd]';

$custhints['reg_number']  = "(07*********)";
$custhints['reg_puk']     = "(Found on the packaging)";
// $custhints['reg_email']   = "This will be your username for Login";
$custhints['reg_pwd']     = "(Between 6 and 16 characters long)";
// $custhints['Xreg_pwdchk'] = "Please re-type password";

$custmands['reg_addr2']   = 0;
$custmands['reg_fone']    = 0;
$custmands['reg_county']  = 0;
$custmands['reg_howhear'] = 0;
$custmands['reg_howhear_sim'] = 0;
$custmands['reg_landmost']= 0;
$custmands['reg_contactme'] = 0;
$custmands['promo_code'] = 0;

define("REGNONE",  000);
define("REGINFO",  100);
define("REGPNAL",  150);
define("REGEMAL",  160);
define("REGNAME",  200);
define("REGADDR",  300);
define("REGOTHER", 400);
define("REGPROMO", 500);
define("REGHOWHEAR", 550);

$custgroup['reg_number']    = REGINFO;
$custgroup['reg_puk']       = REGINFO;
$custgroup['reg_email']     = REGEMAL;
$custgroup['promo_code']     = REGPROMO;
$custgroup['Xreg_emailchk'] = REGPNAL;
$custgroup['reg_pwd']       = REGPNAL;
$custgroup['Xreg_pwdchk']   = REGPNAL;
$custgroup['reg_question']  = REGINFO;
$custgroup['reg_answer']    = REGINFO;

$custgroup['reg_title']     = REGNAME;
$custgroup['reg_fst_name']  = REGNAME;
$custgroup['reg_lst_name']  = REGNAME;
$custgroup['reg_fone']      = REGNAME;

$custgroup['reg_country']   = REGADDR;
$custgroup['reg_pcode']     = REGADDR;
$custgroup['reg_addr1']     = REGADDR;
$custgroup['reg_addr2']     = REGADDR;
$custgroup['reg_tcity']     = REGADDR;
$custgroup['reg_county']    = REGADDR;

$custgroup['reg_howhear_sim'] = REGHOWHEAR;
$custgroup['reg_howhear']   = REGOTHER;
$custgroup['reg_landmost']  = REGOTHER;
$custgroup['reg_agree']     = REGNONE;
$custgroup['reg_contactme'] = REGNONE;

//$custlengs['reg_pcode']     = 10;
//$custlengs['reg_fone']      = 20;
//$custlengs['reg_pwd']       = 16;
//$custlengs['Xreg_pwdchk']   = 16;

$custtype['reg_question']  = 'select';
$custtype['reg_title']     = 'select';
$custtype['reg_country']   = 'select';
$custtype['reg_howhear_sim']   = 'select';
$custtype['reg_howhear']   = 'select';
$custtype['reg_landmost']  = 'select';
$custtype['reg_pwd']       = 'password';
$custtype['Xreg_pwdchk']   = 'password';
$custtype['reg_agree']     = 'checkbox';
$custtype['reg_contactme'] = 'checkbox';

$reg_howhear_sim_choices = array (
    '' => 'Please select',
    'In-store' => 'In-store',
	'Search engine' => 'Search engine',
	'Web advert' => 'Web advert',
	'TV advert' => 'TV advert',
	'Print advert' => 'Print advert',
	'Social media' => 'Social media',
	'Radio' => 'Radio',
    'Other' => 'Other'
);

$reg_howhear_choices = array (
    '' => 'Please select',
    'Magazines' => 'Magazines',
    'Word of mouth' => 'Word of mouth',
    'TV Advert' => 'TV Advert',
    'Posters' => 'Posters',
    'Search Engine' => 'Search Engine',
    'Radio' => 'Radio',
    'Other' => 'Other'
);

$reg_country_choices = array (
    'UK' => 'United Kingdom'
);

$reg_landmost_choices = array();

$lines = file("country_list.csv");
foreach($lines as $i)
    $reg_landmost_choices[$i] = $i;


function show_regline($i, $v)
{
    global $custtype;
    global $custlengs;
    global $custwidth;
    global $custclass;
    global $regcustdata;
    global $custmands;
    global $custhints;
    global $custdisab;

    $local = array();

    $dis='';

    if($custdisab[$i])
        $dis="disabled='disabled'";

    echo "<div class='regline'>";
    if($custtype[$i] == 'checkbox')
    {
        echo "<label for='$i' style='width: 320px; float:left; margin: 10px 0 0 0px;' >$v";
  	    if($custmands[$i])
            echo "<span class='redstar'>*</span>";
    }
    else
    {
        if($custhints[$i])
            echo "<label for='$i' class='withhint'>$v<span class='chint'>$custhints[$i]</span>";
        else
            echo "<label for='$i' class='nohint'>$v";
    }
    echo "</label>\n";
    if($custtype[$i] == 'select')
    {
        $choices = $i . '_choices';
        eval ("global \$$choices;");

        eval("\$local = \$$choices;");

        echo "<select id='$i' name='$i' class='select-box'>";
        foreach($local as $val => $text)
            if($regcustdata[$i] == $val)
                echo "<option selected='selected' value=\"$val\">" . htmlspecialchars($text) . "</option>";
            else
                echo "<option value=\"$val\">" . htmlspecialchars($text) . "</option>";
        echo "</select>";
		if ($i=='reg_title' || $i=='reg_question'){
			echo "<span class='redstar'>*</span>";
		}

    }
    elseif($custtype[$i] == 'checkbox')
    {
        echo "<input name='$i' type='$custtype[$i]' id='$i' "
            ."class='$custclass[$i]' value='$regcustdata[$i]' style='float: left; margin-top: 12px;' />\n";
    }
    else
    {
        $local_cdata = htmlspecialchars(stripslashes($regcustdata[$i]), ENT_QUOTES);
        echo "<input name='$i' type='$custtype[$i]' id='$i' style='width:$custwidth[$i]px;' maxlength='$custlengs[$i]' "
            ."class='$custclass[$i] txt' $dis value='$local_cdata' />\n";

  	    if($custmands[$i])
            echo "<span class='redstar'>*</span>";
    }
/*    if($custhints[$i])
    echo "<span class='chint'>$custhints[$i]</span>";
*/
    echo "</div>";
}


function chklen($fld, $len, $fldlab)
{
    global $err;

    if(empty($fld) || strlen($fld) < $len)
        $err[] = sprintf("ERROR - %s must be %d or more letters", $fldlab, $len);
}


function chkpnum($fld, $fldlab)
{
    global $err;

    if(empty($fld) || !preg_match('/^\+?[\d ]{5,20}$/i', $fld))
        $err[] = sprintf("ERROR - %s is not a valid phone number", $fldlab, $fld);
}


function chkpnumz($fld, $fldlab)
{
    global $err;

    if(empty($fld))
        return;
    if(!preg_match('/^\+?[\d ]{5,20}$/i', $fld))
        $err[] = sprintf("ERROR - %s is not a valid phone number", $fldlab, $fld);
}


function chkemail($fld)
{
    global $err;

    if(!preg_match('/^[\w.]+\@[\w]+\.[\w.]+$/', $fld)) {
        $err[] = "ERROR - Invalid email address.";
  }
}


function chkpass($fld1, $fldg, $fldpass)
{
    $fld2 = "fred";
    global $err;

    eval("global $fldg; \$fld2 = \"$fldpass\";");
    if($fld1 != $fld2)
        $err[] = "ERROR - passwords do not match";
}

function chkagree($fld)
{
    global $err;

    if(empty($fld))
        $err[] = "Please agree our Terms and Conditions";
}
