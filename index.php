<?php
    /////////////////////////////////
    // v1.0.2
    // Author: Karen
    // filename: index.php
    // Project: Portfolio
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset='utf-8' />
<meta name='Description' content="I'm freelance front-end/client-side web developer based in London. I develop cross-browser compatible, search engine optimised, and pixel-perfect website interfaces in HTML5, CSS3, jQuery, Ajax, javascript; and integrate with PHP5, MySql, SQL server. I'm confiable developer, I like to work with a team" />
<meta name='Keywords' content='Karen Pasquel, fron-end, homepage, HTML5, CSS3, AJAX, jQuery, PHP5, MySQL, client-side, contractor, permanent, SEO, WordPress, London, Website, freelance, portfolio, developer, Javascript' />
<?php include("links.php"); ?>
<title>Freelance Front-End Web Developer London UK/ Karen Pasquel</title>
</head>
<body>
	<div id="wrapper" class='home'>
		<?php include("header.php"); ?>
        <section class='main_container'>
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
                <h1>This is changing styles</h1>
                
                <section>This a new content for the portfolio</section>
                
<!--                <div class="carousel">  BEGIN CONTAINER -->
<!--                    <div class="slides">  BEGIN CAROUSEL -->
<!--						<div>  SLIDE ITEM -->
<!--                            <a class='link-show' href="project-niume.html" data-title='niume'>-->
<!--                                <img src="img-niume/landing_page.png" alt='Niume Ltd' title='Niume Ltd'>-->
<!--                            </a>    -->
<!--                        </div>-->
<!--                        <div>  SLIDE ITEM -->
<!--                            <a class='link-show' href="project-niume.html" data-title='niume'>-->
<!--                                <img src="img-niume/landing_2.png" alt='Niume ltd' title='Niume ltd'>-->
<!--                            </a>    -->
<!--                        </div>-->
<!--
                        <div>
                            <a class='link-show' href="project-niume.html" data-title='niume'>
                                <img src="img-niume/landing_4.png" alt='Niume ltd' title='Niume ltd'>
                            </a>
                        </div>
                        
                        <div>
                            <a class='link-show' href="project-niume.html" data-title='niume'>
                                <img src="img-niume/post_page01.png" alt='Niume ltd' title='Niume ltd'>
                            </a>
                        </div>
                        
                        <div>
                            <a class='link-show' href="project-vizznet.html" data-title='vizznet'>
                                <img src="img-vizznet/home.jpg" alt='Vizz Net' title='Vizz Net'>
                            </a>
                        </div>
                        <div>
                            <a class='link-show' href="project-yoigo.html" data-title='yoigo'>
                                <img src="img-yoigo/home.jpg" alt='Yoigo' title='Yoigo'>
                            </a>
                        </div>
-->
<!--                    </div>  END SLIDES -->
<!--                </div>  END CAROUSEL -->
            </div>
        </section>
        <div  id="loader">
                <span>loading</span>
        </div>
        <!-- footer -->
        <?php include("footer.php"); ?>
    </div>
<script src="js/jquery-1.4.4.min.js"></script>
<!--carousel script-->
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.carousel-1.1.min.js"></script>
<script src="js/scripts.js"></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/contact.js'></script>
</body>
</html>
