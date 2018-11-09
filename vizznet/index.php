<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: index.php
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
<title>VizzNet</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
<!--Slider CSS-->
<link rel="stylesheet" type="text/css" href="css/advanced-slider.css" />  
<link class="theme" rel="stylesheet" type="text/css" href="css/advanced-slider-light.css" />
<?php 
	$date=date('h:i:s');
?>
<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo $date;?>" />
<!--jQuery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!--Slider JS for text and img-->
<script type="text/javascript" src="js/jquery.advanced-slider.js"></script>
<!--Slider JS for package -->
<script type="text/javascript" src="js/package-control.js"></script>
<!--Code for Google Analytics-->
<!--End for code Google Analytics-->
</head>
<body>

		<?php   getHead();  ?>
		<article id='main' class='home'>
			<div class="advanced-slider-holder">
                <div class="advanced-slider">
                        <ul>
                            <li data-effect="barFade" data-delay="10000">
								<img src="img/banners/Banner_2.jpg?v=1" width="1000" height="432" alt="" />
								<div id='download'>
									<p>Plug-in your connection <br>to the world!</p>
								</div>
                            </li>
                            <li data-effect="barFade" data-delay="10000">
                                <img src="img/banners/Banner_3.jpg?v=1" width="1000" height="432" alt="" />
								<div id='download'>
									<p>Superfast broadband speeds!</p>
								</div>
                            </li>
							<li data-effect="barFade" data-delay="10000">
                                <img src="img/banners/Banner_4.jpg?v=1" width="1000" height="432" alt="" />
								<div id='download'>
									<p>Packages from just <br>&pound;7.99 per month!</p>
								</div>
                            </li>
							<li data-effect="barFade" data-delay="10000">
								<img src="img/banners/Banner_1.jpg?v=1" width="1000" height="432" alt="" />
								<div id='download'>
									<p>Totally unlimited downloads!</p>
								</div>	
                            </li>							
                        </ul>
						
                </div>
			</div>
			
			<section id='content'>
				<div id='broadband-only' class='col'>
					<div id='brdb-orange' class='box-brdb'>
						<h2 class='title-head'>Broadband Only</h2>
					</div>
					<div class='sub-heading orange'>
						<h2 class='first'>Home Packages</h2>
					</div>
					<ul id='one' class='package'>
						<li>
							<a id='head-pack-orange-one' class='close' onclick='efectBox1();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Value</h2>
									<p>Ideal for everyday browsing and emails.</p>
								</div>
							</a>
							<ul id='one-sub' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>10GB</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
									
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;9.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;7.99</span>
								</li>
								<a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html' class='link-sub'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='two' class='package'>
						<li>
							<a id='head-pack-orange-two' class='close' onclick='efectBox2();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Every Day</h2>
									<p>Great for downloading music and streaming your favourite TV programmes.</p>
								</div>
							</a>
							<ul id='two-sub' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
									
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;11.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;9.99</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='three' class='package'>
						<li>
							<a id='head-pack-orange-three' class='close' onclick='efectBox3();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Unlimited</h2>
									<p>Perfect for movies, games consoles and any household with multi devices.</p>
								</div>
							</a>
							<ul id='three-sub' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
									
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;14.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;12.50</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<div class='sub-heading orange'>
						<h2>Business Packages</h2>
					</div>
					<ul id='four' class='package'>
						<li>
							<a id='head-pack-orange-four' class='close' onclick='efectBox4();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business</h2>
									<p>Unlimited superfast broadband for smaller businesses.</p>
								</div>
							</a>
							<ul id='four-sub' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Upload speed</span>
									<span class='boldp'>Up to 1.3meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='red'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
									
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;27.54</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;23.94</span>
								</li>
								<a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html' class='link-sub'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='five' class='package'>
						<li>
							<a id='head-pack-orange-five' class='close' onclick='efectBox5();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business Premium</h2>
									<p>Unlimited superfast broadband for larger businesses.</p>
								</div>
							</a>
							<ul id='five-sub' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 24meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Upload speed</span>
									<span class='boldp'>Up to 2.5meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='red'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
									
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;35.94</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;29.94</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
				</div>
				<div id='broadband-phone' class='col'>
					<div id='brdb-red' class='box-brdb'>
						<h2 class='title-head'>Broadband &amp; Phone</h2>
					</div>
					<div class='sub-heading red'>
						<h2 class='first'>Home Bundles</h2>
					</div>
					<ul id='one1' class='package'>
						<li>
							<a id='head-pack-red-one' class='close' onclick='efectBox11();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Value</h2>
									<p>Ideal for everyday browsing and emails.</p>
								</div>
							</a>
							<ul id='one-subR' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>10GB</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<p class='dble-p'><span class='nrmal'>UK evening &amp; weekend calls</span></p>
									<span class='red'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Line rental</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;23.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;21.99</span>
								</li>
								<a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html' class='link-sub'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='two2' class='package'>
						<li>
							<a id='head-pack-red-two' class='close' onclick='efectBox22();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Every Day</h2>
									<p>Great for downloading music and streaming your favourite TV programmes.</p>
								</div>
							</a>
							<ul id='two-subR' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>40GB</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<p class='dble-p'><span class='nrmal'>UK evening &amp; weekend calls</span></p>
									<span class='red'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Line rental</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;25.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;23.99</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='three3' class='package'>
						<li>
							<a id='head-pack-red-three' class='close' onclick='efectBox33();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Unlimited</h2>
									<p>Perfect for movies, games consoles and any household with multi devices.</p>
								</div>
							</a>
							<ul id='three-subR' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 12meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<p class='dble-p'><span class='nrmal'>UK evening &amp; weekend calls</span></p>
									<span class='red'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Line rental</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;27.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;25.99</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<div class='sub-heading red'>
						<h2>Business Bundles</h2>
					</div>
					<ul id='four4' class='package'>
						<li>
							<a id='head-pack-red-four' class='close' onclick='efectBox44();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business</h2>
									<p>Unlimited superfast broadband for smaller businesses.</p>
								</div>
							</a>
							<ul id='four-subR' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 24meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Upload speed</span>
									<span class='boldp'>Up to 1.3meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='red'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Line rental</span>
									<span class='boldp'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;42.04</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;38.44</span>
								</li>
								<a href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html' class='link-sub'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='five5' class='package'>
						<li>
							<a id='head-pack-red-five' class='close' onclick='efectBox55();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business Premium</h2>
									<p>Unlimited superfast broadband for larger businesses.</p>
								</div>
							</a>
							<ul id='five-subR' class='sub-package'>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Limit</span>
									<span class='boldp'>Unlimited</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Download speed</span>
									<span class='red'>Up to 24meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Upload speed</span>
									<span class='boldp'>Up to 2.5meg</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Line rental</span>
									<span class='red'>Included</span>
								</li>
								<li class='d-row'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Special offer</span>
									<p class='dble-p'><span class='red'>Reduced to 12 months</span><br><span class='second'>Standard 18 months contract</span></p>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;50.44</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;44.44</span>
								</li>
								<a class='link-sub' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a>
							</ul>
						</li>
					</ul>
				</div>
				<aside class='side'>
					<h1>Plug-in your connection to the world with VizzNet!</h1>
					<p>VizzNet is the latest addition to Vizz's portfolio of products, providing low-cost, high quality broadband services to our customers. Our broadband products include UK Residential and Business Broadband. We have a range of packages to suit your needs, taking into account your usage and budget with the added flexibility of contracts from just 1 month! VizzNet also offers packages with totally unlimited downloads so you never have to worry about additional charges, all whilst maintaining our commitment to providing superfast broadband speeds!</p>
				</aside>
			</section>
			<section id='right-col'>
				<?php   include("in-promotions.php");  ?>
			</section>
		</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
<!--Initialize-->
<script type="text/javascript">
			$(document).ready(function() {
				//Slider init JS
				$(".advanced-slider").advancedSlider({
					pauseRollOver:true
				});
				
				//Theme change button actions - Remove these codes
				$(".thumbbutton").click(function() {
					var oldTheme = $(".selector .selected").attr("rel");
					$(".selector .selected").removeClass("selected");
					if (!$(this).hasClass("selected")) {
						$(this).addClass("selected");
						var currentTheme = $(this).attr("rel");
						var url = $("link.theme").attr("href");
						url = url.replace(oldTheme, currentTheme);
						$("link.theme").attr("href", url);
						if (currentTheme=="dark") {
							$(".advanced-slider-arrows .next").css("right", "55px");
						} else {
							$(".advanced-slider-arrows .next").css("right", "24px");	
						}
					}
				});
			});		
</script>
</body>
</html>