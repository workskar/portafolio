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
						<h2 class='title-head'>Home Broadband</h2>
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
								<a href='check-availability.php' class='link-sub'>Check Availability</a>
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
								<a class='link-sub' href='check-availability.php'>Check Availability</a>
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
								<a class='link-sub' href='check-availability.php'>Check Availability</a>
							</ul>
						</li>
					</ul>
				</div>
				<div id='broadband-phone' class='col'>
					<div id='brdb-red' class='box-brdb'>
						<h2 class='title-head'>Business Broadband</h2>
					</div>
					<ul id='one1' class='package'>
						<li>
							<a id='head-pack-red-one' class='close' onclick='efectBox11();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business</h2>
									<p>Unlimited superfast broadband for smaller businesses.</p>
								</div>
							</a>
							<ul id='one-subR' class='sub-package'>
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
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;22.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;19.95</span>
								</li>
								<a href='check-availability.php' class='link-sub'>Check Availability</a>
							</ul>
						</li>
					</ul>
					<ul id='two2' class='package'>
						<li>
							<a id='head-pack-red-two' class='close' onclick='efectBox22();'>
								<div class='arrow'></div>
								<div class='txt-package'>
									<h2>Business Premium</h2>
									<p>Unlimited superfast broadband for larger businesses.</p>
								</div>
							</a>
							<ul id='two-subR' class='sub-package'>
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
									<span class='nrmal'>Wireless router</span>
									<span class='boldp'>Included</span>
								</li>
								<li>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Price</span>
									<span class='boldp'>&pound;29.95</span>
								</li>
								<li class='last-file'>
									<div class='sub-arrow'></div>
									<span class='nrmal'>Offer price</span>
									<span class='red'>&pound;24.95</span>
								</li>
								<a class='link-sub' href='check-availability.php'>Check Availability</a>
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

</body>
</html>