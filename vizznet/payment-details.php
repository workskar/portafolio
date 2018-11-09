<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: Payment-details.php
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
<title>Payment-details</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php //require_once 'validate_dv.php'; 
?>
<?php   getLinks();  ?>
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='payment-details'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Now, some details for your account</h1>
			<h2 class='second'>Choose your account username and email address</h2>
			<div class='box-checkA'>
				<form>
					NEED CONTENT
					<input class='btn-small' type='submit' value='Continue'>
				</form>
				
			</div>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>