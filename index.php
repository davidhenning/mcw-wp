<?php

get_header();

if(have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('article', get_post_format());
    }

    get_template_part('pagination', 'none');
}

get_footer();
