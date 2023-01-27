<?php get_header(); ?>
        <!-- banner section start -->
    <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="\theme\wp-content\themes\themed\assets\images\img-1.png"></div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Cycle</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="\theme\wp-content\themes\themed\assets\images\img-1.png"></div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Cycle</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="\theme\wp-content\themes\themed\assets\images\img-1.png"></div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Cycle</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    
    <!-- news section start -->
    <div class="news_section layout_padding">
        <div class="container">
            <div class="news_section layout_padding">
        <div class="container">
            <h1 class="news_taital">News</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content
                of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                } ?>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- news section end -->
    <!-- footer section start -->
    

    <?php get_footer(); ?>
