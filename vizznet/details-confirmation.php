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
	echo $_POST['account-name'];
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Confirmation</title>
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
			<h1>Bank Details Confirmation</h1>
			<div class='box-checkA'>
				<form action='account-created.php' method='post'>
					<ul class='no-display'>
						<li>
							<label>Account name:</label><input type='text' class='txt-input' value='<?php echo $_POST['account-name']; ?>'>
						</li>
						<li>
							<label>Sort code: </label>
							<input type='text' class='txt-input sort' maxlength='2' name='sortcode1' value='<?php echo $_POST['sortcode1']; ?>'> - 
							<input type='text' class='txt-input sort' maxlength='2' name='sortcode2' value='<?php echo $_POST['sortcode2']; ?>'> - 
							<input type='text' class='txt-input sort' maxlength='2' name='sortcode3' value='<?php echo $_POST['sortcode3']; ?>'>
						</li>
						<li>
							<label>Account number: </label>
							<input type='text' class='txt-input medium' name='account' maxlength='8' value='<?php echo $_POST['account-number']; ?>'> 
						</li>
					</ul>
					<input class='btn-small' type='submit' value='Submit'>
				</form>
				<SCRIPT TYPE="text/javascript">
				<!--
				  autojump('sortcode1', 'sortcode2', 2);
				  autojump('sortcode2', 'sortcode3', 2);
				  autojump('sortcode3', 'account', 2);
				  //-->
				</SCRIPT>
			</div>
			
		</section>
		
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
</body>
</html>