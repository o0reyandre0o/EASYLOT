<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center px-8 md:px-20 overflow-hidden bg-surface">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" 
             src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" 
             alt="Cayman Islands Aerial View">
        <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/50 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl pt-20">
        <h1 class="font-headline text-5xl md:text-8xl font-extrabold tracking-tighter leading-[0.9] text-on-surface mb-8">
            Buy Land in <br/>Cayman: <span class="text-[#FB3122]">Local<br/>Owner Financing</span>
        </h1>
        
        <!-- Checklist -->
        <div class="flex flex-col gap-4 mb-10">
            <div class="flex items-center gap-3">
                <div class="w-5 h-5 rounded-full bg-[#FB3122] flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-xs font-bold leading-none">check</span>
                </div>
                <span class="font-label uppercase tracking-widest text-xs font-bold opacity-80">NO BANKS REQUIRED</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-5 h-5 rounded-full bg-[#FB3122] flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-xs font-bold leading-none">check</span>
                </div>
                <span class="font-label uppercase tracking-widest text-xs font-bold opacity-80">Fast Approval</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-5 h-5 rounded-full bg-[#FB3122] flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-xs font-bold leading-none">check</span>
                </div>
                <span class="font-label uppercase tracking-widest text-xs font-bold opacity-80">Fixed Interest Rates</span>
            </div>
        </div>
        
        <!-- CTA -->
        <a href="#calculator" class="inline-flex items-center gap-3 bg-[#bc0002] text-white px-8 py-4 rounded-xl text-lg font-bold editorial-shadow hover:scale-[1.02] active:scale-95 transition-all">
            Explore Available Lots
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>
</section>

<!-- Why Choose Easy Lot -->
<section class="py-24 px-8 md:px-20 bg-surface-container">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16">
            <h2
                class="font-headline text-4xl font-bold tracking-tight mb-4 hover:translate-x-1 transition-transform cursor-default">
                Why Choose Easy Lot</h2>
            <div class="w-24 h-1 bg-primary rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span
                    class="material-symbols-outlined text-secondary text-4xl mb-6 group-hover:scale-110 transition-transform">payments</span>
                <h3 class="font-headline text-xl font-bold mb-3">Land for many budgets</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Grand Cayman from CI $72,000<br>Little Cayman
                    from CI $45,000</p>
            </div>
            <div
                class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span
                    class="material-symbols-outlined text-secondary text-4xl mb-6 group-hover:scale-110 transition-transform">account_balance_wallet</span>
                <h3 class="font-headline text-xl font-bold mb-3">Flexible down payments</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Grand Cayman from $2,500<br>Little Cayman
                    from $1,575</p>
            </div>
            <div
                class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span
                    class="material-symbols-outlined text-secondary text-4xl mb-6 group-hover:scale-110 transition-transform">handshake</span>
                <h3 class="font-headline text-xl font-bold mb-3">No bank required</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Direct owner financing bypasses lengthy
                    traditional banking hurdles.</p>
            </div>
            <div
                class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span
                    class="material-symbols-outlined text-secondary text-4xl mb-6 group-hover:scale-110 transition-transform">calendar_month</span>
                <h3 class="font-headline text-xl font-bold mb-3">Flexible monthly payments</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Grand Cayman from $560<br>Little Cayman from
                    $380</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Estates -->
<section class="py-24 px-8 md:px-20 bg-surface">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div>
                <span class="font-label text-primary font-bold tracking-[0.2em] text-sm uppercase">Curated
                    Opportunities</span>
                <h2 class="font-headline text-5xl font-bold tracking-tight mt-2">Featured Estates</h2>
            </div>
            <a class="text-secondary font-bold flex items-center gap-2 hover:underline" href="#">View All Locations
                <span class="material-symbols-outlined">east</span></a>
        </div>

        <div class="space-y-12">
            <!-- Listing 1: Northshore Estates -->
            <div class="bg-surface-container-low rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[400px] overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/northshore.png"
                        alt="Northshore Estates" />
                    <div class="absolute top-6 left-6 bg-[#FB3122] text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">Premium Listing</div>
                </div>
                <div class="p-12 flex flex-col justify-center">
                    <h3 class="font-headline text-4xl font-bold mb-4 group-hover:text-primary transition-colors">Northshore Estates: Premium Land in East End</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">Elevated terrain offering natural cooling breezes and stunning ocean vistas. Perfect for those seeking tranquility without sacrificing accessibility.</p>
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 mb-10">
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span><span class="font-medium text-sm text-on-surface">Prime Location</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">foundation</span><span class="font-medium text-sm text-on-surface">Ready to Build</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">verified_user</span><span class="font-medium text-sm text-on-surface">Safe Investment</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">percent</span><span class="font-medium text-sm text-on-surface">Fixed 9% interest</span></div>
                    </div>
                    <button class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Request Full Prospectus
                        <span class="material-symbols-outlined">description</span>
                    </button>
                </div>
            </div>

            <!-- Listing 2: Frank Sound Estates -->
            <div class="bg-surface-container-low rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[400px] overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/franksound.png"
                        alt="Frank Sound Estates" />
                    <div class="absolute top-6 left-6 bg-[#FB3122] text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">New Release</div>
                </div>
                <div class="p-12 flex flex-col justify-center">
                    <h3 class="font-headline text-4xl font-bold mb-4 group-hover:text-primary transition-colors">Frank Sound Estates: Central Convenience</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">A growing community strategically located for easy access to both ends of the island. Ideal for families and long-term capital appreciation.</p>
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 mb-10">
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span><span class="font-medium text-sm text-on-surface">Central Location</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">landscape</span><span class="font-medium text-sm text-on-surface">Level Ground</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">bolt</span><span class="font-medium text-sm text-on-surface">Utilities Ready</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">percent</span><span class="font-medium text-sm text-on-surface">Flexible Terms</span></div>
                    </div>
                    <button class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Request Full Prospectus
                        <span class="material-symbols-outlined">description</span>
                    </button>
                </div>
            </div>

            <!-- Listing 3: Elena Estates -->
            <div class="bg-surface-container-low rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[400px] overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/elena.png"
                        alt="Elena Estates" />
                    <div class="absolute top-6 left-6 bg-secondary text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">Luxury Paradise</div>
                </div>
                <div class="p-12 flex flex-col justify-center">
                    <h3 class="font-headline text-4xl font-bold mb-4 group-hover:text-primary transition-colors">Elena Estates: Serenity in Little Cayman</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">Exclusive oceanfront and near-shore parcels in the most peaceful of the Three Sisters. Experience true island living at its finest.</p>
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 mb-10">
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">waves</span><span class="font-medium text-sm text-on-surface">Beach Access</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">eco</span><span class="font-medium text-sm text-on-surface">Eco-Friendly Area</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">security</span><span class="font-medium text-sm text-on-surface">Private Living</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">percent</span><span class="font-medium text-sm text-on-surface">9% Financing</span></div>
                    </div>
                    <button class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Request Full Prospectus
                        <span class="material-symbols-outlined">description</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3-Step Process -->
<section class="py-24 px-8 md:px-20 bg-secondary text-surface">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="font-headline text-4xl font-bold mb-4">The 3-Step Process</h2>
        <p class="opacity-80 max-w-xl mx-auto mb-20 italic font-light">Join over 100 families who have secured their
            future with Easy Lot.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 relative">
            <div class="hidden md:block absolute top-12 left-0 w-full h-[1px] bg-surface/20 z-0"></div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-24 h-24 rounded-full bg-surface text-secondary flex items-center justify-center mb-8 shadow-2xl">
                    <span class="material-symbols-outlined text-4xl">map</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">1. Choose your lot via Map</h3>
                <p class="opacity-70 text-sm leading-relaxed">Explore high-resolution surveys and virtual site visits
                    online.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-24 h-24 rounded-full bg-surface text-secondary flex items-center justify-center mb-8 shadow-2xl">
                    <span class="material-symbols-outlined text-4xl">calculate</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">2. Calculate Payments</h3>
                <p class="opacity-70 text-sm leading-relaxed">Adjust your down payment to find a plan that fits your
                    lifestyle.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-24 h-24 rounded-full bg-primary text-white flex items-center justify-center mb-8 shadow-2xl">
                    <span class="material-symbols-outlined text-4xl">assignment_turned_in</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">3. Submit Pre-Approval</h3>
                <p class="opacity-70 text-sm leading-relaxed">Fast-track your ownership with our 24-hour response
                    guarantee.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mortgage Calculator Section -->
<section class="py-24 px-8 md:px-20 bg-surface-container" id="calculator">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="font-headline text-4xl font-bold mb-6 italic">Transparent Financing,<br />No Surprises</h2>
            <p class="text-on-surface-variant text-lg mb-8 leading-relaxed font-light">We believe in complete
                transparency. Use our mortgage widget to model your investment in real-time. No credit check required.
            </p>
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-surface rounded-lg editorial-shadow">
                    <div
                        class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined">lock</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm">Fixed Interest Rates</h4>
                        <p class="text-xs text-on-surface-variant">Your rate never changes during the term.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-surface p-10 rounded-3xl editorial-shadow border border-outline-variant/10">
            <!-- Purchase Price -->
            <div class="mb-8">
                <label
                    class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4 block">Purchase
                    Price (KYD)</label>
                <input
                    class="w-full h-1.5 bg-surface-container-highest appearance-none rounded-lg cursor-pointer accent-[#FB3122]"
                    id="price-range" max="250000" min="30000" type="range" value="125000" />
                <div class="mt-4 font-headline text-2xl font-bold text-on-surface">$<span id="price-val">125,000</span>
                </div>
            </div>

            <!-- Down Payment -->
            <div class="mb-8">
                <label
                    class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4 block">Down
                    Payment (%)</label>
                <input
                    class="w-full h-1.5 bg-surface-container-highest appearance-none rounded-lg cursor-pointer accent-[#FB3122]"
                    id="down-range" max="50" min="5" type="range" value="10" />
                <div class="mt-4 font-headline text-2xl font-bold text-on-surface"><span id="down-pct">10</span>%
                    ($<span id="down-val">12,500</span>)</div>
            </div>

            <!-- Term Length -->
            <div class="mb-10">
                <label
                    class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4 block">Term
                    Length (Years)</label>
                <div class="grid grid-cols-3 gap-3" id="term-selector">
                    <button
                        class="py-3 px-4 border-2 border-primary rounded-xl font-bold text-primary hover:bg-primary/5 transition-all outline-none"
                        data-years="5">5 Years</button>
                    <button
                        class="py-3 px-4 border-2 border-primary bg-primary rounded-xl font-bold text-white shadow-lg shadow-primary/20 transition-all outline-none"
                        data-years="10">10 Years</button>
                    <button
                        class="py-3 px-4 border-2 border-outline-variant rounded-xl font-bold text-on-surface-variant hover:border-primary transition-all outline-none"
                        data-years="15">15 Years</button>
                </div>
            </div>

            <!-- Result -->
            <div class="p-10 bg-surface-container/50 rounded-2xl text-center border border-black/5">
                <span
                    class="font-label text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-2 block">Estimated
                    Monthly Payment</span>
                <div class="text-6xl font-headline font-extrabold text-[#FB3122] mb-3">$<span
                        id="monthly-payment">1,425.80</span></div>
                <p class="text-xs text-on-surface-variant font-medium">Based on 9% fixed interest rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Swiper -->
<section class="py-24 px-8 md:px-20 bg-surface">
    <div class="container mx-auto">
        <h2 class="font-headline text-4xl font-bold mb-16 text-center">Success Stories</h2>
        <div class="swiper testimonialSwiper pb-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-surface-container p-10 rounded-2xl border border-black/5">
                    <p class="italic text-on-surface-variant mb-6">"The process was incredibly clear and the owner
                        financing made it possible for us to buy our first lot."</p>
                    <div class="font-bold">Jeana Ebanks</div>
                </div>
                <div class="swiper-slide bg-surface-container p-10 rounded-2xl border border-black/5">
                    <p class="italic text-on-surface-variant mb-6">"Fast approval and no bank stress. Highly recommended
                        for Caymanians looking to invest."</p>
                    <div class="font-bold">Alene Walters</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 px-8 md:px-20 bg-surface-container" id="faq">
    <div class="max-w-3xl mx-auto">
        <h2 class="font-headline text-4xl font-bold text-center mb-16">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="p-6 bg-surface rounded-xl editorial-shadow group cursor-pointer"
                onclick="this.classList.toggle('active')">
                <div class="flex justify-between items-center">
                    <h4 class="font-bold text-lg">Do I need a credit check?</h4>
                    <span class="material-symbols-outlined transition-transform group-[.active]:rotate-45">add</span>
                </div>
                <div
                    class="max-h-0 overflow-hidden transition-all duration-300 group-[.active]:max-h-24 pt-0 group-[.active]:pt-4 text-on-surface-variant text-sm">
                    No. Our financing is based on your down payment and ability to pay, not your credit score.
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Calculator Logic
        const priceRange = document.getElementById('price-range');
        const downRange = document.getElementById('down-range');
        const priceVal = document.getElementById('price-val');
        const downPct = document.getElementById('down-pct');
        const downValDisplay = document.getElementById('down-val');
        const monthlyDisplay = document.getElementById('monthly-payment');
        const termButtons = document.querySelectorAll('#term-selector button');

        let currentYears = 10;
        const interestRate = 0.09;

        function format(num, decimals = 0) {
            return num.toLocaleString('en-US', {
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals
            });
        }

        function calculate() {
            const price = parseFloat(priceRange.value);
            const pct = parseFloat(downRange.value);
            const downAmount = price * (pct / 100);
            const principal = price - downAmount;

            const r = interestRate / 12;
            const n = currentYears * 12;

            let monthly = 0;
            if (principal > 0) {
                monthly = principal * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
            }

            // Update UI
            priceVal.innerText = format(price);
            downPct.innerText = pct;
            downValDisplay.innerText = format(downAmount);
            monthlyDisplay.innerText = format(monthly, 2);
        }

        // Term selection handling
        termButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                termButtons.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white', 'shadow-lg', 'shadow-primary/20');
                    b.classList.add('text-on-surface-variant', 'border-outline-variant');
                    b.classList.remove('text-primary', 'border-primary');
                });

                this.classList.remove('text-on-surface-variant', 'border-outline-variant');
                this.classList.add('bg-primary', 'text-white', 'shadow-lg', 'shadow-primary/20', 'border-primary');

                currentYears = parseInt(this.dataset.years);
                calculate();
            });
        });

        priceRange.addEventListener('input', calculate);
        downRange.addEventListener('input', calculate);
        calculate();

        // Swiper Initialization
        const swiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: {
                768: { slidesPerView: 2 }
            }
        });
    });
</script>

<?php get_footer(); ?>