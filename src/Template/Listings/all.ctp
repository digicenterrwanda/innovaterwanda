<!-- Start Blog 
============================================= -->
<div id="blog" class="blog-area bg-gray full-width single default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="col-md-12">
                    
                    <div class="item">
                        <div class="info">
                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="filter" class="form-control">
                                                <option value="">Sort by type</option>
                                                <?php
                                                for($i = 0; $i < count($company_types); $i++)
                                                {
                                                ?>
                                                    <option value="<?=$company_types[$i]['type_name']?>"><?=$company_types[$i]['type_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="filter" class="form-control">
                                                <option value="">Sort by reg. date</option>
                                                <?php
                                                for($i = 0; $i < count($company_details); $i++)
                                                {
                                                ?>
                                                    <option value="<?=$company_details[$i]['reg_date']?>"><?=$company_details[$i]['reg_date']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="filter" class="form-control">
                                                <option value="">Sort by reg. date</option>
                                                <?php
                                                for($i = 0; $i < count($company_details); $i++)
                                                {
                                                ?>
                                                    <option value="<?=$company_details[$i]['reg_date']?>"><?=$company_details[$i]['reg_date']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-area">
                                <hr>
                                <br>
                                <div class="comments-title">
                                    <div class="comments-list">
                                        <?php
                                        for($i = 0; $i < count($company_details); $i++)
                                        {
                                        ?>
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <?php
                                                    if($company_details[$i]['company_logo'] != "")
                                                    {
                                                ?>
                                                        <img src="<?=ADMIN_UPLOADS_URL.$company_details[$i]['company_logo']?>" alt="Author">
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>
                                                        <img src="../../img/placeholder.png" alt="listing">
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <a href="<?=HOME_URL?>/listings/listingdetail/<?= $company_details[$i]['company_id'] ?>">
                                                <div class="content">
                                                    <h5><?=$company_details[$i]['institution_name']?></h5>
                                                    <div class="comments-info">
                                                        <strong><i class="fas fa-clock"></i> </strong><?=$company_details[$i]['reg_date']?> <br>
                                                        <strong><i class="fas fa-map-marker-alt"></i> </strong><?=$company_details[$i]['physical_address']?> <br>
                                                        <strong><i class="fas fa-object-group"></i> </strong><?=$company_details[$i]['area_of_business']?> <br>
                                                        <strong><i class="fas fa-tag"></i> </strong><?=$company_details[$i]['service_offered']?>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                        </div>
                                        <?php
                                        }
                                        ?>
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
<!-- End Blog -->