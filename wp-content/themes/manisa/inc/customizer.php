<?php

function manisa_customize_register( WP_Customize_Manager $wp_customize ) {
    $wp_customize->add_panel(
        'manisa_theme_options',
        [
            'title' => 'Theme Options',
            'description' => 'Options for the Manisa Theme',
            'priority' => 100
        ]
    );

    $wp_customize->add_section(
        'manisa_color_option_section',
        [
            'panel' => 'manisa_theme_options',
            'title' => __( 'Color Options' ),
            'priority' => 10,
            'description' => __( 'Choose light or dark theme, and which accent color to use.' )
        ]
    );

    $wp_customize->add_setting(
        'manisa_light_dark_theme',
        [
            'default' => get_option( 'manisa_light_dark_theme' ) ?: 'light',
            'type' => 'option'
        ]
    );

    $wp_customize->add_control(
        'manisa_light_dark_theme',
        [
            'label' => __( 'Light or Dark Theme' ),
            'section' => 'manisa_color_option_section',
            'type' => 'radio',
            'choices' => [
                'light' => __( 'Light Theme' ),
                'dark'  => __( 'Dark Theme' )
            ],
        ]
    );

    $wp_customize->add_setting(
        'manisa_theme_accent_color',
        [
            'default' => get_option( 'manisa_theme_accent_color' ) ?: 'default',
            'type' => 'option'
        ]
    );

    $wp_customize->add_control(
        'manisa_theme_accent_color',
        [
            'label' => __( 'Theme Accent Color' ),
            'section' => 'manisa_color_option_section',
            'type' => 'select',
            'choices' => [
                'default' => __( 'Default Color' ),
                'azure'  => __( 'Azure' ),
                'blue'  => __( 'Blue' ),
                'brown'  => __( 'Brown' ),
                'gold'  => __( 'Gold' ),
                'green'  => __( 'Green' ),
                'orange'  => __( 'Orange' ),
                'pink'  => __( 'Pink' )
            ],
        ]
    );

    $wp_customize->add_section(
        'manisa_navigation_settings',
        [
            'panel' => 'manisa_theme_options',
            'title' => __( 'Navigation Menu Location' ),
            'priority' => 10,
            'description' => __( 'Choose the style of navigation menu.' )
        ]
    );

    $wp_customize->add_setting(
        'manisa_navigation_location',
        [
            'default' => get_option( 'manisa_navigation_location' ) ?: 'horizontal-navigation',
            'type' => 'option'
        ]
    );

    $wp_customize->add_control(
        'manisa_navigation_location',
        [
            'label' => __( 'Navigation Location Style' ),
            'section' => 'manisa_navigation_settings',
            'type' => 'radio',
            'choices' => [
                'horizontal-navigation' => __( 'Horizontal' ),
                'panel-navigation'  => __( 'Panel' ),
                'vertical-navigation'  => __( 'Vertical' )
            ],
        ]
    );

    $wp_customize->remove_section('static_front_page');

    $wp_customize->add_section( 'static_front_page', [
        'panel' => 'manisa_theme_options',
        'title' => __( 'Static Front Page' ),
        'priority' => 10,
        'description' => __( 'You can choose what&#8217;s displayed on the homepage of your site. It can be posts in reverse chronological order (classic blog), or a fixed/static page. To set a static homepage, you first need to create two Pages. One will become the homepage, and the other will be where your posts are displayed.' ),
        'active_callback' => [ $wp_customize, 'has_published_pages' ],
    ] );

    $wp_customize->add_setting( 'show_on_front', [
        'default' => get_option( 'show_on_front' ),
        'capability' => 'manage_options',
        'type' => 'option',
    ] );

    $wp_customize->add_control( 'show_on_front', [
        'label' => __( 'Your homepage displays' ),
        'section' => 'static_front_page',
        'type' => 'radio',
        'choices' => [
            'posts' => __( 'Your latest posts' ),
            'page'  => __( 'A static page' ),
        ],
    ] );

    $wp_customize->add_setting( 'page_on_front', [
        'type'       => 'option',
        'capability' => 'manage_options',
    ] );

    $wp_customize->add_control( 'page_on_front', [
        'label' => __( 'Homepage' ),
        'section' => 'static_front_page',
        'type' => 'dropdown-pages',
        'allow_addition' => true,
    ] );

    $wp_customize->add_setting( 'page_for_posts', [
        'type' => 'option',
        'capability' => 'manage_options',
    ] );

    $wp_customize->add_control( 'page_for_posts', [
        'label' => __( 'Posts page' ),
        'section' => 'static_front_page',
        'type' => 'dropdown-pages',
        'allow_addition' => true,
    ] );

    $wp_customize->add_panel(
        'manisa_homepage_sections',
        [
            'title' => 'Section Settings',
            'description' => 'Settings for each of the homepage sections',
            'priority' => 110
        ]
    );

    $wp_customize->add_section(
        'manisa_header_section',
        [
            'panel' => 'manisa_homepage_sections',
            'title' => __( 'Header' ),
            'priority' => 10,
            'description' => __( 'Settings for the header section' )
        ]
    );

    $wp_customize->add_setting('manisa_header_background_image');
    $wp_customize->add_setting( 'manisa_header_main_text', [
        'default' => 'Hi! i am <span class="pattaya">Manisa</span>'
    ] );
    $wp_customize->add_setting( 'manisa_header_sub_text', [
        'default' => "Frontend Developer, Web Designer, Graphic Designer."
    ] );
    $wp_customize->add_setting( 'manisa_header_button_text', [
        'default' => "My Portfolio"
    ] );
    $wp_customize->add_setting( 'manisa_header_button_link', [
        'default' => "#portfolio"
    ] );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'manisa_header_background_image',
        [
            'label' => 'Header Background Image',
            'section' => 'manisa_header_section',
            'setting' => 'manisa_header_background_image',
        ]));

    $wp_customize->add_control( 'manisa_header_main_text', [
        'type' => 'text',
        'section' => 'manisa_header_section',
        'label' => __( 'Main Text' ),
        'description' => __( 'This is the main text for the header.' ),
    ] );

    $wp_customize->add_control( 'manisa_header_sub_text', [
        'type' => 'textarea',
        'section' => 'manisa_header_section',
        'label' => __( 'Sub Text' ),
        'description' => __( 'This is the sub text for the header.' ),
    ] );

    $wp_customize->add_control( 'manisa_header_button_text', [
        'type' => 'text',
        'section' => 'manisa_header_section',
        'label' => __( 'Button Text' ),
        'description' => __( 'This is the main text for the button in the header.  If you do not want a button, make this field blank.' ),
    ] );

    $wp_customize->add_control( 'manisa_header_button_link', [
        'type' => 'text',
        'section' => 'manisa_header_section',
        'label' => __( 'Button Link' ),
        'description' => __( 'This is the link for the button in the header.' ),
    ] );

    $wp_customize->add_section(
        'manisa_about_section',
        [
            'panel' => 'manisa_homepage_sections',
            'title' => __( 'About' ),
            'priority' => 15,
            'description' => __( 'Settings for the about section' )
        ]
    );

    $wp_customize->add_setting('manisa_about_section_enable');
    $wp_customize->add_setting('manisa_about_section_image');
    $wp_customize->add_setting('manisa_about_section_image_as_background');
    $wp_customize->add_setting( 'manisa_about_text', [
            'default' => ""]
    );
    $wp_customize->add_setting('manisa_about_section_signature');
    $wp_customize->add_setting( 'manisa_about_profile', [
            'default' => "Name: Manisa Smith, Email: manisa@email.com"]
    );
    $wp_customize->add_setting( 'manisa_about_profile_button_text', [
        'default' => "Download Resume"
    ] );
    $wp_customize->add_setting( 'manisa_about_profile_button_link', [
        'default' => "#"
    ] );
    $wp_customize->add_setting( 'manisa_about_skills', [
            'default' => "Html: 85, Photoshop: 70"]
    );
    $wp_customize->add_setting( 'manisa_about_skills_button_text', [
        'default' => "Hire Me"
    ] );
    $wp_customize->add_setting( 'manisa_about_skills_button_link', [
        'default' => "#"
    ] );

    $wp_customize->add_control( 'manisa_about_section_enable', [
        'type' => 'checkbox',
        'section' => 'manisa_about_section',
        'label' => __( 'Enable About Me Section' ),
        'description' => __( 'Check this box if you want to enable the about me section.' ),
    ] );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'manisa_about_section_image',
        [
            'label' => 'About Me Image',
            'section' => 'manisa_about_section',
            'setting' => 'manisa_about_section_image'
        ]));

    $wp_customize->add_control( 'manisa_about_section_image_as_background', [
        'type' => 'checkbox',
        'section' => 'manisa_about_section',
        'label' => __( 'Display image as background' ),
        'description' => __( 'Check this box if you want to display the image as a fixed background in the about section.' )
    ] );

    $wp_customize->add_control( 'manisa_about_text', [
        'type' => 'textarea',
        'section' => 'manisa_about_section',
        'label' => __( 'About Text' ),
        'description' => __( 'This is the text for the about me tab.' )
    ] );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'manisa_about_section_signature',
        [
            'label' => 'Signature',
            'section' => 'manisa_about_section',
            'setting' => 'manisa_about_section_signature'
        ]));

    $wp_customize->add_control( 'manisa_about_profile', [
        'type' => 'textarea',
        'section' => 'manisa_about_section',
        'label' => __( 'Profile Text' ),
        'description' => __( 'This is the text for your profile tab.  Should be a comma seperated `propertyName: value` list.' )
    ] );

    $wp_customize->add_control( 'manisa_about_profile_button_text', [
        'type' => 'text',
        'section' => 'manisa_about_section',
        'label' => __( 'Profile Button Text' ),
        'description' => __( 'This is the main text for the button in the about profile section.  If you do not want a button, make this field blank.' )
    ] );

    $wp_customize->add_control( 'manisa_about_profile_button_link', [
        'type' => 'text',
        'section' => 'manisa_about_section',
        'label' => __( 'Profile Button Link' ),
        'description' => __( 'This is the link for the button in the about profile section.' )
    ] );

    $wp_customize->add_control( 'manisa_about_skills', [
        'type' => 'textarea',
        'section' => 'manisa_about_section',
        'label' => __( 'Skills Text' ),
        'description' => __( 'This is the text for your skills tab.  Should be a comma seperated `skillName: percentage` list.' )
    ] );

    $wp_customize->add_control( 'manisa_about_skills_button_text', [
        'type' => 'text',
        'section' => 'manisa_about_section',
        'label' => __( 'Skills Button Text' ),
        'description' => __( 'This is the main text for the button in the about skills section.  If you do not want a button, make this field blank.' )
    ] );

    $wp_customize->add_control( 'manisa_about_skills_button_link', [
        'type' => 'text',
        'section' => 'manisa_about_section',
        'label' => __( 'Skills Button Link' ),
        'description' => __( 'This is the link for the button in the about skills section.' )
    ] );
}
add_action( 'customize_register', 'manisa_customize_register' );