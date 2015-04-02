<div class="pagination">
    <div class="pagination__item pagination__item-position-prev">
        <?php if(get_previous_posts_link()): ?>
            <a href="<?php previous_posts(); ?>" class="pagination__link">&larr; vorherige Einträge</a>
        <?php endif; ?>
    </div>
    <div class="pagination__item pagination__item-position-next">
        <?php if(get_next_posts_link()): ?>
            <a href="<?php next_posts(); ?>" class="pagination__link">nächste Einträge &rarr;</a>
        <?php endif; ?>
    </div>
</div>