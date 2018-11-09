<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: thankyou-newsletter.php
    // Project: Vizz Net
    //
    // Notes:
    //
    // Log:
	include("header.php");
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Newsletter</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='newsletter'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<section id='content'>
		<?php if (($_GET['error'])== 1) { ?>
			<p>Thank you for subscribing to QiComm's Newsletter.<br> Your email adress has been added to database for future newsletters.</p>
		<?php }if (($_GET['error'])==-1) { ?>
			<p class='error'>ERROR! CHECK IF YOU HAVE INTERNET CONECTION.</p>
		<?php } ?>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>