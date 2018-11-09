<?php
	error_reporting(18);
	set_time_limit(60);
?>
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
