<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posters</title>
    <link rel="stylesheet" href="dist/css/logos.css" media="screen">

    <!--FAVICON CODE-->
    <link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="dist/favicon/site.webmanifest">
</head>
<body>
<div class="navContainer">

    <header id="top">
        <div class="wrapper">
            <div class="logoAndHam">
                <span class="hamburger" id="openNav">&#9776;</span><!--Hamburger Icon-->
                <div class="logoName">
                    <a href="index.html" class="showHome">
                        <picture>
                            <source media="(max-width: 360px)" srcset="dist/imgs/optimized/logo-234x234.png">
                            <source media="(max-width: 768px)" srcset="dist/imgs/optimized/logo-234x234.png">
                            <source media="(min-width: 769px) and (max-width: 1200px)" srcset="dist/imgs/optimized/logo-350x350.png">
                            <source media="(min-width: 1201px)" srcset="dist/imgs/optimized/logo-195x150.gif">
                            <img class="logo" src="dist/imgs/optimized/logo-234x234.png" alt="logo">
                        </picture>
                    </a>
                </div><!--LogoName-->
            </div><!--Logo and hamburger icon-->
        </div><!--wrapper-->
    </header><!--header-->

    <div class="wrapper">
        <nav class="topNav">
            <div class="navItemHome">
                <a href="index.html" class="removeUnderscore">
                    <p class="txtNav">Home</p>
                </a>
            </div><!--navItemHome-->
            <div class="navItemAboutMe">
                <a href="index.html#aboutMe" class="removeUnderscore">
                    <p class="txtNav">About Me</p>
                </a>
            </div><!--navItemAboutMe-->
            <div class="navItemMySkills">
                <a href="index.html#mySkills" class="removeUnderscore">
                    <p class="txtNav">My Skills</p>
                </a>
            </div><!--navItemMySkills-->
            <div class="navItemMyProjects">
                <a href="index.html#myProjects" class="removeUnderscore">
                    <p class="txtNav">My Projects</p>
                </a>
            </div><!--navItemMyWork-->
            <div class="navItemTestimonials">
                <a href="index.html#testimonial" class="removeUnderscore">
                    <p class="txtNav">Testimonials</p>
                </a>
            </div><!--navItemBlog-->
            <div class="navItemContactForm">
                <a href="index.html#contactForm" class="removeUnderscore">
                    <p class="txtNav">Contact Form</p>
                </a>
            </div><!--navItemContactForm-->
        </nav>
    </div><!--wrapper-->

    <div class="wrapper2">
        <main>
            <div class="logos" id="myLogos">
                <h1 class="title">Logos</h1>
                <div class="jcarousel">
                    <ul class="alignHorizontal">
                        <li class="logo1">
                            <i class="sprite sprite-logo-234x234"></i>
                        </li>
                        <li class="logo2">
                            <i class="sprite sprite-logo-optimized"></i>
                        </li>
                        <li class="logo2">
                            <i class="sprite sprite-logo-1a"></i>
                        </li>
                        <li class="">
                            <div class="logoDiv">
                                <i class="sprite sprite-logo-1b"></i>
                            </div>
                        </li>
                        <li class="">
                            <div class="logoDiv">
                                <i class="sprite sprite-logo-1a"></i>
                            </div>
                        </li>
                        <li class="logo5">
                            <i class="sprite sprite-logo-1c---for-website-300x166"></i>
                        </li>
                        <li class="">
                            <i class="sprite sprite-logo-2a"></i>
                        </li>
                        <li class="">
                            <i class="sprite sprite-logo-2c"></i>
                        </li>
                        <li class="">
                            <i class="sprite sprite-logo-3a"></i>
                        </li>
                        <li class="logo9">
                            <i class="sprite sprite-LogoSWS"></i>
                        </li>
                        <li class="logo10">
                            <a href="dist/docs/final%20touches.pdf" download>
                                <i class="sprite sprite-final-touches-568x400"></i>
                            </a>
                        </li>
                    </ul>
                </div><!--jcarousel-->
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
            </div><!--myPosters-->
        </main>
    </div><!--/wrapper-->

    <footer class="wrapper">
        <div class="rowSiteMapSocial">
            <div class="colSiteMap">
                <p class="txtSM">Sitemap</p>
                <nav id="nav2" class="links">
                    <ul>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html" >Home</a></li>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html#aboutMe">About Me</a></li>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html#mySkills">My Skills</a></li>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html#myProjects">My Projects</a></li>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html#testimonial">Testimonials</a></li>
                        <li class="linkSpace"><a class="linkSiteMap" href="index.html#contactForm">Contact Form</a></li>
                    </ul>
                </nav><!--sitemap first column-->
            </div><!--colSitemap-->
        </div><!-- rowSiteMapSocial-->
        <div class="base">Cambridge, UK</div><!--Copyright-->
    </footer><!--Sitemap-->

</div><!--navContainer-->

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="dist/js/jquery.carousel.js"></script>
<script src="dist/js/jcarousel.responsive.js"></script>
</body>
</html>