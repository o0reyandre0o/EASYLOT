<?php 
/**
 * Template Name: FAQ Modern
 */
$seo_title = "Financing FAQ | Buying Land in Cayman Islands Helper";
$seo_description = "Everything you need to know about buying land in the Cayman Islands, owner financing details, building requirements, and property ownership.";
$seo_image = "https://easylot.ky/wp-content/uploads/2023/08/logo-easy-lot.svg";
get_header(); 
?>

<!-- Schema Markup: FAQ Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can anyone buy land in the Cayman Islands?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! The Cayman Islands has no restrictions on foreign land ownership. There are no annual property taxes, no capital gains taxes, and no inheritance taxes."
      }
    },
    {
      "@type": "Question",
      "name": "How does Direct Owner Financing work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We act as the bank. You don't need to visit a traditional financial institution. We offer fast approval with minimal paperwork."
      }
    },
    {
      "@type": "Question",
      "name": "What is the average cost to buy land and build a house in the Cayman Islands?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost varies depending on location and elevation. Easy Lot offers lots starting from low daily payments with 5% down, allowing you to build equity while planning your construction."
      }
    }
  ]
}
</script>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 overflow-hidden bg-surface">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent pointer-events-none"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-bold tracking-wider uppercase mb-8">
                <span class="material-symbols-outlined text-sm">quiz</span>
                Got Questions?
            </div>
            <h1 class="text-5xl md:text-7xl font-serif font-bold tracking-tighter text-on-surface mb-8 leading-[1.1]">
                FAQ: Buying <span class="bg-gradient-to-r from-primary to-[#ff6b6b] bg-clip-text text-transparent italic tracking-normal">Land in Cayman</span>
            </h1>
            <p class="text-xl text-on-surface/70 leading-relaxed font-light mb-12">
                Everything you need to know about buying land in the Cayman Islands, owner financing, and building your future with Easy Lot.
            </p>
            
            <div class="relative max-w-xl mx-auto group">
                <input type="text" placeholder="Search for a question..." class="w-full bg-white border border-black/5 rounded-2xl py-5 px-14 text-on-surface shadow-xl focus:border-primary/50 focus:ring-0 transition-all placeholder:text-on-surface/30">
                <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-on-surface/30 group-focus-within:text-primary transition-colors">search</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Accordion Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto space-y-16">

            <!-- Category: Land Ownership -->
            <div>
                <h2 class="text-3xl font-serif font-bold text-on-surface mb-8 flex items-center gap-3">
                    <span class="w-1.5 h-6 bg-primary rounded-full"></span>
                    Land Ownership & Legal
                </h2>
                <div class="space-y-4">
                    <?php 
                    $faqs_legal = [
                        [
                            'q' => 'Can anyone buy land in the Cayman Islands?',
                            'a' => 'Yes! The Cayman Islands has no restrictions on foreign land ownership. There are no annual property taxes, no capital gains taxes, and no inheritance taxes. The title is guaranteed by the government.'
                        ],
                        [
                            'q' => 'Is there a deadline to build on my lot?',
                            'a' => 'No. At Easy Lot, we believe in flexibility. Once you purchase your land, you can hold it as an investment for as long as you like. There are no "time-to-build" requirements on our properties.'
                        ],
                        [
                            'q' => 'How is the property title transferred?',
                            'a' => 'When you purchase with Easy Lot, we handle all the legal paperwork. Once the land is paid in full, the title is transferred directly into your name through the Cayman Islands Lands & Survey Department.'
                        ]
                    ];
                    foreach ($faqs_legal as $index => $faq): ?>
                        <div class="faq-item border border-black/5 rounded-3xl bg-surface/30 hover:bg-white hover:shadow-xl hover:shadow-black/5 transition-all duration-300">
                            <button class="faq-trigger w-full text-left px-8 py-6 flex items-center justify-between gap-4 group">
                                <span class="text-lg font-bold text-on-surface/80 group-hover:text-primary transition-colors"><?php echo $faq['q']; ?></span>
                                <span class="material-symbols-outlined text-primary transform transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-content hidden px-8 pb-8">
                                <div class="h-px bg-black/5 mb-6"></div>
                                <p class="text-on-surface/70 leading-relaxed font-light"><?php echo $faq['a']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Category: Financing -->
            <div>
                <h2 class="text-3xl font-serif font-bold text-on-surface mb-8 flex items-center gap-3">
                    <span class="w-1.5 h-6 bg-primary rounded-full"></span>
                    Financing & Payments
                </h2>
                <div class="space-y-4">
                    <?php 
                    $faqs_finance = [
                        [
                            'q' => 'How does Direct Owner Financing work?',
                            'a' => 'We act as the bank. You don\'t need to visit a traditional financial institution. We offer fast approval with minimal paperwork. You just need to provide your ID and your initial deposit to secure your lot.'
                        ],
                        [
                            'q' => 'What is the minimum down payment?',
                            'a' => 'Our standard down payment is 5%. However, if you\'d like to reduce your monthly lifestyle payments, you can choose to make a larger down payment. This gives you total control over your monthly budget.'
                        ],
                        [
                            'q' => 'What are the interest rates?',
                            'a' => 'We offer a competitive fixed interest rate of 9% for our owner financing program. This rate is locked in for the duration of your term (up to 15 years).'
                        ],
                        [
                            'q' => 'Are there any penalties for early payoff?',
                            'a' => 'None at all! You are welcome to pay off your balance early to save on interest. There are no fees or penalties for doing so. We encourage our clients to build equity as quickly as possible.'
                        ]
                    ];
                    foreach ($faqs_finance as $index => $faq): ?>
                        <div class="faq-item border border-black/5 rounded-3xl bg-surface/30 hover:bg-white hover:shadow-xl hover:shadow-black/5 transition-all duration-300">
                            <button class="faq-trigger w-full text-left px-8 py-6 flex items-center justify-between gap-4 group">
                                <span class="text-lg font-bold text-on-surface/80 group-hover:text-primary transition-colors"><?php echo $faq['q']; ?></span>
                                <span class="material-symbols-outlined text-primary transform transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-content hidden px-8 pb-8">
                                <div class="h-px bg-black/5 mb-6"></div>
                                <p class="text-on-surface/70 leading-relaxed font-light"><?php echo $faq['a']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Category: Infrastructure -->
            <div>
                <h2 class="text-3xl font-serif font-bold text-on-surface mb-8 flex items-center gap-3">
                    <span class="w-1.5 h-6 bg-primary rounded-full"></span>
                    Development & Infrastructure
                </h2>
                <div class="space-y-4">
                    <?php 
                    $faqs_infra = [
                        [
                            'q' => 'What is the average cost to buy land and build a house in the Cayman Islands?',
                            'a' => 'The total cost depends on the location and specific build requirements. However, by purchasing land through Easy Lot\'s owner financing, you eliminate bank fees and high upfront costs, making the path to construction much more affordable for local families.'
                        ],
                        [
                            'q' => 'What utilities are available on the lots?',
                            'a' => 'Most of our developments in Grand Cayman come with access to government-piped water and CUC electrical lines. Specifically, High Rock Estates and Ocean Breeze feature full infrastructure ready for connection.'
                        ],
                        [
                            'q' => 'What are the zoning regulations (Low Density Residential)?',
                            'a' => 'Low Density Residential (LDR) zoning typically allows for one single-family dwelling or two units (a duplex) per lot, depending on the lot size. This ensures a peaceful, quiet neighborhood character.'
                        ]
                    ];
                    foreach ($faqs_infra as $index => $faq): ?>
                        <div class="faq-item border border-black/5 rounded-3xl bg-surface/30 hover:bg-white hover:shadow-xl hover:shadow-black/5 transition-all duration-300">
                            <button class="faq-trigger w-full text-left px-8 py-6 flex items-center justify-between gap-4 group">
                                <span class="text-lg font-bold text-on-surface/80 group-hover:text-primary transition-colors"><?php echo $faq['q']; ?></span>
                                <span class="material-symbols-outlined text-primary transform transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-content hidden px-8 pb-8">
                                <div class="h-px bg-black/5 mb-6"></div>
                                <p class="text-on-surface/70 leading-relaxed font-light"><?php echo $faq['a']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Still have questions? -->
