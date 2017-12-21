<?php

function manisa_setup() {
    load_theme_textdomain( 'manisa' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

    register_nav_menus( array(
        'main'    => __( 'Main Navigation', 'manisa' )
    ) );
}

add_action( 'after_setup_theme', 'manisa_setup' );

function manisa_scripts() {
    wp_enqueue_style( 'manisa-style', get_stylesheet_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'manisa-google-fonts', 'https://fonts.googleapis.com/css?family=Pattaya|Poppins:300,300i,400' );

    wp_enqueue_script( 'manisa-scripts', get_stylesheet_directory_uri() . '/js/app.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Load the html5 shiv.
    wp_enqueue_script( 'html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array(), '3.7.0' );
    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array(), '1.4.2' );
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'manisa_scripts' );

function manisa_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'manisa_disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'manisa_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'manisa_disable_emojis' );

function manisa_disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

function manisa_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}

function manisa_excerpt_length() {
    return 20;
}
add_filter( 'excerpt_length', 'manisa_excerpt_length', 999 );

function manisa_new_excerpt_more() {
    return '...';
}
add_filter('excerpt_more', 'manisa_new_excerpt_more');

function manisa_embed_handler_oembed($html, $url, $attr, $post_ID) {
    if (strpos($url, 'youtube.com')!==false) {
        $html = '<div class="youtube-wrap">'.$html.'</div>';
    }

    if (strpos($url, 'twitter.com')!==false) {
        $html = '<div class="twitter-wrap">'.$html.'</div>';
    }
    return $html;
}
add_filter('embed_oembed_html', 'manisa_embed_handler_oembed', 10, 4);

function manisa_navigation_markup_template($template, $class) {
    return '<section class="paginate text-center %1$s">
		<h2 class="screen-reader-text">%2$s</h2>
		%3$s
	</section>';
}
add_filter('navigation_markup_template', 'manisa_navigation_markup_template', 10, 2);

function manisa_body_classes($classes) {
    $classes[] = get_option( 'manisa_light_dark_theme' ) ?: 'light';
    $classes[] = get_option( 'manisa_theme_accent_color' ) ?: 'default';
    $classes[] = get_option( 'manisa_navigation_location' ) ?: 'horizontal-navigation';
    return $classes;
}
add_filter('body_class', 'manisa_body_classes');

function manisa_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'main') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class','manisa_menu_classes',1,3);

require 'inc/customizer.php';