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
<meta name="viewport" content="width=device-width">
<meta name='Description' content="I'm Notary in London. " />
<meta name='Keywords' content='John Robert, notary' />
<?php include("links.php"); ?>
<!–[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]–>
<title>Notary London UK/ John Robert</title>
</head>
<body>
	<div id="wrapper" class='home'>
    	<header id="head" class="one">
            <nav>
               <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="social">
                    <a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Google plus</a>
                </div>
            </nav>
            <h1><a id="logo">John Robert Notary</a></h1>
    	</header>
        <section id="tabs" class="nested">
            <article data-title="Custom Title" class="two">
                <h2>Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua.</p>
                <a href="#" onClick="myTabs.next(); return false">Finished ? Go to the next tab</a>
            </article>
    
            <article class="three">
                <h2>Title 2</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                 labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                 aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                 dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                  </p>
                 <a href="#" onClick="myTabs.next(); return false">Come back to first tab</a>
            </article>
    
            <article class="fout">
                <h2>Title 3</h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id 
                 est laborum.</p>
                <a href="#" onClick="myTabs.next(); return false">Come back to first tab</a>
            </article>
    
            <article class="five">
                <h2>Title 4</h2>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 onsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                 pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
                 id est laborum.
                 </p>
                <a href="#" onClick="myTabs.next(); return false">Finished ? Go to the next tab</a>
            </article>
            <article class="six">
                <p>Number as name</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur.</p>
                <a href="#" onClick="myTabs.next(); return false">Come back to first tab</a>
            </article>
    </section>
     <section role="main" class="nested">
        <article class="seven">
            <div class="banner"></div>
            <h2>Another article</h2>
            <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
             aliquip ex ea commodo consequat. Duis aute irure dolor in <a href="#">reprehenderit in voluptate</a> velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
              officia deserunt mollit anim id est laborum.</p>
            
        </article>

        <article class="eight">
            <h2>Sample Article</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
            anim id est laborum.</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet.</p>

                <p>- Jean Paul II</p>
            </blockquote>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
             id est laborum.</p>
        </article>
    </section>
    <footer class="nine">
        <p>&copy; Copyright umad 2013 -</p>
    </footer>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
	    var myTabs = new tabs(document.getElementById("tabs"), "article", "h2").responsive("myTabs", {
		    	prev: "Previous",
		    	next: "Next"
		    });
	</script>
</body>
</html>