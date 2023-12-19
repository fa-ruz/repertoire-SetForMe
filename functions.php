<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

function wpbootstrap_styles_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/css/style.css');

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

function create_intro_post_type() {
    register_post_type('intro', [
        'labels' => [
            'name' => 'Intro',
            'singular_name' => 'Intro'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'intro'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_bdc_post_type');

function create_bdc_post_type() {
    register_post_type('bdc', [
        'labels' => [
            'name' => 'Bdc',
            'singular_name' => 'Bdc'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'bdc'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_bdc_post_type');

function create_tlc_post_type() {
    register_post_type('tlc', [
        'labels' => [
            'name' => 'Tlc',
            'singular_name' => 'Tlc'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Tlc'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_tlc_post_type');

function create_etirements_post_type() {
    register_post_type('etirements', [
        'labels' => [
            'name' => 'Etirements',
            'singular_name' => 'Etirements'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'etirements'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_etirements_post_type');




// Ajouter le support des extraits pour le type de publication 'categories'
add_post_type_support( 'categories', 'excerpt' );

function create_resultats_post_type() {
    register_post_type('resultats', [
        'labels' => [
            'name' => 'Resultats',
            'singular_name' => 'Resultats'
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'resultats'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_resultats_post_type');
















// Fonction pour stocker les réponses dans la session
function enregistrer_reponse($question, $reponse) {
    session_start();
    $_SESSION[$question] = $reponse;
}

// Fonction pour générer la recommandation en fonction des réponses
function generer_recommandation($reponse_q1, $reponse_q2) {
    // Implémentez votre logique de recommandation ici
    // Cela pourrait être une recherche dans une base de données, une logique conditionnelle, etc.

    // Exemple simple : recommandation basée sur les réponses à Q1 et Q2
    $recommandation = "Vidéo recommandée pour " . $reponse_q1 . " et niveau " . $reponse_q2;

    return $recommandation;
}

function enqueue_slick_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_scripts');
