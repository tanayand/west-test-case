<?php

abstract class Shortcode
{
    abstract static function shortcodeCallback();

    public static function getTemplatePath(string $filename): string
    {
        $template_path = get_template_directory() . "/template-parts/shortcodes/$filename.php";

        return file_exists($template_path) ? $template_path : '';
    }

    public static function displayMessageForAdmin(string $message): string {
        if (! current_user_can('edit_posts')) {
            return '';
        }

        return '<p class="alert alert-danger" role="alert">' . $message . '</p>';
    }
}