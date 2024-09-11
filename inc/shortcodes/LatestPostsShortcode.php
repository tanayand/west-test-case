<?php

class LatestPostsShortcode extends Shortcode {
    public static string $shortcode_tag = 'west-latest-posts';

    public static function registerHooks(): void
    {
        add_shortcode(self::$shortcode_tag, [__CLASS__, 'shortcodeCallback']);
    }

    public static function shortcodeCallback($atts = []): string
    {
        $atts = shortcode_atts(
            [
                'count' => 4, // accepts custom posts number
                'show-archive-link' => true //
            ],
            $atts,
            self::$shortcode_tag
        );

        $atts['show-archive-link'] = wp_validate_boolean($atts['show-archive-link']);

        $query_args = [
            'post_type' => 'post',
            'posts_per_page' => (int) $atts['count'],
            'orderby' => 'date',
            'order' => 'DESC'
        ];

        $posts_query = new WP_Query($query_args);

        $latest_posts = $posts_query->posts;
        $has_archive_link = $atts['show-archive-link'] && ($posts_query->found_posts > (int) $atts['count']);

        if (! $latest_posts) {
            return self::displayMessageForAdmin('No posts available.');
        }

        $template_path = self::getTemplatePath('latest-posts');

        if (! $template_path) {
            return self::displayMessageForAdmin('Template not found.');
        }

        ob_start();

        include $template_path;

        return ob_get_clean();
    }
}