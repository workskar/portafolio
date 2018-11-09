<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: customer-details.php
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
<title>Details customer</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='customer-details'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Business banner' title='Business banner' src='img/business-banner.jpg'>
		</div>
		<section id='content'>
		<h1>Our great broadband packages</h1>
			<form id='cfrm' action='customer_require.php' method='post' onsubmit="return submitCheck(this);">
				<div id='contactfrm'>
						<ul>
							<li>
								<label for='fullname'>Name</label>
								<input name='fullname' type='text' id='fullname' class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='DSLnumber'>DSL number</label>
								<input name='DSLnumber' type='text' id='DSLnumber' class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li class='postCode'>
								<label for='postcode'>Post Code</label>
								<input name='postcode' type='text' id='postcode' class='textin nonz'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='dynumber' class='first'>Mobile</label>
								<input name='dynumber' type='text' id='dynumber' class='textin nonz'/>
							</li>
							<li>
								<label for='email'>Email</label>
								<input name='email' type='text' id='email' class='textin vemail'/><span class='redstar'>*</span>
							</li>
							<li>
								<label for='preftime'>Preferred date/time<br>to be contacted</label>
								<input name='preftime' type='text' id='preftime' class='textin nonz'/><span class='redstar'>*</span>
							</li>
						</ul>
					</div>
					<div id='subbuts'>
						<input type="submit" value="Submit" name="Submit" class='btn-small' />
					</div>
					<p class='red'><span class='redstar'>*</span>&nbsp;Mandatory field</p>
			</form>
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