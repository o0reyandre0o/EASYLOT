<?php
/**
 * Easy Lot Theme Functions
 */

if ( ! function_exists( 'easylot_setup' ) ) :
    function easylot_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
        add_theme_support( 'custom-logo' );

        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'easylot' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'easylot_setup' );

function easylot_scripts() {
    // Fonts
    wp_enqueue_style( 'easylot-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700;800&family=Manrope:wght@300;400;500;600;700&display=swap', array(), null );
    
    // Material Symbols
    wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

    // Swiper.js for Testimonials
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

    // Tailwind CDN
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null );

    // Exact Design Tokens from Stitch HTML
    $tailwind_config = "
    tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {
            'colors': {
                    'on-secondary-container': '#5b6945',
                    'tertiary': '#705838',
                    'surface-tint': '#FB3122',
                    'tertiary-fixed-dim': '#e2c19b',
                    'primary-container': '#FB3122',
                    'secondary-fixed': '#d8e9bb',
                    'surface-container': '#f3ece9',
                    'secondary': '#55633f',
                    'on-primary-container': '#ffffff',
                    'primary': '#FB3122',
                    'surface-container-low': '#f9f2ef',
                    'on-background': '#1d1b1a',
                    'on-secondary': '#ffffff',
                    'error-container': '#ffdad6',
                    'surface-container-high': '#eee7e4',
                    'tertiary-fixed': '#ffddb6',
                    'on-error-container': '#93000a',
                    'on-error': '#ffffff',
                    'secondary-fixed-dim': '#bccca1',
                    'error': '#ba1a1a',
                    'tertiary-container': '#8b704f',
                    'on-secondary-fixed': '#131f04',
                    'primary-fixed-dim': '#ffb4a8',
                    'on-surface': '#1d1b1a',
                    'on-surface-variant': '#5e3f3a',
                    'on-tertiary-fixed': '#291801',
                    'on-primary': '#ffffff',
                    'surface-dim': '#dfd9d6',
                    'surface-bright': '#fff8f5',
                    'outline-variant': '#e8bdb6',
                    'background': '#fff8f5',
                    'primary-fixed': '#ffdad4',
                    'surface-container-lowest': '#ffffff',
                    'inverse-surface': '#33302e',
                    'surface-variant': '#e8e1de',
                    'on-tertiary-container': '#ffffff',
                    'inverse-primary': '#ffb4a8',
                    'on-primary-fixed': '#410000',
                    'on-secondary-fixed-variant': '#3e4b2a',
                    'inverse-on-surface': '#f6efec',
                    'outline': '#926e69',
                    'on-primary-fixed-variant': '#930001',
                    'surface': '#fff8f5',
                    'on-tertiary-fixed-variant': '#594325',
                    'secondary-container': '#d8e9bb',
                    'on-tertiary': '#ffffff',
                    'surface-container-highest': '#e8e1de'
            },
            'borderRadius': {
                    'DEFAULT': '0.125rem',
                    'lg': '0.25rem',
                    'xl': '0.5rem',
                    'full': '0.75rem'
            },
            'fontFamily': {
                    'headline': ['Noto Serif'],
                    'body': ['Manrope'],
                    'label': ['Manrope']
            }
          },
        },
    }";
    wp_add_inline_script( 'tailwind-cdn', $tailwind_config );

    // Custom CSS for Stitch Effects
    wp_add_inline_style( 'easylot-fonts', "
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .editorial-shadow {
            box-shadow: 0 8px 32px rgba(29, 27, 26, 0.04);
        }
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .red-gradient {
            background: linear-gradient(90deg, #FB3122 0%, #FF6B6B 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /* Force Theme Menu Visibility with Elementor */
        .glass-nav {
            display: flex !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        body.elementor-page .glass-nav {
            display: flex !important;
        }
    " );
}
add_action( 'wp_enqueue_scripts', 'easylot_scripts' );
