<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: switch-provider.php
    // Project: VizzNet
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
<title>Switch Provider</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='switch-provider'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Switch banner' title='Switch banner' src='img/switch-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Switching to VizzNet Broadband</h1>
			<p>Here at VizzNet, we're committed to making your switch as quick and painless as possible by providing a simple online guide to take you through the process step by step.</p>
			<ol>
				<li>Check you are able to get VizzNet broadband by entering either your postcode on our online <a href='#'>postcode checker</a>, or if you have a BT-compatible landline entering your landline number on our <a href='#'>landline checker</a>.</li>
				<li>Choose which broadband package you would like. VizzNet offer 10G, 40G and Unlimited broadband packages over one or eighteen month periods, which are explained in more detail <a href='#'>here</a>.</li>
				<li>Call your current provider and ask for you Migration Authority Code (MAC). You'll also need to tell them that you would not like your connection to be ceased until the migration is complete to benefit from our free transfer service.</li>
				<li>Finally order your VizzNet package either online <a href='#'>here</a> or call our customer services department on 020 7177 8000 (providing your MAC) and we'll take care of the rest. If you are currently with Virgin Media, we will need to arrange for a new phone line to be installed which will incur an extra cost.</li>
			</ol>
			<p>Once you've placed your order for home broadband it will typically take only 8 days to activate your service. You will be sent a confirmation letter once we are able to provide the exact date that your service will commence. </p>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>