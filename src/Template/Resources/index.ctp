    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area full-width default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <h2><span>Resources</span></h2>
                </div>
                <div class="blog-items">
                    <?php
                        foreach($resource_info as $key => $value):
                    ?>
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="<?=RESOURCES_URL.$value['resource_link']?>">
                                    <?php
                                        //$file_parts = pathinfo(ADMIN_UPLOADS_URL . $value['resource_link']);
                                        
                                        echo '<img src="'.HOME_URL.'/img/file.png" alt="Thumb" height="55" height="55">';
                                    ?>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="<?=RESOURCES_URL.$value['resource_link']?>"><?=$value['resource_name']?></a>
                                </h4>
                                <div class="meta">
                                    &nbsp;
                                    <br>
                                </div>
                                <div class="read-more">
                                    <a href="<?=RESOURCES_URL.$value['resource_link']?>" class="more-btn">Download <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <?php
                        endforeach;
                    ?>
                    <div class="col-md-12 pagi-area">
                        <?php
                            if(count($resource_info) > 10)
                            {
                                echo "<div class='pagination'>"
                                    . "<ul class='pagination' style='margin:20px auto;'>";
                                echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'disabled'), null, array('class' => 'prev disabled'));
                                echo $this->Paginator->numbers(array('separator' => '','tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); 
                                echo $this->Paginator->next(__('next').' >', array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'disabled'), null, array('class' => 'next disabled'));
                                echo "</div></ul>";
                            }
                        ?>
                        
                        <!--<nav aria-label="navigation">
                            <ul class="pagination">
                                <li><a href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>-->
                    </div>
                </div>
                <?php
                
                ?>
            </div>
        </div>
    </div>
    <!-- End Blog -->