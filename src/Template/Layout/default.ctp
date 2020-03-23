<?php
//error_reporting(0);
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'DEM | Digital Ecosystem Mapping Tool';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('flaticon-set.css') ?>
        <?= $this->Html->css('magnific-popup.css') ?>
        <?= $this->Html->css('owl.carousel.min.css') ?>
        <?= $this->Html->css('owl.theme.default.min.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('bootsnav.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('responsive.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
        
    </head>
    <body>

        <!-- Preloader Start -->
        <!--<div class="se-pre-con"></div>-->
        <!-- Preloader Ends -->

        <!-- Header 
        ============================================= -->
        <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav button theme circle solid">
                        <ul>
                            <li>
                                <a href="<?=ADMIN_URL?>/register/register"><i class="fas fa-plus"></i> Join the community </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?=HOME_URL?>">
                            <img src="<?=HOME_URL?>/img/logo.png" class="logo logo-display" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            <li>
                                <a class="smooth-menu" href="<?=HOME_URL?>#about">About</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="<?=HOME_URL?>/why">Why Rwanda</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="<?=HOME_URL?>/listings/categorychooser">Community directory</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#about">Events</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="<?=HOME_URL?>/resources/">Resources</a>
                            </li>
                            <!--<li class="dropdown dropdown-right">
                                <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Version One</a></li>
                                    <li><a href="index-2.html">Home Version Two</a></li>
                                    <li><a href="index-3.html">Home Version Three</a></li>
                                    <li><a href="index-4.html">Home Version Four</a></li>
                                    <li><a href="index-5.html">Home Version Five</a></li>
                                    <li><a href="index-6.html">Home Version Six</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#features">Features</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#overview">Overview</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#pricing">Pricing</a>
                            </li>-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->
        </header>
        <!-- End Header -->
        <?= $this->fetch('content') ?>

        <!-- Start Footer 
       ============================================= -->
        <footer class="default-padding-top bg-gray">
            <div class="container">
                <div class="row">
                    <div class="f-items">
                        <div class="col-md-6 col-sm-6 equal-height item">
                            <div class="f-item about">
                                <img src="<?=HOME_URL?>/img/logo.png" alt="Logo">
                                <p>
                                    <strong>
                                        Innovation and Technology are at the core of Rwanda’s social and economic transformation strategy. Innovate Rwanda was created to showcase Rwanda’s growing ecosystem of technology and technology-enabled corporations, SMEs and startups and enablers. It represents the shared interests of the community to profile themselves, discover partners and support opportunities, and establish partnerships for growth.
                                    </strong>
                                </p>
                                <h5>Follow Us</h5>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 equal-height item">
                            <div class="f-item link">
                                <h4>Company</h4>
                                <ul>
                                    <li>
                                        <a href="<?=HOME_URL?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?=HOME_URL?>/about">About</a>
                                    </li>
                                    <li>
                                        <a href="<?=HOME_URL?>/why">Why Rwanda</a>
                                    </li>
                                    <li>
                                        <a href="<?=HOME_URL?>/listings/allcategories">Community directory</a>
                                    </li>
                                    <li>
                                        <a href="#">Events</a>
                                    </li>
                                    <li>
                                        <a href="<?=HOME_URL?>/resources/">Resources</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 equal-height item">
                            <div class="f-item twitter-widget">
                                <h4>Contact Info</h4>
                                <p>
                                    Possible offering at contempt mr distance stronger an. Attachment excellence announcing
                                </p>
                                <div class="address">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-home"></i> 
                                            </div>
                                            <div class="info">
                                                <h5>Website:</h5>
                                                <span>www.innovaterwanda.com</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i> 
                                            </div>
                                            <div class="info">
                                                <h5>Email:</h5>
                                                <span>innovaterwanda.com</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone"></i> 
                                            </div>
                                            <div class="info">
                                                <h5>Phone:</h5>
                                                <span>+250-783------</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <p>Trademark notice:<a href="#"> Innovate Rwanda is a registered trademark of Kigali Innovation City.</a></p>
                            </div>
                            <div class="col-md-6 text-right link">
                                <ul>
                                    <li>
                                        <a href="#">Terms</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </footer>
        <!-- End Footer -->
    </body>
<?php
    echo $this->Html->script('jquery-1.12.4.min.js');
    echo $this->Html->script('bootstrap.min.js');
    echo $this->Html->script('equal-height.min.js');
    echo $this->Html->script('jquery.appear.js');
    echo $this->Html->script('jquery.easing.min.js');
    echo $this->Html->script('jquery.magnific-popup.min.js');
    echo $this->Html->script('modernizr.custom.13711.js');
    echo $this->Html->script('owl.carousel.min.js');
    echo $this->Html->script('wow.min.js');
    echo $this->Html->script('count-to.js');
    echo $this->Html->script('bootsnav.js');
    echo $this->Html->script('main.js');
    ?>
</html>