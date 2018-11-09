<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: speed-estimation.php
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
<title>Speed estimation</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='speed-estimation'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<section id='content'>
			<h1>What do speed estimates mean?</h1>
			<p>Based on the telephone number and/or postcode you enter in our 'check availability' section, we are able to estimate the download speed you should receive with VizzNet. We also give you a range which shows the real speeds that 80% or more of our current VizzNet customers with similar lines to you receive.</p>
			<h2>What factors affect speed? </h2>
			<p>Factors that affect your speed, but are unfortunately outside of your control include:</p>
			<ol>
				<li>
					<h3>Distance from your telephone exchange </h3>
					This has the most significant impact on your speed because you receive your broadband service via the telephone cables from your nearest telephone exchange. Therefore the closer you live to the exchange, the shorter the cables, thereby providing faster broadband.
				</li>
				<li>
					<h3>Quality of your telephone line</h3>
					The less damage there is to the cables of your telephone line, the stronger the broadband signal, thereby providing faster broadband.
				</li>
				<li>
					<h3>Interference on your telephone line</h3>
					When telephone lines run under large buildings or motorways or along telegraph poles, 'noise' is effectively created, causing interference on telephone lines. The less 'noise' there is, the lower the interference created on your telephone line and the easier it is to push data through, thereby providing faster broadband.
				</li>
			</ol>
			<p>Factors that affect your speed, which you are able to control include:</p>
			<ol>
				<li>
					<h3>How you plug-in your router </h3>
					Make sure you plug your VizzNet broadband box straight into your telephone line's master socket. Upgrading the cable in your house should give you the fastest speeds since old wiring can affect your broadband speed.
				</li>
				<li>
					<h3>Websites you visit</h3>
					Certain websites may send out information slower than others. You may find, for example, websites from outside the UK take longer to load compared to those within the UK.
				</li>
				<li>
					<h3>Sharing your broadband</h3>
					Whenever more than one computer or device is using one broadband connection, speeds will ultimately be slower since the connection is being shared.
				</li>
				<li>
					<h3>Your computer</h3>
					Computers, modems and routers can also affect broadband speeds. It's best to use your VizzNet broadband box as it is exactly compatible for the VizzNet broadband network. Newer computers often also get better broadband speeds.
				</li>
				<li>
					<h3>Software</h3>
					Certain software applications can cause slower broadband speeds. Simply test your broadband speed when an application is running and then switched off - if there is any difference you'll know it's the application slowing down your speed. The most common applications that cause issues are file sharing software.
				</li>
				<li>
					<h3>Spyware & Viruses</h3>
					Regularly update and scan your computer for spyware and viruses - if they infect your computer, your broadband speed will be slower than it should be.
				</li>
			</ol>
			<h2>What if my speed ends up being slower than the estimate?</h2>
			<p>Please contact us if your speed ends up being below the range we initially provided. Often we can correct issues by checking your set-up and providing additional advice. If you still do not receive the minimum guaranteed speed after following our advice, you are free to leave VizzNet within 3 months of your contract start date without incurring any penalties.</p>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>