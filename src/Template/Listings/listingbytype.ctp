<?php
    //echo $company_details[0]['institution_name'];
    //print_r($company_details);
    //die();
?>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Listings by company type</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="<?=HOME_URL?>">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">listing</a>
                    </li>
                    <li>
                        <span class="active">Company type</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- page-banner ends-->

<!-- listings start-->
<div class="bg-w">
    <div class="list-half d-xl-flex d-block">
        <div class="list-first">
            <div class="listing-wrapper">
                <div class="filter-box mb-30">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    <i class="fa fa-crosshairs"></i>
                                    <input type="text" class="form-control" placeholder="location">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                        <select class="form-control custom-select" id="service2" name='category_name'>
                                            <option value="">---Select type---</option>
                                            <?php
                                            foreach ($company_categories as $key => $value):
                                                if ($value['id'] == $company_details['organization_type']) {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>" selected><?php echo $value['category_name']; ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                                                    <?php
                                                }
                                            endforeach;
                                            ?>
                                        </select>
                                </div>
                            </div>
                            <!--<div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    <i class="fas fa-dollar-sign"></i>
                                    <input type="text" class="form-control" placeholder="price">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-12">
                                <div class="input-wrap range-box">
                                    <p>distance radius :
                                        <span class="range-value">30</span>
                                        km
                                    </p>
                                    <div class="range-slider">
                                        <input type="range" min="1" max="100" value="30" class="range-track" id="myRange">
                                        <div class="fill" style="width:30%"></div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-md-4 col-sm-12 col-12">
                                <button type="submit" class="btn btn-one btn-anim w-100">
                                    filter now</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!--<div class="checklist-box mb-30">
                    <div class="toggle-checklist mb-60">
                        <a href="listing-with-map.html#" class="toggle-icon open">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div class="filter-checklist">
                        <div class="row minus-pad">
                            <div class="col-md-9 mb-30">
                                <h5 class="mb-30">Services</h5>
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
                                            <label for="checkbox_id6">Card Payment</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
                                            <label for="checkbox_id7">Free Parking</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
                                            <label for="checkbox_id8">Free Wi-Fi</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id9" value="value">
                                            <label for="checkbox_id9">pool</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id10" value="value">
                                            <label for="checkbox_id10">Wheelchair</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id11" value="value">
                                            <label for="checkbox_id11">Pet Friendly</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id12" value="value">
                                            <label for="checkbox_id12">gym</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id13" value="value">
                                            <label for="checkbox_id13">Reservations</label>
                                        </div>
                                        <div class="w-100 mb-2">
                                            <input type="checkbox" name="checkbox" id="checkbox_id14" value="value">
                                            <label for="checkbox_id14">Coupons</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action-list">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-6 mb-30">
                            <div class="sort-filter">
                                <div class="sort-dropdown">
                                    <a href="listing-with-map.html#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                        Popularity
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="listing-with-map.html#">low to high</a>
                                        <a class="dropdown-item" href="listing-with-map.html#">hight to low</a>
                                        <a class="dropdown-item" href="listing-with-map.html#">relevance</a>
                                        <a class="dropdown-item" href="listing-with-map.html#">discount</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8 col-6 mb-30">
                            <div class="view-mode justify-content-end d-flex">
                                <div class="grid-view views">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="list-view views current">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="list-grid-view">
                    <div class="row">
                            <?php
                                for($i = 0; $i < count($company_details); $i++)
                                {
                                    //echo "Company: ".$company_details[$i]['institution_name'];
                                    //die();
                            ?>
                                <div class="col-md-6 col-12 mb-30">
                                    <div class="listing-item p-2">
                                        <div class="list-content p-2">
                                            <ul class="ctg-info py-2 mb-3">
                                                <li>
                                                    <a href="listingdetails/<?=$company_details[$i]['company_id']?>">
                                                        <i class="flaticon-cutlery mr-2"></i> <?=$company_details[$i]['institution_name']?></a>
                                                </li>
                                                <li>
                                                    <span class="c-theme"> open now</span>
                                                </li>
                                            </ul>
                                            <h5 class="mb-2">
                                                <a href="listing-detail.html"><?=$company_details[$i]['institution_name']?></a>
                                            </h5>
                                            <p><?=$company_details[$i]['institution_name']?></p>
                                            <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                                <li class="mt-1">
                                                    <a href="listing-with-map.html#">
                                                        <i class="fa fa-map-marker-alt mr-2"></i>Kigali, Rwanda</a>
                                                </li>
                                                <li class="mt-1">
                                                    <a href="listing-with-map.html#">
                                                        <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                        
                        
                        <div class="col-md-6 col-12 mb-30">
                            <div class="listing-item p-2">
                                <div class="img-holder">
                                    <span class="offer">save 59%
                                    </span>
                                    <img src="assets/img/home/pl-slide4.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="listing-with-map.html#">
                                            <i class="far fa-heart"></i>13
                                        </a>
                                    </div>
                                </div>
                                <div class="list-content p-2">
                                    <ul class="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="listing-with-map.html#">
                                                <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                        </li>
                                        <li>
                                            <span class="c-theme"> open now</span>
                                        </li>
                                    </ul>
                                    <h5 class="mb-2">
                                        <a href="listing-detail.html">best beauty & spa services</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-map-marker-alt mr-2"></i>Kigali, Rwanda</a>
                                        </li>
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-30">
                            <div class="listing-item p-2">
                                <div class="img-holder">
                                    <span class="offer">save 20%
                                    </span>
                                    <img src="assets/img/home/pl-slide5.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="likes" href="listing-with-map.html#">
                                            <i class="far fa-heart"></i>16
                                        </a>
                                    </div>
                                </div>
                                <div class="list-content p-2">
                                    <ul class="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="listing-with-map.html#">
                                                <i class="flaticon-find mr-2"></i>desitination</a>
                                        </li>
                                        <li>
                                            <span class="c-theme"> open now</span>
                                        </li>
                                    </ul>
                                    <h5 class="mb-2">
                                        <a href="listing-detail.html">best destinations in city</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-map-marker-alt mr-2"></i>Kigali, Rwanda</a>
                                        </li>
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-30">
                            <div class="listing-item p-2">
                                <div class="img-holder">
                                    <span class="offer">save 26%
                                    </span>
                                    <img src="assets/img/home/pl-slide6.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="listing-with-map.html#">
                                            <i class="far fa-heart"></i>27
                                        </a>
                                    </div>
                                </div>
                                <div class="list-content p-2">
                                    <ul class="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="listing-with-map.html#">
                                                <i class="flaticon-hotel mr-2"></i>hotels</a>
                                        </li>
                                        <li>
                                            <span class="c-theme"> open now</span>
                                        </li>
                                    </ul>
                                    <h5 class="mb-2">
                                        <a href="listing-detail.html">comfy hotels in town</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-map-marker-alt mr-2"></i>Kigali, Rwanda</a>
                                        </li>
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-30">
                            <a href="listing-with-map.html#" class="btn btn-one btn-anim">load more</a>
                        </div>
                    </div>
                </div>
                <div class="listing-list-view show-list">
                    <div class="row">
                        <?php
                            for($i = 0; $i < count($company_details); $i++)
                            {
                                    //echo "Company: ".$company_details[$i]['institution_name'];
                                    //die();
                            ?>
                        <div class="col-12 mb-30">
                            <div class="listing-item p-2">
                                <div class="img-list">
                                    <div class="img-holder">
                                        <!--<span class="offer">save 49%
                                        </span>-->
                                        <?php
                                            if($company_details[$i]['image_thumbnail'] != "")
                                            {
                                        ?>
                                                <img src="<?=ADMIN_UPLOADS_URL.$company_details[$i]['image_thumbnail']?>" alt="list">
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <img src="../../img/placeholder.png" alt="list">
                                        <?php
                                            }
                                        ?>
                                        <div class="rate-like centering justify-content-between">
                                            <!--<div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>-->
                                            <!--<a class="likes" href="listing-with-map.html#">
                                                <i class="far fa-heart"></i>23
                                            </a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <ul class="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="listing-with-map.html#">
                                                <i class="flaticon-cutlery mr-2"></i> Type: <?=$company_types[0]['type_name']?></a>
                                        </li>
                                    </ul>
                                    <h5 class="mb-2">
                                        <a href="../listingdetail/<?=$company_details[$i]['company_id']?>"><?=$company_details[$i]['institution_name']?></a>
                                    </h5>
                                    <p><?=$company_details[$i]['service_offered']?></p>
                                    <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-map-marker-alt mr-2"></i><?=$company_details[$i]['physical_address']?></a>
                                        </li>
                                        <li class="mt-1">
                                            <a href="listing-with-map.html#">
                                                <i class="fa fa-phone mr-2"></i><?=$company_details[$i]['company_phone']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>

                        <!--<div class="col-12 text-center mt-30">
                            <a href="listing-with-map.html#" class="btn btn-one btn-anim">load more</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="list-map">
            <!--<div id="panel">
                <div>
                    <input type="checkbox" checked="checked" id="usegmm" />
                    <span>use MarkerClusterer</span>
                </div>
                <div>
                    Markers:
                    <select id="nummarkers">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100" selected="selected">100</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                    </select>
                    <span>Time used:
                        <span id="timetaken"></span> ms</span>
                </div>

                <div id="markerlist"></div>
            </div>-->
            <div id="map-container">
                <div style="height: 500px; width:700px;">
                <?php
                    //$address_array = array();
                    for($i = 0; $i < count($company_details); $i++)
                    {
                        if($company_details[$i]['physical_address'] != "")
                        {
                            $address = $company_details[$i]['physical_address'];
                            
                            $prepAddr = str_replace(' ','+',$address);
                            //$geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyBr3nqrXDGtlAKDwcWxO_c6Fbc0_01TA5U&address='.$prepAddr.'&sensor=false');
                            //$url = 'https://maps.google.com/maps/api/geocode/json?key=AIzaSyBr3nqrXDGtlAKDwcWxO_c6Fbc0_01TA5U&address='.$prepAddr.'&sensor=false';
                           
                            $url   = "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyBr3nqrXDGtlAKDwcWxO_c6Fbc0_01TA5U&address=".$prepAddr;
                            
                            usleep(500000);

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_HTTPGET,true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            $response   = json_decode(curl_exec($ch), true);
                            //var_dump($response); 
                            
                            //print_r($head);
                            //echo $response['results'][0]['geometry']['location']['lat'];
                            //echo "<br>---------------------- <br>";
                            
                            //$output= json_decode($geocode);

                            $latitude = $response['results'][0]['geometry']['location']['lat'];
                            $longitude = $response['results'][0]['geometry']['location']['lng'];

                            $address_array[$i] = array($company_details[$i]['institution_name']."<br>".$company_details[$i]['physical_address'], $latitude, $longitude);
                        }
                    }
                    // print_r($head);
                    //die();
                    //echo $address_array[0][1];
                    //die();
                ?>
                <script type="text/javascript">
                function initMap() {
                    var addresses = <?php echo json_encode($address_array); ?>;
                    console.log(addresses)
                    
                    /*var locations = [
                         ['Telecom House Kigali', -1.9444501,30.0874877],
                         ['Kigali Mariott', -1.9536025,30.0599028],
                         ['Ecole Belge', -1.914207,30.053556]
                    ];*/
                    
                    var map = new google.maps.Map(document.getElementById('map'), {
                         zoom: 8, 
                         center: new google.maps.LatLng(-1.9432848, 28.7590534),
                         mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    var infowindow = new google.maps.InfoWindow;

                    var marker, i;

                    for (i = 0; i < addresses.length; i++) {
                        //for (j = 0; j < addresses[i].length; j++)
                        //{
                        //console.log(addresses[i][0])
                        //console.log('--------------------')
                        marker = new google.maps.Marker({
                             position: new google.maps.LatLng(addresses[i][1], addresses[i][2]),
                             map: map
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                             return function() {
                                 infowindow.setContent(addresses[i][0]);
                                 infowindow.open(map, marker);
                             }
                        })(marker, i));
                    //}
                }
                }
                </script>

                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr3nqrXDGtlAKDwcWxO_c6Fbc0_01TA5U&callback=initMap">
                </script>
                
            <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- listings end -->