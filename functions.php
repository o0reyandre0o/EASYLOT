<?php
/**
 * Easy Lot Theme Functions
 *
 * @version 1.1.0
 *
 * The real version number lives in the style.css header — WordPress reads it
 * from there and shows it under Appearance → Themes. Bump it there, and the
 * EASYLOT_THEME_VERSION constant below picks it up automatically, so the two
 * files can never drift apart. Keep the @version line above in sync by hand.
 */

/**
 * Theme version, read straight from the style.css header.
 * Use this for the ?ver= on any asset the theme enqueues, so a version bump
 * is enough to bust visitors' browser caches.
 */
if ( ! defined( 'EASYLOT_THEME_VERSION' ) ) {
    $easylot_theme = wp_get_theme();
    define( 'EASYLOT_THEME_VERSION', $easylot_theme->get( 'Version' ) ? $easylot_theme->get( 'Version' ) : '1.1.0' );
    unset( $easylot_theme );
}

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

/**
 * Force Theme Header Visibility
 * This prevents Elementor Pro / PRO Elements from overriding the theme's header location.
 */
add_filter( 'elementor/theme/should_do_location', function( $should_do, $location ) {
    if ( 'header' === $location ) {
        return false;
    }
    return $should_do;
}, 10, 2 );

/**
 * Render the main theme menu
 * Hooked to wp_body_open to ensure it appears even if Elementor replaces the header.php
 */
