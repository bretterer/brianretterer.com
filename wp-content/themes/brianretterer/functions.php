<?php

function brianretterer_setup() {
    load_theme_textdomain( 'brianretterer' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_image_size( 'brianretterer-featured-image', 2000, 1200, true );

    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'brianretterer_setup' );

function brianretterer_scripts() {
    wp_enqueue_style( 'brianretterer-style', get_stylesheet_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'brianretterer-style-color', get_stylesheet_directory_uri() . '/css/color-orange.css' );

    wp_enqueue_script( 'brianretterer-scripts', get_stylesheet_directory_uri() . '/js/app.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'brianretterer_scripts' );

function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}


function brianretterer_customize_register( WP_Customize_Manager $wp_customize ) {
    $wp_customize->add_section('brianretterer_homepage_options', array(
        'title' => 'Homepage',
        'description' => '',
        'priority' => 100,
    ));

    $wp_customize->add_setting('homepage_header_background_image', [
        'default' => 'https://brianretterer.dev/wp-content/themes/brianretterer/img/header-background.jpg'
    ]);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_header_background_image',
        array(
            'label' => 'Header Background Image',
            'section' => 'brianretterer_homepage_options',
            'settings' => 'homepage_header_background_image',
        ) ) );
}
add_action( 'customize_register', 'brianretterer_customize_register' );

function brianretterer_excerpt_length() {
    return 20;
}
add_filter( 'excerpt_length', 'brianretterer_excerpt_length', 999 );

function brianretterer_new_excerpt_more() {
    return '...';
}
add_filter('excerpt_more', 'brianretterer_new_excerpt_more');

function brianretterer_embed_handler_oembed($html, $url, $attr, $post_ID) {
    if (strpos($url, 'youtube.com')!==false) {
        $html = '<div class="youtube-wrap">'.$html.'</div>';
    }

    if (strpos($url, 'twitter.com')!==false) {
        $html = '<div class="twitter-wrap">'.$html.'</div>';
    }
    return $html;
}
add_filter('embed_oembed_html', 'brianretterer_embed_handler_oembed', 10, 4);

function brianretterer_navigation_markup_template($template, $class) {
    return '<section class="paginate text-center %1$s">
		<h2 class="screen-reader-text">%2$s</h2>
		%3$s
	</section>';
}
add_filter('navigation_markup_template', 'brianretterer_navigation_markup_template', 10, 2);

include 'inc/walkers/BrianRetterer_Walker_Comment.php';