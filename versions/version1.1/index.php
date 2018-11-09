<?php
    /////////////////////////////////
    // v1.0.2
    // Author: Karen
    // filename: index.php
    // Project: Portfolio
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title>Freelance Front-End Web Developer London UK/ Karen Pasquel</title>
<meta name='Description' content="I'm freelance front-end/client-side web developer based in London. I develop cross-browser compatible, search engine optimised, and pixel-perfect website interfaces in HTML5, CSS3, jQuery, Ajax, javascript; and integrate with PHP5, MySql, SQL server. I'm confiable developer, I like to work with a team" />
<meta name='Keywords' content='Karen Pasquel, fron-end, homepage, HTML5, CSS3, AJAX, jQuery, PHP5, MySQL, client-side, contractor, permanent, SEO, WordPress, London, Website, freelance, portfolio, developer, Javascript' />
   <link rel="Stylesheet" type="text/css" href="css/content.css?v=1" />
    <link rel="Stylesheet" type="text/css" href="css/carousel_description.css" />
<link rel="Stylesheet" href="css/project.css" >
<?php include("links.php"); ?>
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
<!--carousel script-->
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.carousel-1.1.min.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css" type="text/css" /-->
<script src="js/sample04.js"></script>
<!--Comienza nuestro script-->
<script src="js/loadv1.js"></script>
</head>
<body class='home'>
	
	<?php include("header.php"); ?>
	<article class='main_container'>
		<div class='cont-carousl'>
			<!-- carousel -->
			<noscript>
				<div class="noscript">
				<p>For this website to work properly, you must enable JavaScript in your browser.</p>
				<p>
					This <a href="http://www.enable-javascript.com/" target="_blank">link</a> will give you instructions on how to enable JavaScript in your browser
				</p>
				</div>
			</noscript>
			<div class="carousel"> <!-- BEGIN CONTAINER -->
				<div class="slides"> <!-- BEGIN CAROUSEL -->
					<div> <!-- SLIDE ITEM -->
						<a class='link-show' href="project-dvizz.html" data-title='dialog'>
							<img src="img-dialog/home.jpg" alt='Dialog Vizz' title='Dialog Vizz'>
						</a>    
					</div>
					<div>
						<a class='link-show' href="project-qicomm.html" data-title='qicomm'>
							<img src="img-qicomm/home.jpg" alt='QiComm' title='QiComm'>
						</a>
					</div>
					<div>
						<a class='link-show' href="project-tutis.html" data-title='tutis'>
							<img src="img-tutis/home.jpg" alt='Tutis' title='Tutis'>
						</a>
					</div>
					<div>
						<a class='link-show' href="project-vizznet.html" data-title='vizznet'>
							<img src="img-vizznet/home.jpg" alt='Vizz Net' title='Vizz Net'>
						</a>
					</div>
					<div>
						<a class='link-show' href="project-roshan.html" data-title='vizzroshan'>
							<img src="img-roshan/home.jpg" alt='Vizz Roshan' title='Vizz Roshan'>
						</a>
					</div>
					<div>
						<a class='link-show' href="project-yoigo.html" data-title='yoigo'>
							<img src="img-yoigo/home.jpg" alt='Yoigo' title='Yoigo'>
						</a>
					</div>
				</div> <!-- END SLIDES -->
			</div> <!-- END CAROUSEL -->
		</div>
	</article>
	<div  id="loader">
			<span>loading</span>
	</div>
	<!-- footer -->
	<?php include("footer.php"); ?>
	
</body>
</html>
