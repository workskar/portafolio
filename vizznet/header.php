<?php
	error_reporting(18);
	set_time_limit(60);

function getHead(){
	echo "
		<nav id='globaheader'>
			<a id='logo' href='index.php'><span class='nothing'>VIZZnet</span></a>
			<div id='vizz-menu'>
				<ul id='vizz-pages'> 
						<li><a href='index.php'>Home</a></li>
						<li><a href='about-us.php'>About Us</a></li>
						<li><a href='products.php'>Products</a></li>
						<li><a href='offers.php'>Offers</a></li>
						<li><a href='contact-us.php'>Contact Us</a></li>
				</ul>
				<ul id='bottons'>
					<li><a class='checkA' href='http://www.vizznet.co.uk:8080/customer/standalone-service-check.html'>Check Availability</a></li>
					<li><a class='switchP' href='switch-provider.php'>Switch Provider</a></li>
					<li><a class='login' href='show-user-login.php'>Login</a></li>
					<li style='display:none;' id='logout'><a class='login' href='logout.php'>Logout</a></li>
				</ul>
			</div>	
		</nav>
	";
}	
function getSubmenu(){
	echo "
		<nav id='sub-menuvizz'>
			<ul>
				<li class='first'><a class='home' href='index.php'>Home</a></li>
				<li><a class='check-av'>Check Availability</a></li>
				<li><a class='choose-op'>Choose options</a></li>
				<li><a class='aboutyou'>About You</a></li>
				<li class='last'><a class='payment-de'>Payment Details</a></li>
			</ul>
		</nav>
	";
}
function getLinks(){
$date=date('h:i:s');
	echo "
		<script type='text/javascript' src='js/base.js'></script>
		<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
		<script type='text/javascript' src='js/checkemail.js'></script>
		<link rel='stylesheet' type='text/css' href='css/base.css?$date' />
		<link rel='stylesheet' type='text/css' href='css/navegation.css?$date' />
		<link rel='stylesheet' type='text/css' href='css/pages.css?$date' />
		<link rel=\"shortcut icon\" href=\"favicon.ico\"/> 
	";
}
?>