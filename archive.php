<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php get_template_part('template-parts/small-parts/breadcrumbs'); ?>

                    <div class="archive-posts-container pt-lg-4">
                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/loop/post', 'item');
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