function easylot_render_main_menu() {
    static $rendered = false;
    if ($rendered) return;
    $rendered = true;
    ?>
    <style>
        /* Force reset for Elementor's aggressive button and layout styling */
        .glass-nav button, 
        .glass-nav [role="button"] {
            background: none !important;
            border: none !important;
            padding: 0 !important;
            margin: 0 !important;
            box-shadow: none !important;
            text-transform: none !important;
            width: auto !important;
            height: auto !important;
            display: flex !important;
            align-items: center !important;
            cursor: pointer;
        }
        .glass-nav .flex { display: flex !important; }
        .glass-nav .hidden { display: none !important; }
        @media (min-width: 768px) {
            .glass-nav .md\:flex { display: flex !important; }
            .glass-nav .md\:hidden { display: none !important; }
        }
        .glass-nav .justify-between { justify-content: space-between !important; }
        .glass-nav .items-center { align-items: center !important; }
        .glass-nav .absolute { position: absolute !important; }
        .glass-nav .relative { position: relative !important; }
        .glass-nav .invisible { visibility: hidden !important; }
        .glass-nav .group:hover .group-hover\:visible { visibility: visible !important; }
        .glass-nav .group:hover .group-hover\:opacity-100 { opacity: 1 !important; }
    </style>
    <nav class="fixed top-0 left-0 w-full z-[2147483647] bg-[#fff8f5] backdrop-blur-md border-b border-black/5 glass-nav" style="display: flex !important; visibility: visible !important;">
        <div class="max-w-7xl mx-auto px-8 md:px-20 py-4 flex justify-between items-center w-full">
            <div class="font-serif text-2xl font-bold tracking-tighter text-[#1d1b1a]">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block h-10">
                    <div class="w-[140px] h-auto">
                        <img alt="Easy Lot Logo" class="h-10 w-auto object-contain" src="https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Logo-1-1.svg"/>
                    </div>
                </a>
            </div>
            
            <div class="hidden md:flex items-center gap-8">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300 relative group">
                    Home
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full <?php if(is_front_page()) echo 'w-full'; ?>"></span>
                </a>

                <!-- Our Developments Mega Menu -->
                <div class="relative group">
                    <div role="button" class="flex items-center gap-1 text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300">
                        Our Developments
                        <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </div>
                    <!-- Mega Menu Container -->
                    <div class="absolute top-full -left-20 md:-left-40 mt-2 w-[90vw] max-w-[850px] bg-white rounded-[2rem] shadow-2xl shadow-black/10 border border-black/5 p-8 opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-500 z-50">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
                            <!-- Left Column: Quick List -->
                            <div class="md:col-span-5 border-r border-black/5 pr-10">
                                <span class="block font-serif text-xs uppercase tracking-[0.2em] text-primary font-bold mb-6">All Locations</span>
                                <div class="space-y-6">
                                    <a href="https://easylot.ky/project/little-cayman/" class="group/item flex items-start gap-4 p-2 -m-2 rounded-2xl hover:bg-surface transition-colors">
                                        <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
                                            <img src="https://easylot.ky/wp-content/uploads/2023/08/elena-estates-little-cayman-sitemap-satellite.jpg" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform" alt="Elena Estates">
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm text-[#1d1b1a] group-hover/item:text-primary transition-colors">Elena Estates</h4>
                                            <p class="text-xs text-on-surface-variant line-clamp-1">Serenity in Little Cayman</p>
                                        </div>
                                    </a>
                                    <a href="https://easylot.ky/project/rum-point-land/" class="group/item flex items-start gap-4 p-2 -m-2 rounded-2xl hover:bg-surface transition-colors">
                                        <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
                                            <img src="https://easylot.ky/wp-content/uploads/2024/07/rum-point-cayman-islands-1.jpg" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform" alt="Northshore Estates">
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm text-[#1d1b1a] group-hover/item:text-primary transition-colors">Northshore Estates</h4>
                                            <p class="text-xs text-on-surface-variant line-clamp-1">Rum Point Near-Shore Lots</p>
                                        </div>
                                    </a>
                                    <a href="https://easylot.ky/project/high-rock-estates/" class="group/item flex items-start gap-4 p-2 -m-2 rounded-2xl hover:bg-surface transition-colors">
                                        <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
                                            <img src="https://easylot.ky/wp-content/uploads/2023/08/High-Rock-Estates.jpg" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform" alt="High Rock Estates">
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm text-[#1d1b1a] group-hover/item:text-primary transition-colors">High Rock Estates</h4>
                                            <p class="text-xs text-on-surface-variant line-clamp-1">East End Investment Land</p>
                                        </div>
                                    </a>
                                </div>
                                <a href="<?php echo esc_url(home_url('/all-our-developments/')); ?>" class="inline-flex items-center gap-2 mt-8 text-primary font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all">
                                    View All Developments
                                    <span class="material-symbols-outlined text-sm">east</span>
                                </a>
                            </div>

                            <!-- Right Column: Featured Cards -->
                            <div class="md:col-span-7">
                                <span class="block font-serif text-xs uppercase tracking-[0.2em] text-primary font-bold mb-6">Featured Properties</span>
                                <div class="grid grid-cols-2 gap-6">
                                    <a href="https://easylot.ky/project/little-cayman/" class="group/card block relative rounded-2xl overflow-hidden aspect-[4/5] shadow-sm hover:shadow-xl transition-all duration-500">
                                        <img src="https://easylot.ky/wp-content/uploads/2023/08/elena-estates-little-cayman-sitemap-satellite.jpg" class="absolute inset-0 w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-700" alt="Elena Estates">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-4 flex flex-col justify-end">
                                            <span class="inline-block bg-primary text-white text-[10px] font-bold px-2 py-1 rounded-md mb-2 w-fit">NEW LISTING</span>
                                            <h4 class="text-white font-bold text-sm mb-1">Elena Estates</h4>
                                            <p class="text-white/70 text-[10px]">Little Cayman</p>
                                        </div>
                                    </a>
                                    <a href="https://easylot.ky/project/rum-point-land/" class="group/card block relative rounded-2xl overflow-hidden aspect-[4/5] shadow-sm hover:shadow-xl transition-all duration-500">
                                        <img src="https://easylot.ky/wp-content/uploads/2024/07/rum-point-cayman-islands-1.jpg" class="absolute inset-0 w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-700" alt="Northshore Estates">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-4 flex flex-col justify-end">
                                            <span class="inline-block bg-secondary text-white text-[10px] font-bold px-2 py-1 rounded-md mb-2 w-fit">PREMIUM</span>
                                            <h4 class="text-white font-bold text-sm mb-1">Northshore Estates</h4>
                                            <p class="text-white/70 text-[10px]">Grand Cayman</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Us Dropdown -->
                <div class="relative group">
                    <div role="button" class="flex items-center gap-1 text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300">
                        About Us
                        <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </div>
                    <div class="absolute top-full left-0 mt-2 w-[220px] bg-white rounded-xl shadow-xl shadow-black/5 border border-black/5 py-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">
                        <a href="https://easylot.ky/about-us/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors border-b border-black/5 last:border-0">About Easy Lot</a>
                        <a href="https://easylot.ky/team-members/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors border-b border-black/5 last:border-0">Meet The Team</a>
                        <a href="https://easylot.ky/directions/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors last:border-0">Directions</a>
                    </div>
                </div>

                <!-- Help Dropdown -->
                <div class="relative group">
                    <div role="button" class="flex items-center gap-1 text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300">
                        Help
                        <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </div>
                    <div class="absolute top-full left-0 mt-2 w-[260px] bg-white rounded-xl shadow-xl shadow-black/5 border border-black/5 py-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">
                        <a href="<?php echo esc_url( easylot_video_guides_url() ); ?>" class="flex items-start gap-3 px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors border-b border-black/5">
                            <span class="material-symbols-outlined text-[20px] text-primary mt-0.5">play_circle</span>
                            <span>
                                Video Guides
                                <span class="block text-xs font-normal text-on-surface-variant">Your questions, answered on video</span>
                            </span>
                        </a>
                        <a href="https://easylot.ky/faq/" class="flex items-start gap-3 px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors">
                            <span class="material-symbols-outlined text-[20px] text-primary mt-0.5">quiz</span>
                            <span>
                                FAQs
                                <span class="block text-xs font-normal text-on-surface-variant">Read the full written answers</span>
                            </span>
                        </a>
                    </div>
                </div>

                <a href="https://easylot.ky/contact-us/" class="text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300 relative group">
                    Contact
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <a href="<?php echo esc_url(home_url('/all-our-developments/')); ?>" class="hidden md:block bg-primary text-white px-6 py-2.5 rounded-xl font-medium tracking-tight hover:scale-95 transition-all duration-200 shadow-lg shadow-primary/20">
                    Explore Developments
                </a>
                
                <!-- Mobile Menu Toggle -->
                <div id="mobile-menu-toggle" role="button" class="md:hidden flex items-center justify-center w-10 h-10 text-on-surface">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="fixed inset-0 z-[10000] bg-white translate-x-full transition-transform duration-500 ease-in-out md:hidden flex flex-col">
        <div class="flex justify-between items-center px-8 py-4 border-b border-black/5">
            <div class="h-8">
                <img alt="Easy Lot Logo" class="h-8 w-auto object-contain" src="https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Logo-1-1.svg"/>
            </div>
            <button id="mobile-menu-close" class="text-on-surface">
                <span class="material-symbols-outlined text-3xl">close</span>
            </button>
        </div>
        
        <div class="flex-1 overflow-y-auto px-8 py-10 space-y-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block font-serif text-3xl font-bold text-on-surface">Home</a>
            
            <div class="space-y-4">
                <span class="block font-serif text-sm uppercase tracking-widest text-primary font-bold mb-4">Our Developments</span>
                <div class="grid gap-4 pl-4 border-l border-primary/10">
                    <a href="<?php echo esc_url(home_url('/all-our-developments/')); ?>" class="text-xl font-bold text-primary">View All Developments</a>
                    <div class="h-px bg-black/5 my-2"></div>
                    <a href="https://easylot.ky/project/high-rock-estates/" class="text-xl font-medium text-on-surface/80">High Rock Estates</a>
                    <a href="https://easylot.ky/project/little-cayman/" class="text-xl font-medium text-on-surface/80">Elena Estates (Little Cayman)</a>
                    <a href="https://easylot.ky/project/rum-point-land/" class="text-xl font-medium text-on-surface/80">Northshore Estates</a>
                    <a href="https://easylot.ky/project/ocean-breeze-north/" class="text-xl font-medium text-on-surface/80">Ocean Breeze North (SOLD OUT)</a>
                    <a href="https://easylot.ky/project/ocean-breeze/" class="text-xl font-medium text-on-surface/80">Ocean Breeze East (SOLD OUT)</a>
                </div>
            </div>

            <div class="space-y-4">
                <span class="block font-serif text-sm uppercase tracking-widest text-primary font-bold mb-4">About Us</span>
                <div class="grid gap-4 pl-4 border-l border-primary/10">
                    <a href="https://easylot.ky/about-us/" class="text-xl font-medium text-on-surface/80">Our Story</a>
                    <a href="https://easylot.ky/team-members/" class="text-xl font-medium text-on-surface/80">Our Team</a>
                    <a href="https://easylot.ky/directions/" class="text-xl font-medium text-on-surface/80">Directions</a>
                </div>
            </div>

            <div class="space-y-4">
                <span class="block font-serif text-sm uppercase tracking-widest text-primary font-bold mb-4">Help</span>
                <div class="grid gap-4 pl-4 border-l border-primary/10">
                    <a href="<?php echo esc_url( easylot_video_guides_url() ); ?>" class="text-xl font-medium text-on-surface/80 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[22px] text-primary">play_circle</span>
                        Video Guides
                    </a>
                    <a href="https://easylot.ky/faq/" class="text-xl font-medium text-on-surface/80 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[22px] text-primary">quiz</span>
                        FAQs
                    </a>
                </div>
            </div>

            <a href="https://easylot.ky/contact-us/" class="block font-serif text-3xl font-bold text-on-surface">Contact</a>
            
            <div class="pt-10">
                <a href="<?php echo esc_url(home_url('/all-our-developments/')); ?>" class="block w-full bg-primary text-white text-center py-5 rounded-2xl font-bold text-xl shadow-xl shadow-primary/20">
                    Explore Developments
                </a>
            </div>
        </div>
        
        <div class="p-8 bg-surface border-t border-black/5 text-center space-y-2">
            <p class="text-sm text-on-surface/50 font-medium">© <?php echo date('Y'); ?> EASYLOT CAYMAN ISLANDS</p>
            <p class="text-xs text-on-surface-variant">Website & Content created by <a href="https://toctoc.ky/" class="font-bold hover:text-primary transition-colors">Toc Toc Marketing</a></p>
        </div>
    </div>

    <script>
        console.log('EASYLOT Theme Header Loaded');
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('.glass-nav');
            if (nav) {
                console.log('Menu found, forcing visibility');
                nav.style.setProperty('display', 'flex', 'important');
                nav.style.setProperty('visibility', 'visible', 'important');
                nav.style.setProperty('opacity', '1', 'important');
                nav.style.setProperty('z-index', '2147483647', 'important');
            } else {
                console.error('Menu NOT found in DOM');
            }
            
            const toggle = document.getElementById('mobile-menu-toggle');
            const close = document.getElementById('mobile-menu-close');
            const menu = document.getElementById('mobile-menu');
            
            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.remove('translate-x-full');
                    document.body.classList.add('overflow-hidden');
                });
            }
            
            if (close && menu) {
                close.addEventListener('click', () => {
                    menu.classList.add('translate-x-full');
                    document.body.classList.remove('overflow-hidden');
                });
            }

            // Close on link click
            if (menu) {
                menu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('translate-x-full');
                        document.body.classList.remove('overflow-hidden');
                    });
                });
            }
        });
    </script>
    <?php
}
add_action('wp_body_open', 'easylot_render_main_menu', 5);
// NOTE: Removed get_header fallback — it was outputting the menu BEFORE <!DOCTYPE html>,
// causing the browser to enter quirks mode and re-render the entire page (the FOUC).


