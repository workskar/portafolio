<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: contact-thankyou.php
    // Project: VizzNet
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
<title>Contact Us Thankyou</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='contact-us'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<section id='content'>
		<p>Thank you for contacting us. Our customer service team will contact you shortly.</p>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>