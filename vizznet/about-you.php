<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: about-you.php
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
<title>About You</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php //require_once 'validate_dv.php'; 
?>
<?php   getLinks();  ?>
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='about-you'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Now let's create your account</h1>
			<h2 class='second'>First we just need a few details about you</h2>
			<div id="wrapperDiv">
			<div class='box-checkA'>
				<form>
					<div class='box-section'>
						<p class='nextp'>We just need a few more details from you - it only takes a few minutes. You also get chance to confirm and change all your details at the end. Please complete all fields marked *</p>
						<h2>You</h2>
						<ul class='you-details'>
							<li class='dscription'><label>Title<span class='boldp'> *</span></label></li>
							<li>
								<select>
									<option value='0'>Select a Title</option>
									<option value='1'>Mr</option>
									<option value='2'>Mrs</option>
									<option value='3'>Miss</option>
									<option value='4'>Dr</option>
								</select>
							</li>
							<li class='dscription'><label>First Name(s) <span class='boldp'>*</span></label></li>
							<li><input class='txt-input' type='text' name='name' ></li>
							<li class='dscription'><label>Surname <span class='boldp'>*</span></label></li>
							<li><input class='txt-input' type='text' name='surname' ></li>
							<li class='dscription'><label>E-mail Address</label></li>
							<li><input class='txt-input' type='text' name='email' ></li>
							<li class='dscription'><label>Confirm e-mail Address</label></li>
							<li><input class='txt-input' type='text' name='confemail' ></li>
							<li class='dscription'><label>Twitter Username</label></li>
							<li><input class='txt-input' type='text' name='twitter' ></li>
							<li class='dscription'><label>Contact Phone Number <span class='boldp'>*</span></label></li>
							<li><input class='txt-input' type='text' name='phone' ></li>
							<li class='dscription'><label>Mobile Number</label></li>
							<li>
								<input class='txt-input' type='text' name='mobile' ><br>
								<p class='prfo-small'>Add a mobile phone number and we can keep you<br> updated by text about your order's progress.</p>
							</li>
						</ul>
					</div>
					<div class='box-section last-file'>
						<h2>We'll provide broadband and phone at the following address</h2>
						<dl>
							<dt>Building name/number:</dt>
								<dd>143</dd>
							<dt>Street:</dt>
								<dd>Broad Street</dd>
							<dt>City/Town:</dt>
								<dd>London</dd>
							<dt>County:</dt>
								<dd>Berkshire</dd>
							<dt>Postcode:</dt>
								<dd>SW3 4TD</dd>
						</dl>
						<p class='prfo-small'><a href=''> 	I need to change my address</a><br>If you change address we'll need to run another availability check. This is to make sure you can get the same products and services. </p>
						<input class='btn-small' type='submit' value='Continue'>
					</div>
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