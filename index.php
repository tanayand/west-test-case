<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/small-parts/breadcrumbs');

                            the_title('<h1>', '</h1>');

                            if (has_post_thumbnail()) {
                                ?>
                                <div class="featured-image mb-5">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                                <?php
                            }

                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>