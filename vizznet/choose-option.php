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
<title>Choose Option</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php //require_once 'validate_dv.php'; 
?>
<?php   getLinks();  ?>
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='choose-option'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Choose your package options</h1>
			<h2 class='second'>You can see a summary on the right-hand side</h2>
			<div id="wrapperDiv">
			<div class='box-checkA'>
				<div class='box-section'>
					<h3>Your line speed results</h3>
					<dl class='speed-results'>
					  <dt>Telephone number:</dt>
						<dd>02055555533</dd>
					  <dt>Postcode:</dt>
						<dd>SB 91LJ</dd>
					  <dt>Download speed:</dt>
						<dd>15Mb</dd>	
					</dl> 
					<p class='nextp'>The estimated speed shown above is based on information held by BT Wholesale.</p>
					<p class='nextp'>However, it could vary between 8.5Mb and 19Mb.</p>
					<a href='#'>About your speed estimate</a>
					<p class='nextp'>We've signed up to <span class='boldp'>Ofcom's broadband speeds voluntary code of practice</span>. See our <a href='#'>code of practice summary</a> for more information.</p>
					<p>We'll aim to get your service up and running in as little as seven working days.</p>
					<p>If you're happy with everything click Continue.</p>
				</div>
				<form>
					<div class='box-section'>
						<h3>Choose a broadband contract option</h3>
						<ul class='contract-opc'>
							<li><input class='radio' type='radio' name='contract'><label for=''><span class='bold'>12 months</span> - FREE broadband router</label></li>
							<li><input class='radio' type='radio' name='contract'><label for=''><span class='bold'>No contract</span> - Pay for your router (or use your own)</label></li>
						</ul>
					</div>
					<div class='box-section last-file'>
						<h3>Choose a broadband router</h3>
						<p class='nextp'>You'll need a modem or router to access the internet through your phone line. If you've got one but you're not sure it's compatible, call us to check on 0800 432 0200 or 0345 140 0200</p>
						<ul class='contract-opc'>
							<li>
								<input class='radio' type='radio'>
								<label for=''><span class='boldp'>No thanks</span> - I already have a <a>compatible router</a></label>
							</li>
							<li>
								<input class='radio'type='radio'>
								<label for=''><span class='boldp'>Easy setup wireless router - &pound;40.00</span> - exc. &pound;4.99 p&p <a>more info</a></label>
							</li>
							<li>
								<input class='radio' type='radio'>
								<label for=''><span class='boldp'>Easy setup wired router - &pound;20.00</span> - exc. &pound;4.99 p&p <a>more info</a></label>
							</li>
						</ul>
						<input class='btn-small' type='submit' value='Continue'>
					</div>
				</form>
				
				<h3>Stuff you need to know</h3>
				<p class='prfo-small'>1 - The wireless router will be supplied to you free of charge (exc. &pound;4.99 p&p) on a deferred payment basis. This means that if you cancel your contract within 12 months then you will be charged the difference in addition to any other final payments. For more information, please refer to our <a>cancellation policy</a>.</p>
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