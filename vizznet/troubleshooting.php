<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: troubleshooting.php
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
<title>Troubleshooting</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='troubleshooting'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/trouble-banner.jpg'>
		</div>
		<section id='content'>
			<h1>VizzNet Troubleshooting Guide</h1>
			<ol>
				<li>
					<span class='boldp'>Check the Power source:</span>
					Confirm that your router is plugged in and both it and the plug socket are turned switched on.
				</li>
				<li>
					<span class='boldp'>Check the router lights:</span>
					Broadband routers feature lights that do more than just look impressive. Ensure that your modem's power and broadband lights are on, are both solid and green, and that the internet light is flashing to indicate internet activity.
				</li>
				<li>
					<span class='boldp'>Restart your router: </span>
					Restarting the router is perhaps the most common trick for getting a broadband connection back up and running:
					<ul class='alpha'>
						<li>Unplug the power supply to the router,</li>
						<li>Wait 20 seconds,</li>
						<li>Reconnect the power supply. Wait for the green broadband light to remain solid and open a new browser window.</li>
					</ul>
				</li>
				<li>
					<span class='boldp'>Check the cables: </span>
					Ensure all the cables are properly connected including any extension cables if you are using them, and that they have no breaks or cuts in them. 
				</li>
				<li>
					<span class='boldp'>Telephone extensions: </span>
					Ensure that you have fitted an ADSL filter to all telephony devices in your home. These filters split out the signal between your broadband and voice calls. If an ADSL filter isn't fitted to all pieces of equipment connected to the telephone line or if it's faulty then this could cause your line to drop out. Devices that require filters include: phones, fax machines, burglar alarm systems, satellite television receivers etc. Check that they are all correctly plugged in.
				</li>
				<li>
					<span class='boldp'>Check for interference:</span>
						<ul class='alpha'>
							<li>First of all, pick up a telephone connected to your landline and listen for a dial tone. If there isn't one, that's the problem. Your landline provider can look into this, so get in contact with them.</li>
							<li>Make sure you use only the supplied grey DSL cable to connect your VizzNet wireless box to the landline. Don't use your own extension leads.</li>
							<li>If you have other things plugged into your landline, disconnect them one at a time. If removing something in particular fixes the problem then it was probably interfering with the VizzNet wireless box.</li>
						</ul>
				</li>
				<li>
					<span class='boldp'>Further Problems:</span>
					For further assistance, please contact VizzNet customer services on 020 7177 8000 or email <a href="mailto:help@vizznet.co.uk" title="help@vizznet.co.uk">help@vizznet.co.uk</a>. 
				</li>
			</ol>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>