/**
 * ============================================================
 *  EASY LOT — VIDEO GUIDES
 * ============================================================
 *  Short videos that answer the questions buyers ask us most.
 *  Used by:
 *    - front-page.php        (3 featured videos + "View All Videos")
 *    - template-video-guides.php (the full library, /video-guides/)
 *
 *  ------------------------------------------------------------
 *  HOW TO ADD / SWAP A VIDEO  — this array is the ONLY place to edit
 *  ------------------------------------------------------------
 *  Two kinds of video are supported. Give an entry EITHER a 'src'
 *  (self-hosted MP4, this is what we use now) OR an 'id' (YouTube).
 *
 *  Self-hosted:  upload the MP4 in Media Library, copy the file URL
 *                into 'src'. Order in this array = order on the page.
 *  YouTube:      copy the ID from youtube.com/watch?v=THIS_PART_HERE
 *                into 'id'.
 *
 *  Fields:
 *    'src'      Full URL of an MP4 in our Media Library. Use this OR 'id'.
 *    'id'       YouTube video ID (11 characters). Use this OR 'src'.
 *    'question' The card title. WRITE IT AS THE QUESTION A BUYER ASKS —
 *               that is the whole point of this section, and it is what
 *               Google / ChatGPT match against. Required.
 *    'answer'   1–2 sentence text answer. Shown under the title and used
 *               as the video description in the page's schema markup.
 *    'category' One of the keys in easylot_get_video_categories() below.
 *    'date'     Video publish date, YYYY-MM-DD. Used by schema markup —
 *               UPDATE THIS when you swap in a new video, don't leave the
 *               old one's date behind.
 *    'poster'   Optional thumbnail image URL. Only for self-hosted videos,
 *               and only if you don't like the frame the browser picks.
 *    'featured' true = also appears in the 3-video block on the homepage.
 *               Keep exactly 3 videos featured so the homepage grid stays even.
 *
 *  Thumbnails need no work: YouTube videos pull theirs from YouTube, and
 *  self-hosted ones show their own first frame.
 * ============================================================
 */

