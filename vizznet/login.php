<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: login.php
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
<title>VizzNet</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='login'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='' title='' src='img/login-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Login</h1>
			<div class='box-checkA'>
				<h3>Customer Login</h3>
				<form action='self-care.php' method='post'>
					<ul class='no-display'>
						<li>
							<input type='text' name='email' class='txt-input' onfocus="if(this.value=='Your email address')this.value='';" onblur="if(this.value=='')this.value='Your email address';" value="Your email address" maxlength="100"/>
						</li>
						<li>
							<input type='password' name='passw' class='txt-input' onfocus="if(this.value=='Password')this.value='';" onblur="if(this.value=='')this.value='Password';" value="Password" maxlength="25"/>
						</li>
					</ul>
					<input class='btn-small specmar' type='submit' value='New User?'>
					<input class='btn-small' type='submit' value='Login'>
				</form>
			</div>
			<div class='box-checkA float-right'>
				<h3>Forgot your Password?</h3>
				<form>
					<ul class='no-display'>
						<li>
							<input type='text' name='email2' class='txt-input' onfocus="if(this.value=='Your email address')this.value='';" onblur="if(this.value=='')this.value='Your email address'; " value="Your email address" maxlength="100"/>
						</li>
						<li>
							<select class='security-qn' name='security-qn'>
							   <option selected="selected" value="">-- Choose from   the list --</option>
							   <option value="Place of birth">Place of birth</option>
							   <option value="Favourite animal">Favourite animal</option>
							   <option value="Name of your pet">Name of your pet</option>
							   <option value="Mothers maiden name">Mother's maiden name</option>
							</select>
						</li>
						<li><input type='text' class='txt-input' name='security-ans' class='selected' /></li>
					</ul>
					<input type='submit' name='reset'  class='btn-small' value='Reset' />
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