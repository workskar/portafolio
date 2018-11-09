<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: sitemap.php
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
<title>Vizz Net</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='sitemap'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/general-banner.jpg'>
		</div>
		<section id='content'>
			<div class='box-checkA'>
				<h1>Sitemap</h1>
				<div class='module'>
					<ul>
						<li><a class='link' href='index.php'>Home</a>
							<ul class='submenu'>
								<li><a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a></li>
								<li><a href='offers.php'>Offers</a></li>
								<li><a href='about-us.php'>About us</a></li>
								<li><a href='show-user-login.php'>Login</a></li>
							</ul>
						</li>
						<li><a class='link' href='products.php'>Products</a>
							<ul class='submenu'>
								<li><a href='products.php'>Residential</a></li>
								<li><a href='products.php?product=2'>Business</a></li>
							</ul>
						</li>
						<li><a class='link' href='show-user-login.php'>Self Care</a>
							<ul>
								<li><a href='show-user-login.php'>Account details</a></li>
								<li><a href='show-user-login.php'>eBilling</a></li>
								<li><a href='show-user-login.php'>Broadband usage</a></li>
								<li><a href='show-user-login.php'>Payments history</a></li>
								<li><a href='show-user-login.php'>Personaly details</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class='module last'>
					<ul>
						<li><a class='link' href='help.php'>Support</a>
							<ul>
								<li><a href='contact-us.php'>Contact us</a></li>
								<li><a href='help.php'>FAQs</a></li>
								<li><a href='switch-provider.php'>Switch provider</a></li>
								<li><a href='troubleshooting.php'>Troubleshooting</a></li>
							</ul>
						</li>
						<li><a class='link'>Other useful pages</a>
							<ul>
								<li><a href='privacy.php'>Privacy</a></li>
								<li><a href='terms.php'>Terms &amp; conditions</a></li>
								<li><a target='_blank' href="http://www.dialogvizz.co.uk/">Dialog Vizz</a></li>
								<li><a target='_blank' href="http://www.vizzafrica.co.uk/">Vizz Africa</a></li>
								<li><a target='_blank' href="http://www.vizzroshan.co.uk/">Vizz Roshan</a></li>
								<li><a target='_blank' href="http://www.vizzstudent.co.uk/">Vizz Student</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>