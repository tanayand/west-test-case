<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/small-parts/front-page-hero-block'); ?>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>