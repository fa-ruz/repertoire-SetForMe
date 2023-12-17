<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

function wpbootstrap_styles_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/script.js', array(), null, true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');



// MENUS

register_nav_menu('header', 'En tête du menu');

function montheme_menu_class($classes) {
    // va permettre de customizer les classe de nos items (donc nos li)
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_class($attrs) {
    // va permettre de customizer les classe de nos liens (donc nos a)
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');



// CUSTOM POST TYPE

function create_exercices_posttypes() {
    register_post_type('exercices', [
        'labels' => [
            'name' => 'Exercices',
            'singular_name' => 'Exercice'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'exercices'],
        'show_in_rest' => false,
    ]);
}
add_action('init', 'create_exercices_posttypes');

function create_categories_posttypes() {
    register_post_type('categories', [
        'labels' => [
            'name' => 'Categories',
            'singular_name' => 'Category'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'categories'],
        'show_in_rest' => false,
    ]);
}
add_action('init', 'create_categories_posttypes');

function create_blockquote_post_type() {
    register_post_type('blockquote', [
        'labels' => [
            'name' => 'Blockquotes',
            'singular_name' => 'Blockquote'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'blockquote'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_blockquote_post_type');