function easylot_get_video_categories() {
    return array(
        'getting-started' => 'Getting Started',
        'financing'       => 'Financing & Payments',
        'process'         => 'After You Apply',
        'developments'    => 'Our Developments',
    );
}

function easylot_get_video_guides( $only_featured = false ) {

    $uploads = 'https://easylot.ky/wp-content/uploads/2026/07/';

    // Order here = order on /video-guides/. The first three are the ones
    // that also show on the homepage.
    $videos = array(

        // ---- 1–3: also featured on the homepage ----
        array(
            'src'      => $uploads . '1.-How-to-get-pre-approved-2-1.mp4',
            'question' => 'How do I get pre-approved for a lot?',
            'answer'   => 'The first step with Easy Lot: what pre-approval means, what we look at, and how quickly you can get an answer before you commit to anything.',
            'category' => 'getting-started',
            'date'     => '2026-07-01',
            'featured' => true,
        ),
        array(
            'src'      => $uploads . '2.-About-Direct-Owner-Financing-1-1.mp4',
            'question' => 'How does Direct Owner Financing work?',
            'answer'   => 'We act as the bank, so there is no traditional lender involved. You put money down, we finance the rest, and you pay us directly.',
            'category' => 'financing',
            'date'     => '2026-07-01',
            'featured' => true,
        ),
        array(
            'src'      => $uploads . '3.-About-the-Minimum-Requirements-1-1.mp4',
            'question' => 'What are the minimum requirements to qualify?',
            'answer'   => 'The short list of what you need to apply — income, documents and down payment — so you know before you start whether you qualify.',
            'category' => 'getting-started',
            'date'     => '2026-07-01',
            'featured' => true,
        ),

        // ---- 4–7: library only ----
        array(
            'src'      => $uploads . '4.-How-to-Apply-with-a-Co-Applicant-2.mp4',
            'question' => 'How do I apply with a co-applicant?',
            'answer'   => 'Buying with a partner, a relative or a friend: how a joint application works and what each applicant needs to provide.',
            'category' => 'getting-started',
            'date'     => '2026-07-01',
            'featured' => false,
        ),
        array(
            'src'      => $uploads . '5.-About-AML-Anti-Money-Laundering-Requirements-1.mp4',
            'question' => 'What are the AML (Anti-Money Laundering) requirements?',
            'answer'   => 'Every land purchase in the Cayman Islands has to meet AML rules. Here is what we are required to verify and which documents that means for you.',
            'category' => 'process',
            'date'     => '2026-07-01',
            'featured' => false,
        ),
        array(
            'src'      => $uploads . '6_What_Happens_After_Pre_Approval_The_Closing_Process_1.mp4',
            'question' => 'What happens after pre-approval — the closing process?',
            'answer'   => 'From pre-approval to keys in hand: the closing steps, who is involved, and what you sign along the way.',
            'category' => 'process',
            'date'     => '2026-07-01',
            'featured' => false,
        ),
        array(
            'src'      => $uploads . '7.-How-to-Choose-a-Lot-Interactive-Map-Tutorial-1.mp4',
            'question' => 'How do I choose a lot on the interactive map?',
            'answer'   => 'A tutorial of our interactive map: how to browse available lots, compare sizes and prices, and pick the one that fits you.',
            'category' => 'getting-started',
            'date'     => '2026-07-01',
            'featured' => false,
        ),
    );

    if ( $only_featured ) {
        $videos = array_values( array_filter( $videos, function( $v ) {
            return ! empty( $v['featured'] );
        } ) );
    }

    /**
     * Filter the video guides list.
     * Lets a child theme or plugin add videos without touching this file.
     */
    return apply_filters( 'easylot_video_guides', $videos, $only_featured );
}

/**
 * URL of the full video library page.
 */
function easylot_video_guides_url() {
    return home_url( '/video-guides/' );
}

/**
 * Fallback thumbnail for a self-hosted video that has no 'poster'.
 * Used by the schema markup, which requires a thumbnailUrl.
 */
function easylot_video_default_poster() {
    return 'https://easylot.ky/wp-content/uploads/2023/08/Grand-Cayman-Aerial.jpg';
}

/**
 * Thumbnail URL for a video entry. YouTube videos get theirs from YouTube;
 * self-hosted ones use 'poster' if set, otherwise the site default.
 */
