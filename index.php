<?php
//    include('./php/logger.php');
    if (isset($_GET["lang"]))
    {
        $lang = $_GET["lang"];
    }
    else
    {
        $lang = "en";
    }
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta name="author" content="Andreas Hahn"/>
    <meta name="description" content="Portfolio Page."/>
    <meta name="keywords" content="website, portfolio, work, Hahn,Programming,JobOffer"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#daa520">
    <link rel="shortcut icon" href="/favicon/favicon.ico">

    <title>Hahn Portfolio</title>

    <!--CSS Twitter Bootstrap v4.0.0-->
    <link rel="stylesheet" href="./css/vendor/bootstrap.min.css"/>
    <!--FA Icons-->
    <link rel="stylesheet" href="./css/vendor/fontawesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Hind:300,400"/>

    <link href="./css/vendor/lightbox.min.css" rel="stylesheet"/>
    <link href="./css/vendor/lity.min.css" rel="stylesheet"/>

    <!--Full Page-->
    <link rel="stylesheet" type="text/css" href="./css/vendor/jquery.fullpage.css"/>
    <!--SLY Scrolling-->
    <link rel="stylesheet" href="./css/horizontal.css"/>
    <!--CSS My Styles-->
    <link rel="stylesheet" href="./css/mySass.css"/>

</head>
<body>
<!-- LOADER Animation-->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section">
        <div id="nojs">
            <noscript>Seems javascript is not enabled in your browser. Sad this site only runs with JS.
                <span aria-hidden="true" data-icon="&#x1F622;"></span></noscript>
        </div>
    </div>

