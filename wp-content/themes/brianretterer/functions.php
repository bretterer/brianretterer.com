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
    wp_enqueue_style( 'brianretterer-google-fonts', 'https://fonts.googleapis.com/css?family=Pattaya|Poppins:300,300i,400' );
    wp_enqueue_script( 'brianretterer-scripts', get_stylesheet_directory_uri() . '/js/app.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script( 'brianretterer-recaptcha', 'https://www.google.com/recaptcha/api.js', ['brianretterer-scripts']);
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
    $wp_customize->remove_section('static_front_page');

    $wp_customize->add_panel(
        'brianretterer_theme_options',
        array(
            'title' => 'Homepage Settings',
            'description' => 'Settings for the homepage',
            'priority' => 100
        )
    );

    $wp_customize->add_section( 'static_front_page', array(
        'panel' => 'brianretterer_theme_options',
        'title' => __( 'Static Front Page' ),
        'priority' => 10,
        'description' => __( 'You can choose what&#8217;s displayed on the homepage of your site. It can be posts in reverse chronological order (classic blog), or a fixed/static page. To set a static homepage, you first need to create two Pages. One will become the homepage, and the other will be where your posts are displayed.' ),
        'active_callback' => array( $wp_customize, 'has_published_pages' ),
    ) );

    $wp_customize->add_setting( 'show_on_front', array(
        'default' => get_option( 'show_on_front' ),
        'capability' => 'manage_options',
        'type' => 'option',
    ) );

    $wp_customize->add_control( 'show_on_front', array(
        'label' => __( 'Your homepage displays' ),
        'section' => 'static_front_page',
        'type' => 'radio',
        'choices' => array(
            'posts' => __( 'Your latest posts' ),
            'page'  => __( 'A static page' ),
        ),
    ) );

    $wp_customize->add_setting( 'page_on_front', array(
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'page_on_front', array(
        'label' => __( 'Homepage' ),
        'section' => 'static_front_page',
        'type' => 'dropdown-pages',
        'allow_addition' => true,
    ) );

    $wp_customize->add_setting( 'page_for_posts', array(
        'type' => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'page_for_posts', array(
        'label' => __( 'Posts page' ),
        'section' => 'static_front_page',
        'type' => 'dropdown-pages',
        'allow_addition' => true,
    ) );

    $wp_customize->add_section(
        'brianretterer_homepage_header_options',
        [
            'panel' => 'brianretterer_theme_options',
            'title' => 'Header Options',
            'description' => 'Configure the look of the header',
            'priority' => 20,
            'active_callback' => function() {
                return 'page' === get_option( 'show_on_front' );
            },
            'description_hidden' => true
        ]
    );

    $wp_customize->add_setting('homepage_header_background_image', [
        'default' => 'https://brianretterer.dev/wp-content/themes/brianretterer/img/header-background.jpg'
    ]);
    $wp_customize->add_setting( 'brianretterer_header_main_text', array(
        'default' => get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting( 'brianretterer_header_sub_text', array(
        'default' => get_bloginfo('description'),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_header_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'brianretterer_homepage_header_options',
            'setting' => 'homepage_header_background_image',
        )));

    $wp_customize->add_control( 'brianretterer_header_main_text', array(
        'type' => 'text',
        'section' => 'brianretterer_homepage_header_options', // Add a default or your own section
        'label' => __( 'Main Text' ),
        'description' => __( 'This is the main text for the header.' ),
    ) );

    $wp_customize->add_control( 'brianretterer_header_sub_text', array(
        'type' => 'textarea',
        'section' => 'brianretterer_homepage_header_options', // Add a default or your own section
        'label' => __( 'Sub Text' ),
        'description' => __( 'This is the sub text for the header.' ),
    ) );

    $wp_customize->add_section(
        'brianretterer_homepage_about_section',
        [
            'panel' => 'brianretterer_theme_options',
            'title' => 'About Section',
            'description' => 'Configure the look of the about section',
            'priority' => 30,
            'description_hidden' => true
        ]
    );
    $wp_customize->add_setting('brianretterer_enable_section_about');
    $wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'brianretterer_enable_section_about_control', array(
        'label'	      => esc_html__( 'Enable About Me Section', 'brianretterer' ),
        'section'     => 'brianretterer_homepage_about_section',
        'settings'    => 'brianretterer_enable_section_about',
        'type'        => 'light'
    ) ) );

    $wp_customize->add_setting('brianretterer_about_section_image', [
        'default' => 'https://brianretterer.dev/wp-content/themes/brianretterer/img/header-background.jpg'
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brianretterer_about_section_image',
        array(
            'label' => 'About Me Image',
            'section' => 'brianretterer_homepage_about_section',
            'setting' => 'brianretterer_about_section_image',
            'active_callback' => function() {
                return true === get_theme_mod( 'brianretterer_enable_section_about' );
            },
        )));

    $wp_customize->add_setting( 'brianretterer_about_text', array(
        'default' => "",
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'brianretterer_about_text', array(
        'type' => 'textarea',
        'section' => 'brianretterer_homepage_about_section', // Add a default or your own section
        'label' => __( 'Sub Text' ),
        'description' => __( 'This is the sub text for the header.' ),
        'active_callback' => function() {
            return true === get_theme_mod( 'brianretterer_enable_section_about' );
        },
    ) );
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


if(class_exists(WP_Customize_Control::class)) {
    class Customizer_Toggle_Control extends WP_Customize_Control
    {
        public $type = 'ios';

        /**
         * Enqueue scripts/styles.
         *
         * @since 3.4.0
         */
        public function enqueue()
        {
            wp_enqueue_script('customizer-toggle-control', get_stylesheet_directory_uri() . '/js/customizer-toggle-control.js', array('jquery'), rand(), true);
            wp_enqueue_style('pure-css-toggle-buttons', get_stylesheet_directory_uri() . '/css/pure-css-togle-buttons.css', array(), rand());
            $css = '
			.disabled-control-title {
				color: #a0a5aa;
			}
			input[type=checkbox].tgl-light:checked + .tgl-btn {
				background: #0085ba;
			}
			input[type=checkbox].tgl-light + .tgl-btn {
			  background: #a0a5aa;
			}
			input[type=checkbox].tgl-light + .tgl-btn:after {
			  background: #f7f7f7;
			}
			input[type=checkbox].tgl-ios:checked + .tgl-btn {
			  background: #0085ba;
			}
			input[type=checkbox].tgl-flat:checked + .tgl-btn {
			  border: 4px solid #0085ba;
			}
			input[type=checkbox].tgl-flat:checked + .tgl-btn:after {
			  background: #0085ba;
			}
		';
            wp_add_inline_style('pure-css-toggle-buttons', $css);
        }

        /**
         * Render the control's content.
         *
         * @author soderlind
         * @version 1.2.0
         */
        public function render_content()
        {
            ?>
            <label>
                <div style="display:flex;flex-direction: row;justify-content: flex-start;">
                    <span class="customize-control-title"
                          style="flex: 2 0 0; vertical-align: middle;"><?php echo esc_html($this->label); ?></span>
                    <input id="cb<?php echo $this->instance_number ?>" type="checkbox"
                           class="tgl tgl-<?php echo $this->type ?>"
                           value="<?php echo esc_attr($this->value()); ?>" <?php $this->link();
                    checked($this->value()); ?> />
                    <label for="cb<?php echo $this->instance_number ?>" class="tgl-btn"></label>
                </div>
                <?php if (!empty($this->description)) : ?>
                    <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php endif; ?>
            </label>
            <?php
        }
    }
}