function easylot_video_thumbnail( $v ) {
    if ( ! empty( $v['poster'] ) ) {
        return $v['poster'];
    }
    if ( ! empty( $v['id'] ) ) {
        return 'https://i.ytimg.com/vi/' . $v['id'] . '/maxresdefault.jpg';
    }
    return easylot_video_default_poster();
}

/**
 * Render one video card.
 *
 * The card is a "facade": it never loads a player up front.
 *  - YouTube videos show the YouTube thumbnail; the <iframe> is only built
 *    when the visitor clicks, keeping the ~1MB player off the page load.
 *  - Self-hosted videos show their own first frame (preload="metadata"
 *    + a #t= fragment), so only a few KB of the file is fetched.
 *
 * @param array $v    A video from easylot_get_video_guides().
 * @param array $args 'dark' => bool (card sits on a dark background)
 *                    'location' => string (for GTM tracking)
 */
function easylot_video_card( $v, $args = array() ) {

    $args = wp_parse_args( $args, array(
        'dark'     => false,
        'location' => 'video_guides',
    ) );

    $dark       = (bool) $args['dark'];
    $categories = easylot_get_video_categories();
    $cat_label  = isset( $v['category'], $categories[ $v['category'] ] ) ? $categories[ $v['category'] ] : '';

    $src    = ! empty( $v['src'] ) ? $v['src'] : '';
    $yt_id  = ! empty( $v['id'] )  ? $v['id']  : '';
    $poster = ! empty( $v['poster'] ) ? $v['poster'] : '';

    if ( ! $src && ! $yt_id ) {
        return; // nothing to play
    }

    // Card surface / text colours flip depending on the section background.
    $card_bg    = $dark ? 'bg-white/[0.04] border-white/10 hover:border-primary/40' : 'bg-surface border-black/5 hover:border-primary/30';
    $title_col  = $dark ? 'text-white' : 'text-on-surface';
    $body_col   = $dark ? 'text-white/60' : 'text-on-surface-variant';
    $chip_col   = $dark ? 'bg-white/10 text-white/70' : 'bg-primary/10 text-primary';
    ?>
    <button type="button"
            class="easylot-video-card group flex w-full flex-col overflow-hidden rounded-3xl border text-left transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl <?php echo esc_attr( $card_bg ); ?>"
            data-video-id="<?php echo esc_attr( $yt_id ); ?>"
            data-video-src="<?php echo esc_url( $src ); ?>"
            data-video-title="<?php echo esc_attr( $v['question'] ); ?>"
            data-video-location="<?php echo esc_attr( $args['location'] ); ?>"
            data-category="<?php echo esc_attr( isset( $v['category'] ) ? $v['category'] : '' ); ?>"
            aria-label="<?php echo esc_attr( sprintf( 'Play video: %s', $v['question'] ) ); ?>">

        <span class="relative block aspect-video w-full overflow-hidden bg-black">
            <?php if ( $src && ! $poster ) : ?>
                <?php /* Self-hosted: the browser draws the frame at 0.5s as the thumbnail.
                         preload="metadata" means only the first few KB are downloaded. */ ?>
                <video class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                       src="<?php echo esc_url( $src ); ?>#t=0.5"
                       preload="metadata" muted playsinline disablepictureinpicture
                       tabindex="-1" aria-hidden="true" style="pointer-events:none;"></video>
            <?php else : ?>
                <img src="<?php echo esc_url( easylot_video_thumbnail( $v ) ); ?>"
                     <?php if ( $yt_id && ! $poster ) : ?>onerror="this.onerror=null;this.src='https://i.ytimg.com/vi/<?php echo esc_attr( $yt_id ); ?>/hqdefault.jpg';"<?php endif; ?>
                     alt="<?php echo esc_attr( $v['question'] ); ?>"
                     loading="lazy" decoding="async"
                     class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />
            <?php endif; ?>

            <span class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></span>

            <!-- Play button -->
            <span class="absolute inset-0 flex items-center justify-center">
                <span class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-white shadow-2xl shadow-black/40 transition-transform duration-300 group-hover:scale-110">
                    <span class="material-symbols-outlined text-4xl" style="margin-left:2px;">play_arrow</span>
                </span>
            </span>
        </span>

        <span class="flex flex-1 flex-col p-7">
            <?php if ( $cat_label ) : ?>
                <span class="mb-4 inline-flex w-fit items-center rounded-full px-3 py-1 text-[10px] font-bold uppercase tracking-widest <?php echo esc_attr( $chip_col ); ?>">
                    <?php echo esc_html( $cat_label ); ?>
                </span>
            <?php endif; ?>

            <span class="mb-3 block font-headline text-lg font-bold leading-snug transition-colors group-hover:text-primary <?php echo esc_attr( $title_col ); ?>">
                <?php echo esc_html( $v['question'] ); ?>
            </span>

            <?php if ( ! empty( $v['answer'] ) ) : ?>
                <span class="block text-sm font-light leading-relaxed <?php echo esc_attr( $body_col ); ?>">
                    <?php echo esc_html( $v['answer'] ); ?>
                </span>
            <?php endif; ?>
        </span>
    </button>
    <?php

    easylot_video_modal_enqueue();
}

/**
 * Flag the shared lightbox for output. Called automatically by
 * easylot_video_card(); the modal itself is printed once in wp_footer.
 */
function easylot_video_modal_enqueue() {
    $GLOBALS['easylot_needs_video_modal'] = true;
}

/**
 * The shared video lightbox. Printed in the footer so it sits last in the
 * DOM and therefore stacks above the fixed nav (which uses the same z-index).
 */
