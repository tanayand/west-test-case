<?php

/**
 * @var WP_Post $post
 */

?>
<article class="west-post-item">
    <?php
    $image = get_the_post_thumbnail($post->ID, 'medium');

    if ($image) {
        ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"
               title="<?php esc_attr_e('Go to the article', 'west'); ?> — <?php the_title_attribute(); ?>"
            >
                <?php echo $image; ?>
            </a>
        </div>
        <?php
    }
    ?>

    <div class="post-info">
        <?php
        $post_tags = get_the_tags($post->ID);

        if ($post_tags) {
            ?>
            <div class="post-tags">
                <?php
                foreach ($post_tags as $tag) {
                    printf('<div class="post-tag">%s</div>', $tag->name);
                }
                ?>
            </div>
            <?php
        }
        ?>

        <a class="post-title-link" href="<?php the_permalink(); ?>">
            <h4 class="post-title"><?php the_title(); ?></h4>
        </a>

        <div class="post-meta">
            <div class="post-date">
                <?php _e('Added:', 'west') ?>
                <time datetime="<?php echo get_the_date('c'); ?>">
                    <?php echo get_the_date('j F Y'); ?>
                </time>
            </div>

            <div class="post-comments-count">
                <?php
                echo Utils::getSvg('comments');

                echo get_comment_count($post->ID)[0] ?? '0';
                ?>
            </div>
        </div>

        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>

        <div class="post-author">
            <?php
            $user_logo_id = get_field('user_image', 'user_' . $post->post_author);

            if ($user_logo_id) {
                echo wp_get_attachment_image($user_logo_id);
            }

            echo get_the_author_meta('display_name', $post->post_author);
            ?>
        </div>
    </div>
</article>