<section class="py-24 bg-surface/50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-primary rounded-[50px] p-12 md:p-20 text-center relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-32 -translate-y-32 blur-3xl"></div>
            
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-8 relative z-10">Still have questions?</h2>
            <p class="text-xl text-white/80 font-light mb-12 relative z-10">Our land experts are ready to help you navigate your journey to ownership. We speak English, Spanish, and French.</p>
            
            <div class="flex flex-wrap justify-center gap-6 relative z-10">
                <a href="/contact/" class="bg-white text-primary px-10 py-5 rounded-2xl font-bold hover:scale-105 transition-transform shadow-2xl">
                    Contact Us
                </a>
                <a href="https://wa.me/+13459362660" class="bg-primary-dark text-white border border-white/20 px-10 py-5 rounded-2xl font-bold hover:bg-white/10 transition-colors flex items-center gap-3">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/whatsapp-svgrepo-com.svg" class="w-6 h-6" alt="WhatsApp">
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.faq-trigger');
    
    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const content = trigger.nextElementSibling;
            const icon = trigger.querySelector('.material-symbols-outlined');
            
            // Toggle current
            const isOpen = !content.classList.contains('hidden');
            
            // Close all others
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-trigger .material-symbols-outlined').forEach(i => i.style.transform = 'rotate(0deg)');
            
            if (!isOpen) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});
</script>

<?php get_footer(); ?>
