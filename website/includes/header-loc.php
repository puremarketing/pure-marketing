<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo "$title";?></title>
    <meta name="description" content="<?php echo "$description";?>"/>

    <meta name="google-site-verification" content="lLnLCVoA6mqPap5ErrOUuXRHqTocowjukHGaMkGzX2k" />
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicons/favicon-16x16.png">
    <link rel="manifest" href="image/favicons/manifest.json">
    <link rel="mask-icon" href="image/favicons/safari-pinned-tab.svg" color="#1d1d1d">
    <link rel="shortcut icon" href="image/favicons/favicon.ico">
    <meta name="msapplication-config" content="image/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome icon css-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!--linear icons css-->
    <link rel="stylesheet" href="/vendors/Linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="/css/etfont.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!--owl carousel css-->
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/magnifier.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <!--video css -->
    <link rel="stylesheet" href="/vendors/video/video.css">
    <link rel="stylesheet" href="/vendors/wow-js/animate.css">
    <!--custom css-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/menubar.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <?if($page=="home"){?>
    <!-- preeloader -->
    <div id="pre-loader">
        <div id="loader-logo"></div>
        <div id="loader-circle"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- preeloader -->
    <?}?>
    <!-- Header Start -->
    <header id="menu" class="header blue-bg navbar navbar-default header-sticky header-transparent">
        <nav class="navbar">
            <div class="menu-width container">
                <div class="menu-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <div class="navbar-hamburger">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="navbar-close hidden">
                            <i class="ti-close"></i>
                        </div>
                    </button>
                    <div class="nav-logo">
                        <a class="logo" href="/">Pure Marketing.</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse nav-collapse t-border">
                    <ul class="nav navbar-nav menu-list">
                        <li class="nav-item <?if($page=="home"){?>active<?}?>"><a class="dropdown-toggle" href="/">Home</a></li>
                        <li class="<?if($page=="about"){?>active<?}?>"><a href="/about">About</a></li>
                        <li class="nav-item <?if($page=="seo"){?>active<?}?> dropdown">
                            <a class="dropdown-toggle" href="/seo">SEO</a>
                            <!--<ul class="dropdown-menu">
                                <li class="sub-menu"><a href="seo#seo-audit">SEO Audit</a>
                                <li class="sub-menu"><a href="seo#local-seo">Local SEO</a>
                                <li class="sub-menu"><a href="seo#national-seo">National SEO</a>
                                <li class="sub-menu"><a href="seo#link-building">Link Building</a>
                                <li class="sub-menu"><a href="seo#seo-copywriting">SEO Copywriting</a>
                                <li class="sub-menu"><a href="seo#penalty-removal">Penalty Removal</a>
                                </li>
                            </ul>-->
                        </li>
                        <li class="nav-item <?if($page=="ppc"){?>active<?}?> dropdown">
                            <a class="dropdown-toggle" href="/ppc">PPC</a>
                            <!--<ul class="dropdown-menu">
                                <li class="sub-menu"><a href="ppc##google-adwords">Google Adwords</a>
                                <li class="sub-menu"><a href="ppc#google-shopping">Google Shopping</a>
                                <li class="sub-menu"><a href="ppc#remarketing">Remarketing</a>
                                </li>
                            </ul>-->
                        </li>
                        <li class="nav-item <?if($page=="social"){?>active<?}?> dropdown">
                            <a class="dropdown-toggle" href="/social-media">Social</a>
                            <!--<ul class="dropdown-menu">
                                <li class="sub-menu"><a href="social-media#facebook">Facebook</a>
                                <li class="sub-menu"><a href="social-media#twitter">Twitter</a>
                                <li class="sub-menu"><a href="social-media#instagram">Instagram</a>
                                <li class="sub-menu"><a href="social-media#linkedin">Linkedin</a>
                                </li>
                            </ul>-->
                        </li>
                        <li class="<?if($page=="contact"){?>active<?}?>"><a href="/contact">Contact</a></li>
                        <li><a href="tel":01212705828 ">0121 270 5828</a></li>                                            </ul>
                    <ul class="nav social_icon navbar-nav header-social">
                        <li><a target="_blank" href="https://twitter.com/puremarketing_"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/puremarketing_/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- menubar area -->