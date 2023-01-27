<div class="container">
  <h2>Comments</h2>
  <div class="card">
    <div class="card-body bg-dark">
        <?php if (!have_comments()) {
            echo '<p>No comments yet</p>';
        } else {
            echo '<h3>' . get_comments_number() . ' Comments</h3>';
        } ?>
        <?php wp_list_comments([
            'style' => 'div class="card-title"',
            'short_ping' => true,
            'avatar_size' => 42,
        ]); ?>

        <hr>
    <?php if (comments_open()) {
        comment_form([
            'class_form' => 'form-control',
            'title_reply_before' =>
                '<h3 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h3>',
        ]);
    } ?>
      
    </div>
  </div>
  
</div>  