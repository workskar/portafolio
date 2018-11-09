<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: products.php
    // Project: VizzNet
    //
    // Notes:
    //
    // Log:
	include("header.php");
	$product= "";
	if(isset($_GET['product']))
	{
		$productArray = array("", "getContent('contentHB','contentBB','hb','bb')","getContent('contentBB','contentHB','bb','hb')");
		$product = $productArray [$_GET['product']];
	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Products</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body onload="<?php echo $product; ?>;">
	<article id='main' class='product'>
		<?php   getHead();  ?>
		<div id='hb' class='center-image'>
			<img alt='Home banner' title='Home banner' src='img/home-banner.jpg'>
		</div>
		<div id='bb' class='center-image' style='display:none;'>
			<img alt='Home banner' title='Home banner' src='img/business-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Our great broadband packages</h1>
			<a class='getcont' onclick="getContent('contentHB','contentBB','hb','bb');">
				<div id='brdb-orange' class='box-brdb'>
					<h2 class='title-head'>Broadband Only</h2>
				</div>
			</a>
			<a class='getcont' onclick="getContent('contentBB','contentHB','bb','hb');">
				<div id='brdb-red' class='box-brdb'>
					<h2 class='title-head'>Broadband &amp; Phone</h2>
				</div>
			</a>
			<div id='contentHB'>
				<div class='sub-heading orangeT'>
					<h2 class='first'>Home Packages</h2>
				</div>
				<div class='head orange'>
					<p>Value</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>10G</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;9.95 / month</span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;7.99</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label'>Contract Duration</li><li class='detail'><span class='boldp'>12 months</span></li>
					<li class='dble'>
						<p><a href='broadbandonly.php'>Buy Now</a></p>
					</li>
				</ul>
				<div class='head orange'>
					<p>EveryDay</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>40G</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;11.95 / month</span></li>
					<li class='label dvd'>Offer</li><li class='detail'><span class='red dvd'>&pound;9.99</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label'>Contract Duration</li><li class='detail'><span class='boldp'>12 months</span></li>
					<li class='dble'>
						<p><a href='broadbandonly.php'>Buy Now</a></p>
					</li>
				</ul>
				<div class='head orange'>
					<p>Unlimited</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;14.95 / month</span></li>
					<li class='label last'>Offer</li><li class='detail last'><span class='red'>&pound;12.50</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label'>Contract Duration</li><li class='detail'><span class='boldp'>12 months</span></li>
					<li class='dble'>
						<p><a href='broadbandonly.php'>Buy Now</a></p>
					</li>
				</ul>
				<div class='sub-heading orangeT'>
						<h2>Business Packages</h2>
				</div>
				<div class='head orange'>
					<p>Business</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 24meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;27.50 / month </span></li>
					<li class='label last'>Offer</li><li class='detail last'><span class='red'>&pound;23.95 </span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label'>Contract Duration</li><li class='detail'><span class='boldp'>12 months</span></li>
					<li class='dble'>
						<p><a href='broadbandonly.php'>Buy Now</a></p>
					</li>
				</ul>
				<div class='head orange'>
					<p>Business Premium</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 24meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;35.95 / month</span></li>
					<li class='label dvd'>Offer</li><li class='detail'><span class='red dvd'>&pound;29.95</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label'>Contract Duration</li><li class='detail'><span class='boldp'>12 months</span></li>
					<li class='dble'>
						<p><a href='broadbandonly.php'>Buy Now</a></p>
					</li>
				</ul>
			</div>
			<div id='contentBB' style='display:none;'>
				<div class='sub-heading red'>
					<h2 class='first'>Home Bundles</h2>
				</div>
				<div class='head redbgd'>
					<p>Value</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>10G</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;23.95 / month</span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;21.99</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label last'>Contract Duration</li><li class='detail last'><span class='boldp'>12 months</span></li>
					<li class='grey-box'>
						<ul>
						<li class='label'><p><span class='boldp'>Line Rental:</span><br>line rental (Monthly)</p></li>
						<li class='detail'><span class='red'>Included</span></li>
						<li class='label last'>Line connection (one off)</li><li class='detail last'><span class='boldp'>&pound;67.50</span></li>
						</ul>
					</li>
					<li class='label big'><p><span class='boldp'>Call Rates:</span><br>National Evenings and Weekends (01,02,03,0845,0870)</p></li>
					<li class='detail big'><span class='red'>Included</span></li>
					<li class='dble'>
						<p>Calls over 60 minutes will be charged at standard cost. <br>There will be a 10p connection charge on all minutes not included in bundle.<a href='bundles-details.php'>Buy Now</a>
					</p>
					</li>
				</ul>
				<div class='head redbgd'>
					<p>EveryDay</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>40G</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;25.95 / month</span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;23.99</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label last'>Contract Duration</li><li class='detail last'><span class='boldp'>12 months</span></li>
					<li class='grey-box'>
						<ul>
						<li class='label'><p><span class='boldp'>Line Rental:</span><br>line rental (Monthly)</p></li>
						<li class='detail'><span class='red'>Included</span></li>
						<li class='label last'>Line connection (one off)</li><li class='detail last'><span class='boldp'>&pound;67.50</span></li>
						</ul>
					</li>
					<li class='label big'><p><span class='boldp'>Call Rates:</span><br>National Evenings and Weekends (01,02,03,0845,0870)</p></li>
					<li class='detail big'><span class='red'>Included</span></li>
					<li class='dble'>
						<p>Calls over 60 minutes will be charged at standard cost. <br>There will be a 10p connection charge on all minutes not included in bundle. <a href='bundles-details.php'>Buy Now</a></p>
					
					</li>
				</ul>
				<div class='head redbgd'>
					<p>Unlimited</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 12meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;27.95 / month</span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;25.99</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label last'>Contract Duration</li><li class='detail last'><span class='boldp'>12 months</span></li>
					<li class='grey-box'>
						<ul>
						<li class='label'><p><span class='boldp'>line Rental:</span><br>line rental (Monthly)</p></li>
						<li class='detail'><span class='red'>Included</span></li>
						<li class='label last'>Line connection (one off)</li><li class='detail last'><span class='boldp'>&pound;67.50</span></li>
						</ul>
					</li>
					<li class='label big'><p><span class='boldp'>Call Rates:</span><br>National Evenings and Weekends (01,02,03,0845,0870)</p></li>
					<li class='detail big'><span class='red'>Included</span></li>
					<li class='dble'>
						<p>Calls over 60 minutes will be charged at standard cost. <br>There will be a 10p connection charge on all minutes not included in bundle. <a href='bundles-details.php'>Buy Now</a></p>
					
					</li>
				</ul>
				<div class='sub-heading red'>
					<h2>Business Bundles</h2>
				</div>
				<div class='head redbgd'>
					<p>Business</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 24meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;42.04 / month </span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;38.44</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label last'>Contract Duration</li><li class='detail last'><span class='boldp'>12 months</span></li>
					<li class='grey-box'>
						<ul>
						<li class='label'><p><span class='boldp'>line Rental:</span><br>line rental (Monthly)</p></li>
						<li class='detail'><span class='red'>Included</span></li>
						<li class='label last'>Line connection (one off)</li><li class='detail last'><span class='boldp'>&pound;56.00</span></li>
						</ul>
					</li>
					<li class='label big'><p><span class='boldp'>Call Rates:</span><br>National Evenings and Weekends (01,02,03,0845,0870)</p></li>
					<li class='detail big'><span class='red'>Included</span></li>
					<li class='dble'>
						<p>Calls over 60 minutes will be charged at standard cost. <br>There will be a 10p connection charge on all minutes not included in bundle. <a href='bundles-details.php'>Buy Now</a></p>
					
					</li>
				</ul>
				<div class='head redbgd'>
					<p>Business Premium</p>
				</div>
				<ul class='details-Pack'>
					<li class='label'>Speed</li><li class='detail'><span class='boldp'>Up to 24meg</span></li>
					<li class='label'>Limit</li><li class='detail'><span class='red'>Unlimited</span></li>
					<li class='label'>Cost</li><li class='detail'><span class='boldp'>&pound;50.44 / month</span></li>
					<li class='label'>Offer</li><li class='detail'><span class='red'>&pound;44.44</span></li>
					<li class='label'>Wireless Router</li><li class='detail'><span class='red'>Included</span></li>
					<li class='label last'>Contract Duration</li><li class='detail last'><span class='boldp'>12 months</span></li>
					<li class='grey-box'>
						<ul>
						<li class='label'><p><span class='boldp'>line Rental:</span><br>line rental (Monthly)</p></li>
						<li class='detail'><span class='red'>Included</span></li>
						<li class='label last'>Line connection (one off)</li><li class='detail last'><span class='boldp'>&pound;56.00</span></li>
						</ul>
					</li>
					<li class='label big'><p><span class='boldp'>Call Rates:</span><br>National Evenings and Weekends (01,02,03,0845,0870)</p></li>
					<li class='detail big'><span class='red'>Included</span></li>
					<li class='dble'>
						<p>Calls over 60 minutes will be charged at standard cost. <br>There will be a 10p connection charge on all minutes not included in bundle. <a href='bundles-details.php'>Buy Now</a></p>
					
					</li>
				</ul>
			</div>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
<script type='text/javascript'>
function getContent(open,close,bneropen,bnerclose){
	//alert('hiii'+open);
	document.getElementById(open).style.display='';
	document.getElementById(close).style.display='none';
	document.getElementById(bneropen).style.display='';
	document.getElementById(bnerclose).style.display='none';
}
</script>
</body>
</html>