function easylot_render_video_modal() {

    if ( empty( $GLOBALS['easylot_needs_video_modal'] ) ) {
        return;
    }
    ?>
    <div id="easylot-video-modal"
         class="fixed inset-0 z-[2147483647] hidden items-center justify-center bg-black/90 p-4 backdrop-blur-sm md:p-10"
         role="dialog" aria-modal="true" aria-label="Video player">

        <button type="button" id="easylot-video-close"
                class="absolute right-5 top-5 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-primary"
                aria-label="Close video">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>

        <div class="w-full max-w-5xl">
            <div class="aspect-video w-full overflow-hidden rounded-3xl bg-black shadow-2xl">
                <div id="easylot-video-frame" class="h-full w-full"></div>
            </div>
            <p id="easylot-video-caption" class="mt-6 text-center font-headline text-lg font-bold text-white md:text-xl"></p>
        </div>
    </div>

    <script>
    (function () {
        var modal   = document.getElementById('easylot-video-modal');
        var frame   = document.getElementById('easylot-video-frame');
        var caption = document.getElementById('easylot-video-caption');
        var closeEl = document.getElementById('easylot-video-close');
        if (!modal || !frame) { return; }

        function openVideo(id, src, title, location) {
            // The player is built only now — nothing is downloaded before the click.
            if (src) {
                var video = document.createElement('video');
                video.className = 'h-full w-full';
                video.src = src;
                video.controls = true;
                video.autoplay = true;
                video.playsInline = true;
                video.setAttribute('controlslist', 'nodownload');
                video.setAttribute('title', title || 'Easy Lot video');
                frame.innerHTML = '';
                frame.appendChild(video);
                var playing = video.play();
                if (playing && playing.catch) { playing.catch(function () {}); }
            } else {
                frame.innerHTML = '<iframe class="h-full w-full" width="100%" height="100%"' +
                    ' src="https://www.youtube-nocookie.com/embed/' + encodeURIComponent(id) + '?autoplay=1&rel=0&modestbranding=1"' +
                    ' title="' + (title || 'Easy Lot video').replace(/"/g, '&quot;') + '"' +
                    ' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"' +
                    ' allowfullscreen></iframe>';
            }

            caption.textContent = title || '';
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
            closeEl.focus();

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'video_play',
                'video_id': id || src || '',
                'video_title': title || '',
                'video_location': location || ''
            });
        }

        function closeVideo() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');

            // Pause first so the MP4 stops downloading, then destroy the player.
            var playing = frame.querySelector('video');
            if (playing) { playing.pause(); playing.removeAttribute('src'); playing.load(); }
            frame.innerHTML = '';
            caption.textContent = '';
        }

        document.addEventListener('click', function (e) {
            var card = e.target.closest ? e.target.closest('.easylot-video-card') : null;
            if (card) {
                e.preventDefault();
                openVideo(card.dataset.videoId, card.dataset.videoSrc, card.dataset.videoTitle, card.dataset.videoLocation);
            }
        });

        closeEl.addEventListener('click', closeVideo);
        modal.addEventListener('click', function (e) {
            if (e.target === modal) { closeVideo(); }
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) { closeVideo(); }
        });
    })();
    </script>
    <?php
}
add_action( 'wp_footer', 'easylot_render_video_modal', 20 );

/**
 * VideoObject + ItemList schema for a set of videos.
 * Helps the videos show up as rich results and gives AI engines something
 * concrete to quote when someone asks these questions.
 */
function easylot_video_schema( $videos, $list_name = 'Easy Lot Video Guides' ) {

    if ( empty( $videos ) ) {
        return;
    }

    $elements = array();

    $position = 0;

    foreach ( $videos as $v ) {

        if ( empty( $v['src'] ) && empty( $v['id'] ) ) {
            continue;
        }

        $position++;

        $item = array(
            '@type'        => 'VideoObject',
            'name'         => $v['question'],
            'description'  => ! empty( $v['answer'] ) ? $v['answer'] : $v['question'],
            'thumbnailUrl' => easylot_video_thumbnail( $v ),
            'uploadDate'   => ! empty( $v['date'] ) ? $v['date'] : '',
            'publisher'    => array( '@id' => 'https://easylot.ky/#organization' ),
        );

        if ( ! empty( $v['src'] ) ) {
            $item['contentUrl'] = $v['src'];
        } else {
            $item['contentUrl'] = 'https://www.youtube.com/watch?v=' . $v['id'];
            $item['embedUrl']   = 'https://www.youtube.com/embed/' . $v['id'];
        }

        $elements[] = array(
            '@type'    => 'ListItem',
            'position' => $position,
            'item'     => $item,
        );
    }

    if ( empty( $elements ) ) {
        return;
    }

    $schema = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'ItemList',
        'name'            => $list_name,
        'itemListElement' => $elements,
    );

    echo "\n" . '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}


/**
 * ============================================================
 *  EASY LOT — Dynamic SEO for individual lot pages
 * ============================================================
 *  Fixes:
 *   - 244 duplicate <title> tags
 *   - 667 missing meta descriptions
 *   - 679 short <title> tags
 *  By generating unique, keyword-rich SEO metadata for every lot
 *  using whatever meta data the BTT Lot Manager plugin exposes.
 * ============================================================
 */

/**
 * Try to pull lot data from various possible meta key names that
 * the BTT Lot Manager plugin (or similar CPTs) might use.
 */
