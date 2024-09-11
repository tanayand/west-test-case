<?php
/**
 * The template for displaying the footer
 */
?>
            </div>
        </main>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <?php
                        printf(
                            '%1$s &copy; %2$d %3$s',
                            get_bloginfo('name'),
                            date('Y'),
                            __('All Right Reserved', 'west')
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#top"
   aria-label="<?php _e('Вверх сторінки', 'yar'); ?>"
   class="scroll-top scroll-top-hidden"
></a>

<?php wp_footer(); ?>

</body>
</html>