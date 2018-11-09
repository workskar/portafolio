<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: personal-info.php
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
<title>Customer Details</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<script type='text/javascript' src='js/base.js'></script>
<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
<link rel='stylesheet' type='text/css' href='css/base.css' />
<link rel='stylesheet' type='text/css' href='css/navegation.css' />
<link rel='stylesheet' type='text/css' href='css/pages.css' />
<script type="text/javascript" src="js/basket.js"></script>
<script type='text/javascript' src='js/pcaw-modified.js'></script>

</head>
<body onLoad="PostcodeAnywhere_Interactive_Find_v1_10Begin('CM29-PJ43-FE55-JF98', 'SE207AA', '', '', 'QICOM11112')">
<article id='main' class='personal-info'>
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
			<h1>Now let's create your account</h1>
			<h2 class='second'>First we just need a few details about you</h2>
			<div id="wrapperDiv">
				<div class='box-checkA'>
					<form method="POST" commandName="userInfoFormBean" action="register-personal-info.html">
						<div class='box-section last-file'>
							<ul class='you-details'>
								<li class='row-li'>
									<label class='label-jsp' path="firstName">First Name</label>
									<input class="txt-jspinput" path="firstName" id="firstName" />
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="surname">Last Name</label>
									<input class="txt-jspinput" path="surname" id="surname"/>
									<form:errors path="surname" cssClass="error"/>
								</li>
								<li class='row-li'>
									<span class='label-jsp'>Address</span>
									<SELECT id="return" name="return1" class='select-jsp' style="display:none">
										<option>Select your address</option>
									</SELECT>
									<input type="button" id="returnbtn" class="btn"  value="Select" style="display:none" onclick="PostcodeAnywhere_Interactive_RetrieveById_v1_10Begin('CM29-PJ43-FE55-JF98', getElementById('return').value, '', 'QICOM11112')" />
								</li>
								<li class='row-li'>
									<input type="hidden" name="postcode" value="${postcode}"/>
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="addressLine1">Address Line 1</label>
									<input class="txt-jspinput" path="addressLine1" id="txtAddr1" />
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="addressLine2">Address Line 2</label>
									<input class="txt-jspinput" path="addressLine2" id="txtAddr2" />
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="postcode">Postcode</label>
									<input class="txt-jspinput" path="postcode" id="postcode" value="${postcode}"/>
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="townCity">Town/City</label>
									<input class="txt-jspinput" path="townCity" id="txtAddr3" />
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="county">County</label>
									<input class="txt-jspinput" path="county" id="txtAddr4" value=''/>
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="">Mobile</label>
									<input class="txt-jspinput" path="mobile" id="mobile" />
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="">Email</label>
									<input class="txt-jspinput" path="email" id="email"/>
									<form:errors path="email" cssClass="error"/>
								 </li>
								<li class='row-li'>
									<span class='label-jsp'>Confirm Email</span>
									<input type="text" class="txt-jspinput" name="confemail" id="confemail"/>
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="">Password</label>
									<input type='password' class="txt-jspinput" path="password" id="password" />
								</li>
								<li class='row-li'>
									<span class='label-jsp'>Confirm Password</span>
									<input type="text" class="txt-jspinput" name="confpassword" id="confpassword"/>
								</li>
								<li class='row-li'>
									<label class='label-jsp' path="">MAC Code</label>
									<input class="txt-jspinput" path="mac" id="mac" />
								</li>
								<li class='row-li'>
									<span class='label-jsp doblerow'>Notification preferences</span>
								<%--<form:checkboxes path="notificationsList" items="${notificationsList}" itemValue="value" itemLabel="value" />--%>
									<ul class='li-list'>
										<li>
											<label class='label-jsp' path="">By email</label>
											<input type='checkbox' class='checkbox-jsp' path="notifyByEmail"/>
										</li>
										<li>
											<label class='label-jsp' path="">By post</label>
											<input type='checkbox' class='checkbox-jsp' path="notifyByPost"/>
										</li>
										<li>
											<label class='label-jsp' path="">By SMS</label>
											<input type='checkbox'  class='checkbox-jsp' path="notifyBySms"/>
										</li>
									</ul>
								</li>
							</ul>
							<input class='btn-small' type="submit" name="submit" id="submit" value="Submit" />
						</div>
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
						<li class='head-read'>Package one</li>
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
						<li class='head-read'>Package one</li>
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
						<li class='head-read'>Package one</li>
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
						<li class='head-read'>Package one</li>
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
