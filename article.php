<article id="post-<?php the_ID(); ?>" class="post">
    <h1 class="post__headline"><a href="<?php the_permalink() ?>" class="post__headline__link"><?php the_title(); ?></a></h1>
    <p class="post__meta">
        <time datetime="<?php the_time('Y-m-d\TH:i:s'); ?>" class="post__meta__date"><?php the_time(get_option('date_format')); ?></time>
        <!-- &middot; -->
        <?php /* comments_popup_link(__('Keine Kommentare', 'mcw-wp'), __('Ein Kommentar', 'mcw-wp'), __('% Kommentare', 'mcw-wp'), 'post__meta__link'); */ ?>
    </p>
    <div class="post__content">
        <?php the_content(); ?>
    </div>
</article>