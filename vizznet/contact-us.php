<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: contact-us.php
    // Project: VizzNet
    //
    // Notes:
    //
    // Log:
	include("header.php");
	require_once('customer_dv.php');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Contact Us</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='contact-us'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='contact us banner' title='contact us banner' src='img/contact-banner.jpg'>
		</div>
		<section id='content'>
			<section id='col1-outer'>
				<form id='cfrm' action='contact_email.php' method='post' onsubmit="return submitCheck(this);">
					<div id='contactfrm'>
						<ul>
							<li>
								<label for='fullname'>Full Name</label>
								<input name='fullname' type='text' id='fullname' class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='email'>Email Address</label>
								<input name='email' type='text' id='email' class='textin vemail'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='reg_pcode'>Post Code</label>
								<input name='reg_pcode' type='text' id='reg_pcode' class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='reg_addr1'>Address line 1</label>
								<input name='reg_addr1'   type='text' id='reg_addr1'   class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='reg_addr2'>Address line 2</label>
								<input name='reg_addr2'   type='text' id='reg_addr2'   class='textin'/>
							</li>
							<li>
								<label for='reg_tcity'>Town/City</label>
								<input name='reg_tcity'   type='text' id='reg_tcity'   class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='reg_county'>County</label>
								<input name='reg_county'   type='text' id='reg_county'   class='textin'/>
							</li>
							<li>
								<label for='dynumber' class='first'>Phone/Mobile</label>
								<input name='dynumber' type='text' id='dynumber' class='textin'/>
							</li>
							<li>
								<label for='onumber'>Mobile Number</label>
								<input name='onumber' type='text' id='onumber' class='textin'/>
							</li>
							<li>
								<label for='howfind'>How did you find us?</label>
								<!--input name='howfind' type='text' id='howfind' class='textin'/-->
								<select name='howfind' id='howfind' class='textin' >
								<?php
									foreach($reg_howhear_choices as $val)
										echo "<option>$val</option>"; ?>
								</select>
							</li>
							<li>
								<p class='ta-label' >Message</p>
								<textarea name='message' id='message' class='min2'></textarea>
								<span class='redstar'>*</span>
							</li>
						</ul>
					</div>
					<div id='subbuts'>
						<input type="reset" value="Reset" name="Cancel" class='btn-small' />
						<input type="submit" value="Submit" name="Submit" class='btn-small' />
					</div>
					<p class='red'><span class='redstar'>*</span>&nbsp;Mandatory field</p>
				</form>
			</section>
			<section id='col2-outer'>
				<h2>By Phone</h2>
				<p class='boldp lastp'>020 7177 8000</p>
				<h2>By Email</h2>
				<p class='boldp lastp'>help@vizznet.co.uk</p>
				<h2>By Post</h2>
				<p class='lastp'>
					VizzNet<br />
					Support Team<br />
					PO Box 317<br />
					Hampton<br />
					TW12 9BR
				</p>
			</section>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
<?php require_once 'validate_dv.php'; ?>
<script src="js/dypcaw.js"></script>
<script src="js/addPcodeLkup.js"></script>
</body>
</html>