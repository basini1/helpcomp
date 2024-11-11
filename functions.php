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
    wp_enqueue_script('tailpress', helpcomp_asset('js/app.js'), array('jquery'), $theme->get('Version'));
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

class My_Menu_Walker extends Walker_Nav_Menu
{

    private $current_parent_title = '';

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '
		<div data-element="submenu" class="xl:bg-white top-full xl:absolute left-0 right-0 !overflow-x-clip submenu-active hidden">
			<div class="wrapper max-w-none max-xl:px-0">
				<div class="xl:py-12 xl:border-t border-[#e5e5e5]">
					<div class="flex -mx-2">
						<div class="?xl:w-11/12 2xl:w-5/6 w-full px-2 mx-auto">
							<div class="flex flex-wrap -mx-2 relative z-[10]">';
        if ($depth === 0) {
            $output .= '<div class="xl:w-[30%] xl:block relative hidden w-full px-2">
									<div class="flex h-full -mx-2">
										<div class="border-r border-[#e5e5e5] w-3/4 px-2">
											<h3 class="font-medium text-opticBlack lg:text-2xl">' . esc_html($this->current_parent_title) . '</h3>
										</div>
									</div>
								</div>';
        }
        $output .= '<div class="xl:w-[70%] w-full px-2 xl:mt-0 mt-1 mb-4 xl:mb-0 font-medium text-sm sm:text-base">';

        parent::start_lvl($output, $depth, $args);
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        parent::end_lvl($output, $depth, $args);
        $output .= '</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {

        if ($depth === 0) {
            $this->current_parent_title = $item->title;
        }

        parent::start_el($output, $item, $depth, $args, $id);
    }
}

add_filter('nav_menu_css_class', 'cfw_add_data_atts_to_nav', 10, 4);
function cfw_add_data_atts_to_nav($atts, $item, $args)
{
    $atts['data-hover'] = $item->title;
    return $atts;
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{
    foreach ($items as &$item) {
        $icon = get_field('menu-item_icon', $item);
        $depth = $item->menu_item_parent ? 2 : 1; // Sprawdza poziom zagnieżdżenia (1 dla głównego poziomu)

        if ($icon) {
            if ($depth === 1) {
                $item->title = '<div class="icon-wrapper-level-1"><img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '" /></div><span class="-order-1">' . $item->title . '</span>';
                $item->classes[] = 'menu-item-depth-1';
            } else {
                $item->title =
                    '<div class="icon-wrapper-level-2"><img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '" /></div><span>' . $item->title . '</span>';
                $item->classes[] = 'menu-item-depth-2';
            }
        }
    }

    return $items;
}
