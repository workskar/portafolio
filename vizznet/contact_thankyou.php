<?php
    /////////////////////////////////
    // v1.0
    // Author: Muhammad Rehman
    // filename: contact.php
    // Project: Dialog Vizz Mobile
    //
    // Notes:
    // Static contact us.
    //
    // Log:
    // v1.0 Muhammad Rehman 20/12/2010
    // Initial version
    //
    // v1.1 Sivanathan Sivakuhan 25/10/2011
    // included "@include_once('FirePHPCore/fb.PHP')" & "require_once('helptext.php')" & "require_once('headmenu_dv.php')" inorder to work with the new page layout
    // added <style> class
    // included "show_footer();"
    // removed the table contents from the old version in the display message.
    //
    //
    
 
    
    
    

    session_start();
    require_once "QI_MVNO_API.php";
    require_once "common_functions.php";
    
    @include_once('FirePHPCore/fb.PHP'); // Enable for debugging using Firefox
    require_once('helptext.php');
    require_once('headmenu_dv.php');
    
    $title = "Dialog Vizz Contact Us UK";

?>


<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='Description' content='A prepaid SIM tailored specially for the Sri Lankan and Southeast Asian Community living in the UK. Lowest rate with highest call quality!.' />
<meta name='Keywords' content='cheap calls to Sri Lanka, cheap calls, low cost international calls, free SIM card, free calls to mobile, cheap calls to India, cheap calls to Pakistan, cheap calls to Bangladesh, cheap calls to Nepal, cheap calls to Afghanistan' />
<?php
    head_top($title);
?>
<link rel='stylesheet' href='css/pages.css' />
</head>
<body>
    <nav id='globaheader'>
		<?php
			body_top();
		?>
	</nav>
	<article id='main' class='thanks-contact'>
		<header id='pageheader'>
			<div id='ph-block'>
				<span>Contact Us</span>
				<div id='ph-img'></div>
			</div>
			<div id='home'><a href='home.php'>Home</a> <span class='separator'>>></span> <span class='thispage'>Contact Us</span></div>
			<div id='lo-bar'></div>
		</header><!-- page-head -->
		<section id='content'>
			<p>Thank you for contacting us. Our customer service team will contact you shortly.</p>
		</section>
	</article><!-- cont -->
	<?php     show_footer(); ?>
</body>
</html>