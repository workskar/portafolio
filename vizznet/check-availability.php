<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: check-availability.php
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
<title>Check Availability</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='check-availability'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<?php getSubmenu(); ?>
		<section id='content'>
			<h1>Broadband availability check</h1>
			<h2 class='second'>We'll estimate the speed you can get and confirm the price in your area</h2>
			<div class='box-checkA'>
				<h3>Please enter your phone number and postcode to get started.</h3>
				<p>There's no commitment to buy anything at this stage, we'll simply check your phone line and let you know the results.</p>
				<form method="post">
					<ul>
						<li><label>Phone number at your property (without any spaces):</label></li>
						<li><input type='text'></li>
						<li><label for='reg_pcode'>Postcode:</label></li>
						<li>
						<input type='text' id="reg_pcode" value="" maxlength="34" name="reg_pcode">
						<input id="fa-button" class='btn-grey' type='button' name="reg_lookup" value='Find Address'></li>
						<li>
							<select id='return1' class='return1' name='return1'>
								<option value='1'>Select your address</option>
							</select>
						</li>
					</ul>
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