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
<title>Vizz Net</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php //require_once 'validate_dv.php'; 
?>
<?php   getLinks();  ?>
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='add-ons'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Your available Add-Ons are shown below</h1>
			<h2 class='second'>Just click continue to carry on with your order</h2>
			<div id="wrapperDiv">
			<div class='box-checkA'>
				<form>
					we have add ons? for copy from Plusnet.
					<input class='btn-small' type='submit' value='Continue'>
				</form>
			</div>
			</div>
			<div id="boxes">
				<div id="rightColumnOuter">
					<div class="baskets">
						<h2>Your order</h2>
							<h3>Today's payment</h3>
							<dl id='basket-setup'>
								<dt class='description'>Value broadband<br> (first month)</dt>
									<dd>&pound;<span class='price'>6.59</span></dd>
								<dt>Broadband activation</dt>
									<dd>&pound;<span class='price'>25.00</span></dd>
								<dt>1-Port Wired Router</dt>
									<dd>&pound;<span class='price'>4.44</span></dd>
								<dt>1-Port Wired Router</dt>
									<dd>&pound;<span class='price'>4.44</span></dd>
								<dt class='totalRow'>Today's total</dt>
									<dd class='totalRow'>&pound;<span class='price'>33.22</span></dd>
							</dl> 
							<div class='clear'></div>
							<h3 class='payMont'>Monthly payment</h3>
							<dl id='basket-mont'>
								<dt>Value broadband</dt>
									<dd>&pound;<span class='price'>6.59</span></dd>
								<dt class='totalRow'>Monthly total</dt>
									<dd class='totalRow'>&pound;<span class='price'>6.59</span></dd>
							</dl>
							<div class='clear'></div>
					</div>
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