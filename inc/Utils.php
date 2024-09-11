<?php

class Utils
{
    public static function getSvg(string $image_name): string
    {
        $svg_file = get_template_directory() . "/assets/img/$image_name.svg";

        if (! file_exists($svg_file)) {
            return '';
        }

        return file_get_contents($svg_file);
    }

    public static function breadcrumbsContent(): string
    {
        if (is_front_page() || is_home()) {
            return '';
        }

        if (is_page()) {
            return get_the_title();
        }

        if (is_category()) {
            $category = get_category(get_query_var('cat'));

            return self::getCategoriesString($category->cat_ID);
        }

        if (is_singular()) {
            global $post;

            return self::getCategoriesString($post->post_category[0]);
        }

        return '';
    }

    public static function getCategoriesString(int $cat_id): string {
        $categories = get_category_parents($cat_id, true, ' / ');

        if (is_wp_error($categories)) {
            return '';
        }

        return substr($categories, 0, strlen($categories) - 3);
    }
}