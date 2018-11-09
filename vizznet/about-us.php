<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: about-us.php
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
<title>About Us</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='about-us'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='About banner' title='About banner' src='img/about-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Plug-in your connection to the world with VizzNet</h1>
			<p>VizzNet is the latest addition to Vizz's portfolio of products, providing low-cost, high quality broadband services to our customers. Our broadband products include UK Residential and Business Broadband. We have a range of packages to suit your needs, taking into account your usage and budget with the added flexibility of contracts from just 1 month! VizzNet also offers packages with totally unlimited downloads so you never have to worry about additional charges, all whilst maintaining our commitment to providing superfast broadband speeds!</p>
			<p>VizzNet, along with our range of Pay-As-You-Go Vizz Mobile SIM products providing low-cost, high quality UK and International calls, texts, data and value added services such as International Airtime Transfer, are owned and operated by QiComm.</p>
			<p>QiComm is a leading telecommunication company who have been trusted for almost two decades as the telecommunications provider of choice for some of the world's largest Telco's, Carriers and Government Agencies.</p>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>