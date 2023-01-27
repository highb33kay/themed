<!-- create a bootstrap meta data  -->
<div class="row">
    <div class="row col-md-12 text-center ">
        <span class='date'><?php the_date(); ?></span><span class='category'><?php the_category(); ?></span><span class='author'><?php the_author(); ?></span><span class='comments'><a href="#comments"><?php comments_number(); ?></a></span>
    </div>
    <div class="col-md-12">
        <div class="full blog_img_popular">
            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="#" />
        </div>
    </div>
</div>
<hr>
<?php the_content(); ?>
<?php comments_template(); ?>
