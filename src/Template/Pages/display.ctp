<!-- Start Banner 
============================================= -->
<div class="banner-area text-small content-double button-effect bg-fixed" style="background-image: url(img/2440x1578.png);">
    <div class="box-table">
        <div class="box-cell">
            <div class="container">
                <div class="row">
                    <div class="double-items">
                        <!-- Banner Left Content -->
                        <!--<div class="info col-md-6">
                            <div class="content inc-video">
                                <h1>It's time to create your own business scheme</h1>
                                <p>
                                    Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable.
                                </p>
                                <a href="#" class="btn circle btn-dark border btn-md">Get Started</a>
                                <a class="popup-youtube light video-play-button video-inline" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>-->
                        <!-- End Banner Left Content -->

                        <!-- Start Banner Form -->
                        <!--<div class="form col-md-5 text-light col-md-offset-1">
                            <div class="form-info">
                                <h2>Sign up today and receive <span>30 days</span> FREE trial.</h2>
                                <form action="#">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Name*" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email*" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password*" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <button type="submit">
                                                Register for free
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>-->
                        <!-- End Banner Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Pricing Area
============================================= -->
<!--<div id="about" class="pricing-area default-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="comments-list">
                    <div class="site-heading text-center">
                        <h2><span>What we do</span></h2>
                        <p>
                            Innovate Rwanda was created to showcase Rwanda’s growing ecosystem of technology and technology-enabled corporations, SMEs and startups and enablers. Innovation and Technology are at the core of Rwanda’s strategy for economic and social transformation and this platform represents the shared interests of the community to connect, collaborate and innovate for growth.
                        </p>
                    </div>
                    <hr>
                    <br>
                    <div class="site-heading default info owl-theme">
                        <center>
                            <h2><span>Why join the community?</span></h2>
                        </center>
                        <p>
                        The community is a virtual platform for you to:<br>
                    </p>
                    <ul>
                        <li>
                            <h5>Profile you company, startup or organization to local and global ecosystem players </h5>
                        </li>
                        <li>
                            <h5>Discover partners, various avenues for support, resources and events </h5>
                        </li>
                        <li>
                            <h5>Connect, collaborate and innovate with other ecosystem players for growth. </h5>
                        </li>
                    </ul>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- End Pricing Area -->

<!-- Start About 
============================================= -->
<div id="about" class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 default info">
                <div class="site-heading default info owl-theme">
                    <center>
                        <h2 style="color: #ff5a6e;">
                            <strong>
                                What we do
                            </strong>
                        </h2>
                    </center>
                    <p>
                        Innovate Rwanda was created to showcase Rwanda’s growing ecosystem of technology and technology-enabled corporations, SMEs and startups and enablers. Innovation and Technology are at the core of Rwanda’s strategy for economic and social transformation and this platform represents the shared interests of the community to connect, collaborate and innovate for growth.
                    </p>
                </div>
                <!--<h2>Designed for startups <br>with expert developer</h2>-->
                
            </div>
            <div class="row">
                <div class="col-md-12 default info">
                    <div class="site-heading default info owl-theme">
                        <center>
                        <h2 style="color: #ff5a6e;">
                            <strong>
                                Why join the community
                            </strong>
                        </h2>
                    </center>
                    <p>
                        The community is a virtual platform for you to:<br>
                    </p>
                    <ul>
                        <li>
                            <h5> Profile you company, startup or organization to local and global ecosystem players </h5>
                        </li>
                        <li>
                            <h5>Discover partners, various avenues for support, resources and events </h5>
                        </li>
                        <li>
                            <h5>Connect, collaborate and innovate with other ecosystem players for growth. </h5>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->


<!-- Start We Offer 
============================================= -->
<div class="we-offer-area carousel-shadow text-center bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2><span>categories</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="our-offer-carousel owl-carousel owl-theme">
                    <?php
                    for ($i = 0; $i < count($company_categories); $i++) {
                        ?>
                        <a href="listings/listingsbycategory/<?= $company_categories[$i]['id'] ?>">
                            <!-- Single Item -->
                            <div class="item">
                                <center>
                                    <?= $company_categories[$i]['image_thumbnail'] ?>
                                </center>
                                <h4><?= $company_categories[$i]['category_name'] ?></h4>

                            </div>
                            <!-- End Single Item -->    
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End We Offer -->

<!-- Start Contact Area  
============================================= -->
<div id="pricing" class="contact-us-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our <span>Partners</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-lg-3">
                    <img src="img/MINICT.png"/>
                </div>
                <div class="col-lg-6">
                    <img src="img/GIZ.png"/>
                </div>
                <div class="col-lg-3">
                    <img src="img/RDB.png"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-lg-3">
                    <img src="img/dssd.png"/>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    <img src="img/jica.png"/>
                </div>
                <div class="col-lg-3">
                    <img src="img/ict_chamber.png"/>
                </div>
                <div class="col-lg-3">
                    <img src="img/RISA.png"/>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Contact -->

<!-- Start Google Maps 
============================================= -->
<!--<div class="maps-area">
    <div class="container-full">
        <div class="row">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d-14767.262289338461!2d30.30214485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
            </div>
        </div>
    </div>
</div-->
<!-- End Google Maps -->