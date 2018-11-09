
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Error</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<script type='text/javascript' src='js/base.js'></script>
		<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
		<script type='text/javascript' src='js/checkemail.js'></script>
		<link rel='stylesheet' type='text/css' href='css/base.css?$date' />
		<link rel='stylesheet' type='text/css' href='css/navegation.css?$date' />
		<link rel='stylesheet' type='text/css' href='css/pages.css?$date' />
		<link rel=\"shortcut icon\" href=\"favicon.ico\"/> 
</head>
<body>
	<article id='main' class='about-us'>
		<nav id='globaheader'>
			<a id='logo' href='index.php'><span class='nothing'>VIZZnet</span></a>
			<div id='vizz-menu'>
				<ul id='vizz-pages'> 
						<li><a href='index.php'>Home</a></li>
						<li><a href='about-us.php'>About Us</a></li>
						<li><a href='products.php'>Products</a></li>
						<li><a href='offers.php'>Offers</a></li>
						<li><a href='contact-us.php'>Contact Us</a></li>
				</ul>
				<ul id='bottons'>
					<li><a class='checkA' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a></li>
					<li><a class='switchP' href='switch-provider.php'>Switch Provider</a></li>
					<li><a class='login' href='show-user-login.php'>Login</a></li>
					<li style='display:none;' id='logout'><a class='login' href='logout.php'>Logout</a></li>
				</ul>
			</div>	
		</nav>
		<div class='center-image'>
			<img alt='About banner' title='About banner' src='img/general-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Invalid Broadband Phone Number</h1>
			<p>The format of the phone number you provided is not recognizable.  Please try again.</p>
		</section>
		<section id='right-col'>
			<ul id='box-contact'>
		<li class='call'><a><p><span class='red-text'>Call Centre</span><br><span class='boldp'>020 7177 8000</span></p></a></li>
		<!--li class='chat'><a href='#'><p><span class='red-text'>Live Chat</span><br><span class='boldp'>Online</span></p></a></li-->
		<li class='tips'><a href='troubleshooting.php'><p><span class='red-text'>Troubleshooting</span></p></a></li>
		<li class='faqs'><a href='help.php'><p><span class='red-text'>FAQs</span></p></a></li>
		<li class='myacount'><a href='show-user-login.php'><p><span class='red-text'>My Account</span></p></a></li>
	</ul>

<nav id='products'>
	<h2>Vizz products</h2>
	<ul id='menu_services'>
		<li><a href="http://www.dialogvizz.co.uk/" target='_blank' >Dialog Vizz</a></li>
		<li><a href='http://www.vizzafrica.co.uk/' target='_blank'>Vizz Africa</a></li>
		<li><a href='http://www.vizzroshan.co.uk/' target='_blank'>Vizz Roshan</a></li>
		<li><a href="http://www.vizzstudent.co.uk/" target='_blank'>Vizz Student</a></li>
	</ul>
</nav>
		</section>
	</article>    <!-- page-main -->
	<footer id='vizzfooter'>
	<div class='net-foot'>
		<a id='logo-foot'><span class='nothing'>Logo Vizz Net</span></a>
		<ul id='foot-menu'>
			<!--li>
				<h4>Products</h4>
				<ul>
					<li><a href='products.php'>Residential</a></li>
					<li><a href='products.php?product=2'>Business</a></li>
					<li><a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a></li>
				</ul>
			</li>
			<li>
				<h4>Quick Links</h4>
				<ul>
					<li><a href='about-us.php'>About Us</a></li>
					<li><a href='show-user-login.php'>My Account</a></li>
					<li><a href='http://vizzmobile.co.uk' title='Vizz Mobile' target='_blanck'>Vizz Mobile</a></li>
				</ul>
			</li>
			<li>
				<h4>Support</h4>
				<ul>
					<li><a href='switch-provider.php'>Switch to VizzNet</a></li>
					<li><a href='help.php'>FAQs</a></li>
					<li><a href='troubleshooting.php'>Troubleshooting</a></li>
				</ul>
			</li-->
		</ul>
		<div class='newsletter'>
			<form class='regform' action='send-newsletter.php' method='post' onsubmit="return showValEmail(this);">
				<span class='head-n'>Sign Up For Newsletter Now</span><br>
				<span class='text'>Daily news delivered direct to your inbox</span>
				<input id="reg_email" name='reg_email' type='email' onfocus="if(this.value=='Your email address')this.value='';" onblur="if(this.value=='')this.value='Your email address';" value="Your email address" maxlength="100" placeholder='your email' required='required'>
				<input class='submit' type='submit' value='Sign Up'>
			</form>
		</div>
	</div>
	<div class='copy-rights'>
		<p>Copyright &copy; 2012 Vizz Net. All Rights Reserved.</p>
		<ul class='copy-menu'>
			<li><a href='privacy.php'>Privacy<a></li>
			<li><a href='terms.php'>Terms &amp; Conditions</a></li>
			<li><a href='sitemap.php'>Sitemap</a></li>
		</ul>
	</div>
</footer>
</body>
</html>