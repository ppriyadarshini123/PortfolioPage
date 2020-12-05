<?php

ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio Home page</title>
        <link rel="stylesheet" href="dist/css/index.css" media="screen">
       
        <!--FAVICON CODE-->
        <link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
        <link rel="manifest" href="dist/favicon/site.webmanifest">
        <!--    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
         
    </head>
    <body>
         <!-- Home Search Modal -->
        <div class="modal" id="modalHomeSearch" tabindex="-1" role="dialog" aria-labelledby="modalHomeSearchTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHomeSearchTitle">My Journey - Home Search</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6> PHP, MySQL, XAMPP, MySQL Transactions, Javascript, JQuery, Gulp, Browser Sync<hr>
                        <h6>The Course : </h6><p>This project was based on the PHP Module of Web Designing Career Programme by Training Dragon. It covered PHP and MySQL. It was a 4 day course which covered topics like PHP Programming, PHP Functions, PHP Global variables, MySQL Queries, Making an ECommerce Website with Content Management System with different user roles. This course covered a lot of hands-on exercises.  </p>

                        <h6>The making of Project : </h6><p>This Web Design Project started by creating <a href="./dist/docs/Payal_Priyadarshini_PHP_Project_Proposal.pdf">proposal document</a> and making of the HTML template. I also made the <a href="index.php#myProjects" data-toggle="popover3" title="Home Search Logo">Logo</a>. The project started with making of the Home Page and preparing the database. This project was created as a dummy website to practice basic CRUD operations using PHP and MySQL.   </p>

                        <h6>What I learnt : </h6><p>I thoroughly enjoyed making this project. It brought me back to Full stack web development which I left 10 years ago. I revised CRUD programming and working with database, which is still my favourite.</p>

                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>

                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalHomeSearch-->

        
        
        <!--A Modal should be added on the top level element. Do not move it from here. Modals use position: fixed, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You�ll likely run into issues when nesting a .modal within another fixed element.-->
        <!-- Nutritionist Modal -->
        <div class="modal" id="modalNutritionist" tabindex="-1" role="dialog" aria-labelledby="modalNutritionistTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalNutritionistTitle">My Journey - Nutritionist - Responsive Web Design project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>Responsive Web Design, Media queries<hr>

                        <h6>The Course : </h6><p>This project was based on the Mobile Web Design Course in Web Designing Career Programme by Training Dragon. This course was part of a 4 day course which also covered topics like Bootstrap, SASS, NodeJS Tools, GIT & GITHUB.

                            This course covered metatags, favicons, picture element, media queries, Embed responsively website tool, multidevice layout pattern e.g. mostly fluid, column drop, layout shifter, tiny tweaks, off canvas etc
                        </p>

                        <h6>The making of
                            Project :
                        </h6><p>This Responsive
                            Web Design Project
                            started by creating
                            wireframe ( <a href="./Wireframe&Mockup/nutritionist.html">Wireframe</a> ) and ( <a href="index.php#myProjects" data-toggle="popover" title="Nutritionist Logo">Logo</a>) .
                            I had used an open source software for creating wireframes/mockups called Pencil Project. My tutor, Emiliano guided me very well during the Project.
                            I had proposed to make a website for nutritionist. I would build 2 pages: Homepage and Recipes page. There will be 2 layout shifts and column drop in both the pages.
                            The navigation will also have 2 layout shifts. I would implement 'the toggle'. He suggested a lot of improvements in making wireframes & Mockups.
                            He suggested best practices, consistent look of website, advised to research, suggested to improve the look and feel of website, an eye for detail, professional approach,
                            considering negative space . After getting a GREEN light to the wireframe and mockup, I started building the website by constantly updating my code in GITHUB.
                            The journey in building the project involved a lot of changes in look and feel of the website as Emiliano ensured that the website looked modern and user friendly.
                            He had high expectations from me for the website.</p>

                        <h6>What I learnt : </h6><p>I learnt a lot during the building of this project. I researched in the colour scheme and visited various websites for understanding how to make it more eye catching and user friendly. I learnt how to make wireframe & mockup. I also experimented with different looks to present images. It was quite a challenging project for me. </p>

                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalNutritionist-->

        <!-- News Website Modal -->
        <div class="modal" id="modalNewsWebsite" tabindex="-1" role="dialog" aria-labelledby="modalNewsWebsiteTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalNewsWebsiteTitle">My Journey - News Website</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6> HTML5, CSS, CSS Positioning, basic Javascript<hr>
                        <h6>The Course : </h6><p>This project was based on the first module of Web Designing Career Programme by Training Dragon. It covered HTML5, CSS3 and basic Javascript. It was a 4 day course which covered topics like Headings, paragraphs, div, image, anchors, lists in HTML. I had used HTML about 9 years ago and this course refreshed my knowledge of it. The course covered best practices, keyboard shortcuts in WebStorm, creating wireframes, mockups, using HTML and CSS validators etc. In CSS, we covered basic CSS, absolute and relative positioning and also provided opportunity to do projects as exercises. In basic Javascript, topics like basic event handler and web hosting were discussed.</p>

                        <h6>The making of Project : </h6><p>This Web Design Project started by creating wireframe and mockups (<a href="./Wireframe&Mockup/newsWebsite.html">Wireframe & Mockup</a> ). I had used an open source software for creating wireframes/mockups called Pencil Project. My tutor, Emiliano guided me very well during the Project.  He suggested best practices, advised to research, suggested to improve the look and feel of website etc . After getting a GREEN light to the wireframe and mockup, I started building the website by constantly updating my code in GITHUB. The journey in building the project involved a lot of changes in look and feel of the website as Emiliano ensured that the website looked modern and user friendly. He had high expectations from me for the website.</p>

                        <h6>What I learnt : </h6><p>I learnt a lot during the building of this project. I researched in the colour scheme and visited various websites for understanding how to make it more eye catching and user friendly.</p>

                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>

                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalNewsWebsite-->

        <!-- Tours & Travels Modal -->
        <div class="modal" id="modalToursTravels" tabindex="-1" role="dialog" aria-labelledby="modalToursTravelsTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalToursTravelsTitle">My Journey - Tours & Travels - Javascript & JQuery Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills
                            used:</h6>HTML, CSS, Javascript, JQuery<hr>

                        <h6>The Course :
                        </h6><p>This project was based on the second module of Web Designing Career Programme by Training Dragon. It covered Javascript & JQuery. It was a 2 days course which covered topics like undefined variables, Constants, Operators and Statements, Basic Operators, Conditional Statements, Conditional Operators, Logical Operators, Loops: while, do, for in Javascript. In JQuery, topics like jQuery Selectors, Properties and Attributes, jQuery Events, Animations and Effects, jQuery UI Library etc were covered. I had never formally learnt Javascript & JQuery, therefore this was my first time learning.</p>

                        <h6>The making of Project :
                        </h6><p>This Javascript & JQuery Project started by creating mockups( <a href="./Wireframe&Mockup/javascript_jquery.html">Mockup</a> ). I had used an open source software for creating mockups called Pencil Project. My tutor, Emiliano guided me very well during the Project.  He suggested best practices, advised to research, suggested to improve the look and feel of website etc . After getting a GREEN light to the mockup, I started building the website by constantly updating my code in GITHUB. The journey in building the project involved a lot of changes in look and feel of the website as Emiliano ensured that the website looked modern and user friendly. He had high expectations from me for the website. This project is not responsive and is only visible on laptop(viewport size >1200px)</p>

                        <h6>What I learnt : </h6><p>I learnt a lot during the building of this project. I researched in the colour scheme and visited various websites for understanding how to make it more eye catching and user friendly. I also edited images using Adobe Photoshop. I learnt problem solving skills and an eye for details. </p>

                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalToursTravels-->

        <!-- Timebank -->
        <div class="modal" id="modalTimebank" tabindex="-1" role="dialog" aria-labelledby="modalTimebankTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTimebankTitle">My Journey - Cambourne Timebank website - WordPress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>WordPress<hr>
                        <h6>The making of Project :</h6>
                        <p>I started volunteering as a Website Administrator for Cambourne Timebank since Nov. 2019. I am part of the Cambourne Timebank Management Committee. It consists of 9 members. The Management Committee meets almost every month to discuss the progress of the website and other issues.  </p>
                        <p>My responsibility includes to take care of all aspects of the websites, starting from deciding on the Web hosting service, setup the website from scratch on WordPress, making ( <a href="index.php#myProjects" data-toggle="popover2" title="Cambourne Timebank Logo">Logo</a> ) for Cambourne Timebank, good look and feel of the website and keeping it up to date with all the latest and relevant information. This website is still on the Staging Server.</p>
                        <h6>What I learnt : </h6>
                        <p>This project became a very good learning experience for me as I am learning how to communicate with the team and being a team player. I also am working with templates and Elementor in WordPress for the first time.</p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalTimebank-->

        <!-- This portfolio  -->
        <div class="modal" id="modalPortfolio" tabindex="-1" role="dialog" aria-labelledby="modalPortfolioTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPortfolioTitle">My Journey - This Portfolio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>PHP,HTML, CSS, Javascript, WebGL, Graphic Design, Adobe Illustrator, JQuery, Bootstrap, Media Queries<hr>

                        <h6>The making of Project :</h6>
                        <p>While making this project,
                            I have learnt a lot. I have used Image optimization, CSS Sprites, played with GZip Compression to improve the performance of the website.</p>
                        <h6>What I learnt : </h6>
                        <p>I learnt a lot  while making this project. I tried different things and challenged my imagination.</p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalPortfolio-->

        <!-- ECommerce -->
        <div class="modal" id="modalECommerce" tabindex="-1" role="dialog" aria-labelledby="modalECommerceTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalECommerceTitle">My Journey - ECommerce website - WordPress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>WordPress, External CSS<hr>
                        <h6>The Course :
                        </h6><p>This project was based on the third module of Web Designing Career Programme by Training Dragon. It covered WordPress. It was a 2 days course which covered topics like WordPress installation, Themes, configuring WordPress, Plugins, managing media, CMS, administration & security.  I had never formally learnt WordPress, therefore this was my first time learning.</p>
                        <h6>The making of Project :</h6>
                        <p>This WordPress Project started by giving a proposal to my Tutor. I had suggested the following:</p>
                        <p><b>Theme:</b> Bard</p>
                        <p><b>Plugins used:</b><p>

                        <p><b>WooCommerce</b> - for shipment and payment options</p>

                        <p><b>MailChimp</b> - for user login and registering</p>

                        <p><b>Product Catalog</b> - easily customizable for all your product catalog needs</p>

                        <p><b>Profile Builder</b> - Login, registration and edit profile shortcodes for the front-end.</p>

                        <p><b>WooCommerce PayPal Checkout Gateway</b> - A payment gateway for PayPal Checkout</p>

                        <p><b>WP Google Maps</b> - The easiest to use Google Maps plugin</p>

                        My tutor, Emiliano guided me very well during the Project.  He suggested best practices, advised to research, suggested to improve the look and feel of website etc . After getting a GREEN light to the proposal, I started building the website by constantly updating my code in GITHUB.I had created an external CSS - child theme and had named it bard-child. Emiliano ensured that the website looked modern and user friendly. He had high expectations from me for the website.

                        <h6>What I learnt : </h6>
                        <p>I learnt a lot during the building of this project. I researched in the different plugins and visited various websites for understanding how to make an ECommerce website. I also edited images using Adobe Photoshop. </p>

                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalECommerce-->

        <!--Prakash Sports  -->
        <div class="modal" id="modalPrakash" tabindex="-1" role="dialog" aria-labelledby="modalPrakashTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPrakashTitle">My Journey - Prakash Sports website - WordPress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>WordPress, External CSS<hr>

                        <h6>The making of Project :</h6>
                        <p>I started working on this Project since May 2020. A friend of mine in India needed help in setting up his Company Website. I am involved at an Expert level. </p>
                        <p>I am involved in providing guidance in making this website and provide consultation from time to time. I provided help with deciding on the Web hosting service, setting up the website from scratch on WordPress, taking care good look and feel of the website, deciding on the theme and plugins, setting up the Staging Server, editing images using Adobe PhotoShop, setting up WooCommerce for Payment Gateway and researching on how to setup Taxes. </p>
                        <h6>What I learnt : </h6>
                        <p>I learnt how to supervise making a website and not completely get involved in its making. </p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalPrakash-->

        <!--CERC  -->
        <div class="modal" id="modalCERC" tabindex="-1" role="dialog" aria-labelledby="modalCERCTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCERCTitle">My Journey - CERC - WordPress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>WordPress, External CSS<hr>

                        <h6>The making of Project :</h6>
                        <p>I started working on the project in the summer of 2018. This was my first project for a charity. </p>
                        <p>I was involved from the scratch. I set up the website from scratch on WordPress, deciding on the theme and plugins and the content. I was maintaining good communication with the co-founder of the Cambourne Electronics & Robotics Club. </p>
                        <h6>What I learnt : </h6>
                        <p>I learnt a lot during the making of this website as this was my first public website. I was a beginner that time and still learning.  </p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalCERC-->

        <!--CamcareUK  -->
        <div class="modal" id="modalCamcare" tabindex="-1" role="dialog" aria-labelledby="modalCamcareTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCamcareTitle">My Journey - CamCareUK - WordPress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>WordPress, External CSS<hr>

                        <h6>The making of Project :</h6>
                        <p>I started working on the project in the summer of 2018. This was few of my first projects for a charity. </p>
                        <p>I was involved from the scratch. I set up the website from scratch on WordPress, deciding on the theme and plugins and the content. I was maintaining good communication with the Founder & Chair of the CamCareUK. The initial website of CamCareUK was made by me. It was later changed. </p>
                        <h6>What I learnt : </h6>
                        <p>I learnt a lot during the making of this website as this was my first few public websites. I was a beginner that time and still learning.   </p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalCamcare-->

        <!--mySQL  -->
        <div class="modal" id="modalSQL" tabindex="-1" role="dialog" aria-labelledby="modalSQLTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSQLTitle">My Journey - MySQL Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>phpMyAdmin, ERD diagram, SQL queries<hr>

                        <h6>The making of Project :</h6>
                        <p>This project made me revise what I already knew 10 years ago. I loved working in SQL and therefore this project wa just a refresher.</p>
                        <h6>What I learnt : </h6>
                        <p>I got to revise my SQL knowledge and I made this project quite happily :) </p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalSQL-->

        <!--flowchart  -->
        <div class="modal" id="modalFlowchart" tabindex="-1" role="dialog" aria-labelledby="modalFlowchartTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalFlowchartTitle">My Journey - Flowchart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>Flowchart<hr>

                        <h6>The making of Project :</h6>
                        <p>This project made me revise what I already knew 10 years ago. I loved making flowchart and therefore this project was just a refresher.</p>
                        <h6>What I learnt : </h6>
                        <p>I got to revise my Flowchart knowledge and I made this project quite happily :) </p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalFlowchart-->

        <!--all posters -->
        <div class="modal" id="modalPosters" tabindex="-1" role="dialog" aria-labelledby="modalPostersTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPostersTitle">My Journey - All Posters</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>Graphic Design, Adobe Photoshop<hr>

                        <h6>The making of Project :</h6>
                        <p>I have made few posters for local charities. This was all voluntary work.</p>
                        <h6>What I learnt : </h6>
                        <p>I learnt a lot of Graphic Designing while making these projects. I tried different things and challenged my imagination.</p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalPosters-->

        <!--all logos  -->
        <div class="modal" id="modalLogos" tabindex="-1" role="dialog" aria-labelledby="modalLogosTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLogosTitle">My Journey - All Logos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!--modal-header-->
                    <div class="modal-body">
                        <h6>Skills used:</h6>Graphic Design, Adobe Illustrator<hr>

                        <h6>The making of Project :</h6>
                        <p>I have made few logos for local charities and also for my own projects. I made a lot of logos for Cambourne Timebank as the Management Committee had to take a decision. The logo was then decided after a poll.</p>
                        <h6>What I learnt : </h6>
                        <p>I learnt a lot of Graphic Designing while making these projects. I tried different things and challenged my imagination.</p>
                    </div><!--modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="myJourney" data-dismiss="modal">Close</button>
                    </div><!--modal-footer-->
                </div><!--modal-content-->
            </div><!--modal-dialog modal-dialog-scrollable-->
        </div><!--modalLogos-->

        <div class="navContainer">
            <header id="top">
                <div class="wrapper">
                    <div class="logoAndHam">
                        <span class="hamburger" id="openNav">&#9776;</span><!--Hamburger Icon-->
                        <div class="logoName">
                            <a href="index.php" class="showHome">
                                <img class="sprite-logo-234x234" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMUAAACVAQMAAADSeKxEAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNrtwQEBAAAAgJD+r+4ICgAAAKgBDyIAAdylp3MAAAAASUVORK5CYII=">
                            </a>
                        </div><!--LogoName-->
                    </div><!--logoAndHam-->
                </div><!--wrapper-->
                <div class="wrapper">
                    <nav class="topNav">
                        <div class="navItemHome">
                            <a href="#" class="removeUnderscore">
                                <p class="txtNav">Home</p>
                            </a>
                        </div><!--navItemHome-->
                        <div class="navItemAboutMe">
                            <a href="#aboutMe" class="removeUnderscore">
                                <p class="txtNav">About Me</p>
                            </a>
                        </div><!--navItemAboutMe-->
                        <div class="navItemMySkills">
                            <a href="#mySkills" class="removeUnderscore">
                                <p class="txtNav">My skills</p>
                            </a>
                        </div><!--navItemMySkills-->
                        <div class="navItemMyProjects">
                            <a href="#myProjects" class="removeUnderscore">
                                <p class="txtNav">My Projects</p>
                            </a>
                        </div><!--navItemMyProjects-->
                        <div class="navItemTestimonials">
                            <a href="#testimonial" class="removeUnderscore">
                                <p class="txtNav">Testimonials</p>
                            </a>
                        </div><!--navItemTestimonials-->
                        <div class="navItemContactForm">
                            <a href="#contactForm" class="removeUnderscore">
                                <p class="txtNav">Contact Form</p>
                            </a>
                        </div><!--navItemContactForm-->
                    </nav>
                </div><!--wrapper Navigation-->
            </header><!--header logo& hamburger-->
            <main>
                <div class="welcomeSection">
                    <div class="wrapper">
                        <div class="homeSection" id="home">
                            <div id="html-text" class="text">
                                Welcome to my Webpage
                            </div><!--html-text-->
                        </div><!--homeSection-->
                    </div><!--wrapper-->
                </div><!--HeaderSection-->
                <div class="wrapper2">
                    <div class="aboutMe" id="aboutMe">
                        <p class="title">About Me</p>
                        <div class="upperStars">
                            <img class="sprite-neon-star-lightblue-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-brown-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-lightpink-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                        </div><!--upperStars-->
                        <div class="textPic">
                            <div class="flexWidth">
                                <p class="hi">Hi, </p>
                                <p class="intro">
                                    My name is Payal Priyadarshini. I am a Web, Graphic Designer and Full Stack(PHP) Web Developer looking for opportunities. Keen on part time/work from home work environment. I am eligible to work in the U.K.
                                </p>
                            </div><!--flexWidth-->
                            <div class="aboutMeSection">
                                <img class="sprite-mypic-361x458" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWkAAAHKAQMAAAD7PShNAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACxJREFUeNrtwTEBAAAAwqD1T20LL6AAAAAAAAAAAAAAAAAAAAAAAAAAAICvAVQWAAHuIazQAAAAAElFTkSuQmCC">
                                <a href="dist/docs/UK%20CV%20-%20web%20designer.pdf" download>
                                    <span class="downloadBtn">Download My CV</span>
                                </a>
                                <div class="icons">
                                    <a href="https://github.com/ppriyadarshini123" class="link">
                                        <img class="sprite-github-icon-142x142" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAACOAQMAAADdM6JLAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNrtwTEBAAAAwqD1T20MH6AAAOBhCooAAZx+I98AAAAASUVORK5CYII=">
                                        <p class="subTitle">My GitHub Repository</p>
                                    </a><!--GitHub icon-->
                                    <a href="https://www.linkedin.com/in/payal-p-3a96a179/" class="link">
                                        <img class="sprite-linked-142x142" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAACOAQMAAADdM6JLAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNrtwTEBAAAAwqD1T20MH6AAAOBhCooAAZx+I98AAAAASUVORK5CYII=">
                                        <p class="subTitle">My Linkedin Profile</p>
                                    </a><!--Linkedin icon-->
                                </div><!--icons-->
                            </div><!--aboutMeSection-->
                            <div class="flexWidth">
                                <p class="intro">
                                    You can have a look at my projects, skills, CV and get in touch with me on my email:
                                </p>
                                <p class="email">payal . priyadarshini @ gmail . com</p>
                                <p class="intro">Thanks.</p>
                                <div class="lowerStars">
                                    <img class="sprite-neon-star-lightblue-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                                    <img class="sprite-neon-star-brown-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                                    <img class="sprite-neon-star-lightpink-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                                </div><!--lowerStars-->
                            </div><!--flexWidth-->
                        </div><!--textPic-->
                    </div><!--aboutMe-->
                </div><!--About Me wrapper-->
                <div class="wrapper2">
                    <div class="mySkills" id="mySkills">
                        <p class="title">My Skills</p>
                        <div class="jcarousel">
                            <ul class="alignHorizontal">
                                <li>
                                    <img class="sprite-html5-88x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAABoAQMAAABPIaXaAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjILhCQAE4AAB+I3MKgAAAABJRU5ErkJggg==">
                                    <p class="title">HTML</p>
                                </li>
                                <li>
                                    <img class="sprite-css-92x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABoAQMAAABGygWgAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRQAkAAAVIAAHbmQdrAAAAAElFTkSuQmCC">
                                    <p class="title">CSS</p>
                                </li>
                                <li>
                                    <img class="sprite-javascript-91x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFsAAABoAQMAAACkFh7ZAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRQAkAAAVIAAHbmQdrAAAAAElFTkSuQmCC">
                                    <p class="title">Javascript</p>
                                </li>
                                <li>
                                    <img class="sprite-jquery-99x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAABoAQMAAADfMtwVAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">JQuery</p>
                                </li>
                                <li>
                                    <img class="sprite-nodejs-104x107" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGUAAABoAQMAAADSLKxSAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">NodeJS</p>
                                </li>
                                <li>
                                    <img class="sprite-git-104x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoAQMAAAAn0ifiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">GIT</p>
                                </li>
                                <li>
                                    <img class="sprite-octocat-original-120x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAABoAQMAAAAAfKYKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABVJREFUeNpjYBgFo2AUjIJRMAroDwAGgAABi47q4AAAAABJRU5ErkJggg==">
                                    <p class="title">GITHUB</p>
                                </li>
                                <li>
                                    <img class="sprite-rwd-103x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGcAAABoAQMAAADW2XxvAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">Responsive Web Design</p>
                                </li>
                                <li>
                                    <img class="sprite-bootstrap-74x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEoAAABoAQMAAABsevQPAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjAL6AgAEeAABV6iYTwAAAABJRU5ErkJggg==">
                                    <p class="title">Bootstrap</p>
                                </li>
                                <li>
                                    <img class="sprite-sass-110x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABoAQMAAAAqzFelAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABVJREFUeNpjYBgFo2AUjIJRMAoQAAAGGAAB3knFwwAAAABJRU5ErkJggg==">
                                    <p class="title">SASS</p>
                                </li>
                                <li>
                                    <img class="sprite-photoshop-104x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoAQMAAAAn0ifiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">Adobe Photoshop</p>
                                </li>
                                <li>
                                    <img class="sprite-illustrator-104x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABmAQMAAAAd2EaSAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                                    <p class="title">Adobe Illustrator</p>
                                </li>
                                <li>
                                    <img class="sprite-indesign-104x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABmAQMAAAAd2EaSAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                                    <p class="title">Adobe InDesign</p>
                                </li>
                                <li>
                                    <img class="sprite-php-104x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoAQMAAAAn0ifiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">PHP</p>
                                </li>
                                <li>
                                    <img class="sprite-mysql-104x104" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoAQMAAAAn0ifiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMBQAAAWwAAHKF0mdAAAAAElFTkSuQmCC">
                                    <p class="title">MySQL</p>
                                </li>
                            </ul>
                        </div><!--jcarousel-->
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                        <p class="jcarousel-pagination"></p>
                    </div><!--mySkills-->
                </div><!--Skills wrapper-->
                <div class="wrapper2">
                    <div class="myProjects" id="myProjects">
                        <p class="titleProjects">My Projects</p>
                        <div class="projectsGrid">
                            <div class="project">
                                <img class="sprite-logo-1c-for-website-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Cambourne Timebank Website - Wordpress Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://cambournetimebank.org.uk/" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalTimebank">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project timebank website-->
                            <div class="project">
                                <img class="sprite-weightcontrol-471x313" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE5AQMAAAD4BPhwAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAClJREFUeNrtwQENAAAAwqD3T20PBxQAAAAAAAAAAAAAAAAAAAAAAMCPAUlcAAGIBFGeAAAAAElFTkSuQmCC">
                                <h1 class="heading">Nutritionist - Responsive Web Design Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://www.payalcreations.co.uk/Nutritionist/index.html" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-trigger="focus" data-target="#modalNutritionist" data-placement="right">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project Nutritionist-->
                            <div class="project">
                                <img class="sprite-portfolio-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Payal Creations - PHP, HTML, CSS, JQuery, Javascript Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="#" class="removeUnderscore">This webpage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalPortfolio">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project this portfolio-->
                              <div class="project">
                                  <img class="" alt="" src="dist/imgs/optimized/HomeSearch_logo_pic-471x314.png">
                                <h1 class="heading">Home Search - PHP, MySQL Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://www.payalcreations.co.uk/Home_Search/index.php" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-trigger="focus" data-target="#modalHomeSearch" data-placement="right">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project PHP HomeSearch-->
                             <div class="project">
                                <img class="sprite-logos-472x315" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdgAAAE7AQMAAABExwL2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAClJREFUeNrtwTEBAAAAwqD1T20IX6AAAAAAAAAAAAAAAAAAAAAAAAB4DUnUAAGn9894AAAAAElFTkSuQmCC">
                                <h1 class="heading">Logos Gallery - Graphic Design</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="./logos.html" class="removeUnderscore">Logos</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalLogos">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project All Logos - Graphic Design-->
                             <div class="project">
                                <img class="sprite-posters-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Posters Gallery - Graphic Design</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="./posters.html" class="removeUnderscore">Posters</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalPosters">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project All posters - Graphic Design-->                           
                            <div class="project">
                                <img class="sprite-news-471x314" alt="" src="dist/imgs/optimized/news-471x314.png">
                                <h1 class="heading">News Website - HTML, CSS and Javascript Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://www.payalcreations.co.uk/NewsWebsite/index.html" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalNewsWebsite">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project News website-->                            
                            <div class="project">
                                <img class="sprite-tours-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Tours & Travels - Javascript & JQuery Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://www.payalcreations.co.uk/Tours&Travels/index.html" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalToursTravels">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project Tours & Travels-->                       
                            <div class="project">
                                <img class="sprite-ecommerce-472x315" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdgAAAE7AQMAAABExwL2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAClJREFUeNrtwTEBAAAAwqD1T20IX6AAAAAAAAAAAAAAAAAAAAAAAAB4DUnUAAGn9894AAAAAElFTkSuQmCC">
                                <h1 class="heading">ECommerce Website - WordPress Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://www.payalcreations.co.uk/wordpress/" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalECommerce">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project ECommerce Wordpress website-->
                            <div class="project">
                                <img class="sprite-cropped-prakahs-inkscape-logo-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">PrakashSports Website - Wordpress Project</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="https://prakashsports.com/" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalPrakash">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project prakash sports-->
                            <div class="project">
                                <img class="sprite-logocerc-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Cambourne Electronics & Robotics Club - WordPress</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="http://camcare.org.uk/cerc/" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalCERC">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project Cambourne Electronics & Robotics Club-->
                            <div class="project">
                                <img class="sprite-camcarelogo-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">CamCareUK - Charity Website - WordPress</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="https://camcare.org.uk/" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalCamcare">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project CamCareUK - Charity Website-->
                            <div class="project">
                                <img class="sprite-erd-472x315" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdgAAAE7AQMAAABExwL2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAClJREFUeNrtwTEBAAAAwqD1T20IX6AAAAAAAAAAAAAAAAAAAAAAAAB4DUnUAAGn9894AAAAAElFTkSuQmCC">
                                <h1 class="heading">MySQL Project</h1>
                                <div class="overlay">
                                    <div class="projectName" id="mysql">Project Documents</div><!--projectName-->
                                    <div class="documents" id="openWindow">
                                        <div class="queries">
                                            <a class="removeUnderline" href="./SQL/sql_pdf.html">SQL Queries</a>
                                        </div><!--queries-->
                                        <div class="erd">
                                            <a class="removeUnderline" href="./SQL/erd_pdf.html">ERD Diagram</a>
                                        </div><!--erd-->
                                    </div><!--documents-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalSQL">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project mySQL-->
                            <div class="project">
                                <img class="sprite-flowchart-471x314" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdcAAAE6AQMAAAB+kIreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAChJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAA3SZgAAZ+sliUAAAAASUVORK5CYII=">
                                <h1 class="heading">Flowchart - Introduction to Programming</h1>
                                <div class="overlay">
                                    <div class="projectName">
                                        <a href="Flowchart/flowchart.html" class="removeUnderscore">Project WebPage</a>
                                    </div><!--projectName-->
                                    <button type="button" class="myJourney" data-toggle="modal" data-target="#modalFlowchart">
                                        My Journey
                                    </button>
                                </div><!--overlay-->
                            </div><!--project Flowchart-->
                           
                        </div><!--projectsGrid-->
                    </div><!--myProjects-->
                </div><!--Projects wrapper2-->
                <div class="wrapper2">
                    <div class="testimonial" id="testimonial">
                        <div class="title">Testimonials
                        </div><!--titleMap-->
                        <div class="displayTestimonials">
                            <div class="testimonial1">                              
                               <div class="doubleQuotes"><img src="dist/imgs/optimized/double.png"></div>
                                <p class="test">
                                     Payal completely redesigned our website and did a fantastic job; she really understood what was needed and came up with a solution that exceeded my expectations. The new design is very user-friendly and attractive. I am impressed by the quality of the work. She is dedicated, attentive, talented, has an eye for detail and cares about the clients needs. I would highly recommend her services for website development.
                                </p>
                                 <div class="doubleQuotesClosing"><img src="dist/imgs/optimized/double2.png"></div>
                                <p class="boldName name">Laura Papanikolaou</p>
                                <p class="name">Former Coordinator</p>
                                <p class="name">Cambourne Timebank</p>
                            </div><!--testimonial1-->
                            <div class="testimonial2">
                                <div class="doubleQuotes"><img src="dist/imgs/optimized/double1brown.png"></div>
                                <p class="test boldName">
                                    I endorse Payal website development skills. Single handedly she has developed and published the Cambourne Timebank website that includes a tablet and mobile version. It is colourful, dynamic and easy to navigate. She has taken on board feedback from Management Committee members to ensure it is fit for purpose and meets the agreed brief.

                                    Payal is a committed, reliable self starter, that has not only achieved this goal whilst under Covid 19 lockdown yet also provide excellent expertise to a local volunteer group, Cambourne Timebank, and the birth of its new  Management Committee. Without exception, we have all found her contribution valuable and helpful. Payal is always friendly, responsive and professional.
                                </p>
                                <div class="doubleQuotesClosing"><img src="dist/imgs/optimized/doublebrown.png"></div>
                                <p class="boldName name">Janet Leonard</p>
                                <p class="name boldName">Chair & Befriending Coordinator</p>
                                <p class="name boldName">Cambourne Timebank</p>
                            </div><!--testimonial2-->
                        </div><!--displayTestimonials-->
                        <div class="displayTestimonials">
                            <div class="testimonial2">
                                <div class="doubleQuotes"><img src="dist/imgs/optimized/double1brown.png"></div>
                                <p class="test boldName">Payal has helped to set up the initial website for CamCareUK on Wordpress. It was nice to work with Payal. We had several interactions where we discussed the requirements, implementation details and features of the website.It was her first website for a charity. On a different occasion, she also used her Graphic Design skills to make posters for us. Although with a family and a fulltime job, Payal was fully dedicated and eager to help whenever possible.  She is very sincere and a enthusiastic web developer. I wish her all the best.</p>
                                <div class="doubleQuotesClosing"><img src="dist/imgs/optimized/doublebrown.png"></div>
                                <p class="name boldName">Cllr Dr Shrobona Bhattacharya</p>
                                <p class="name boldName">District & Parish Councillor</p>
                                <p class="name boldName">Founder & Chair, CamCareUK</p>
                            </div><!--testimonial1-->
                            <div class="testimonial1">
                                <div class="doubleQuotes"><img src="dist/imgs/optimized/double.png"></div>
                                <p class="test">Payal has been working with us for a couple of years now. She has helped me in setting up and maintaining the website for CERC. She is very helpful. Her work included setting up Wordpress on the Hosting account, showcasing the members and their profiles using pictures and videos. She also set up the Blog page for PiWars 2020 and setting up the user logins. She knows her work well. It has been a pleasure working with Payal.</p>
                                <div class="doubleQuotesClosing"><img src="dist/imgs/optimized/double2.png"></div>
                                <p class="name boldName">Sujit Bhattacharya</p>
                                <p class="name">Co-founder of Cambourne Electronics & Robotics Club (CERC) </p>
                            </div><!--testimonial2-->
                        </div><!--displayTestimonials-->
                        <div class="displayTestimonials">
                            <div class="testimonial1">
                                <div class="doubleQuotes"><img src="dist/imgs/optimized/double.png"></div>
                                <p class="test boldName">We are very happy and excited to see our website development in process. As an external supervisor we get time to time support from Payal. For system level expert with blend of creativity we do recommend Payal.</p>
                               <div class="doubleQuotesClosing"><img src="dist/imgs/optimized/double2.png"></div>
                                <p class="name boldName">Surendra Gupta</p>                               
                                <p class="name boldName">Owner, Prakash Sports</p>
                            </div><!--testimonial1-->
                           
                        </div><!--displayTestimonials-->
                    </div><!--testimonial-->
                </div><!--Testimonials wrapper2-->
                <div class="wrapper2">
                    <div class="contactForm" id="contactForm">
                        <div class="titleMap">Contact Form
                        </div><!--titleMap-->
                        <div class="upperCStars">
                            <img class="sprite-neon-star-lightblue-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-brown-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-lightpink-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                        </div><!--upperStars-->

                        <form class="contactFormArea" id="contactFormArea" name="contactForm" action="#footer" method="post">
                            <div class="rowCF">
                                <p class="labels">Name
                                </p>
                                <input name="name"  type="text" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" class="txtBox" placeholder="Your Name.."  title="Please enter characters only e.g. john" required>
                                <p class="formMessage"></p>
                            </div><!--rowCF name area-->
                            <div class="rowCF">
                                <p class="labels">Email
                                </p><!--Email label-->
                                <input type="email" name="email" pattern ="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" placeholder="Your Email.." class="txtBox" title="Please enter a valid email address e.g. info@payalcreations.co.uk" required>
                                <p class="formMessage"></p>
                            </div><!--rowCF email area-->
                            <div class="rowCF">
                                <p class="labels">Message
                                </p><!--message label-->
                                <textarea name="message" rows="4"  cols="23" class="txtBox" placeholder="Your Message.." title="This is a required field" required></textarea>
                                <p class="formMessage"></p>
                            </div><!--rowCF message textarea-->

                            <div class="g-recaptcha" data-sitekey="6LdTrtcZAAAAABFKwKB_v6l_DiFea_yPxKEWN_E0"></div>
                            <div class="btn">
                                <input type="submit" name="Submit" class="submitBtn">
                                 <p name="formMessageSubmit"></p>
                                <?php
                                    if (!empty($_POST)) {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $message = $_POST['message'];
                                        $to = "payal.priyadarshini@gmail.com";
                                        $subject = "Message from payal@payalcreations.co.uk";
                                        $message = "<html>
                                                        <head>
                                                             <title>HTML email</title>
                                                        </head>
                                                        <body>
                                                            <p>You received a message from: $email </p>
                                                            <table>
                                                                 <tr>
                                                                    <th style='color: red; font-size: 20px;'>Name</th>
                                                                 </tr>
                                                                 <tr>
                                                                     <td>$name</td>                                
                                                                </tr>
                                                                <tr>
                                                                    <th style='color: red; font-size: 20px;'>Message</th>
                                                                </tr>
                                                                 <tr>
                                                                    <td>$message</td>                                
                                                                </tr>
                                                            </table>
                                                        </body>
                                                    </html>
                                                    ";

                                         // Always set content-type when sending HTML email
                                        $headers = "MIME-Version: 1.0" . "\r\n";
                                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                                        // More headers
                                        $headers .= 'From: payal@payalcreations.co.uk' . "\r\n";
//                                        $headers .= 'Cc: myboss@example.com' . "\r\n";
                                             
//                                        mail($to, $subject, $message, $headers);
                                        
                                        if (mail($to, $subject, $message, $headers)) 
                                        {
//                                            $formMessageSubmit = $_POST['formMessageSubmit'];
                                            echo "<p style='color: red;'>Thanks for your message. Your message has been successfully sent.</p>";
                                            
                                        } else {
                                            echo "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
                                        }
                                    }
                                        ?>


                            
                            </div><!--btn-->
                        </form><!--contact form area-->

                        <div class="lowerCStars">
                            <img class="sprite-neon-star-lightblue-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-brown-50x51" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAzAQMAAADvrclXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC">
                            <img class="sprite-neon-star-lightpink-100x102" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABmAQMAAAAH5KYcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMFgAAAWUAAF2+LisAAAAAElFTkSuQmCC">
                        </div><!--lowerStars-->
                    </div><!--contactForm-->
                </div><!--Contact Form-->
            </main>
            <footer class="wrapper" id="footer">
                <div class="rowSiteMapSocial">
                    <div class="colSiteMap">
                        <p class="txtSM">Sitemap</p>
                        <nav id="nav2" class="links">
                            <ul>
                                <li class="linkSpace"><a class="linkSiteMap" href="#" >Home</a></li>
                                <li class="linkSpace"><a class="linkSiteMap" href="#aboutMe">About Me</a></li>
                                <li class="linkSpace"><a class="linkSiteMap" href="#mySkills">My Skills</a></li>
                                <li class="linkSpace"><a class="linkSiteMap" href="#myProjects">My Projects</a></li>
                                <li class="linkSpace"><a class="linkSiteMap" href="#testimonial">Testimonials</a></li>
                                <li class="linkSpace"><a class="linkSiteMap" href="#contactForm">Contact Form</a></li>
                            </ul>
                        </nav><!--sitemap first column-->
                    </div><!--colSitemap-->
                </div><!-- rowSiteMapSocial-->
                <div class="base">Cambridge, UK</div><!--base Copyright-->
            </footer><!--Sitemap-->
        </div><!--Container for Navigation - position:sticky-->

        <!-- Start cookieyes banner -->
        <script src="https://cdn-cookieyes.com/client_data/80e20addf3721bfb3b77f9c9.js"></script>
        <!-- End cookieyes banner -->

        <script src="node_modules/jquery/dist/jquery.min.js"></script><!--for Bootstrap to run--> 
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!--for Bootstrap to run--> 
        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'auto',
                    trigger: 'click',
                    html: true,
                    content: '<img src="dist/imgs/optimized/logos/nutritionistLogo.png" class="" alt="" width="210">'
                });
            });
        </script><!--for Nutritionist logo Popover-->

        <script>
            $(document).ready(function () {
                $('[data-toggle="popover2"]').popover({
                    placement: ' auto',
                    trigger: 'click',
                    html: true,
                    content: '<img src="dist/imgs/optimized/logos/logo-1c.png" class="" alt="" width="210">'
                });
            });
        </script><!--for Cambourne Timebank logo Popover-->
        
         <script>
            $(document).ready(function () {
                $('[data-toggle="popover3"]').popover({                    
                    placement: 'auto',
                    trigger: 'click',
                    html: true,
                    content: '<img src="dist/imgs/optimized/logos/HomeSearch_logo_pic-471x314.png" class="" alt="" width="210">'
                });
            });
        </script><!--for Home Search logo Popover-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script><!--For ReCaptcha-->
        <script src="node_modules/pixi.js/dist/pixi.min.js"></script>
        <script src="node_modules/pixi.js-legacy/dist/pixi-legacy.js"></script><!--Incase browser does not support webGL, pixi-legacy provides a fallback-->
        <script src="node_modules/requestanimationframe/app/requestAnimationFrame.js"></script>

        <script src="dist/js/jquery.carousel.js"></script>
        <script src="dist/js/jcarousel.responsive.js"></script>
        <script src="node_modules/enquire.js/dist/enquire.js"></script>       
        
<!--         <script src="dist/js/script.js"></script>-->
        <script src="dist/js/pixi.js"></script>
        <script src="dist/js/script.js"></script>
<!--        <script src="dist/main.js"></script>-->
    </body>
</html>