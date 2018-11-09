<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: rss.php
    // Project: Vizz Net
    //
    // Notes:
    //
    // Log:
	include("header.php");
	$content="";
	if(isset($_GET['id']))
	{
		$contArray = array("getOpen('sub-account','sub-slide-show')", "scriptFunction1()", "scriptFunction2()","scriptFunction3()");
		$content = $contArray [$_GET['id']];
	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>VizzNet</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
<link rel='stylesheet' href='css/rss.css' />
</head>
<body onload="<?php echo $content; ?>;">
	<article id='main' class='rss'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<section id='content'>
			<script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fstatus.bememberservices.com%2Frss.asp&chan=y&desc=1&date=y&targ=y&utf=y"  charset="UTF-8" type="text/javascript"></script>

<noscript>
<a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fstatus.bememberservices.com%2Frss.asp&chan=y&desc=1&date=y&targ=y&utf=y&html=y">View RSS feed</a>
</noscript>


			
		</section>
		<section id='right-col'>
			<?php   include("in-self-care.php");  ?>
		</section>
	</article>    <!-- page-main -->
	<?php   include("footer.php");  ?>
	<script type="text/javascript">
function getOpen(id,newClass2){
	document.getElementById(id).className=newClass2;
}
function getSubmenu(id, newClass1, newClass2){
	if (document.getElementById(id).className == newClass1){
		$(document.getElementById(id)).slideDown('slow');
		document.getElementById(id).className=newClass2;
	}else{
		$(document.getElementById(id)).hide('slow');
		document.getElementById(id).className=newClass1;
	}
	
}
</script>
</body>
</html>