function easylot_get_lot_meta( $post_id ) {
    $data = array(
        'code'        => '',
        'price'       => '',
        'size'        => '',
        'development' => '',
        'status'      => '',
        'monthly'     => '',
        'down'        => '',
    );

    // Try common meta-key variants used by lot-management plugins
    $key_map = array(
        'code'        => array( 'lot_code', 'lot_number', 'code', '_lot_code', 'btt_lot_code', 'unit_code' ),
        'price'       => array( 'lot_price', 'price', '_price', 'btt_price', 'sale_price', 'list_price' ),
        'size'        => array( 'lot_size', 'size', 'sqft', 'square_feet', 'acres', 'btt_size' ),
        'development' => array( 'development', 'project', 'community', 'btt_development', 'parent_project' ),
        'status'      => array( 'lot_status', 'status', 'availability', 'btt_status' ),
        'monthly'     => array( 'monthly_payment', 'monthly', 'btt_monthly' ),
        'down'        => array( 'down_payment', 'downpayment', 'btt_down' ),
    );

    foreach ( $key_map as $field => $keys ) {
        foreach ( $keys as $key ) {
            $value = get_post_meta( $post_id, $key, true );
            if ( ! empty( $value ) ) {
                $data[ $field ] = $value;
                break;
            }
        }
    }

    // Fallback: use post title to extract lot code if not found
    if ( empty( $data['code'] ) ) {
        $title = get_the_title( $post_id );
        if ( preg_match( '/([A-Z]{2,4}[-\s]?\d+)/i', $title, $m ) ) {
            $data['code'] = strtoupper( str_replace( ' ', '-', $m[1] ) );
        }
    }

    // If development came back as a numeric post ID, resolve it to a title
    if ( ! empty( $data['development'] ) && is_numeric( $data['development'] ) ) {
        $parent_title = get_the_title( (int) $data['development'] );
        $data['development'] = $parent_title ? $parent_title : '';
    }

    // Always prefer the lot-code-prefix mapping for known developments,
    // because the plugin's meta field often stores an ID or generic slug
    // that isn't a marketing-friendly name.
    if ( ! empty( $data['code'] ) ) {
        $code_upper = strtoupper( $data['code'] );
        $mapped = '';
        if ( strpos( $code_upper, 'HRE' ) === 0 ) {
            $mapped = 'High Rock Estates, East End Grand Cayman';
        } elseif ( strpos( $code_upper, 'OBE' ) === 0 || strpos( $code_upper, 'OBN' ) === 0 ) {
            $mapped = 'Ocean Breeze, Grand Cayman';
        } elseif ( strpos( $code_upper, 'NSE' ) === 0 || strpos( $code_upper, 'NS-' ) === 0 || strpos( $code_upper, 'RPL' ) === 0 ) {
            $mapped = 'Northshore Estates, Rum Point Grand Cayman';
        } elseif ( strpos( $code_upper, 'ELE' ) === 0 || strpos( $code_upper, 'EE-' ) === 0 ) {
            $mapped = 'Elena Estates, Little Cayman';
        }
        if ( ! empty( $mapped ) ) {
            $data['development'] = $mapped;
        }
    }

    if ( empty( $data['development'] ) ) {
        $data['development'] = 'Cayman Islands';
    }

    return $data;
}

/**
 * Detect if we are viewing a single lot page (CPT slug "lot").
 */
function easylot_is_lot_page() {
    if ( ! is_singular() ) {
        return false;
    }
    $post_type = get_post_type();
    return in_array( $post_type, array( 'lot', 'btt_lot', 'lots', 'unit' ), true );
}

/**
 * Build a unique SEO title for a lot page.
 * Example: "Lot HRE-101 — From $105K, East End Grand Cayman | Easy Lot"
 */
function easylot_build_lot_title( $post_id ) {
    $d    = easylot_get_lot_meta( $post_id );
    $code = ! empty( $d['code'] ) ? $d['code'] : get_the_title( $post_id );

    $parts = array( 'Lot ' . $code );

    if ( ! empty( $d['price'] ) ) {
        $price = is_numeric( $d['price'] ) ? '$' . number_format( (float) $d['price'] ) : $d['price'];
        $parts[] = $price;
    }

    if ( ! empty( $d['development'] ) ) {
        $parts[] = $d['development'];
    }

    return implode( ' | ', $parts ) . ' | Easy Lot Cayman';
}

/**
 * Build a unique meta description for a lot page.
 */
function easylot_build_lot_description( $post_id ) {
    $d    = easylot_get_lot_meta( $post_id );
    $code = ! empty( $d['code'] ) ? $d['code'] : get_the_title( $post_id );

    $sentence = 'Lot ' . $code;
    if ( ! empty( $d['development'] ) ) {
        $sentence .= ' in ' . $d['development'];
    }
    $sentence .= ' is available with direct owner financing.';

    $details = array();
    if ( ! empty( $d['price'] ) ) {
        $price = is_numeric( $d['price'] ) ? 'KYD $' . number_format( (float) $d['price'] ) : $d['price'];
        $details[] = 'Price from ' . $price;
    }
    if ( ! empty( $d['monthly'] ) ) {
        $monthly = is_numeric( $d['monthly'] ) ? '$' . number_format( (float) $d['monthly'], 2 ) : $d['monthly'];
        $details[] = 'Monthly from ' . $monthly;
    }
    if ( ! empty( $d['size'] ) ) {
        $details[] = $d['size'];
    }

    $detail_str = ! empty( $details ) ? implode( ' · ', $details ) . '. ' : '';

    return $sentence . ' ' . $detail_str . 'No bank required, fixed 9% interest. Check availability today.';
}

/**
 * Rank Math compatibility: override title and description on lot pages.
 */
