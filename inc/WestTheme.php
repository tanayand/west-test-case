<?php

class WestTheme
{
    const THEME_VERSION = '1.0.0';

    public static function init(): void
    {
        self::registerHooks();
    }

    public static function registerHooks(): void
    {
        add_action('after_setup_theme', [__CLASS__, 'themeSetup']);
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueueScripts']);
    }

    public static function themeSetup(): void
    {
        add_theme_support('responsive-embeds');
        add_theme_support('align-wide');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('editor-styles');
        add_theme_support('wp-block-styles');
        add_theme_support('excerpt');

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        add_theme_support('custom-logo', [
            'width' => 140,
            'height' => 60,
            'flex-height' => true,
            'flex-width' => true,
            'unlink-homepage-logo' => true,
        ]);

        register_nav_menus([
            'menu-header' => esc_html__('Primary', 'west'),
        ]);
    }

    public static function enqueueScripts(): void
    {
        // Load Bootstrap
        wp_enqueue_style(
            'bootstrap',
            self::themeUrl('/assets/libs/bootstrap/css/bootstrap.min.css'),
            [],
            '4.0.0'
        );

        wp_enqueue_style(
            'bootstrap-grid',
            self::themeUrl('/assets/libs/bootstrap/css/bootstrap-grid.min.css'),
            [],
            '4.0.0'
        );

        wp_enqueue_script(
            'bootstrap',
            self::themeUrl('/assets/libs/bootstrap/js/bootstrap.min.js'),
            ['jquery'],
            '4.0.0',
            [
                'in_footer' => true
            ]
        );

        // Load Theme Styles & Scripts
        wp_enqueue_style(
            'theme-style',
            get_stylesheet_uri(),
            ['bootstrap', 'bootstrap-grid'],
            self::THEME_VERSION
        );

        wp_enqueue_script(
            'theme-scripts',
            self::themeUrl('/assets/js/scripts.min.js'),
            ['jquery', 'bootstrap'],
            self::THEME_VERSION,
            [
                'in_footer' => true
            ]
        );
    }

    public static function themeUrl(string $relative_path): string
    {
        return get_template_directory_uri() . $relative_path;
    }
}
