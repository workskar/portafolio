<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: service-check-by-phone.php
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
<title>Check Service Availability by postcode</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<script type='text/javascript' src='js/base.js'></script>
<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
<link rel='stylesheet' href='css/base.css' />
<link rel='stylesheet' href='css/navegation.css' />
<link rel='stylesheet' href='css/pages.css' />
</head>
<body>
	<article id='main' class='check-by-phone'>
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
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<nav id='sub-menuvizz'>
			<ul>
				<li class='first'><a class='home' href='index.php'>Home</a></li>
				<li><a class='check-av'>Check Availability</a></li>
				<li><a class='choose-op'>Choose options</a></li>
				<li><a class='aboutyou'>About You</a></li>
				<li class='last'><a class='payment-de'>Payment Details</a></li>
			</ul>
		</nav>
		<section id='content'>
			<h1>Broadband availability check</h1>
			<h2 class='second'>We'll estimate the speed you can get and confirm the price in your area</h2>
			<div class='box-checkA'>
				<div class='box-section last-file'>
					<form method="post" action="service-by-phone-number.html">
						<ul class='display'>
							<li class='label-jsp'><blockquote>Login</blockquote></li>
							<li><input type="text" name="username"  value="loafcycle"/></li>
							<li class='label-jsp'><blockquote>Password</blockquote></li>
							<li><input type="text" name="pwd"  value="roundbread"/></li>
							<li class='label-jsp'><blockquote>Agent's name</blockquote></li>
							<li><input type="text" name="agentname"  value="Muhammad"/></li>
							<li class='label-jsp'><blockquote>Service type</blockquote></li>
							<li><input type="text" name="servicetype"  value="FIXED"/></li>
							<li class='label-jsp'><blockquote>Pnone number</blockquote></li>
							<li><input type="text" name="phone" value="02075311861"/></li>
						</ul>
						<input type="submit" class='btn-small' id="submitPhone" value="Submit"/>
					</form>
				</div>
			</div>
		</section>
		<section id='right-col'>
			<ul id='box-contact'>
				<li class='call'><a><p><span class='red-text'>Call Centre</span><br><span class='boldp'>020 7177 8000</span></p></a></li>
				<!--li class='chat'><a href='#'><p><span class='red-text'>Live Chat</span><br><span class='boldp'>Online</span></p></a></li-->
				<li class='tips'><a href='#'><p><span class='red-text'>Troubleshooting</span></p></a></li>
				<li class='faqs'><a href='help.php'><p><span class='red-text'>FAQs</span></p></a></li>
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
			<div id='packages-show'>
				<a href='products.php'>
					<ul class='box-package'>
						<li class='head-read'>Value</li>
						<li class='content-pack'>
							<ul>
								<li>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<span class='nrmal'>Speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;11.95</span>
								</li>
								<li class='last-row'>
									<span class='nrmal'>Offer</span>
									<span class='red'>&pound;9.99</span>
								</li>
							</ul>
						</li>
					</ul>
				</a>
				<a href='products.php'>
					<ul class='box-package'>
						<li class='head-read'>Every Day</li>
						<li class='content-pack'>
							<ul>
								<li>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<span class='nrmal'>Speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;11.95</span>
								</li>
								<li class='last-row'>
									<span class='nrmal'>Offer</span>
									<span class='red'>&pound;9.99</span>
								</li>
							</ul>
						</li>
					</ul>
				</a>
				<a href='products.php'>
					<ul class='box-package orange'>
						<li class='head-read'>Business</li>
						<li class='content-pack'>
							<ul>
								<li>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<span class='nrmal'>Speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;11.95</span>
								</li>
								<li class='last-row'>
									<span class='nrmal'>Offer</span>
									<span class='red'>&pound;9.99</span>
								</li>
							</ul>
						</li>
					</ul>
				</a>
				<a href='products.php'>
					<ul class='box-package orange'>
						<li class='head-read'>Business Premium</li>
						<li class='content-pack'>
							<ul>
								<li>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<span class='nrmal'>Speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;11.95</span>
								</li>
								<li class='last-row'>
									<span class='nrmal'>Offer</span>
									<span class='red'>&pound;9.99</span>
								</li>
							</ul>
						</li>
					</ul>
				</a>
			</div>
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