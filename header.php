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

    <?php 
    // The menu is now rendered via the easylot_render_main_menu function 
    // which is hooked to wp_body_open in functions.php for maximum compatibility.
    ?>


    <main>
