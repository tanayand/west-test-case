<?php

/**
 * @var WP_Post[] $latest_posts
 * @var bool $has_archive_link
 */

?>
<div class="west-latest-posts">
    <div class="posts-container row">
    <?php
    global $post;

    foreach ($latest_posts as $post) {
        setup_postdata($post);
        ?>
        <div class="post-item-container col-12 col-xl-6">
            <?php get_template_part('template-parts/loop/post', 'item'); ?>
        </div>
        <?php
    }

    wp_reset_postdata();
    ?>
    </div>

    <?php
    if ($has_archive_link) {
        $default_category = get_option('default_category');

        ?>
        <div class="text-center mt-lg-2 mb-2">
            <a href="<?php echo get_category_link($default_category) ?>" class="btn--primary">
                <?php _e('More posts', 'west') ?>
            </a>
        </div>
        <?php
    }
    ?>
</div>
