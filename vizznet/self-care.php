<?php
// 
    /////////////////////////////////
    // v1.0
    // Author: Karen Pasquel
    // filename: self-care.php
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
<title>Self Care</title>
<meta name='Description' content='' />
<meta name='Keywords' content='' />
<?php   getLinks();  ?>
</head>
<body>
	<article id='main' class='self-care'>
		<?php   getHead();  ?>
		<div class='center-image'>
			<img alt='Banner' title='Banner' src='img/general-banner.jpg'>
		</div>
		<section id='content'>
		</section>
		<section id='right-col'>
			<?php   include("in-self-care.php");  ?>
		</section>
	</article>
	<?php   include("footer.php");  ?>
<script type="text/javascript">
function getSubmenu(id, newClass1, newClass2){
	if (document.getElementById(id).className == newClass1){
		$(document.getElementById(id)).slideDown('slow');
		document.getElementById(id).className=newClass2;
	}else{
		$(document.getElementById(id)).hide('slow');
		document.getElementById(id).className=newClass1;
	}
	
}
/*function getSubmenu(id, newClass1, newClass2)
{
   
	var identity=document.getElementById(id);
    if(hasClass(identity, newClass1)){
        identity.className=newClass2;
        //here.firstChild.innerHTML='-';
		
    }
    else{
        identity.className=newClass1;
        //here.firstChild.innerHTML='+';
    }
}
function hasClass(elem, cls)
{
  if(elem && elem.className)
    return elem.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
  return null;
}*/
</script>
</body>
</html>