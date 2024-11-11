<?php

/**
 * Theme setup.
 */
function helpcomp_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'header_main-menu' => __('Menu główne (nagłówek)'),
            'footer_offer-menu' => __('Menu oferty (stopka)'),
            'footer_company-menu' => __('Menu o firmie (stopka)'),
            'footer_offer-menu' => __('Menu oferty (stopka)'),
            'footer_insert-menu' => __('Menu Insert (stopka)'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'helpcomp_setup');

/**
 * Enqueue theme assets.
 */
function helpcomp_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', helpcomp_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', helpcomp_asset('js/app.js'), array(), $theme->get('Version'));
    wp_enqueue_style('google-fonts-outfit', '//fonts.googleapis.com/css2?family=Outfit:wght@300,400,500;600,700,800&display=swap', false, $theme->get('Version'), 'all');
}

add_action('wp_enqueue_scripts', 'helpcomp_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function helpcomp_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

// Adds option 'li_class' to 'wp_nav_menu'
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

function tailpress_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    $classes = isset($atts['class']) ? explode(' ', $atts['class']) : array();

    if (isset($args->link_class)) {
        $classes[] = $args->link_class;
    }

    if (isset($args->{"link_class_$depth"})) {
        $classes[] = $args->{"link_class_$depth"};
    }

    $atts['class'] = implode(' ', $classes);

    return $atts;
}

add_filter('nav_menu_link_attributes', 'tailpress_nav_menu_link_attributes', 10, 4);

// Adds option 'submenu_class' to 'wp_nav_menu'
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);
