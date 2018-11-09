<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: check-availability.php
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
<title>Check Availability</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='myaccount'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Welcome</h1>
			<h2 class='second'>We'll estimate the speed you can get and confirm the price in your area</h2>
			<div class='box-checkA'>
				<div class='box-section'>
					<h3>Account Details</h3>
					<dl class='speed-results'>
					  <dt>Account Number:</dt>
						<dd>0000000</dd>
					  <dt>Contact Mobile:</dt>
						<dd>09099999</dd>
					  <dt>Contact Email:</dt>
						<dd>testing@gmail.com</dd>
					  <dt>Address:</dt>
						<dd>address</dd>	
					</dl> 
					<input type='button' class='btn-small' value='Edit'>
				</div>
				<div class='box-section'>
					<h3>Order Details</h3>
					<dl class='speed-results'>
					  <dt>Order Date:</dt>
						<dd>0000000</dd>
					  <dt>Contract Length:</dt>
						<dd>09099999</dd>
					  <dt>Product:</dt>
						<dd>testing@gmail.com</dd>
					  <dt>Status:</dt>
						<dd>address</dd>
					  <dt>Activation Date:</dt>
						<dd>address</dd>	
					</dl> 
				</div>
				<div class='box-section last-file'>
					<h3>Payment Details</h3>
					<dl class='speed-results'>
					  <dt>Order Date:</dt>
						<dd>0000000</dd>
					  <dt>Contract Length:</dt>
						<dd>09099999</dd>
					  <dt>Product:</dt>
						<dd>testing@gmail.com</dd>
					  <dt>Status:</dt>
						<dd>address</dd>
					  <dt>Activation Date:</dt>
						<dd>address</dd>
					</dl> 
					<input type='button' class='btn-small' value='Edit'>
				</div>
				<p>Please Note:The information above maybe subject to change, if they do change we will contact you to confirm.</p>
			</div>
			<aside class='estimate'>
				<ul>
					<li class='celred'><span>Connection Status</span></li>
					<li class='celgray'><span>In progress</span></li>
					<li class='celred'><span class='nobold'>Mon 17 Oct</span></li>
					</li>
				</ul>
			</aside>
		</section>
		<section id='right-col'>
			<?php   include("in-self-care.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>