<?php get_header(); ?>
        <!-- banner section start -->
       
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
