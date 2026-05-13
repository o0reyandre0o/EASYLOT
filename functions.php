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
    <nav class="fixed top-0 left-0 w-full z-[2147483647] bg-[#fff8f5] backdrop-blur-md border-b border-black/5 glass-nav" style="display: flex !important; visibility: visible !important;">
        <div class="max-w-7xl mx-auto px-8 md:px-20 py-4 flex justify-between items-center">
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
                    <button class="flex items-center gap-1 text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300">
                        Our Developments
                        <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </button>
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
                    <button class="flex items-center gap-1 text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300">
                        About Us
                        <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-[220px] bg-white rounded-xl shadow-xl shadow-black/5 border border-black/5 py-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">
                        <a href="https://easylot.ky/about-us/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors border-b border-black/5 last:border-0">About Easy Lot</a>
                        <a href="https://easylot.ky/team-members/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors border-b border-black/5 last:border-0">Meet The Team</a>
                        <a href="https://easylot.ky/directions/" class="block px-6 py-3 text-[#1d1b1a] hover:bg-surface hover:text-primary font-medium transition-colors last:border-0">Directions</a>
                    </div>
                </div>

                <a href="https://easylot.ky/faq/" class="text-[#1d1b1a] font-medium font-serif text-lg tracking-tight hover:text-primary transition-colors duration-300 relative group">
                    FAQs
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>

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
                <button id="mobile-menu-toggle" class="md:hidden flex items-center justify-center w-10 h-10 text-on-surface">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
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

            <a href="https://easylot.ky/faq/" class="block font-serif text-3xl font-bold text-on-surface">FAQs</a>
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
add_action('get_header', 'easylot_render_main_menu', 5); // Fallback for templates without wp_body_open
