<?php 
/**
 * Template Name: All Developments Modern
 */
$seo_title = "Land for Sale in the Cayman Islands | Easy Lot Developments";
$seo_description = "Explore our premium selection of properties across Grand Cayman and Little Cayman. Beachfront lots, high-elevation terrains, and investment plots available.";
$seo_image = "https://easylot.ky/wp-content/uploads/2024/07/rum-point-cayman-islands-1.jpg";
get_header(); 
?>

<!-- Schema Markup: Collection of Developments -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Land for Sale in the Cayman Islands: Our Developments",
  "description": "Explore our premium land developments in Grand Cayman and Little Cayman. Fixed 9% interest rate, guaranteed owner financing, and low density residential lots.",
  "url": "https://easylot.ky/all-our-developments/",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "High Rock Estates",
        "url": "https://easylot.ky/project/high-rock-estates/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Elena Estates",
        "url": "https://easylot.ky/project/little-cayman/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Northshore Estates",
        "url": "https://easylot.ky/project/rum-point-land/"
      }
    ]
  }
}
</script>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 overflow-hidden bg-primary">
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-10">
        <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-3D-easy-lot.svg" class="w-full max-w-2xl animate-pulse" alt="Easy Lot Icon">
    </div>
    <div class="max-w-7xl mx-auto px-8 md:px-20 relative z-10 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-serif font-bold tracking-tighter text-white mb-8 leading-[1.1]">
                Land for Sale in the <span class="italic text-white/90">Cayman Islands</span>
            </h1>
            <p class="text-xl text-white/80 leading-relaxed font-light mb-0">
                Explore our current selection of properties across Grand Cayman and Little Cayman. 
                Find high-elevation lots, beachfront options, and investment plots with guaranteed owner financing.
            </p>
        </div>
    </div>
</section>

