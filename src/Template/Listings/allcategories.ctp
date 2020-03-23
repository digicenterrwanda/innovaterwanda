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
                                <div class="col-lg-3">
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
                                <div class="col-lg-2">
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
                                    <select name="services" class="form-control">
                                        <option value="">Filter by service offered</option>
<?php foreach ($services as $value): ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['service_name'] ?></option>
                                        <?php endforeach; ?>
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
                    <div class="comments-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-11" style="line-height: 20px;">
					
                                </div>                             
                                <div class="col-lg-1 text-right">
                                <?php
                                if (!empty($company_details)) {
                                    echo $this->Form->create('POST', array('action' => 'exportreportsasexcel'));
                                    ?>
                                        <form>
                                        <?php
                                        $output = '
                                            <tr>
                                                <th>Company</th>
                                                <th>Company tagline</th>
                                                <th>Area of business</th>
                                                <th>Organization type</th>
                                                <th>Services offered</th>
                                                <th>Date of incorporation</th>
                                                <th>Location</th>
                                                <th>Web address</th>
                                                <th>Company email</th>
                                                <th>Company phone number</th>
                                            </tr>';

                                        foreach ($company_details as $key => $values):
                                            $output .= '
                                                <tr>
                                                <td>' . $values["institution_name"] . '</td>
                                                <td>' . $values["company_tagline"] . '</td>
                                                <td>' . $values["area_of_business"] . '</td>
                                                <td>' . $values["organization_type"] . '</td>
                                                <td>' . $values["service_offered"] . '</td>
                                                <td>' . $values["reg_date"] . '</td>
                                                <td>' . $values["physical_address"] . '</td>
                                                <td>' . $values["web_address"] . '</td>
                                                <td>' . $values["company_email"] . '</td>
                                                <td>' . $values["company_phone"] . '</td></tr>';
                                        endforeach;
                                        ?>
                                            <input type="hidden" name="excel_data" value="<?= $output ?>" />
                                            <input type="hidden" name="file_name" value="company_list" />
                                            <div class="col-lg-6">
                                                <button type="submit"><i class="fas fa-file-excel" style="font-size: 32px;"></i> </button>
                                                
                                            </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="comments-title">
                            <div class="comments-list">
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
						    <center>
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
						    <br>
                                                    <h4>
                                                        <strong>
                                                            <?= $value['institution_name'] ?>
                                                        </strong>
                                                    </h4>
						    </center>
                                                    <p>
                                                        &nbsp;<strong><i class="fas fa-calendar-alt "></i>  Year registered: </strong><?= $value['reg_date'] ?> <br>
                                                        &nbsp;<strong><i class="fas fa-map-marker"></i>  Location: </strong><?= $value['physical_address'] ?> <br>
                                                        &nbsp;<strong><i class="fas fa-tags"></i>  Service(s): </strong><?= $value['service_offered'] ?>
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
                            <div class="col-md-12 pagi-area">
                                <?php
                                        echo "<div class='pagination'>"
                                        . "<ul class='pagination' style='margin:20px auto;'>";
                                        echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'disabled'), null, array('class' => 'prev disabled'));
                                        echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active'));
                                        echo $this->Paginator->next(__('next') . ' >', array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'disabled'), null, array('class' => 'next disabled'));
                                        echo "</div></ul>";
                                    
                                ?>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Blog -->