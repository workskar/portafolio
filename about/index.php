<?php
/////////////////////////////////
// v1.0.2
// Author: Karen
// filename: about.php
// Project: Portfolio
$page = 'about';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset='utf-8' />
        <title>About Karen Pasquel / Freelance Front-End Web Developer / Brighton, UK, AUSTRALIA</title>
        <meta name='Description' content="Karen Pasquel is a contract front-end/client-side web developer in London. She has over 4 years of experience developing clean, modern, accesible desktop website in HTML5, CSS3 and jQuery. He also dabbles in web design and back-end development in PHP, although he's not a designer or a back-end web developer." />
        <meta name='Keywords' content='clientes, Karen Pasquel, website, contractor, agile, WordPress, UI, UX, JavaScript, PhotoShop, skills, front-end, CSS, client-side, biography, developer, about, SEO, HTML5, freelance, London, Australia, jQuery' />
        <?php include("../links.php"); ?>
        <!--Comienza nuestro script-->
    </head>
    <body>
        <div id="wrapper">
            <?php include("../header.php"); ?>
            <article class='main_container'>
                <div class='profile'>
                    <h1>KAREN PASQUEL A FRONT-END WEB DEVELOPER</h1>
                    <h2>Living and Working in London UK</h2>
                    <p>An enthusiastic, energetic and self-motivated Front-end Developer, experienced in working with telecommunication, mobile, healthcare, etc industry across Spain and London. I am a reliable and responsible person with a friendly approach and work well as part of a team.</p>
                    <p>
                        My toolbox includes experience in semantic HTML5, CSS3, SASS, and OO JavaScript, jQuerry, AJAX, UI developer, PHP, MySQL. Everything I produce focuses on cross - browser compatibility, on-page SEO, and accessibility. I have experience integrating with PHP and JAVA of back-end environments and development teams.
                    </p>
                    <p>
                        I take great passion in what I do and really enjoy my job. I am curious about new web technologies and always keep my skills up-to-date.
                    </p> 
                    <p>
                        Please do take some time to view my <a href='../index.php'>portfolio</a> which will give you a closer look at my work. If you need further information please do contact me anytime.
                    </p>

                    <p>Apart from all of that:  I like all kind of sports such as: volleyball, yoga, swimming I love to dance, 
                        I like to travel. I really enjoy playing chess.</p>
                </div>
            </article>
            <!-- footer -->
            <?php include("../footer.php"); ?>
        </div>
        <script src="../js/jquery-1.4.4.min.js"></script>
        <script src='../js/jquery.simplemodal.js'></script>
        <script src='../js/contact.js'></script>
    </body>
</html>
