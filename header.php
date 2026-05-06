<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/WebPage" class="light overflow-x-hidden">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    
    <!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
    <?php
    $site_name = get_bloginfo('name');
    $default_description = "Buy land in Grand Cayman & Little Cayman with our Local Owner Financing Program. No banks required, fixed interest rates, and fast approval.";
    
    // Allow templates to override these
    $current_title = isset($seo_title) ? $seo_title : get_the_title() . " | " . $site_name;
    $current_description = isset($seo_description) ? $seo_description : $default_description;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    $current_og_image = isset($seo_image) ? $seo_image : "https://easylot.ky/wp-content/uploads/2023/08/Grand-Cayman-Aerial.jpg";
    ?>
    <title><?php echo esc_html($current_title); ?></title>
    <meta name="description" content="<?php echo esc_attr($current_description); ?>"/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="<?php echo esc_url($current_url); ?>" />
    
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo esc_attr($current_title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($current_description); ?>" />
    <meta property="og:url" content="<?php echo esc_url($current_url); ?>" />
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>" />
    <meta property="og:image" content="<?php echo esc_url($current_og_image); ?>" />
    <link rel="image_src" href="<?php echo esc_url($current_og_image); ?>" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo esc_attr($current_title); ?>" />
    <meta name="twitter:description" content="<?php echo esc_attr($current_description); ?>" />
    <meta name="twitter:image" content="<?php echo esc_url($current_og_image); ?>" />
    
    <!-- Schema Markup Consolidated -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://easylot.ky/#organization",
          "name": "Easy Lot Cayman",
          "url": "https://easylot.ky/",
          "logo": {
            "@type": "ImageObject",
            "@id": "https://easylot.ky/#logo",
            "url": "https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Logo-1-1.svg",
            "contentUrl": "https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Logo-1-1.svg",
            "caption": "Easy Lot Cayman",
            "width": "365",
            "height": "104"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-345-936-2660",
            "contactType": "customer service",
            "areaServed": "KY",
            "availableLanguage": "en"
          },
          "sameAs": [
            "https://www.facebook.com/easylotky",
            "https://www.instagram.com/easylotky/",
            "https://www.youtube.com/@EasyLotKy",
            "https://www.tiktok.com/@easylot"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://easylot.ky/#website",
          "url": "https://easylot.ky/",
          "name": "Easy Lot",
          "publisher": { "@id": "https://easylot.ky/#organization" },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://easylot.ky/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          },
          "creator": {
            "@type": "Organization",
            "name": "Toc Toc Marketing",
            "url": "https://toctoc.ky/",
            "founder": [
              {
                "@type": "Person",
                "name": "Daniel Garrido",
                "jobTitle": "CEO",
                "sameAs": "https://www.linkedin.com/in/danielgarridoo/"
              }
            ],
            "employee": [
              {
                "@type": "Person",
                "name": "Andre Gutierrez",
                "jobTitle": "Developer",
                "sameAs": "https://www.linkedin.com/in/andre-g-9b373a97/"
              }
            ]
          }
        },
        {
          "@type": "RealEstateAgent",
          "@id": "https://easylot.ky/#agent",
          "name": "Easy Lot",
          "description": "Easy Lot makes buying land in the Cayman Islands simple. We provide direct Owner Financing with NO bank involvement needed, flexible down payments, and fixed 9% interest rates.",
          "telephone": "+1-345-936-2660",
          "url": "https://easylot.ky/",
          "priceRange": "$$$",
          "image": "https://easylot.ky/wp-content/uploads/2023/08/HRE-Last-Lots-Remaining-2.jpg",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "207 Sparky Dr. Suite 6",
            "addressLocality": "George Town",
            "addressRegion": "Grand Cayman",
            "postalCode": "KY1-1205",
            "addressCountry": "KY"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 19.2965,
            "longitude": -81.3609
          },
          "memberOf": { "@id": "https://easylot.ky/#organization" },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "08:00",
              "closes": "17:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": "Saturday",
              "opens": "08:00",
              "closes": "13:00"
            }
          ]
        }
      ]
    }
    </script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-surface text-on-surface font-body selection:bg-primary/20'); ?>>
    <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCWF3CG4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <nav class="fixed top-0 w-full z-50 bg-[#fff8f5]/80 backdrop-blur-md border-b border-black/5 glass-nav">
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
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-white translate-x-full transition-transform duration-500 ease-in-out md:hidden flex flex-col">
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
            <p class="text-sm text-on-surface/50 font-medium">© <?php echo date('Y'); ?> Easy Lot Cayman</p>
            <p class="text-xs text-on-surface/30">Created by <a href="https://toctoc.ky/" class="font-bold hover:text-primary transition-colors">Toc Toc Marketing</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('translate-x-full');
                    document.body.classList.remove('overflow-hidden');
                });
            });
        });
    </script>

    <main>
