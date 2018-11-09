<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: your-details.php
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
<title>Your Details</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php //require_once 'validate_dv.php'; 
?>
<?php   getLinks();  ?>
<script type="text/javascript" src="js/basket.js?27JUL12"></script> 
</head>
<body>
	<article id='main' class='your-details'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Now, some details for your account</h1>
			<h2 class='second'>Choose your account username and email address</h2>
			<div class='box-checkA'>
				<form>
					<h3>Your account details</h3>
					<p>Choose a suitable username for your Plusnet account - <span class='red'>it cannot be changed afterwards</span>.</p>	
					<ul class='display'>
						<li class='description'>
							<label>Username <span class='boldp'>*</span></label></li>
							<li><input class='txt-input' type='text' name='name'><br>
							5 to 16 lowercase letters and/or numbers</li>
						<li class='description'><label>Password <span class='boldp'>*</span></label></li><li><input class='txt-input' type='password' name='password'><br>
						 	 8 to 16 characters </li>
						<li class='description'><label>Password confirmation <span class='boldp'>*</span></label></li><li><input class='txt-input' type='password' name='password'></li>
					</ul>
					<h3>How can we contact you?</h3>
					<p>We may need to contact you with important information about your account.</p>
					<p><span class='red'>Please note:</span> All emails relating to your service will only be sent to the email address you give here.</p>
					<p class='boldp'>As you didn't provide an email address you need to create a new one here. We'll use this to contact you with important information.</p>
					<ul class='display'>
						<li class='description'>
							<label>Plusnet email address <span class='boldp'>*</span></label>
						</li>
						<li><input class='txt-input' type='text' name='email'><br>
						<span class='prfo-small'>&copy;username.plus.com<br>
						Please Note: Further email addresses can be added<br> after sign-up.</span> 
						</li>
					</ul>
					<h3>Did somebody recommend you to Plusnet?</h3>
					<p>Please tell us if a current customer has recommended you so we can reward them. You'll be able to recommend people too.</p>
					<p><span class='red'>Please note:</span> only one person can be listed as recommending you.</p>
					<ul class='display'>
						<li class='description'>
							<label>What is their username?</label>
						</li>
						<li><input class='txt-input' type='text' name='email'><br>
						 	 example: johnsmith123 
						</li>
						<li class='description'>
							<label>Who are they with?</label>
						</li>
						<li>
							<select>
								<option value='0'>Select</option>
								<option>Plusnet</option>
								<option>Free-Online</option>
								<option>Force9</option>
								<option>V&copy;H</option>
							</select> 
						</li>
					</ul>
					<h3>Looks like you may already have broadband. Don't worry, it's really easy to switch to Plusnet.</h3>
					<p>If you have a MAC Key please enter it below. If you don't have one, just sign up and give it to us later.</p>
					<ul class='display'>
						<li class='description'>
							<label>Enter your MAC key:</label>
						</li>
						<li class='description'><input class='txt-input' type='text' name='email'>
						</li>
						<li class='description'>
							<label>What's a MAC code?</label>
						</li>
						<li class='special-dscrip'>
							<p>You get this from your current broadband provider when you tell them that you want to switch your service to another provider. Don't worry, you can continue your order without one.<p>
							<p>Your MAC code will be a series of letters and numbers, e.g. BBIP12345678/AB12A</p>
						</li>
						<li class='description'>
							<label>Your current provider:</label>
						</li>
						<li>
							<select>
								<option value='0'>Select</option>
							</select>
						</li>
						<li class='description'>
							<label>Other provider:</label>
						</li>
						<li><input class='txt-input' type='text' name='email'>
						</li>
						<li class='description'>
							<label>The date you want your service to switch to Plusnet:</label>
						</li>
						<li>
							<select>
								<option value='0'>As Soon As Possible</option>
							</select>
						</li>
					</ul>
					<h3>Terms and Conditions</h3>
					
					<div class='term-cond'>
						<div class='terms-style'>
							<div id='_Topterm'></div>
							<h2>Terms and Conditions</h2>
							<p class='boldp'>Your Terms and Conditions for: Plusnet Residential Services</p>
							<h3>Important Information</h3>
							<p>The Terms and Conditions of each service are made up of this important information and the following terms (including any other document we refer to in those terms):</p>
							<ul>
								<li>Plusnet Residential Standard Terms;</li>
								<li>The relevant service terms;</li>
								<li>The relevant Price guide;</li>
								<li>Any relevant special offer terms</li>
							</ul>
							<p>If any of these documents contradict each other, the terms will apply in the order set out above, save where the Special Offer Terms stipulate a price which shall take precedence over the Price guide.</p>
							<hr>
							<p>To go directly to a specific section of the document, please click on the links through to the relevant Service Terms or Price guide.</p>
							<p class='boldp'>Service terms:</p>
							<ul>
								<li><a href='#'>Plusnet Broadband Family</a></li>
								<li><a href='#'>Plusnet Fibre Optic Broadband</a></li>
								<li><a href='#'>Plusnet Talk</a></li>
								<li><a href='#'>Line Rental Saver</a></li>
								<li><a href='#'>Plusnet Broadband Phone</a></li>
								<li><a href='#'>Plusnet Protect</a></li>
							</ul>
							<p>Price guide:</p>
							<ul>
								<li><a href='#'>Plusnet Broadband Family</a></li>
								<li><a href='#'>Plusnet Fibre</a></li>
								<li><a href='#'>Plusnet Talk</a></li>
								<li><a href='#'>Plusnet Broadband Phone</a></li>
							</ul>
							<h3>Plusnet Residential Standard Terms</h3>
							<h3>What we provide</h3>
							<ol start='1'>
								<li>We provide you with your chosen services, including Telephony, Broadband, and, any other consumer services and any equipment we provide.</li>
								<li>These terms apply to the service described in the relevant service terms (telephony and broadband) that you may have with Plusnet, the Price guide and any Special Offer Terms.</li>
								<li>The services and equipment we provide to you under these terms must not be used for business purposes.</li>
							</ol>
							<h3>Providing the service (access/permits)</h3>
							<ol start='4'>
								<li>You agree to follow any reasonable instructions that we may give you, and to allow us access to your premises if we need it.</li>
								<li>You also agree to get any permission needed from someone else if we have to cross their land or put our equipment on their premises</li>
								<li>You agree to look after any of our equipment. If you do not do so and the equipment is damaged, you may have to pay for it to be repaired or replaced.</li>
							</ol>
							<h3>Where we provide the service</h3>
							<ol start='7'>
								<li>We will deliver any equipment to the UK address you give us. We will provide the service in the UK unless the service terms say otherwise.</li>
							</ol>
							<h3>When the service starts</h3>
							<ol start='8'>
								<li>The service will begin on the day we send you any equipment required to use the service, or on the day we activate the service whichever is later.</li>
							</ol>
							<h3>Cancellation</h3>
							<ol start='9'>
								<li>You may cancel your agreement for the service before the service start date set out in the service terms. If you do so we will not charge you for the service.</li>
								<li>You may cancel your order for any equipment we have provided to allow you to use the service or for any other equipment you have requested, up to 10 calendar days after we deliver it. If you cancel any order for equipment you must return it (undamaged and in its original packaging), following our instructions and at your cost. We will refund any payment you have made for the equipment. If we have to collect the equipment we will charge you our reasonable costs for doing so. These rights are in addition to any other legal right you may have to cancel your agreement.</li>
								<li>If you have only ordered equipment from us, you may cancel your order at any time up to seven working days, beginning with the day after we deliver the equipment. If you do so, you agree to return the equipment, following our instructions and at your cost. We will refund any payment you have made for the equipment. If we have to collect the equipment, we may charge you our reasonable costs for doing so.</li>
								<li>The Broadband line speed that we quote when you order the service is an estimate only. Once your Broadband speed has settled (usually 10 days after provision), if you are always getting line speeds lower than the estimated range that we quoted, you can contact us any time within the first 90 days after you ordered the service and we will try to improve the speed. If, despite any improvements we try to make, the line speed you get is significantly lower than the estimated range we quoted you when you placed your order for the service <a href='#'>(go to Speed Check Estimates for more details)</a> you will be entitled to cancel your broadband contract without paying a charge for ending it early subject to you following our instructions to resolve the problem</li>
							</ol>
							<h3>Returning faulty equipment</h3>
							<ol start='12'>
								<li>If you return any equipment as faulty, we may test it and if it is working, we will send it back to you. If we do so, we may charge you our costs for testing and postage. This does not affect your legal rights relating to equipment which is faulty or wrongly described.</li>
							</ol>
							<h3>Using the service</h3>
							<ol start='13'>
								<li>You may only use the service for your own personal use and enjoyment. You must always follow our acceptable use policies in the way that you use your chosen services which can be found on <a href='#'>http://www.plus.net/info2/legal/aup.html</a>.</li>
								<li>You agree that any content, software or other copyright material we supply to you is for your own private use, and that you must not copy, change or publish the material or supply it to any other person or use it for any business purpose.</li>
								<li>
									If we provide you with a phone number, you agree to the following: 
									<ol type='a'>
										<li>That the number must not be advertised in or on a BT phone box. If this happens, we may suspend or end your agreement for the service. However, we will write to you before we take this action.</li>
										<li>That you do not own the phone number and that you will not transfer it to anyone else or try to do so.</li>
									</ol>
								</li>
								<li>
									If you want to connect equipment to our network other than by using a BT main phone socket, you must get our permission. You agree not to connect equipment to our network:
									<ol type='a'>
										<li>that does not bear the European Consumer Equipment Standards 'CE' mark; or</li>
										<li>that may harm the network or other customers' equipment. If you do, you must disconnect immediately. </li>
									</ol>
								</li>
								<li>If you have an internet access service from us, you accept that you are using the internet at your own risk. You are responsible for making sure any equipment you use to access the service is protected against viruses.</li>
								<li>You are responsible for properly using any user IDs, personal identification numbers (PINs) and passwords needed for the service, if any, and must take all necessary steps to make sure that you keep these confidential and secure, use them properly and do not make these available to unauthorised people.</li>
							</ol>
							<h3>Moving Home</h3>
							<ol start='19'>
								<li>If you move home within the UK, and let us know at least 10 working days before you do so, we will continue to provide your service at your new address subject in line with our home mover policy (as set out at <a href='#'>http://www.plus.net/support/customer_service/house_moving.shtml</a>), and the terms set out in the relevant service terms. For pricing see the <a href='#'>price guide</a>.</li>
							</ol>
							<h3>Paying for services</h3>
							<ol start='20'>
								<li>You agree to pay all charges for the equipment and the service, including any additional charges detailed in these terms or the price guide, whether you use the service or someone else does. The method of payment will be either as set out in the service terms or as we otherwise agree with you. You agree that unless you pay your bill by direct debit, you will pay the fee detailed in point 2 of <a href='#'>the price guide</a> for payment collection and processing services.</li>
								<li>Unless we agree otherwise, we will normally bill you upfront (in advance) for any rental charges for the service. We will bill you later for any other usage charges after the event which the charges relate to. If possible, charges will appear on your next bill, but sometimes there may be a delay.</li>
								<li>You may see your bills online at <a href='#'>http://my.plus.net/</a>. We will email you at the email address you have provided and/or the Plusnet default email address provided if you have chosen one when you take the service from us, prior to us sending your first bill shortly after we have provided the service to you for the first time. After that, we will update your bills regularly online. However, we may sometimes send you a bill at a different time, for example if the amount of money you owe us is considerably higher than expected.</li>
								<li>You agree to pay the charges on your billing date. You may also need to pay a deposit or a payment upfront before you can receive the service or goods.</li>
								<li>If you do not pay your bill, we will send you a reminder or call you. If we do not receive payment within 10 calendar days of the date of that reminder, we may add a late payment charge of &pound;7.50 to your next bill by way of compensation to us for breaking the terms of this agreement. We may also charge you &pound;10 by way of compensation to us for any Direct Debit or cheque payments which are returned to us because you do not have enough funds in your account. The charges set out in this paragraph are not subject to VAT.</li>
								<li>We will generally not suspend or end the service or the agreement until 14 days after your payment was due, unless the service terms or the <a href='#'>price guide</a> say otherwise. However, sometimes we may take this action earlier. For example, when you reach your credit limit.</li>
								<li>If you do not pay your bill, we may ask a debt-collection agency to collect the payment on our behalf. If we do, you will have to pay us an extra amount by way of compensation to us for breaking the terms of this agreement. This will not be more than the reasonable costs we have to pay the agency, who will add the amount to your debt on our behalf (this will depend on the amount you owe us). Any extra amount added to your bill will not be subject to VAT. This paragraph applies even if your agreement with us has ended.</li>
								<li>Where we arrange for an engineer to visit your Premises for activation of the Service, or for resolution of a fault, you will be responsible for any costs incurred owing to any of the following:
									<ol type='a'>
										<li>an engineer attends an incorrect address as provided by you;</li>
										<li>the site for installation does not meet the minimum requirements as agreed during the product registration;</li>
										<li>an engineer arrives to carry out the installation at the address provided by you, but you no longer want the installation completed;</li>
										<li>entry is refused to the Premises, or access cannot be gained, at the appointed time, as agreed between you and us;</li>
										<li>you report a fault, an engineer attends your Premises, and discovers the fault is not the result of the Service;</li>
										<li>your reported problem, following your request for an engineering visit, cannot be confirmed; and</li>
										<li>when you cancel a request for an engineering visit later than 48 hours before the scheduled visit.</li>
									</ol>
								</li>
							</ol>
							<h3>Other things we may need to do</h3>
							<ol start='28'>
								<li>We may monitor and record calls relating to customer services and telemarketing. We do this for training purposes and to improve the quality of our customer services.</li>
								<li>Occasionally, we may have to: 
									<ol type='a'>
										<li>interrupt the service. If we do so, we will restore it as quickly as we can;</li>
										<li>change your area code or phone number, or access numbers; or</li>
										<li>make minor changes to certain technical specifications, including limits for transferring information which are associated with the service.</li>
									</ol>
								</li>
							</ol>
							<h3>Our responsibility to you</h3>
							<ol start='30'>
								<li>We accept responsibility if you are injured or die as a result of our negligence. We will not limit this responsibility.</li>
								<li>Unfortunately, we cannot guarantee that the service or the equipment we provide will never be faulty.</li>
								<li>Unless the service terms say otherwise, we have no responsibility to pay you compensation for financial loss, for any information which is lost or corrupted, or for any loss that could not have been reasonably expected because you have used the service or equipment we provide for business.</li>
								<li>Except as described in paragraph 30, we will not pay you more than &pound;10,000 in compensation (even if we have been negligent) in any 12-month period unless the service terms say otherwise.
								</li>
								<li>Nothing in paragraphs 30 to 33 affects your legal rights relating to equipment which is faulty or has been described wrongly. </li>
							</ol>
							<h3>Matters beyond our reasonable control</h3>
							<ol start='35'>
								<li>Sometimes we may not be able to do what we have agreed because of something beyond our reasonable control. In these cases, we do not accept responsibility for not providing you with your chosen communications services.</li>
							</ol>
							<h3>If you break the agreement</h3>
							<ol start='36'>
								<li>Other than for serious misuse described in paragraph 13, we will normally give you an opportunity to put matters right within a reasonable time if you break the agreement.</li>
								<li>However, if you do not do so, we may suspend or end the agreement for the service. We may also suspend the service or end the agreement for the service if you break any other agreement you have with us and do not put matters right within a reasonable time. If we suspend the service or end the agreement for the service, we will tell you what needs to be done before we can restore the service.</li>
							</ol>
							<h3>Sorting out disputes</h3>
							<ol start='38'>
								<li>We will try to work through any disputes that you may have with us. However, if we cannot do this, you may refer the matter to any relevant service which sorts out disputes. Details of these, and of how to refer a dispute, are set out in our <a href='#'>Code of Practice</a>.</li>
							</ol>
							<h3>Ending the service</h3>
							<ol start='39'>
								<li>Once we have provided the service, you may tell us to stop providing it at any time by giving us 10 days' written notice, unless the service terms say otherwise. We can stop providing the service by giving you 10 days' written notice.</li>
								<li>If we are told to stop providing the service by someone other than you, we will immediately email you, asking you to confirm that this is what you want. If we don't hear from you within 10 days we will stop providing your service 10 days later. </li>
								<li>If you ask us to end the service within your first 12 months with Plusnet , you may be liable to pay charges relating to the set-up of your service and for hardware we have provided. Please refer to the product <a href='#'>price guide</a> and separate product service terms for more information. </li>
								<li>If you or we end the agreement for the service, we will pay back to you any money we owe you relating to that agreement. We will first take off any money you owe us under that agreement or any other agreement between us.</li>
							</ol>
							<h3>Changing these Terms (notification)</h3>
							<ol start='43'>
								<li>Sometimes, we will need to change the charges and the Terms and Conditions of the service. We will publish details of all changes online at <a href='#'>http://www.plus.net</a>.</li>
								<li>We will also let you know about a price increase or a change to the Terms and Conditions that we believe is likely to cause you material disadvantage at least one month before it happens. We will let you know about other price changes and changes to the Terms and Conditions via email to the contact email address on the account and by adding a service note to your account. Account Service Notes can be viewed at <a href='#'>http://contactus.plus.net/</a> </li>
								<li>For changes we need to make to meet legal and regulatory requirements, we may not be able to meet the timescale detailed in paragraph 44. We will let you know about these changes as soon as we can.</li>
								<li>If we have made a change which is to your material disadvantage, you will not have to pay a charge (excludes any charges or payments we have deferred) if you decide to end your agreement early, unless the <a href='#'>price guide</a> says otherwise. However, once we have told you about such a change, you must let us know that you want to end the agreement within 10 days.</li>
							</ol>
							<h3>Other things we need to tell you</h3>
							<ol start='47'>
								<li>You accept that the agreement for the service is personal to you and agree not to transfer it to anyone else, or to try to do so. However, we may take instructions from a person who we think, with good reason, is acting with your permission.</li>
								<li>If you wish to give us notice you must do so using one of the following mechanisms. No other form of communication will be accepted, unless specifically stated otherwise in this agreement: 
									<ol type='a'>
										<li>To us: by phoning our customer options team or in writing to:</li>
										<li>Plusnet Plc<br>
											The Balance<br>
											2 Pinfold Street<br>
											Sheffield<br>
											S1 2GU<br>
											UK
										</li>
										<li>We will give notice to you at the appropriate website using the <a href='#'>Help Assistant</a> tool or email to the address provided by you and/or the email address we have provided to you as part of the service if you have chosen one when you take the service from us, or by post to the address provided by you in the Customer Order.</li>
										<li>Any notice given by the Help Assistant tool or by email shall be deemed to be served on the day of transmission. In the case of written postal notice, notice shall be deemed to have been served on the date of acceptance by signature of the recorded delivery or 2 Working Days after the date of posting, whichever is sooner.</li>
										<li>If you do not choose to take an email address provided by Plusnet, it is your responsibility to provide us with a valid email address of which it is your responsibility to keep up to date on your account. </li>
										<li>We will let you know about all service and price information and other related communications by writing to you via the contact email address you have provided and/or the Plusnet default email address if you have chosen one when you take the service from us. We will also provide the same information by adding a service note to your account. In the event that your email address is not up to date then it is your responsibility to check for service notes on your account. Account Service Notes can be viewed at <a href='#'>http://contactus.plus.net</a></li>
									</ol>
								</li>
							</ol>
							<hr>
							<h3>Plusnet Broadband Family service terms</h3>
							<h3>What we provide</h3>
							<ol>
								<li>The service we agree to give you includes: 
									<ol type='a'>
										<li>a high-speed network access to the internet;</li>
										<li>helpdesk services; and </li>
										<li>other applications and features as described at <a href='#'>http://www.plus.net/broadband</a>.</li>
										<li>You will need to have a Plusnet or BT telephone line to enable you to receive your Plusnet Broadband service. </li>
									</ol>
								</li>
							</ol>
							<h3>When the service starts</h3>
							<ol start='2'>
								<li>The service will begin on the day we send you any equipment required to use the service, or on the day we activate the service whichever is later.</li>
								<li>We guarantee that the equipment that we send you in line with paragraph 2 will work to the relevant specification for at least 12 months and will be free from faulty design, manufacture or materials. If at any time during the first 12 months you find that the equipment is not working properly you may return it to us and we will replace (or at our option) repair it.</li>
								<li>We will not be responsible for any defects arising from fair wear and tear, accidental or willful damage, misuse or failure to follow our instructions.</li>
							</ol>
							<h3>Quality of Service</h3>
							<ol start='2'>
								<li>We aim to provide a continuous, high-quality service but we do not guarantee either the quality of the service or that the service will be available at all times. From time to time faults in the service may occur. We will repair these faults as soon as we can.</li>
								<li>The quality of the Plusnet Broadband Family service is dependant on geographic, atmospheric or other conditions or circumstances beyond our control.</li>
								<li>We may also take action to manage the network's performance during periods where there is a high demand. Please refer to <a href='#'>http://www.plus.net/support/broadband/quality_broadband/index.shtml</a> for more details.</li>
							</ol>
							<h3>Quality of Service</h3>
							<ol start='5'>
								<li>We aim to provide a continuous, high-quality service but we do not guarantee either the quality of the service or that the service will be available at all times. From time to time faults in the service may occur. We will repair these faults as soon as we can.</li>
								<li>The quality of the Plusnet Broadband Family service is dependant on geographic, atmospheric or other conditions or circumstances beyond our control.</li>
								<li>We may also take action to manage the network's performance during periods where there is a high demand. Please refer to <a href='#'>http://www.plus.net/support/broadband/quality_broadband/index.shtml</a> for more details.</li>
							</ol>
							<h3>Using the service</h3>
							<ol start='8'>
								<li>If you constantly go over your usage guideline, we may charge you for your extra usage, upgrade you to another Plusnet Broadband option that is better suited to your usage or end your agreement. You can find details of the extra usage charges in the Plusnet Broadband Family price guide. If we upgrade you to another Plusnet Broadband Family option, any deferred payments which Plusnet have made for set-up and hardware will be carried over to the new product.</li>
							</ol>
							<h3>Changing your Plusnet Broadband service</h3>
							<h3>Changes we may make</h3>
							<ol start='9'>
								<li>Occasionally, we may have to interrupt the service. If we do so, we will restore it as quickly as we can. We may also make minor changes to certain technical specifications, including limits for transferring information which are associated with the service.</li>
							</ol>
							<h3>Changes you can make</h3>
							<ol start='9'>
								<li>If you change the service any deferred payments which Plusnet have made for set-up and hardware will be carried over to the new product. If you downgrade your Plusnet Broadband option the charge in the Plusnet Broadband Family price guide will apply.</li>
								<li>If you change service, we have the right to move you to a different billing method.</li>
							</ol>
							<h3>Ending your agreement</h3>
							<ol start='12'>
								<li>If you choose to end your agreement for the service and you do not use a recognised migration process you will be subject to the broadband cease charge in the <a href='#'>price guide</a>.</li>
								<li>A charge for broadband set up and a separate charge for any hardware taken will be payable if you leave Plusnet within 12 months of the start of your agreement. If you keep the hardware and remain with Plusnet for at least 12 months any payment for the broadband set-up and/or hardware will be waived, this is only available if you choose to take the Plusnet Homephone service. You will also have the option to pay for the broadband set-up and hardware up-front. The standard full price of set-up and hardware is listed in the price guide.</li>
								<li>If you are using any services, applications or features that we provide which are free of charge, these will end on the day your agreement with us ends.</li>
							</ol>
							<hr>
							<h3>Plusnet Fibre Optic Broadband Service Terms</h3>
							<h3>What we provide</h3>
							<ol>
								<li>The service we agree to give you includes: 
									<ol type='a'>
										<li>a high-speed fibre broadband service;</li>
										<li>helpdesk services;</li>
										<li>other applications and features as described at <a href='#'>http://www.plus.net/fibre-broadband</a>.</li>
										<li>installation of network equipment required to enable you to use the service</li>
									</ol>
								</li>
								<li>The equipment we agree to give you includes a:
									<ol type='a'>
										<li>suitable fibre-capable router</li>
										<li>data extension kit (required only if there is no double power socket near your telephone master socket). If required, the engineer will ask for your agreement to install during his installation visit. </li>
										<li>you will need to have and keep a Plusnet or BT telephone line for the duration of the service. An engineer installation visit will be required where no working fibre installation already exists. The provision of Plusnet Fibre is subject to availability and a line check. The service may be incompatible with other services you have.</li>
										<li>installation of network equipment required to enable you to use the service</li>
									</ol>
								</li>
							</ol>
							<h3>When the service starts</h3>
							<ol start='3'>
								<li>The Plusnet Fibre service is subject to a minimum period of 18 months. The fibre service and the minimum period of 18 months will start on the day we install the fibre service (the fibre service start date). We will agree a date with you for delivery and installation of any equipment, but all dates are estimates and we cannot guarantee we will meet them.</li>
								<li>If you need to change or cancel any appointment date , you must tell us at least three working days prior to the scheduled appointment or we may charge you a missed appointment fee.</li>
								<li>During installation there must be a responsible adult present in your home. Where this person is not you, it must be someone authorised by you to make decisions regarding the location and installation of equipment ( e.g. if a data extension kit is required). </li>
								<li>On the day of installation, prior to visiting your home, the engineer will need to disconnect your phone line for a short period. If possible you should make alternative arrangements to enable you to make calls to emergency services during this period. If you already have broadband, this will also be taken out of service during the installation. </li>
							</ol>
							<h3>Cancelling the Service</h3>
							<ol start='7'>
								<li>You may cancel your agreement for Plusnet Fibre by contacting us at any time up until the fibre service start date. However, you will be liable to pay for any work that we have started or done to install any equipment. </li>
							</ol>
							<h3>Quality of Service</h3>
							<ol start='8'>
								<li>We aim to provide a continous, high-quality service, but we do not guarantee either the quality of the service or that the service will be available at all times. From time to time faults in the service may occur and maintenance on the network may be required which causes disruption. We will repair these faults as soon as we can and perform network maintenance when the network is least busy.</li>
								<li>We cannot provide Plusnet Fibre in all parts of the United Kingdom.</li>
								<li>We may also take action to manage the network's performance during periods where there is a high demand. Please refer to <a href='#'>http://www.plus.net/support/broadband/speed_guide/</a> for more details. </li>
							</ol>
							<h3>Using the service </h3>
							<ol start='11'>
								<li>If you constantly go over your usage guideline, we may charge you for your extra usage, upgrade you to another Plusnet Fibre option that is better suited to your usage or end your agreement. You can find details of the extra usage charges in the Plusnet <a href='#'>price guide</a>. If we upgrade you to another Plusnet Fibre product, any deferred payments which Plusnet have made for set-up and hardware will be carried over to the new product.</li>
								<li>You will need to meet any requirements set out online at <a href='#'>http://www.plus.net/fibre-broadband</a> and have your Plusnet or BT telephone service activated, working and having passed a minimum line speed test that we will perform in order to receive the service.</li>
							</ol>
							<h3>Changing your Plusnet Fibre service</h3>
							<h3>Changes we may make </h3>
							<ol start='13'>
								<li>Occassionally, we may have to interrupt the service. If we do, we will restore it as quickly as we can. We may also make minor changes to certain technical specifications, including limits for transferring information which are associated with the service.</li>
							</ol>
							<h3>Changes you can make</h3>
							<ol start='13'>
								<li>If you upgrade to Plusnet Fibre from any Plusnet broadband package, or you move from a fibre package to a higher speed fibre package, you will need to agree to a new 18 month minimum period and pay any applicable Plusnet Fibre set-up charge.</li>
								<li>If you move house during the 18 month minimum period, and continue to receive a Plusnet Fibre service, a new 18 month minimum period will start, replacing the existing one. Other house move charges may also apply as set out in the <a href='#'>price guide</a>.</li>
								<li>If you move home during the 18 month minimum period, to a part of the UK where Plusnet do not offer a fibre service, customers may move from the fibre service to a Plusnet broadband package without penalty. Other house move charges may also apply as set out in the <a href='#'>price guide</a>.</li>
							</ol>
							<h3>Ending your Agreement</h3>
							<ol start='17'>
								<li>If you leave Plusnet within 12 months of the fibre service start date, a charge for fibre set up (in instances where no set-up fee is paid upfront) and a separate charge for any hardware taken will be payable . If you keep the hardware and remain with Plusnet for at least 12 months any payment for the fibre set-up and/or hardware will be waived. You will also have the option to pay for the fibre set-up and hardware upfront. The standard full price of set-up and hardware is listed in the <a href='#'>price guide</a>.</li>
								<li>If you choose to end your Plusnet Fibre service within the minimum period of 18 months, you will have to pay a termination charge by way of compensation to us for ending your service early. This charge will be calculated by multiplying the number of months remaining in your minimum term by a monthly early termination charge, as set out in the price guide. This charge will not be subject to VAT. The only exclusions to this are: 
									<ol>
										<li>If we make a change to the prices or terms and conditions that is to your material disadvantage and you let us know that you want to end the agreement within 10 days of being notified of this change.</li>
										<li>If you move home to part of the UK where Plusnet do not offer a fibre service.</li>
									</ol>
								</li>
								<li>A broadband cease charge, as set out in the <a href='#'>price guide</a>, is payable if you cease your Plusnet service and do not request and use a migration access code (MAC), or another recognised transfer process to move to another service provider.</li>
								<li>If you are using any services, applications or features that we provide which are free of charge, these will end on the day your agreement with us ends.</li>
							</ol>
							<h3>Plusnet Talk Service Terms</h3>
							<h3>What we provide</h3>
							<ol>
								<li>The service we agree to give you includes: 
									<ol type='a'>
										<li>installation or takeover and rental of a fixed Plusnet telephone line; </li>
										<li>the facility to make or receive a phone calls including the ability to send or receive information, for example, from computers using your telephone line;</li>
										<li>we will provide you with a Call Allowance and;</li>
										<li>one phone number for each fixed telephone line that you rent from us, which we will publish (with your details) in your local BT Phone Book and make available from BT's Directory Enquiries Service unless you tell us not to.</li>
									</ol>
								</li>
								<li>The Talk Service terms and Price guide operates independently to the Broadband Service terms and Price guide. Any change to these terms do not impact your Broadband Terms and any changes to your Broadband Terms do not impact these Talk terms.</li>
								<li>If your installation requires extensive new construction above the standard needs we may charge you for this. We will attempt to advise you of these charges before any work is undertaken, however this may not always be possible.</li>
							</ol>
							<h3>When the service starts</h3>
							<ol start='4'>
								<li>We will agree a date with you for installation or takeover of your telephone line. We will begin the service once any work we need to do is completed on that date.
								</li>
								<li>Plusnet will use reasonable endeavours to provide the Service by the date agreed with you, but all dates are estimates and Plusnet has no liability for any failure to meet any date.</li>
							</ol>
							<h3>Cancelling your agreement</h3>
							<ol start='6'>
								<li>You may cancel your services at anytime up to the date the service is provided. However you will have to pay charges for any calls made or any work that is undertaken to provide the service. Please see <a href='#'>price guide</a> for charges.
								</li>
							</ol>
							<h3>Quality of the service</h3>
							<ol start='7'>
								<li>We aim to provide a continuous, high-quality service.
								</li>
							</ol>
							<h3>Using the service</h3>
							<ol start='8'>
								<li>If you use any inclusive Calling Plan in a different way to how it should be used (for example, you use a Calling Plan for telemarketing), we may suspend or end the service immediately. Otherwise we may on 30 days notice transfer you from any inclusive Calling Plan, for example Plusnet Talk, to a Line Rental only.
								</li>
							</ol>
							<h3>Other Information</h3>
							<ol start='9'>
								<li>We cannot and do not guarantee that we will provide or transfer any or all services or equivalents to Additional Calling Features you may have active with your previous provider save as set out in the Product Description.</li>
								<li>We do not provide you with any equipment as part of a Plusnet Talk product, such as your telephone or any other hardware or services.</li>
								<li>When we provide you with the Service, we will use the reasonable skill and care of a competent service provider. We cannot and do not guarantee that the Service will be fault free. Should faults occur we will use reasonable endeavours to correct such faults. </li>
								<li>Should you transfer to a Plusnet Talk product or similar service from a third party service provider, we will use reasonable endeavours to keep your existing telephone number during the transfer, however we cannot guarantee this. We will maintain your BT Phone Book and Directory Enquires status at the time of transfer. For example if you are listed as Ex Directory with your previous provider you will continue to be Ex Directory on completion of the transfer. You can request to change your directory status by contacting us in writing via the Help Assistant.</li>
								<li>You authorise us to act on your behalf in all dealings with BT or any other network operator or service provider in connection with the Service, and in particular you consent to BT or any other network or service provider (as applicable) providing us with access to, and transferring to us or any nominated third party, any personal data of yours (and other relevant information) to allow us or any nominated third party to connect you to, and provide you with, the Service.</li>
								<li>Where the Service is being or has been used inappropriately as defined in clause 13 in the <a href='#'>Plusnet Residential Standard Terms</a>, or we suspect that the Service is being or has been used inappropriately, we may contact the police and/or co-operate with the police or any regulatory or similar or relevant authority or body in connection with any misuse. We may pass on your personal details and personal data to these authorities or bodies, in particular where we are required to do so by law, and you consent to such use of your personal details and personal data.</li>
								<li>We may use a nominated third party to connect you to, and/or provide you with, the Service. </li>
								<li>We may accept instructions regarding the Service from any person who reasonably appears to be acting on your authority. Any agreements made on your behalf by such a person will be binding on you and subject to these Conditions.</li>
								<li>Call data records will be kept for the purposes of billing, backup, problem solving, network management, marketing, in relation to any inappropriate use as defined in clause 14 and where required by law.</li>
							</ol>
							<h3>Changes we may make</h3>
							<ol start='18'>
								<li>We may have to alter the Service including your phone number and/or STD code for operational reasons. </li>
								<li>If any operator shall discontinue the provision of telecommunications services to Plusnet or shall alter, modify, expand, improve, maintain, repair, suspend or otherwise change the telecommunications services or any part thereof provided to us, we shall be entitled to discontinue, alter, modify, expand, improve, maintain, repair, suspend, disconnect or otherwise change the Service to you as necessary.</li>
							</ol>
							<h3>Our responsibility to you </h3>
							<ol start='20'>
								<li>If we have arranged an engineer visit at a time pre-confirmed with you and you are without Service by reason of a fault with the Service, you may be entitled to claim back charges relating to the Service which have accrued during the period when the Service is unusable ("compensation") if we fail to keep that appointment with you. Any compensation will be calculated on a pro-rata basis in accordance with your Subscription fees only.</li>
								<li>Any compensation awarded will be payable solely as a credit against your next monthly invoice and in accordance with the following conditions:
									<ol type='a'>
										<li>The maximum compensation claimable for each line is &pound;180 per annum;</li>
										<li>Compensation is payable entirely at our discretion and will be given as a gesture of goodwill not as an admission of liability; </li>
										<li>Plusnet's liability for any fault in the Service shall be limited to the compensation. You agree that payment of any compensation shall be in full and final settlement of any loss or damage suffered by you as a result of any failure to provide the Service.</li>
									</ol>
								</li>
								<li>Compensation cannot be claimed in accordance with clause 20 in the following circumstances: 
									<ol type='a'>
										<li>you have not made a claim for compensation within 30 days of the fault being reported to us; or</li>
										<li>the failure is due to an outage which is not isolated to your line, for example network wide outage; or</li>
										<li>matters beyond our reasonable control; or</li>
										<li>we suspend your Service in accordance with clause 14 or you are in breach of any term of the Agreement; or</li>
										<li>through no fault on our part, we are unable to carry out any necessary work on your Premises; we are unable to gain access to your Premises; we are unable to agree an appointment date; the work is aborted; or we require information or assistance from you to prove the Service but are unable to gain this assistance or information.</li>
									</ol>
								</li>
								<li>If you elect to use another provider for some or all of your calls we may at our sole discretion decide to:
									<ol type='a'>
										<li>bar your use of IDA or CPS codes;</li>
										<li>charge you a higher fee for your use of the Service;</li>
										<li>terminate this Agreement; and/or</li>
										<li>disconnect all or any part of the Service.</li>
									</ol>
								</li>
							</ol>
							<h3>Repair and customer visits</h3>
							<ol start='24'>
								<li>No charges normally arise with the standard fault repair service. However, we will make a charge for new and replaced items. If you ask us to carry out work to repair a fault on items that we are responsible for maintaining, and we are not able to find a fault, we will charge you for the visit.</li>
								<li>The standard requests for an engineer to visit to perform work in clause 24, and any standard requests, for example moving a socket are chargeable, for current prices see the pricing guide.</li>
							</ol>
							<hr>
							<h3>Line Rental Saver Service Terms</h3>
							<ol>
								<li>Line rental saver is available to new and existing Plusnet residential customers for a single advance payment of &pound;113.88 (Inc VAT).</li>
								<li>Line rental saver is non-refundable and must be taken with a Plusnet calling plan.</li>
								<li>Line rental saver provide 12 months standard telephone line rental with no minimum contract term for a reduced equivalent monthly charge of:
									<ol>
										<li>&pound;9.49 when taken with Talk Evenings and Weekends (normally &pound;12.99)</li>
										<li>&pound;12.99 when taken with Talk Anytime (normally &pound;16.49)</li>
										<li>&pound;14.49 when taken with Talk Anytime International 300 (normally &pound;17.99)</li>
										
									</ol>
								</li>
								<li>Normal monthly prices quoted are with payment by Direct Debit and include VAT. Conditions apply.</li>
							</ol>
							<h3>Plusnet Broadband Phone Service Terms</h3>
							<h3>Provision of Service</h3>
							<ol>
								<li>The Service is currently only available to customers of Plusnet's broadband services.</li>
								<li>Occasionally Plusnet may give the Customer instructions which it believes are necessary for reasons of health, safety, security or the quality of any telecommunications service provided by Plusnet to the Customer or any other customer;</li>
							</ol>
							<h3>Providing your service</h3>
							<ol start='3'>
								<li>Plusnet Broadband Phone has a minimum period of 1 month. There are no network connection charges.</li>
								<li>Plusnet Broadband Phone is only available to Plusnet Broadband customers with an active broadband service.</li>
							</ol>
							<h3>Paying for the service</h3>
							<ol start='3'>
								<li>You can find all product pricing and tariff information in the Plusnet <a href='#'>price guide</a>.</li>
							</ol>
							<h3>Connection of Equipment to the Service</h3>
							<p>The service will allow calls between SIP (Session Initiation Protocol) enabled devices and between PSTN (Public Switched Telephone Network) fixed or mobile telephone networks in the UK or abroad. The service is designed to function with other SIP networks. A list of SIP Service Partners is available <a href='#'>here</a>. Changes will be notified in advance via the Broadband Phone member area and Announcements areas of our website and we will endeavour to provide at least 5 days notice before changes take effect.</p>
							<ol start='6'>
								<li>In order to use the Service customers must download the recommended software available from the Broadband Phone portal. Plusnet do not offer or recommend any particular SIP-compatible hardware. Although we do not support SIP hardware, our Community site members regularly list hardware configurations at <a href='#'>http://community.plus.net/forum/index.php/board,39.0.html</a></li>
								<li>The customer must ensure that any equipment: 
									<ol type='a'>
										<li>connected to or used with the Service is connected and used in accordance with any applicable instructions, safety and security procedures; and</li>
										<li>attached (directly or indirectly) to the Service is compliant with any relevant legislation.</li>
									</ol>
								</li>
							</ol>
							<h3>Use of the Service</h3>
							<ol start='8'>
								<li>The Service is intended for sending and receiving voice transmissions over the Internet. Customers understand that:</li>
								<li>The service is not intended as a like-for-like replacement for PSTN telephone services.</li>
								<li>Customers must retain a PSTN telephone line in order to use the Service.</li>
								<li>Plusnet makes no guarantees as to the availability or functionality of the Service.</li>
								<liThe service can be used to make emergency calls including 999 calls. In order to connect your 999/112 call to the emergency services we are required to pass on your location information (address and caller line identification number) to the National Emergency Location information database. This is so we can provide your whereabouts in instances where you are unable to do so. We ask that you to provide a true representation of your whereabouts using the Emergency Address details wizard at <a href='#'>this link</a>. It is your responsibility to keep this location information up-to-date - we will not update the details if you move house. By default, we will provide the fixed line address your Broadband service is connected to. For more information on how to use the Emergency Address details please click <a href='#'>this link</a>.</li>
								<li>All Broadband Phone products also allow calls to directory enquiry numbers provided there is sufficient credit available.</li>
								<li>In order to maximise service availability for all Customers, the maximum call duration is 120 minutes for a single call. If you reach this duration, your call will disconnect automatically and you will be able to reconnect immediately.</li>
								<li>Plusnet Broadband Phone services are fully PATS compliant. The Ofcom PATS conditions can be found at <a href='#'>this link</a>. Plusnet provides a full list of PATS compliant services for customers with special requirements. <a href='#'>Click here</a> to view a list of our services.</li>
								<li>The Service is intended to give you continuous connection, however there may be occasions which are not within our control where the service is not available or there is a degradation in quality of voice calls. Such occasions include, but are not limited to: availability of your broadband connection due to service faults, mistakes with customer configuration, computer viruses, availability or quality of connections with our suppliers to the telephone network, power disruptions or weather conditions.</li>
								<li>If a geographic number (one that begins with 01 or 02) is not available, we have the right to issue you with a non-geographic number (one that begins with a number other than 01 and 02).</li>
								<li>Where we have provided the service free or as part of another package and you allow more than 90 days to pass after the last time you used it to make an outgoing call, your agreement for the service will end automatically and you will lose your Plusnet Broadband Phone number.</li>
							</ol>
							<h3>Other Information</h3>
							<ol start='19'>
								<li>If you end your Plusnet Broadband service your Plusnet Talk service will also end.</li>
							</ol>
							<a href='#_Topterm'>[Back to top]</a>
							<hr>
							<h3>Plusnet Protect service terms</h3>
							<h3>What we provide</h3>
							<ol>
								<li>The service we agree to give you is a suite of PC security software, including anti-virus and personal firewall, with automatic updates via the Internet.</li>
							</ol>
							<h3>When the service starts</h3>
							<ol start='2'>
								<li>You can only sign up for the service online at <a href='#'>www.plus.net.</a> This agreement will start when we have accepted your order. We will then start the service by making the software available for you to download.</li>
							</ol>
							<h3>Cancellation</h3>
							<ol start='3'>
								<li>You may cancel your agreement for the service before the service starts. If you do so we will not charge you for the service.</li>
							</ol>
							<h3>Quality of the service</h3>
							<ol start='4'>
								<li>Although we attempt to provide you with the best possible service, we cannot guarantee that the service will never be faulty. However, all reported faults will be resolved as soon as is reasonably possible.</li>
								<li>If there is a fault with the service you should contact us. Details of how to contact us can be found in the Help section of the software or at <a href='#'>www.plus.net</a>.</li>
							</ol>
							<h3>Paying for the service</h3>
							<ol start='6'>
								<li>If chargeable, you agree to pay the charges for the service that appear on your Plusnet bill.  You can see you bill online at <a href='#'>www.plus.net</a>.</li>
							</ol>
							<h3>Your use of the software</h3>
							<ol start='7'>
								<li>Use of the sofware is at your own risk and in accordance with the End User Licence Agreement. Use of the sofware is subject to any applicable laws. We have no responsibility for any goods, services information, software or other materials you obtain when using the software.</li>
							</ol>
							<h3>Changes we may make</h3>
							<ol start='8'>
								<li>We may occasionally upgrade and/or make improvements to your service. If we do this we will give you prior notice of the change and provide you with instructions that you need to follow when a change has taken place.</li>
							</ol>
							<h3>Ending your service</h3>
							<ol start='9'>
								<li>You may end your service on 14 days notice to us.</li>
							</ol>
						</div>
					</div>
					<div class='message-attention'>
						<input type='checkbox'><label>Tick this box to confirm you have read and accepted our Terms and Conditions.</label>
					</div>
					<input class='btn-small' type='submit' value='Continue'>
				</form>
				
			</div>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>