<!-- Developments Grid -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <?php 
            $developments = [
                [
                    'title' => 'High Rock Estates',
                    'location' => 'East End, Grand Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2023/08/High-Rock-Estates.jpg',
                    'status' => 'Available',
                    'tag' => 'Best Seller',
                    'link' => 'https://easylot.ky/project/high-rock-estates/',
                    'price' => 'From $13/day',
                    'sold_percent' => 83
                ],
                [
                    'title' => 'Elena Estates',
                    'location' => 'Little Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2023/08/elena-estates-little-cayman-sitemap-satellite.jpg',
                    'status' => 'Limited Availability',
                    'tag' => 'Investment Pick',
                    'link' => 'https://easylot.ky/project/little-cayman/',
                    'price' => '5% Down Payment',
                    'sold_percent' => 75
                ],
                [
                    'title' => 'Northshore Estates',
                    'location' => 'Rum Point, Grand Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2024/07/rum-point-cayman-islands-1.jpg',
                    'status' => 'Presale',
                    'tag' => 'Prime Location',
                    'link' => 'https://easylot.ky/project/rum-point-land/',
                    'price' => 'Owner Financing Available',
                    'sold_percent' => 45
                ],
                [
                    'title' => 'Ocean Breeze North',
                    'location' => 'East End, Grand Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2023/08/Ocean-Breeze-North-Easy-Lot.jpg',
                    'status' => 'Available',
                    'tag' => 'High Elevation',
                    'link' => 'https://easylot.ky/project/ocean-breeze-north/',
                    'price' => 'Fast Approval',
                    'sold_percent' => 60
                ],
                [
                    'title' => 'Frank Sound',
                    'location' => 'Grand Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2023/06/background_hero_high_rock_estates_aerial.jpg',
                    'status' => 'Available',
                    'tag' => 'New Release',
                    'link' => 'https://easylot.ky/project/frank-sound/',
                    'price' => 'Minimal Paperwork',
                    'sold_percent' => 88
                ],
                [
                    'title' => 'Ocean Breeze East',
                    'location' => 'Grand Cayman',
                    'image' => 'https://easylot.ky/wp-content/uploads/2023/08/Ocean-Breeze-Easy-Lot-1.jpg',
                    'status' => 'Sold Out',
                    'tag' => 'Fully Occupied',
                    'link' => 'https://easylot.ky/project/ocean-breeze/',
                    'price' => 'Register for Waitlist',
                    'sold_percent' => 100
                ]
            ];

            foreach ($developments as $dev): ?>
                <div class="group relative bg-surface/30 rounded-[40px] overflow-hidden border border-black/5 hover:border-primary/20 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 flex flex-col">
                    <!-- Image Area -->
                    <div class="relative h-72 overflow-hidden">
                        <img src="<?php echo $dev['image']; ?>" alt="<?php echo $dev['title']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-on-surface/60 to-transparent"></div>
                        <div class="absolute top-6 left-6 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-md text-on-surface text-xs font-bold uppercase tracking-wider">
                            <?php echo $dev['status']; ?>
                        </div>
                        <?php if (($dev['title'] === 'Ocean Breeze East' || $dev['title'] === 'Ocean Breeze North') && $dev['sold_percent'] > 0): ?>
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="flex justify-between items-end mb-2">
                                    <span class="text-white text-xs font-bold uppercase tracking-widest"><?php echo $dev['sold_percent']; ?>% Sold</span>
                                </div>
                                <div class="w-full h-1.5 bg-white/20 rounded-full overflow-hidden">
                                    <div class="h-full bg-primary rounded-full transition-all duration-1000 group-hover:opacity-100" style="width: <?php echo $dev['sold_percent']; ?>%"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Content -->
                    <div class="p-8 flex-1 flex flex-col">
                        <span class="text-primary font-bold text-xs uppercase tracking-widest mb-2"><?php echo $dev['tag']; ?></span>
                        <h2 class="text-2xl font-serif font-bold text-on-surface mb-2"><?php echo $dev['title']; ?></h2>
                        <p class="text-on-surface/50 text-sm mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            <?php echo $dev['location']; ?>
                        </p>
                        
                        <div class="mt-auto pt-6 border-t border-black/5 flex items-center justify-between gap-4">
                            <div>
                                <span class="block text-[10px] uppercase tracking-tighter text-on-surface/40 font-bold mb-1">Pricing</span>
                                <span class="text-sm font-bold text-on-surface"><?php echo $dev['price']; ?></span>
                            </div>
                            <a href="<?php echo $dev['link']; ?>" class="w-12 h-12 rounded-2xl bg-white border border-black/5 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shadow-xl shadow-black/5">
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Why Buy Section (Icon Grid) -->
<section class="py-24 bg-surface/50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-on-surface mb-6">Why Buy With <span class="red-gradient italic">Easy Lot?</span></h2>
            <p class="text-lg text-on-surface/60 font-light">We’ve removed the barriers to land ownership in the Cayman Islands with our unique financing program.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-12 rounded-[40px] shadow-xl shadow-black/5 border border-black/5 text-center group hover:-translate-y-2 transition-transform duration-500">
                <div class="w-20 h-20 bg-primary/10 rounded-[28px] flex items-center justify-center text-primary mb-8 mx-auto group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">devices</span>
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Apply Online</h3>
                <ul class="text-on-surface/60 space-y-3 font-light text-sm">
                    <li>Browse Available Lots</li>
                    <li>Estimate Monthly Payments</li>
                    <li>Complete Application in Minutes</li>
                </ul>
            </div>

            <div class="bg-white p-12 rounded-[40px] shadow-xl shadow-black/5 border border-black/5 text-center group hover:-translate-y-2 transition-transform duration-500">
                <div class="w-20 h-20 bg-primary/10 rounded-[28px] flex items-center justify-center text-primary mb-8 mx-auto group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">account_balance</span>
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">No Bank Required</h3>
                <ul class="text-on-surface/60 space-y-3 font-light text-sm">
                    <li>Save Up to $800 in Fees</li>
                    <li>Flexible Term Lengths</li>
                    <li>No Life Insurance Required</li>
                </ul>
            </div>

            <div class="bg-white p-12 rounded-[40px] shadow-xl shadow-black/5 border border-black/5 text-center group hover:-translate-y-2 transition-transform duration-500">
                <div class="w-20 h-20 bg-primary/10 rounded-[28px] flex items-center justify-center text-primary mb-8 mx-auto group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">speed</span>
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Fast Approval</h3>
                <ul class="text-on-surface/60 space-y-3 font-light text-sm">
                    <li>Quick & Easy Process</li>
                    <li>48-Hour Response Time</li>
                    <li>Dedicated Team Support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Video Knowledge Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-on-surface mb-8">Discover Easy Lot <br>Through <span class="italic text-primary">Videos</span></h2>
                <div class="space-y-6">
                    <div class="flex gap-4 p-4 rounded-3xl hover:bg-surface/50 transition-colors">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">play_circle</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Step-by-Step Guide</h4>
                            <p class="text-on-surface/50 text-sm font-light">How to apply for your dream land with Easy Lot.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-3xl hover:bg-surface/50 transition-colors">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">help</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">What is Easy Lot?</h4>
                            <p class="text-on-surface/50 text-sm font-light">Learn about our mission and impact in Cayman.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                     <a href="https://www.youtube.com/@easylot" target="_blank" class="inline-flex items-center gap-3 bg-on-surface text-white px-8 py-4 rounded-2xl font-bold hover:bg-primary transition-all shadow-xl">
                        Subscribe to YouTube
                        <span class="material-symbols-outlined">smart_display</span>
                    </a>
                </div>
            </div>
            
            <div class="lg:w-1/2 relative">
                <div class="aspect-video bg-surface rounded-[40px] overflow-hidden shadow-2xl relative group">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hsj9-E2O9Vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-[40px]"></iframe>
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-10 -right-10 bg-white p-6 rounded-3xl shadow-2xl border border-black/5 hidden md:block max-w-[200px] animate-bounce-slow">
                    <p class="text-xs font-bold uppercase tracking-widest text-primary mb-2">New Video</p>
                    <p class="text-sm font-serif font-bold text-on-surface">How our financing works</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
