<?php get_header(); ?>

    <!-- news section start -->
    <div class="news_section layout_padding">
        <div class="container">
            <div class="news_section layout_padding">
        <div class="container">
            <h1 class="news_taital"><?php the_title(); ?></h1>
            <div class="news_section_2 layout_padding">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'article');
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
