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
<title>DD Payment</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
<script type="text/javascript">
<!--
var downStrokeField;
function autojump(fieldName,nextFieldName,fakeMaxLength){
var myForm=document.forms[document.forms.length - 1];
var myField=myForm.elements[fieldName];
myField.nextField=myForm.elements[nextFieldName];
if (myField.maxLength == null)
myField.maxLength=fakeMaxLength;
myField.onkeydown=autojump_keyDown;
myField.onkeyup=autojump_keyUp;
}
function autojump_keyDown(){
this.beforeLength=this.value.length;
downStrokeField=this;
}
function autojump_keyUp(){
if (
(this == downStrokeField) &&
(this.value.length > this.beforeLength) &&
(this.value.length >= this.maxLength)
)
this.nextField.focus();
downStrokeField=null;
}
//-->
</script>
</head>
<body>
	<article id='main' class='dd-payment'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/small-banner.jpg'>
		</div>
		<section id='content'>
			<h1>DD Payment</h1>
			<div class='box-checkA'>
				<form name='formD' action='details-confirmation.php' method='post' onsubmit='return submitCheck(this);'>
					<ul class='no-display'>
						<li>
							<label>Account name: <span class='redstar'>*</span></label>
							<input type='text' class='txt-input nonz' placeholder='Account name' name='account-name'>
							
						</li>
						<li>
							<label>Sort code: <span class='redstar'>*</span></label>
							<input type='text' class='txt-input sort nonz' maxlength='2' name='sortcode1'> - 
							<input type='text' class='txt-input sort nonz' maxlength='2' name='sortcode2'> - 
							<input type='text' class='txt-input sort nonz' maxlength='2' name='sortcode3'>
						</li>
						<li>
							<label>Account number: <span class='redstar'>*</span></label>
							<input type='text' class='txt-input medium nonz' name='account-number' maxlength='8' placeholder='Account number'> 
						</li>
					</ul>
					<p>By clicking this button I confirm that I am the account holder:</p>
					<input class='btn-big' type='submit' value='Update your payment details'>
				</form>
				<SCRIPT TYPE="text/javascript">
				<!--
				  autojump('sortcode1', 'sortcode2', 2);
				  autojump('sortcode2', 'sortcode3', 2);
				  autojump('sortcode3', 'account-number', 2);
				  //-->
				</SCRIPT>
			</div>
			<aside id='information'>
				<h2>Collection date will be:</h2> 
				<p>on the 15th  on the month. An advanced notice will be received no later than 10 working days prior to the collection date.</p>
			</aside>
			
			<div class='footpayment'>
			<hr>
				<p>Instruction to your bank/building society to pay by Direct Debit.
					All Direct Debits are protected by the Direct Debit Guarantee.
				</p>
				<div class='logodd'>
					<img src='img/Direct_Debit_logo.jpg'>
					<p>Originator's ID: 942710</p>
				</div>
			</div>
		</section>
		
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
	<?php require_once 'validate_dv.php'; ?>
	<script src="js/dypcaw.js"></script>
	<script src="js/addPcodeLkup.js"></script>
</body>
</html>