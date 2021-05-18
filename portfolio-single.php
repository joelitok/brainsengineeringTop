<?php
$img1 = isset($_GET["img1"]) ? $_GET["img1"] : '';
$img2 = isset($_GET["img2"]) ? $_GET["img2"] : '';
$img3 = isset($_GET["img3"]) ? $_GET["img3"] : '';
$img4 = isset($_GET["img4"]) ? $_GET["img4"] : '';
$img5 = isset($_GET["img5"]) ? $_GET["img5"] : '';
$img6 = isset($_GET["img6"]) ? $_GET["img6"] : '';
$img7 = isset($_GET["img7"]) ? $_GET["img7"] : '';

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Brains vision" />
<meta name="author" content="https://www.cymolthemes.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title> Brains vision </title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- fontello -->
<link rel="stylesheet" type="text/css" href="css/fontello.css"/>

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!--Color Switcher Mockup-->
<link rel="stylesheet" type="text/css" href="css/color-switcher.css" >

<!--Color Themes-->
<link id="switcher-color" href="css/colors/default-color.css" rel="stylesheet">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

       <?php include_once("header.php"); ?>

        <!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">Portfolio Details</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i> Home</a>
                                </span>
                                <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                <span><span>Portfolio single</span></span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--broken-section-->
        <section class="cmt-row portfolio-single-section clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="more-project-box">
                            <div class="cmt-social-share-wrapper pull-left">
                                <div class="cmt-social-share-title d-inline-block">
                                    <span> Share <i class="ti ti-sharethis"></i></span>
                                </div>
                                <div class="social-icons circle d-inline-block">
                                    <ul>
                                        <li class="facebook-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google-plus-icon"><a href="#"><i class="ti ti-google"></i></a></li>
                                        <li class="linkedin-icon"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="pinterest-icon"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="d-inline-block ml-20 res-575-ml-0">
                                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-btn-color-darkgrey" href="#">View Project</a>
                                </div>
                            </div>
                            <div class="cmt-post-prev-next-buttons clearfix">
                                <a class="" href="portfolio-single.php"><i class="ti ti-angle-left"></i></a>
                                <a class="ml-5" href="portfolio-single-2.php"><i class="ti ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- cmt-pf-single-content-wrapper-innerbox -->
                        <div class="cmt-pf-single-content-wrapper-innerbox cmt-pf-view-left-image">
                            <div class="row">
                                <div class="col-lg-8">
                                <div class="cmt-featured-wrapper cmt-portfolio-featured-wrapper"> 
                                   <?php if($img1){ ?>
                                    <!-- <img class="img-fluid" src="images/portfolio/post-three.jpg" alt=""> -->
                                    <img class="img-fluid" src="images/portfolio/01.jpg" alt="image">
                                    <?php }else if($img2){ ?> 
                                    <img class="img-fluid" src="images/portfolio/02.jpg" alt="image">  
                                    <?php }else if($img3){ ?>  
                                    <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"> 
                                    <?php }else if($img4){ ?> 
                                    <img class="img-fluid" src="images/portfolio/04.jpg" alt="image">
                                    <?php }else if($img5){ ?>
                                    <img class="img-fluid" src="images/portfolio/05.jpg" alt="image">
                                    <?php }else if($img6){ ?>
                                    <img class="img-fluid" src="images/portfolio/06.jpg" alt="image">
                                    <?php }else if($img7){ ?>
                                    <img class="img-fluid" src="images/portfolio/07.jpg" alt="image">
                                     <?php }else{ ?>
                                    <img class="img-fluid" src="images/portfolio/post-three.jpg" alt="">
                                    <?php } ?> 
                                    </div> 
                                </div>
                                <div class="col-lg-4">
                                    <div class="cmt-pf-single-detail-box res-991-mt-30">
                                        <div class="cmt-portfolio-title">
                                            <h2 class="cmt-pf-detailbox-title">About the Research</h2>
                                        </div>
                                        <div class="cmt-portfolio-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipimagna aliqua. Ut enims ad minim veniam. Aenean mus et magnis dis partu rient to montes.Aene an massa. Cum sociis natoque penatibus.</p>
                                        </div>
                                        <div class="cmt-pf-detailbox mt-30">
                                            <ul class="cmt-pf-detailbox-list">
                                                <li class="cmt-pf-details-date">
                                                    <i class="fa fa-briefcase"></i>
                                                    <span class="cmt-pf-left-details">Project Title</span>
                                                    <span class="cmt-pf-right-details">Startup Guidance</span>
                                                </li>
                                                <li class="cmt-pf-details-date">
                                                    <i class="fa fa-user"></i>
                                                    <span class="cmt-pf-left-details">Client </span>
                                                    <span class="cmt-pf-right-details">TThemeForest Envato</span>
                                                </li>
                                                <li class="cmt-pf-details-date">
                                                    <i class="fa fa-bookmark-o"></i>
                                                    <span class="cmt-pf-left-details">Category </span>
                                                    <span class="cmt-pf-right-details">Construction</span>
                                                </li>
                                                <li class="cmt-pf-details-date">
                                                    <i class="fa fa-map-marker"></i>
                                                    <span class="cmt-pf-left-details">Location </span>
                                                    <span class="cmt-pf-right-details">Bulls Stadium, Califorina</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cmt-pf-single-content-wrapper-innerbox end-->
                    </div>
                </div>
            </div>
        </section>
        <!--broken-section end-->
        <section class="cmt-row pt-50 pb-140 cmt-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Project Summery</h4>
                    </div>
                    <div class="col-md-6">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row pt-0 pb-0 cmt-textcolor-white mt_175 res-991-mt-0 res-991-pt-0 clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="col-lg-6 res-991-pr-0">
                        <div class="cmt-col-bgcolor-yes cmt-bg cmt-left-span cmt-bgcolor-skincolor pt-50 pb-45">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                            <div class="layer-content">
                                <h4>Project Challenges</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 res-991-pr-0">
                        <div class="cmt-col-bgcolor-yes cmt-bg cmt-left-span cmt-bgcolor-skincolor pb-45 res-991-pr-15">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                            <div class="layer-content">
                                
                                    
                                    <div class="cmt_single_image-wrapper" >
                                    <?php if($img1){ ?>
                                    <!-- <img class="img-fluid" src="images/portfolio/post-three.jpg" alt=""> -->
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/01.jpg" alt="image">
                                    <?php }else if($img2){ ?> 
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/02.jpg" alt="image">  
                                    <?php }else if($img3){ ?>  
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/03.jpg" alt="image"> 
                                    <?php }else if($img4){ ?> 
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/04.jpg" alt="image">
                                    <?php }else if($img5){ ?>
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/05.jpg" alt="image">
                                    <?php }else if($img6){ ?>
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/06.jpg" alt="image">
                                    <?php }else if($img7){ ?>
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/07.jpg" alt="image">
                                     <?php }else{ ?>
                                    <img class="img-fluid mt_70 res-991-mt-0" src="images/portfolio/post-three.jpg" alt="">
                                    <?php } ?> 
                                    </div> 












                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Project Mission</h4>
                        <p>If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated&nbsp;commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Ut enim ad minim veniam, quis nostrud exercitation ullamco proident, sunt in culpa qui officia deserunt mollit.</p>
                    </div>
                </div>
                <div class="row mb-70 res-991-mb-20">
                    <div class="col-md-12">
                        <div class="cmt-nextprev-bottom-nav">
                            <nav class="navigation post-navigation">
                                <div class="nav-links">
                                    <div class="nav-links">
                                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-btn-color-darkgrey cmt-icon-btn-left" href="#"><i class="fa fa-angle-double-left"></i>Previous</a> 
                                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-btn-color-darkgrey cmt-icon-btn-right float-right" href="#">Next<i class="fa fa-angle-double-right"></i></a> 
                                </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->


   <?php include_once("footer.php"); ?>

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-switcher">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-switcher-header">
            <h6>Switcher Colors</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="theme-color default-color active" data-file="css/colors/default-color.css"></span>
                <span class="theme-color theme-color1" data-file="css/colors/theme-color1.css"></span>
                <span class="theme-color theme-color2" data-file="css/colors/theme-color2.css"></span>
                <span class="theme-color theme-color3" data-file="css/colors/theme-color3.css"></span>
                <span class="theme-color theme-color4" data-file="css/colors/theme-color4.css"></span>
                <span class="theme-color theme-color5" data-file="css/colors/theme-color5.css"></span>
            </div>
        </div>
        <h5>Layout Style</h5>
        <div class="layout-style"><!-- layout-style -->
            <a class="cmt-btn cmt-btn-size-sm cmt-btn-style-border cmt-btn-color-darkgrey mb-10 cmt-wide active" data-name="cmt-wide" href="#">Wide</a>
            <a class="cmt-btn cmt-btn-size-sm cmt-btn-style-border cmt-btn-color-darkgrey mb-10 cmt-boxed" data-name="cmt-boxed" href="#">Boxed</a>
            <a class="cmt-btn cmt-btn-size-sm cmt-btn-style-border cmt-btn-color-darkgrey layout-reset mb-25" data-name="cmt-reset" href="#">Reset</a>
        </div><!-- layout-style -->
    </div><!-- Color Palate / Color Switcher end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>

    <!-- Javascript end-->

</body>
</html>