<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: dd-payment.php
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
<title>Account created</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
<!-- script pop up -->
<script LANGUAGE='JavaScript'>
// Ventanas PopUP
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=380,left = 212,top = 184');");
}
</script>
<!-- fin script -->
</head>
<body>
	<article id='main' class='account-created'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<section id='content'>
			<div class='box-checkA'>
				<p>Your account has been created. Your Direct Debit welcome letter will be sent in the next 3 working days and an advanced notice will be sent no later than 10 working days prior to the collection date.</p>
				
				<p>Click continue to proceed with your subscription</p>
				<input type='button' class='btn-small' value='Continue' onclick="javascript:popUp('http://localhost:81/vizznet/guarantee.html')">
			</div>
		</section>
		
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>