<?php

$hero_post_id = get_field('post_for_hero_block');

if ($hero_post_id) {
    ?>
    <div class="front-page-hero container">
        <div class="featured-post row">
            <div class="col-12 col-xl-5">
                <div class="post-info">
                    <?php
                    $post_tags = get_the_tags($hero_post_id);

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

                    <a class="post-title-link" href="<?php echo get_the_permalink($hero_post_id); ?>">
                        <h1 class="post-title"><?php echo get_the_title($hero_post_id); ?></h1>
                    </a>

                    <p class="post-excerpt"><?php echo get_the_excerpt($hero_post_id); ?></p>
                </div>
            </div>

            <div class="col-12 col-xl-7">
                <?php
                $image = get_the_post_thumbnail($hero_post_id, 'medium_large', ['class' => 'no-lazy']);

                if ($image) {
                    printf('<div class="hero-post-thumbnail">%s</div>', $image);
                }
                ?>
            </div>
        </div>
    </div>
    <?php
} else {
    the_title('<h1>', '</h1>');
}