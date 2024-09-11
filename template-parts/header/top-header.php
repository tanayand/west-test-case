<header class="top-header">
	<div class="container">
		<div class="row align-items-stretch">
			<div class="header-logo col-6 col-md-3">
				<?php echo get_custom_logo(); ?>
			</div>

			<div class="d-flex header-nav col-6 col-md-9 justify-content-end">
				<?php get_template_part('template-parts/header/nav'); ?>

                <?php get_template_part('template-parts/header/search'); ?>

                <div class="open-nav-btn mobile-menu d-block d-lg-none">
                    <span class="burger-menu_lines"></span>
                </div>
			</div>
		</div>
	</div>
</header>