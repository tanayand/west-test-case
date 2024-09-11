<?php

include 'inc/Utils.php';
include 'inc/WestTheme.php';
include 'inc/shortcodes/Shortcode.php';
include 'inc/shortcodes/LatestPostsShortcode.php';

// Register theme settings
WestTheme::init();

// Register shortcodes
LatestPostsShortcode::registerHooks();