add_filter( 'rank_math/frontend/title', function( $title ) {
    if ( easylot_is_lot_page() ) {
        return easylot_build_lot_title( get_the_ID() );
    }
    return $title;
}, 20 );

add_filter( 'rank_math/frontend/description', function( $desc ) {
    if ( easylot_is_lot_page() ) {
        return easylot_build_lot_description( get_the_ID() );
    }
    return $desc;
}, 20 );

/**
 * WordPress core title override (fallback if Rank Math is disabled).
 */
add_filter( 'pre_get_document_title', function( $title ) {
    if ( easylot_is_lot_page() ) {
        return easylot_build_lot_title( get_the_ID() );
    }
    return $title;
}, 20 );

/**
 * Inject a fallback <meta name="description"> if Rank Math is not active.
 * Only runs on lot pages and only if no description meta already exists.
 */
add_action( 'wp_head', function() {
    if ( ! easylot_is_lot_page() ) {
        return;
    }

    // Skip if Rank Math is active — it already handles the meta tag.
    if ( class_exists( 'RankMath' ) || defined( 'RANK_MATH_VERSION' ) ) {
        return;
    }

    $desc = esc_attr( easylot_build_lot_description( get_the_ID() ) );
    echo "\n" . '<meta name="description" content="' . $desc . '" />' . "\n";
}, 1 );

/**
 * Add noindex to lot pages that are sold out OR duplicates ("-2", "-3", etc.).
 * Prevents thin/sold/duplicate pages from polluting the index.
 */
add_filter( 'wp_robots', function( $robots ) {
    if ( ! easylot_is_lot_page() ) {
        return $robots;
    }

    $post = get_post( get_the_ID() );

    // Detect WordPress-generated duplicate slug (slug-2, slug-3, etc.)
    if ( $post && preg_match( '/-(\d+)$/', $post->post_name, $m ) && intval( $m[1] ) >= 2 ) {
        $robots['noindex']  = true;
        $robots['nofollow'] = false;
        return $robots;
    }

    $d = easylot_get_lot_meta( get_the_ID() );
    $status = strtolower( (string) $d['status'] );
    if ( in_array( $status, array( 'sold', 'sold out', 'unavailable', 'reserved' ), true ) ) {
        $robots['noindex']  = true;
        $robots['nofollow'] = false;
    }
    return $robots;
} );

/**
 * Canonical override: point duplicate lot pages (slug-2, slug-3, ...) at the
 * canonical original (slug without the numeric suffix), if it exists.
 */
add_filter( 'get_canonical_url', function( $canonical, $post ) {
    if ( ! $post || ! in_array( $post->post_type, array( 'lot', 'btt_lot', 'lots', 'unit' ), true ) ) {
        return $canonical;
    }
    if ( preg_match( '/^(.+)-(\d+)$/', $post->post_name, $m ) && intval( $m[2] ) >= 2 ) {
        $base_slug = $m[1];
        $original  = get_page_by_path( $base_slug, OBJECT, $post->post_type );
        if ( $original && $original->ID !== $post->ID ) {
            return get_permalink( $original );
        }
    }
    return $canonical;
}, 20, 2 );

add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
    if ( ! easylot_is_lot_page() ) {
        return $canonical;
    }
    $post = get_post( get_the_ID() );
    if ( $post && preg_match( '/^(.+)-(\d+)$/', $post->post_name, $m ) && intval( $m[2] ) >= 2 ) {
        $base_slug = $m[1];
        $original  = get_page_by_path( $base_slug, OBJECT, $post->post_type );
        if ( $original && $original->ID !== $post->ID ) {
            return get_permalink( $original );
        }
    }
    return $canonical;
}, 20 );

/**
 * ============================================================
 *  EASY LOT — Mobile performance improvements
 * ============================================================
 *  Targets: 13s mobile load time → goal under 5s.
 *  Strategies:
 *   1. Native lazy-loading on all content images
 *   2. Defer non-critical third-party scripts (Pixel, Brevo, etc.)
 *   3. Preconnect to critical CDN origins
 * ============================================================
 */

// 1. Force lazy-loading on all content/post images that don't already opt out.
add_filter( 'wp_get_attachment_image_attributes', function( $attr ) {
    if ( empty( $attr['loading'] ) ) {
        $attr['loading'] = 'lazy';
    }
    if ( empty( $attr['decoding'] ) ) {
        $attr['decoding'] = 'async';
    }
    return $attr;
}, 10, 1 );

// 2. Defer non-critical scripts. Keep jQuery, Tailwind CDN, and Elementor scripts blocking.
add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( is_admin() ) {
        return $tag;
    }

    // List of non-critical scripts we can safely defer
    $defer_handles = array(
        'sib-front-js',           // Brevo
        'lightbox-script',
        'filters',
        'tagify',
        'tagify-polyfills',
    );

    if ( in_array( $handle, $defer_handles, true ) && strpos( $tag, ' defer' ) === false ) {
        $tag = str_replace( ' src=', ' defer src=', $tag );
    }
    return $tag;
}, 10, 2 );

// 3. Preconnect/dns-prefetch to critical third-party origins for faster first paint.
add_action( 'wp_head', function() {
    ?>
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://connect.facebook.net">
    <?php
}, 1 );

// 4. Preload the hero image only on the front page (above-the-fold optimization).
add_action( 'wp_head', function() {
    if ( ! is_front_page() ) {
        return;
    }
    ?>
    <link rel="preload" as="image" href="https://easylot.ky/wp-content/uploads/2023/08/Grand-Cayman-Aerial.jpg" fetchpriority="high">
    <?php
}, 1 );

