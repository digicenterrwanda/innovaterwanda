<script>
    document.onkeydown = function (evt) {
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if (keyCode == 13)
        {
            //your function call here
            document.test.submit();
        }
    }
</script>


<!-- Start Blog 
============================================= -->
<div id="blog" class="blog-area bg-gray full-width single default-padding">
    <div class="site-heading text-center">
        <h2>Listing by <span>Category</span></h2>
    </div>
    <div class="container">   
        <div class="row">
            <div class="blog-items">
                <div class="item">
                    <div class="comments-area">
                        <div class="comments-title">
                            <div class="comments-list">
                                <div class="container">
                                    <div class="row">
                                        <?php echo $this->Form->create('Listings', array('id' => 'searchForm', 'method' => 'POST')); ?>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="comments-form">
                            <?php echo $this->Form->create('Listings', array('action' => 'filtercompanies', 'id' => 'Filterby', 'method' => 'POST')); ?>
                            <form>
                                <div class="col-lg-4">
                                    <select name="company_category" class="form-control">
                                        <option value="">Filter by company category</option>
                                        <?php foreach ($company_categories as $value): ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select name="company_type" class="form-control">
                                        <option value="">Filter by company type</option>
                                        <?php foreach ($company_type as $value): ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['type_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select name="reg_date" class="form-control">
                                        <option value="">Filter by year registered</option>
                                        <?php
                                        foreach ($company_details as $value):
                                            if ($value['reg_date'] != "") {
                                                ?>
                                                <option value="<?= $value['reg_date'] ?>"><?= $value['reg_date'] ?></option>
                                                <?php
                                            }
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <!-- Start We Offer 
============================================= -->
                    <div id="features" class="we-offer-area item-border-less bg-gray default-padding bottom-less">
                        <div class="container">            
                            <div class="row">
                                <div class="our-offer-items less-carousel">
                                    <!-- Single Item -->
                                    <?php
                                    $counter = 0;
                                    foreach ($company_details as $key => $value):
                                        $counter += 1;
                                        ?>
                                        <div class="col-md-4 col-sm-6 equal-height">
                                            <a href="<?= HOME_URL ?>/listings/listingdetail/<?= $value['company_id'] ?>">
                                                <div class="item" style="height: 380px;">
                                                    <span class="number"><?= $counter ?></span>
                                                    <?php
                                                    if ($value['company_logo'] != "") {
                                                        ?>
                                                        <img src="<?= ADMIN_UPLOADS_URL . $value['company_logo'] ?>" alt="Author" height="150" width="180">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?= HOME_URL ?>/img/placeholder.png" alt="listing" height="150" width="180">
                                                        <?php
                                                    }
                                                    ?>
                                                    <br>
                                                    <h4>
                                                        <strong>
                                                            <?= $value['institution_name'] ?>
                                                        </strong>
                                                    </h4>
                                                    <p>
                                                        <strong>Year registered: </strong><?= $value['reg_date'] ?> <br>
                                                        <strong>Location: </strong><?= $value['physical_address'] ?> <br>
                                                        <strong>Sector(s): </strong><?= $value['area_of_business'] ?>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Single Item -->
                                        <?php
                                    endforeach;
                                    //}
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End We Offer -->

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Blog -->