</div>
<!--Main container-->
<div class="container-fluid row no-padding">
    <!--Navbar container-->
    <div class="site-navbar ">
        <!--brand-->
        <div class="nav-logo">
            <a href="//andreashahn.at">
                <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 566.9 453.5" style="enable-background:new 0 0 566.9 453.5;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #DAA620;
                        }

                        svg:hover #bogen {
                            fill: #828283 !important;
                        }

                        svg:hover #shadow {
                            fill: #DAA620 !important;
                        }

                        .st1 {
                            fill: #828283;
                        }
                    </style>
                    <g>
                        <g>
                            <g>
                                <path id="bogen" class="st0" d="M327.5,234.1c-1-2.5-2.3-4.9-3.5-7.3c-4.7-9.3-9.7-18.3-15.3-27.1c-5.8-9.2-12.1-18-19.3-26.1
				c-6-6.7-12.5-12.9-19.9-18c-6-4.1-12.5-7.3-19.6-9c-6.5-1.5-13-1.7-19.5-0.3c-10.9,2.2-20.2,7.6-28.8,14.4
				c-8.1,6.4-15.2,13.9-21.8,21.9c-6.4,7.7-12.1,15.9-17.6,24.2c-7.3,11.2-13.8,22.8-20,34.6c-5.7,11.1-11.1,22.3-16.2,33.7
				c-4.6,10.3-8.9,20.7-13.1,31.2c-3.7,9.4-7.3,18.9-10.6,28.5c-0.3,0.9-0.6,1.7-0.9,2.6c-0.1,0.3-0.2,0.6-0.5,0.5
				c-0.4-0.1-0.3-0.5-0.2-0.7c0.4-1.7,0.9-3.4,1.3-5c1.1-4.2,2.2-8.5,3.3-12.7c1.7-6.1,3.3-12.2,5.1-18.2c1.7-6.1,3.5-12.2,5.3-18.3
				c2.2-7.4,4.5-14.7,6.8-22c2.3-7.1,4.6-14.2,7-21.3c2.2-6.4,4.4-12.7,6.7-19c3.1-8.5,6.3-16.9,9.7-25.3
				c4.2-10.4,8.6-20.7,13.4-30.8c4.4-9.4,9.1-18.7,14.2-27.7c6.1-10.7,12.7-21.1,20.4-30.7c6.2-7.6,12.9-14.7,21.1-20.3
				c5.6-3.9,11.7-6.6,18.5-7.8c6.1-1.1,12.1-0.3,17.9,1.8c6.8,2.4,12.7,6.4,18,11.2c7.7,6.9,14,14.9,19.7,23.4
				c5.4,8.1,10.2,16.5,14.7,25.1c4.8,9.3,9.1,18.8,13.1,28.5c3.3,7.9,6.5,15.9,9.4,24c3.3,9.1,6.5,18.2,9.5,27.4c1,3.1,2,6.2,3,9.3
				c1.1,3.5,2.2,7,3,10.6c0.6,2.4,1.4,4.7,2.1,7c1,3.4,2,6.9,3,10.3c1,3.5,1.9,7,2.8,10.6c0.9,3.4,1.8,6.7,2.7,10.1
				c1.1,4.3,2.2,8.6,3.3,12.9c0.9,3.4,1.8,6.8,2.5,10.3c0.5,2.5,1.2,4.9,1.8,7.4c0.6,2.6,1.2,5.2,1.8,7.8c0.7,3.2,1.4,6.4,2.2,9.5
				c1,4.1,1.8,8.3,3,12.4c0.1,0.5,0.2,0.9,0,1.7c-0.2-0.5-0.3-0.8-0.4-1c-0.7-2.5-1.4-5.1-2.2-7.6c-1.9-6-3.8-12.1-5.7-18.1
				c-2.9-8.7-5.9-17.3-9-25.9c-3.1-8.5-6.4-16.9-9.9-25.2c-1.4-3.4-2.9-6.8-4.4-10.2c-1.7-3.8-3.4-7.5-5.2-11.2
				C329.4,238.2,328.4,236.2,327.5,234.1z"/>
                                <path id="shadow" class="st1" d="M327.5,234.1c1,2,1.9,4,2.9,6c1.8,3.7,3.6,7.4,5.2,11.2c1.5,3.4,2.9,6.8,4.4,10.2c3.5,8.4,6.8,16.8,9.9,25.2
				c3.2,8.6,6.2,17.2,9,25.9c2,6,3.9,12,5.7,18.1c0.8,2.5,1.5,5.1,2.2,7.6c0.1,0.3,0.2,0.5,0.4,1c0.2-0.8,0.1-1.2,0-1.7
				c-1.2-4.1-2-8.3-3-12.4c-0.7-3.2-1.4-6.4-2.2-9.5c-0.6-2.6-1.2-5.2-1.8-7.8c-0.6-2.5-1.3-4.9-1.8-7.4c-0.7-3.4-1.6-6.8-2.5-10.3
				c-1.1-4.3-2.2-8.6-3.3-12.9c-0.9-3.4-1.8-6.7-2.7-10.1c-0.9-3.5-1.8-7.1-2.8-10.6c-1-3.4-2-6.9-3-10.3c-0.7-2.3-1.5-4.6-2.1-7
				c-0.8-3.6-1.9-7.1-3-10.6c0-0.1,0-0.2,0.1-0.4c0.6,0.6,1.1,0,1.6-0.2c7-3,14-6,21-8.9c5.2-2.1,10.3-4.2,15.5-6.3
				c4.3-1.7,8.7-3.3,13.1-5c5.9-2.2,11.9-4.3,18-6.2c6.7-2.1,13.4-4,20.3-5.3c4.5-0.9,9-1.5,13.6-1.3c3.1,0.1,6.1,0.5,8.9,2.1
				c2.8,1.6,4.5,4,5.3,7.1c0.5,1.9,0.7,3.9,0.3,5.8c-0.6,2.9-1.2,5.9-2.1,8.7c-2.6,7.7-6.2,14.9-10.1,22c-4.4,8-9.3,15.7-14.3,23.4
				c-5.3,8.1-10.8,16-16.4,23.9c-5.8,8.1-11.7,16.2-17.8,24.2c-4.7,6.2-9.4,12.4-14.2,18.5c-3.5,4.5-7,8.9-10.5,13.3
				c-0.4,0.5-0.8,0.9-1.3,1.3c-1,0.9-1.1,0.9-1.4-0.4c-1.2-4.2-2.5-8.4-3.7-12.6c-2.1-7-4.3-14-6.6-21c-2.3-6.9-4.6-13.8-7.1-20.6
				c-2.8-7.7-5.8-15.4-8.9-23.1c-3.3-8.2-6.9-16.4-10.5-24.5c-0.4-0.9-0.8-1.1-1.8-0.7c-5.2,2.1-10.5,4-15.8,6.1
				c-6.6,2.6-13.3,5.3-19.9,8.1c-6.9,2.8-13.7,5.7-20.6,8.6c-5.9,2.5-11.7,5.1-17.5,7.6c-5.3,2.3-10.5,4.6-15.8,6.9
				c-6.1,2.7-12.1,5.5-18.2,8.2c-6,2.7-11.9,5.4-17.9,8.2c-5.2,2.4-10.5,4.8-15.7,7.3c-6.9,3.2-13.9,6.4-20.8,9.7
				c-5.7,2.7-11.4,5.4-17.1,8.2c-7.5,3.6-15.1,7.2-22.6,10.8c-3.3,1.6-6.6,3.3-9.9,4.8c-2.3,1.1-4.7,2.1-7,3.3c-0.1,0-0.2,0-0.3,0
				c0-0.5,0.4-0.5,0.7-0.6c3.9-2.2,8.1-4.1,12-6.3c6.3-3.4,12.7-6.5,19.1-9.8c7-3.6,14-7.1,21-10.6c5.4-2.7,10.8-5.5,16.2-8.2
				c9.3-4.6,18.5-9.2,27.8-13.8c7.3-3.6,14.6-7.3,21.9-10.8c6.3-3.1,12.6-6.1,18.9-9.2c4.9-2.4,9.9-4.8,14.8-7.2
				c6.9-3.3,13.9-6.6,20.8-9.8c4.5-2.1,8.9-4.3,13.4-6.3c5.1-2.4,10.2-4.7,15.3-7C317.7,238.5,322.6,236.4,327.5,234.1z
				 M404.1,222.9c-2.6,0.1-5.5,0.3-8.4,0.6c-7.9,0.9-15.7,2.8-23.4,4.9c-4.3,1.2-8.6,2.6-12.9,3.9c-5.5,1.7-11,3.6-16.5,5.5
				c-0.7,0.2-0.8,0.6-0.6,1.3c1.3,4.5,2.6,9,4,13.5c2.1,7.2,4.1,14.4,6,21.6c1.5,5.6,2.9,11.2,4.3,16.9c1.2,4.8,2.4,9.5,3.5,14.3
				c1.1,4.5,2.1,9,3.1,13.5c1,4.3,2.1,8.7,2.9,13c0.8,4.3,2.1,8.6,2.6,13c0,0.3,0.2,0.5,0.4,0.6c0.4,0.1,0.5-0.2,0.7-0.4
				c0.2-0.4,0.4-0.7,0.6-1.1c2.5-3.6,5.1-7.2,7.5-10.8c2.9-4.3,5.8-8.5,8.7-12.8c5.3-8,10.3-16.1,15.2-24.4c4-6.9,7.8-13.9,11.4-21
				c2.3-4.6,4.4-9.3,6.3-14.2c1.8-4.8,3.4-9.7,4.3-14.9c0.6-3.5,0.9-7.1,0.3-10.7c-0.8-4.8-3.3-8.3-7.8-10.4
				C412.6,223.3,408.6,223,404.1,222.9z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <!--link section-->
        <div class="navbar-items" id="navbar">
            <ul class="nav navbar-nav" id="navText">
                <li><a class="nav-link active" href="">Hahn</a></li>
                <li><a class="nav-link" name="nav_about" href="">About</a></li>
                <li><a class="nav-link" name="nav_reference" href="">References</a></li>
                <li><a class="nav-link" name="nav_skills" href="">Skills</a></li>
                <li><a class="nav-link" name="nav_contact" href="">Contact</a></li>
            </ul>
        </div>
        <!--language-->
        <div onclick="switchLanguage('<?= $lang ?>');" class="nav-language" id="language" title="Toggle Language" style="opacity:0; cursor:pointer;height:50px; width:50px; position:absolute; margin-left:25px;">
            <div class="<?= $lang ?>" style="height:100%;"></div>
        </div>
    </div>
    <!--Content Container-->
    <div id="content" class="col-md-12 col-sm-12">

        <div id="hahnSection" class="section bg-primary">
            <div class="primary-heading" style="">
                <img id="bigLogo" src="Images/logo.png"/>
                <h1>andreas hahn</h1>
            </div>
            <div id="bouncing-container">
            </div>
        </div>

        <div id="aboutSection" class="section bg-primary">
            <div class="container">
                <div class="row" style="height:100%;">
                    <div class="col-md-5 col-sm-12">
                        <div class="about-block" id="aboutText">
                            <h3 name="heading">Who am I</h3>
                            <hr>
                            <div name="text">
                                <p>About Text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 bg-faded hidden-sm-down">
                        <div class="container">
                            <div class="row" style="height:inherit;">
                                <div class="col align-self-center" style="height: 50vh;">
                                    <div class="container">
                                        <div class="row" style="height:inherit;">
                                            <div class="col-4 align-self-start">
                                                <span>
                                                	<img src="./Images/imac.png" width="100%">
                                                </span>
                                            </div>
                                            <div class="col-4 align-self-center">
                                                <span>
                                                    <img src="./Images/dev.png" width="100%">
                                                </span>
                                            </div>
                                            <div class="col-4 align-self-end">
                                                <span>
                                                    <img src="./Images/digital_art.svg"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="referencesSection" class="section">
            <div id="projectReferences" class="slide bg-secondary">
                <div class="container">
                    <div class="row" style="height:100%;">
                        <div class="col-md-7 col-sm-12 bg-darken" style="display: grid;">
                            <div class="block" style="margin:auto; text-align: center">
                                <div class="wrap col-md-12 ">
                                    <div class="scrollbar">
                                        <div class="handle" style="transform: translateZ(0px) translateX(214px); width: 71px;">
                                            <div class="mousearea"></div>
                                        </div>
                                    </div>
                                    <div class="frame oneperframe shadow" id="frame">
                                        <ul class="clearfix slidee" id="projectSlide" style="overflow-y: scroll;">
                                            <li title="Storyclash CMS" id="storyclashCMS" name="storyclashCMSProject">
                                                <a href="./Images/Storyclash_CMS_full.jpeg" data-lightbox="web-ref" data-title="<a href='//www.storyclash.com' target='_blank'>Storyclash, CMS</a>">
                                                    <img id="imgStoryclash" class="img-fluid" src="./Images/Storyclash_CMS_thumb.jpg">
                                                </a>
                                            </li>
                                            <li title="FITZ Page" id="fitzBandPage" name="fitzProject">
                                                <a href="./Images/fitzImg.jpeg" data-lightbox="web-ref" data-title="<a href='//www.f-i-t-z.com' target='_blank'>FITZ, Website</a>">
                                                    <img id="imgFITZ" class="img-fluid" src="./Images/fitzImg.jpeg">
                                                </a>
                                            </li>
                                            <li title="CSIGG App" id="csiggProject" name="csiggProject">
                                                <a href="./Images/CSIGG_full.jpeg" data-lightbox="web-ref" data-title="CSIGG, Web Application">
                                                    <img id="imgCSIGG" class="img-fluid" src="./Images/CSIGG_thumb.jpg">
                                                </a>
                                            </li>
                                            <li title="HAHN CMS" id="hahnCMS" name="hahnCMSProject">
                                                <a href="./Images/hahn_cms_coming.png" data-lightbox="web-ref" data-title="<a href='//www.kurt-hahn.at' target='_blank'>Hahn, CMS</a>">
                                                    <img id="imgHahnCMS" class="img-fluid" src="./Images/hahn_cms_coming.png">
                                                </a>
                                            </li>
                                            <li title="Agar.IO Game" id="agarioProject" name="agarioProject">
                                                <a href="./Images/agario_coming.png" data-lightbox="web-ref" data-title="Agar.io, Browser Game">
                                                    <img id="imgAgario" class="img-fluid" src="./Images/agario_coming.png">
                                                </a>
                                            </li>
                                            <li title="Webcomponent CMS" id="bachelorProject" name="bachelorProject">
                                                <a href="./Images/bac_cms_coming.png" data-lightbox="web-ref" data-title="Webcomponent, CMS">
                                                    <img id="imgAgario" class="img-fluid" src="./Images/bac_cms_coming.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="controls center">
                                        <button class="btn prev disabled" disabled="">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="text-block">
                                <h3>Web Projects</h3>
                                <hr>
                                <h6 id="projectTitle">Title</h6>
                                <div class="hidden-xs-down" id="projectDescription">
                                    <p>Project long description!</p>
                                </div>
                                <div class="hidden-xs-up" id="projectShortDescription">
                                    <p>Project short description!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="audioReferences" class="slide bg-secondary">
                <div class="container">
                    <div class="row" style="height:100%;">
                        <div class="col-md-5 col-sm-12">
                            <div class="text-block" id="audioVideoText">
                                <h3 name="heading">Audio/Video</h3>
                                <hr>
                                <div name="text">
                                    <p>Audio Text
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 bg-darken" style="display: grid;">
                            <div class="block" style="width:90vw;">
                                <div class="col-12 col-md-12" title="Ashes To Ashes">
                                    <a href="//www.youtube.com/watch?v=Ey-lCUnDbXY" data-lity>
                                        <div id="a2aYtPreview"></div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-12" title="We've Got It All">
                                    <a href="//www.youtube.com/watch?v=eXe7xjYuq2I" data-lity>
                                        <div id="WGIAYtPreview"></div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-12" title="The Old Fashioned Way">
                                    <a href="//www.youtube.com/watch?v=3Hz3WfE22VM" data-lity>
                                        <div id="TOFWYtPreview"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="artReferences" class="slide bg-secondary">
                <div class="container">
                    <div class="row" style="height:100%;">
                        <div class="col-md-7 col-sm-12 bg-darken" style="display: grid;">
                            <div class="block" style="margin:auto; text-align: center;">
                                <div class="col-12 col-md-12" title="Kathi">
                                    <a href="./Images/art_vexeled.png" data-lightbox="digitalArts" data-title="Digital Drawing - Portrait">
                                        <img id="imgKathi3" src="./Images/art_vexeled.png">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12" title="Abstract">
                                    <a href="./Images/typo.jpg" data-lightbox="abstractArt" data-title="Abstract Art - Typography">
                                        <img id="imgTypo3" src="./Images/typo.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="text-block" id="digitalArtsText">
                                <h3 name="heading">Digital Arts</h3>
                                <hr>
                                <div name="text">
                                    <p>Arts Text placeholder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="skillSection" class="section">
            <div id="overviewSkills" class="slide bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center col-md-4 offset-md-4 col-sm-12">

                            <div id="skills-proccessing">
                            </div>

                            <blockquote>
                                <p>I will always choose a lazy person to do a difficult job.</br> Because, he will find an easy way to do it.</p>
                                <p class="text-lighten">— Bill Gates</p>
                            </blockquote>

                        </div>
                    </div>
                    <div class="row hidden-sm-down">
                        <div class="col-6 push-3">
                            <blockquote style="border-left: 5px solid #ccc; margin: 1.5em 10px;  padding: 0.5em 10px;">
                                In my opinion minimalism is a skill that needs to be learned. It takes time to make something perfect. Time that could be put in other tasks.
                                </br><i>As little as possible, as much as necessary.</i>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="slide bg-secondary">
                    <div class="container">
                        <div class="row" style="height:100%;">
                            <div class="col-md-12">
                                <div class="skill-block">
                                    <div class="block text-md-center col-sm-12" style="margin-bottom: 0;">
                                        <div class="row">
                                            <div class="col-lg-5 list-header">
                                                <span>Code Languages</span>
                                            </div>

                                            <div class="col-lg-7 list-items">
                                                <div class="list-item">
                                                    <span>Style</span>
                                                    <ul>
                                                        <li>CSS</li>
                                                        <li>SASS</li>
                                                    </ul>
                                                </div>

                                                <div class="list-item">
                                                    <span>Web</span>
                                                    <ul>
                                                        <li>HTML5</li>
                                                        <li>JavaScript</li>
                                                        <li>PHP</li>
                                                        <li>Node.js</li>
                                                    </ul>
                                                </div>

                                                <div class="list-item">
                                                    <span>Programming</span>
                                                    <ul>
                                                        <li>Java</li>
                                                        <li>Processing</li>
                                                    </ul>
                                                </div>

                                                <div class="list-item">
                                                    <span>Database</span>
                                                    <ul>
                                                        <li>MySQL</li>
                                                        <li>PostgreSQL</li>
                                                        <li>MongoDB</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block text-md-center col-sm-12" style="margin-bottom: 0;">
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-5 list-header ">
                                                <span>FRAMEWORKS & LIBS</span>
                                            </div>
                                            <div class="col-lg-6 list-items">
                                                <div class="list-item">
                                                    <span>Style</span>
                                                    <ul>
                                                        <li>Twitter Bootstrap 3</li>
                                                    </ul>
                                                </div>

                                                <div class="list-item">
                                                    <span>JS</span>
                                                    <ul>
                                                        <li>jQuery</li>
                                                        <ul>
                                                            <li>DataTables</li>
                                                        </ul>
                                                        <li>express.js</li>
                                                        <li>mongoose</li>
                                                    </ul>
                                                </div>

                                                <div class="list-item">
                                                    <span>Components</span>
                                                    <ul>
                                                        <li>Polymer 2.0</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block text-md-center col-sm-12" style="margin-bottom: 0;">
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-5 list-header">
                                                <span>Additional</span>
                                            </div>
                                            <div class="col-lg-7 list-items">
                                                <div class="list-item">
                                                    <span>Version Control</span>
                                                    <ul>
                                                        <li>Git</li>
                                                        <li>SVN</li>
                                                        <li>GitHub</li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <span>Adobe</span>
                                                    <ul>
                                                        <li>Photoshop</li>
                                                        <li>Premiere</li>
                                                        <li>After Effects</li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <span>DAW</span>
                                                    <ul>
                                                        <li>Logic Pro X</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="section fp-auto-height bg-faded">
            <div class="container row col-12">
                <div class="col-md-3 col-xs-5">
                    <strong>© Andreas K. Hahn, 2017</strong>
                </div>
                <div class="col-xs-7 hidden-sm-down">
                    <div class="col-12">
                        <span class="text-faded">DIGITAL ART / WEB-DESIGN / DEVELOPMENT</span>
                        <small>located in Freistadt - Austria</small>
                    </div>
                </div>
                <div class="social">
                    <a href="//github.com/drdreo" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="//stackoverflow.com/users/6699493/drdreo" target="_blank"><i class="fa fa-stack-overflow"></i></a>
                    <a href="//www.linkedin.com/in/andreas-hahn-3b374285" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="mailto:andreas@andreas-hahn.at" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#donateModal" onclick="return false;"><i class="fa fa-btc" aria-hidden="true"></i></a>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div id="donateModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width:initial;">
                    <div class="modal-header">
                        <h4 class="modal-title">Donate any coin</h4>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tbody>
                            <tr>
                                <td>BTC:</td>
                                <td>1BtPdq2wh1Mh736h7SsMJi6k4rLxCkYcdT</td>
                            </tr>
                            <tr>
                                <td>ETH/GNT:</td>
                                <td>0x0d9367822deEA3242F5849c9f6225FA7130eAEED</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/vendor/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="./js/vendor/jquery-ui.min.js" type="text/javascript"></script>
<script src="./js/vendor/tether.min.js" type="text/javascript"></script>

<!--JS LightBox-->
<script src="./js/vendor/lightbox.js" type="text/javascript"></script>
<!--JS Lity-->
<script src="./js/vendor/lity.min.js" type="text/javascript"></script>
<!--SLY JS-->
<script src="./js/vendor/sly.js" type="text/javascript"></script>

<!--JS Bootstrap v4.0.0 -->
<script src="./js/vendor/bootstrap.min.js" type="text/javascript"></script>

<!--JS Full Page-->
<script src="./js/vendor/jquery.fullpage.min.js" type="text/javascript"></script>

<!--Processing Things-->
<script src="./js/vendor/p5.min.js"></script>
<script src="./js/vendor/p5.dom.js"></script>
<script src="./js/processing/ball.js" type="text/javascript"></script>
<script src="./js/processing/vehicle.js" type="text/javascript"></script>
<script src="./js/processing/skills.js" type="text/javascript"></script>
<script src="./js/processing/bouncing_balls.js" type="text/javascript"></script>

<!--Sly Script-->
<script src="./js/slyScroll.js" type="text/javascript"></script>
<!--My Script-->
<script src="./js/myScript.js" type="text/javascript"></script>
</body>
</html>
