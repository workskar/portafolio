<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: select-broadband-package.php
    // Project: Vizz Net
    //
    // Notes:
    //
    // Log:
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Select Service</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/service-select.js"></script>
<script type='text/javascript' src='js/base.js'></script>
<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
<link rel='stylesheet' href='css/base.css' />
<link rel='stylesheet' href='css/navegation.css' />
<link rel='stylesheet' href='css/pages.css' />
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 

<jsp:useBean id="varMap" class="java.util.HashMap"/>
<% String type = null; %>

<c:if test="${serviceAvailabilityPhoneVO!=null}">

    <c:set target="${varMap}" property="phoneNumber" value="${serviceAvailabilityPhoneVO.phoneNumber}"/>
    <c:set target="${varMap}" property="postcode" value="${serviceAvailabilityPhoneVO.postcode}"/>
    <c:set target="${varMap}" property="lineLength" value="${serviceAvailabilityPhoneVO.lineLength}"/>
    <c:set target="${varMap}" property="exchangeCode" value="${serviceAvailabilityPhoneVO.exchangeCode}"/>
    <c:set target="${varMap}" property="exchangeName" value="${serviceAvailabilityPhoneVO.exchangeName}"/>
    <c:set target="${varMap}" property="exchangeState" value="${serviceAvailabilityPhoneVO.exchangeState}"/>
    <c:set target="${varMap}" property="statusCode" value="${serviceAvailabilityPhoneVO.statusCode}"/>
</c:if>
</head>

<body>
	<article id='main' class='select-broadband'>
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
			<h1>Choose your package options</h1>
			<h2 class='second'>You can see a summary on the right-hand side</h2>
			<div id="wrapperDiv">
				<div class='box-checkA'>
					<div class='box-section'>
						<h3>Your line speed results</h3>
						<dl class='speed-results'>
						  <c:if test="${serviceAvailabilityPhoneVO!=null}">
						  <dt>Phone number:</dt>
							<dd>${varMap["phoneNumber"]}</dd>
						  <dt>Postcode:</dt>
							<dd>${varMap["postcode"]}</dd>
						  </c:if>
						  <dt>Availability:</dt>
							<dd>${varMap["available"]}</dd>
						  <dt>Expected Speed:</dt>
							<dd>${varMap["lineSpeed"]}</dd>
						  <dt>Line Length:</dt>
							<dd>${varMap["lineLength"]}</dd>
						  <dt>Exchange Code:</dt>
							<dd>${varMap["exchangeCode"]}</dd>
						  <dt>Exchange Name:</dt>
							<dd>${varMap["exchangeName"]}</dd>
						   <dt>Exchange State:</dt>
							<dd>${varMap["exchangeState"]}</dd>
						   <dt>Status Code:</dt>
							<dd>${varMap["statusCode"]}</dd>
						</dl> 
					</div>
					<div class='box-section last-file'>
						<form method="post" action="create-shopping-cart.html">
							<input type="hidden" name="postcode" value="${varMap["postcode"]}" />
							<h3>Choose a broadband router</h3>
							<ul class='contract-opc'>
								<li>
									<input type="radio" class='radio' name="package" value="starter" id="starter"  onclick="update('starter')"/>
									<span class='boldp'>Monthly</span>
								</li>
								<li>
									<input type="radio" class='radio' name="package" value="premium" id="premium" onclick="update('premium')"/>
									<span class='boldp'>18 months</span>
								</li>
								<li>
									<input type="radio" class='radio' name="router" value="required" id="router" onclick="update('router')"/>
									<span class='boldp'>Router</span>
								</li>
								<li>
									<input type="radio" class='radio' name="router" value="not-required" id="no-router" onclick="update('no-router')"/>
									<span class='boldp'>No Router</span>
								</li>
							</ul>
							<input type="submit" class='btn-small' name="submit" id="submit" value="Submit" />
						</form>
					</div>
				</div>
			</div>
			<div id="boxes">
				<div id="rightColumnOuter">
					<div id="summary" class="baskets">
						<h2>Fixed One-Off Charge</h2>
							<dl id='basket-setup'>
								<dt id="setup" class='description'>Setup Fee:</dt>
								<dt id="router-price">Router:</dt>
								<dt id="monthdeposit">Broadband Subscription 1 Month Advance:</dt>
							</dl> 
							<div class='clear'></div>
							<h3 class='payMont'>Monthly Charge</h3>
							<dl id='basket-mont'>
								<dt id="bb-subscript">Broadband Subscription:</dt>
							</dl>
							<div class='clear'></div>
					</div>
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
						Up to <span class='red'>12Mb</span> speed
					</li>
					<li>
						<span class='red'>Free</span> wireless router
					</li>
					<li>
						Contract <span class='red'>reduced</span> to 12mths
					</li>
					<li>
						40GB download limit
					</li>
					<li class='last-row'>
						Only for <span class='red'>&pound;7.99</span>
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
						Up to <span class='red'>12Mb</span> speed
					</li>
					<li>
						<span class='red'>Free</span> wireless router
					</li>
					<li>
						40GB download limit
					</li>
					<li class='last-row'>
						Only for <span class='red'>&pound;9.99</span>
					</li>
				</ul>
			</li>
		</ul>
	</a>
	<a href='products.php'>
		<ul class='box-package'>
			<li class='head-read'>Unlimited</li>
			<li class='content-pack'>
				<ul>
					<li>
						Up to <span class='red'>12Mb</span> speed
					</li>
					<li>
						<span class='red'>Free</span> wireless router
					</li>
					<li>
						Unlimited download limit
					</li>
					<li class='last-row'>
						Only for <span class='red'>&pound;12.50</span>
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
						Up to <span class='red'>24Mb</span> speed
					</li>
					<li>
						<span class='red'>Free</span> wireless router
					</li>
					<li>
						Unlimited download limit
					</li>
					<li class='last-row'>
						Only for <span class='red'>&pound;19.95</span>
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
						Up to <span class='red'>24Mb</span> speed
					</li>
					<li>
						<span class='red'>Free</span> wireless router
					</li>
					<li>
						Unlimited download limit
					</li>
					<li class='last-row'>
						Only for <span class='red'>&pound;24.95</span>
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
