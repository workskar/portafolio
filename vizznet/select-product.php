<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: select-product.php
    // Project: VizzNet
    //
    // Notes:
    //
    // Log:
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Select Service Now!</title>
<script type='text/javascript' src='js/base.js'></script>
<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
<link rel='stylesheet' href='css/base.css' />
<link rel='stylesheet' href='css/navegation.css' />
<link rel='stylesheet' href='css/pages.css' />
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='select-product'>
		<nav id='globaheader'>
			<a id='logo' href='index.php'><span class='nothing'>VIZZnet</span></a>
			<div id='vizz-menu'>
				<ul id='vizz-pages'> 
						<li><a href='index.php'>Home</a></li>
						<li><a href='about-us.php'>About Us</a></li>
						<li><a href='products.php'>Products</a></li>
						<li><a href='support.php'>Support</a></li>
						<li><a href='contact-us.php'>Contact Us</a></li>
				</ul>
				<ul id='bottons'>
					<li><a class='checkA' href='check-availability.php'>Check Availability</a></li>
					<li><a class='switchP' href='switch-provider.php'>Switch Provider</a></li>
					<li><a class='login' href='login.php'>Login</a></li>
				</ul>
			</div>	
		</nav>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<nav id='sub-menuvizz'>
			<ul>
				<li class='first'><a class='home' href='index.php'>Home</a></li>
				<li><a class='check-av' href='service-check-by-phone.php'>Check Availability</a></li>
				<li><a class='choose-op' href='select-broadband-package.php'>Choose options</a></li>
				<li><a class='addons' href='add-ons.php'>Add-Ons</a></li>
				<li><a class='aboutyou' href='personal-info.php'>About You</a></li>
				<li><a class='your-de' href='your-details.php'>Your Details</a></li><li>
				<li class='last'><a class='payment-de' href='payment-details.php'>Payment Details</a></li>
			</ul>
		</nav>
		<section id='content'>
			<h1>Select Service Now!</h1>
			<h2>Select Service Now!</h2>
			<div class='box-checkA'>
				<div class='box-section last-file'>
					<form method="post" action="service-availability-check.html">
						<ul class='contract-opc'>
							<li>
								<input type="radio" class='radio' name="productid" value="broadband" />
								<span class='boldp'>Broadband</span>
							</li>
							<li>
								<input type="radio" class='radio' name="productid" value="1" />
								<span class='boldp'>Whatever-1</span>
							</li>
							<li>
								<input type="radio" name="productid" value="2" />
								<span class='boldp'>Whatever-2</span>
							</li>
						</ul>
						<input class='btn-small' type='submit' value='Submit'>
					</form>
				</div>
			</div>
		</section>
		<section id='right-col'>
			<ul id='box-contact'>
				<li class='call'><a><p><span class='red-text'>Call Center</span><br><span class='boldp'>0800 345 6789</span></p></a></li>
				<li class='chat'><a href='#'><p><span class='red-text'>Live Chat</span><br><span class='boldp'>Online</span></p></a></li>
				<li class='tips'><a href='#'><p><span class='red-text'>Tips &amp; Tricks</span></p></a></li>
				<li class='faqs'><a href='help.php'><p><span class='red-text'>FAQs</span></p></a></li>
			</ul>
			<nav id='products'>
				<h2>Products &amp; Promotions</h2>
				<ul id='menu_services'>
					<li><a href="#">Compare broadband</a></li>
					<li><a href='#'>Broadband extras</a></li>
					<li><a href='#'>Speeds explained</a></li>
					<li><a href="#">Wireless broadband</a></li>
				</ul>
			</nav>
		</section>
	</article><!-- page-main -->
	<footer id='vizzfooter'>
		<div class='net-foot'>
			<a id='logo-foot'><span class='nothing'>Logo Vizz Net</span></a>
			<ul id='foot-menu'>
				<li>
					<h4>Why Us</h4>
					<ul>
						<li><a href='#'>Our Customers</a></li>
						<li><a href='#'>Technology</a></li>
						<li><a href='#'>Our Approach</a></li>
					</ul>
				</li>
				<li>
					<h4>Qick Links</h4>
					<ul>
						<li><a href='#'>Our Customers</a></li>
						<li><a href='#'>Technology</a></li>
						<li><a href='#'>Our Approach</a></li>
					</ul>
				</li>
				<li>
					<h4>Support</h4>
					<ul>
						<li><a href='#'>Our Customers</a></li>
						<li><a href='#'>Technology</a></li>
						<li><a href='#'>Our Approach</a></li>
					</ul>
				</li>
			</ul>
			<div class='newsletter'>
				<form>
					<span class='head-n'>Sign Up For Newsletter Now</span><br>
					<span class='text'>Daily news delivered direct to your inbox</span>
					<input type='text' onfocus="if(this.value=='Your email address')this.value='';" onblur="if(this.value=='')this.value='Your email address';" value="Your email address" maxlength="100">
					<input class='submit' type='submit' value='Sign Up'>
				</form>
			</div>
		</div>
		<div class='copy-rights'>
			<p>Copyright &copy; 2012 Vizz Net. All Rights Reserved.</p>
			<ul class='copy-menu'>
				<li><a href='#'>Privacy<a></li>
				<li><a href='#'>Terms &amp; Conditions</a></li>
				<li><a href='#'>Sitemap</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>