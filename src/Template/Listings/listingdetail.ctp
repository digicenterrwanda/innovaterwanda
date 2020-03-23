<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
        width: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(<?= HOME_URL ?>/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $company_details[0]['institution_name'] ?></h1>
                <ul class="breadcrumb">
                    <li class="active">Company details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Blog 
============================================= -->

<div id="blog" class="blog-area bg-gray full-width single default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="col-md-12">
                    <div class="item">
                        <div class="info">
                            <!-- Start Contact Area ============================================= -->
                            <div id="contact" class="contact-us-area default-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 contact-form">
                                            <h2><?= $company_details[0]['institution_name'] ?></h2>
                                            <p> <strong>Company summary:</strong>
                                                <?= $company_details[0]['company_summary'] ?>
                                            </p>
                                            <p>
                                                <strong>Area of business:</strong>
                                                <?= $company_details[0]['area_of_business'] ?>
                                            </p>
                                            <p>
                                                <strong>Services offered:</strong>
                                                <?= $company_details[0]['service_offered'] ?>
                                            </p>
                                            <p>
                                                <strong>Location:</strong>
                                                <?= $company_details[0]['physical_address'] ?>
                                            </p>
                                            <p>
                                                <strong>Date of Incorporation:</strong>
                                                <?= $company_details[0]['reg_date'] ?>
                                            </p>
                                            <p>
                                                <strong>Address:</strong>
                                                <?= $company_details[0]['physical_address'] ?>
                                            </p>
                                            <p>
                                                <strong>Sector(s):</strong>
                                                <?= $company_details[0]['service_offered'] ?>
                                            </p>
                                            <hr>
                                            <br>
                                            <p>
                                                <i class="fas fa-tags">
                                                    
                                                </i>
                                                <?php
                                                    $str_arr = preg_split ("/\,/", $company_details[0]['service_offered']); 
                                                    echo '<div class="thumb"> <div class="tags">';
                                                        for($i = 0; $i < count($str_arr); $i++)
                                                        {
                                                            echo ' <a href="'.HOME_URL.'/listings/filterbytag/'.$str_arr[$i].'">'.$str_arr[$i].'</a> ';
                                                        }
                                                    echo '</div></div>';
                                                ?>
                                            </p>
                                        </div>
                                        <div class="col-md-6 address">
                                            <center>
                                            <?php
                                            if ($company_details[0]['company_logo'] != "") {
                                                ?>
                                                    <img src="<?= ADMIN_UPLOADS_URL . $company_details[0]['company_logo'] ?>" alt="listing" width="200" height="180">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?=HOME_URL?>/img/placeholder.png" alt="listing" width="200" height="180">
                                                    <?php
                                                }
                                                ?>
                                            </center>

                                            <div class="address-items">
                                                <ul class="info">
                                                    <li>
                                                        <h4>Office Location</h4>
                                                        <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                                        <span><?= $company_details[0]['physical_address'] ?></span>
                                                    </li>
                                                    <li>
                                                        <h4>Phone</h4>
                                                        <div class="icon"><i class="fas fa-phone"></i></div> 
                                                        <span><?= $company_details[0]['company_phone'] ?></span>
                                                    </li>
                                                    <li>
                                                        <h4>Email</h4>
                                                        <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                                        <span><?= $company_details[0]['company_email'] ?></span>
                                                    </li>
                                                    <li>
                                                        <h4>Website</h4>
                                                        <div class="icon"><i class="fas fa-globe-africa"></i> </div>
                                                        <span><?= $company_details[0]['web_address'] ?></span>
                                                    </li>
                                                </ul>
                                                <h4>Social Address</h4>
                                                <ul class="social">
                                                    <li class="facebook">
                                                        <a href="<?= $company_details[0]['facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a href="<?= $company_details[0]['twitter_link'] ?>"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="pinterest"> 
                                                        <a href="<?= $company_details[0]['youtube_channel'] ?>"><i class="fab fa-youtube"></i></a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="<?= $company_details[0]['instagram_url'] ?>"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="<?= $company_details[0]['linkedin_page'] ?>"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <hr>
                                            <br>
                                            <h4 class="title-sep2 mb-30">Twitter feed</h4>
                                            <p>
<?php
if ($company_details[0]['twitter_link'] != "None" || $company_details[0]['twitter_link'] != '') {
    ?>
                                                <div class="post-content-area white-bg mb-30">
                                                    <a class="twitter-timeline" data-width="400" data-height="440" href="<?= $company_details[0]['twitter_link'] ?>">Tweets by <?= $company_details[0]['institution_name'] ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                    <center>
                                                        <div class="field field--name-field-block-link field--type-link field--label-hidden field__item">
    <?php
    echo $this->Html->link("Follow us", $company_details[0]['twitter_link']);
    ?>
                                                        </div>
                                                    </center>
                                                </div>
                                                            <?php
                                                        }
                                                        ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact -->                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->