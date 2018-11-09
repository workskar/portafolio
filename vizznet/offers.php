<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: support.php
    // Project: VizzNet
    //
    // Notes:
    //
    // Log:
	include("header.php");
	
	$space1 = 0;
	$space2 = 112;
	$space3 = 112+112;
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Support</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='offers'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Support banner' title='Support banner' src='img/support-banner.jpg'>
		</div>
		<section id='content'>
			<h1>Vizz Net Special Offers when you join</h1>
			<div id='cont-boxs'>
				<a onmouseover="scriptFunction('cont-red')" onmouseout="scriptFunction('cont-red')">
					<div class='box redof'>
						<span class='title-off'>Free &pound;10 Credit<br>to Vizz Mobile</span>
					</div>
				</a>
				<a onmouseover="scriptFunction('cont-orange')" onmouseout="scriptFunction('cont-orange')">
					<div class='box orangeof'>
						<span class='title-off'>Free Mobile<br>Internet</span>
					</div>
				</a>
				<a onmouseover="scriptFunction('cont-green')" onmouseout="scriptFunction('cont-green')">
					<div class='box greenof'>
						<span class='title-off'>Contract Reduced<br>to 6 Months</span>
					</div>
				</a>
			</div>
			<div id='space' class='color-red'>
			</div>
			<div id='cont-red' class='text-offer'>
				<p>When you top up your tttttttttttttttttttttttttt sssssssssss ssssssssssss sssssssssssssss sssssssssss ssssssssssss 
					ssssssssssssssssssssssss sss sss
				</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<a class='linkp' href='#'>Select your package now</a>
			</div>
			<div style='display:none;' id='cont-orange' class='text-offer'>
				<p>When you top up your tttttttttttttttttttttttttt sssssssssss ssssssssssss sssssssssssssss sssssssssss ssssssssssss 
					ssssssssssssssssssssssss sss sss
				</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<a class='linkp' href='#'>Select your package now</a>
			</div>
			<div style='display:none;' id='cont-green' class='text-offer'>
				<p>When you top up your tttttttttttttttttttttttttt sssssssssss ssssssssssss sssssssssssssss sssssssssss ssssssssssss 
					ssssssssssssssssssssssss sss sss
				</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<p>When you top up your tttttttttttttttttttttttttt</p>
				<a class='linkp' href='#'>Select your package now</a>
			</div>
		</section>
		<section id='right-col'>
			<?php   include("in-promotions.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
<script type='text/javascript'>
control=0;

function scriptFunction(contopen)
{
	if(contopen=='cont-red'){
		document.getElementById('space').className='color-red';
		document.getElementById(contopen).style.display='';
		document.getElementById('cont-orange').style.display = 'none';
		document.getElementById('cont-green').style.display = 'none';
	}
	if(contopen=='cont-orange'){
		document.getElementById('space').className='color-orange';
		//$(document.getElementById(contopen)).hide().fadeIn('slow');
		document.getElementById(contopen).style.display='';
		document.getElementById('cont-red').style.display = 'none';
		document.getElementById('cont-green').style.display = 'none';
	}
	if(contopen=='cont-green'){
		document.getElementById('space').className='color-green';
		//$(document.getElementById(contopen)).hide().fadeIn('slow');
		document.getElementById(contopen).style.display='';
		document.getElementById('cont-red').style.display = 'none';
		document.getElementById('cont-orange').style.display = 'none';
	}
    
}
</script>
</body>
</html>