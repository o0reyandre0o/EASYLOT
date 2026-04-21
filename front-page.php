<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center overflow-hidden bg-surface">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" 
             src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" 
             alt="Cayman Islands Aerial View">
        <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/50 to-transparent"></div>
    </div>
    
    <div class="relative z-10 w-full max-w-7xl mx-auto px-8 md:px-20 pt-20 pb-12">
        <div class="max-w-4xl">
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
    </div>
</section>

<!-- The Smart Way to Buy Land -->
<section class="py-24 px-8 md:px-20 bg-surface-container">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 max-w-3xl">
            <h2 class="font-headline text-4xl md:text-5xl font-bold tracking-tight mb-6">
                The Smart Way to Buy Land in the Cayman Islands
            </h2>
            <p class="text-on-surface-variant text-lg leading-relaxed mb-6 font-light">
                We believe everyone deserves the opportunity to own a piece of paradise. At Easy Lot, we remove the traditional barriers to real estate so you can start building your legacy today.
            </p>
            <div class="w-24 h-1 bg-primary rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span class="text-4xl mb-6 block group-hover:scale-110 transition-transform">💰</span>
                <h3 class="font-headline text-xl font-bold mb-3">Lots for Every Budget</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Secure your future starting from just $13/day.</p>
            </div>
            
            <div class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span class="text-4xl mb-6 block group-hover:scale-110 transition-transform">🌴</span>
                <h3 class="font-headline text-xl font-bold mb-3">Prime Locations</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Beautiful properties available across Grand Cayman and Little Cayman.</p>
            </div>
            
            <div class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span class="text-4xl mb-6 block group-hover:scale-110 transition-transform">📉</span>
                <h3 class="font-headline text-xl font-bold mb-3">Flexible Down Payments</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">Start with just 5% down. Want a lower monthly payment? Simply increase your initial deposit to fit your budget!</p>
            </div>
            
            <div class="bg-surface p-8 rounded-xl editorial-shadow hover:translate-y-[-8px] hover:shadow-2xl transition-all duration-300 group">
                <span class="text-4xl mb-6 block group-hover:scale-110 transition-transform">🤝</span>
                <h3 class="font-headline text-xl font-bold mb-3">Direct Owner Financing</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">No banks involved, fast approval, and minimal paperwork.</p>
            </div>
        </div>
    </div>
</section>

<!-- Find Your Perfect Lot -->
<section class="py-24 px-8 md:px-20 bg-surface">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-3xl">
                <span class="font-label text-primary font-bold tracking-[0.2em] text-sm uppercase">Exclusive Opportunities</span>
                <h2 class="font-headline text-5xl font-bold tracking-tight mt-2 mb-6">Find Your Perfect Lot</h2>
                <p class="text-on-surface-variant text-lg leading-relaxed font-light">
                    Browse our exclusive communities to see real-time availability, lot sizes, and pricing. Explore our interactive maps to find the exact location that fits your lifestyle and budget, and lock it in today.
                </p>
            </div>
            <a class="text-secondary font-bold flex items-center gap-2 hover:underline pb-2" href="#">
                View Interactive Map
                <span class="material-symbols-outlined">map</span>
            </a>
        </div>

        <div class="space-y-12">
            <!-- Listing 1: Northshore Estates -->
            <div class="bg-surface-container-low rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[450px] overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="https://easylot.ky/wp-content/uploads/2024/07/rum-point-cayman-islands-1.jpg"
                        alt="Aerial view of land for sale at Northshore Estates, Grand Cayman" />
                    <div class="absolute top-6 left-6 bg-[#FB3122] text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">Grand Cayman</div>
                </div>
                <div class="p-12 flex flex-col justify-center">
                    <h3 class="font-headline text-4xl font-bold mb-6 group-hover:text-primary transition-colors">Northshore Estates</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">Enjoy elevated terrain offering natural ocean breezes, located very close to the beach and just 5 minutes from the iconic Rum Point. The perfect spot for your future coastal retreat.</p>
                    
                    <div class="space-y-4 mb-10">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📉</span>
                            <span class="font-medium text-sm text-on-surface">Flexible Down Payment (Start from 5%)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🤝</span>
                            <span class="font-medium text-sm text-on-surface">Owner Financing Available (No Bank)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📝</span>
                            <span class="font-medium text-sm text-on-surface">Minimum Paperwork (Fast Approval)</span>
                        </div>
                    </div>
                    
                    <a href="https://easylot.ky/project/rum-point-land/" class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Explore Availability
                        <span class="material-symbols-outlined">explore</span>
                    </a>
                </div>
            </div>

            <!-- Listing 2: Elena Estates -->
            <div class="bg-surface-container-low rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[450px] overflow-hidden lg:order-2">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="https://easylot.ky/wp-content/uploads/2023/08/elena-estates-little-cayman-sitemap-satellite.jpg"
                        alt="Investment property for sale at Elena Estates, Little Cayman" />
                    <div class="absolute top-6 right-6 bg-secondary text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">Little Cayman</div>
                </div>
                <div class="p-12 flex flex-col justify-center lg:order-1">
                    <h3 class="font-headline text-4xl font-bold mb-6 group-hover:text-primary transition-colors">Elena Estates (Little Cayman)</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">Discover near-shore parcels in the most peaceful of the Three Sisters. Experience true island living at its finest, perfectly situated just 5 minutes from the future port of Little Cayman.</p>
                    
                    <div class="space-y-4 mb-10">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📉</span>
                            <span class="font-medium text-sm text-on-surface">Flexible Down Payment (Start from 5%)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🤝</span>
                            <span class="font-medium text-sm text-on-surface">Owner Financing Available (No Bank)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📝</span>
                            <span class="font-medium text-sm text-on-surface">Minimum Paperwork (Fast Approval)</span>
                        </div>
                    </div>
                    
                    <a href="https://easylot.ky/project/rum-point-land/" class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Explore Availability
                        <span class="material-symbols-outlined">explore</span>
                    </a>
                </div>
            </div>

            <!-- Listing 3: Frank Sound Estates -->
            <div class="bg-surface-container-low rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-sm border border-black/5 hover:border-primary/20 transition-colors group">
                <div class="relative min-h-[450px] overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="https://easylot.ky/wp-content/uploads/2023/06/background_hero_high_rock_estates_aerial.jpg"
                        alt="Elevated lots for sale at Frank Sound Estates near East-West Arterial" />
                    <div class="absolute top-6 left-6 bg-[#FB3122] text-white px-4 py-2 rounded-lg font-bold text-sm tracking-widest uppercase shadow-lg z-10">Frank Sound</div>
                </div>
                <div class="p-12 flex flex-col justify-center">
                    <h3 class="font-headline text-4xl font-bold mb-6 group-hover:text-primary transition-colors">Frank Sound Estates</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-8">A stunning location in Frank Sound, strategically positioned right next to the future East-West Arterial Road. <strong>Expected to see high appreciation</strong>, this development is just 5 minutes from Clifton Hunter High School and the local Fire Station.</p>
                    
                    <div class="space-y-4 mb-10">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📉</span>
                            <span class="font-medium text-sm text-on-surface">Flexible Down Payment (Start from 5%)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📈</span>
                            <span class="font-medium text-sm text-on-surface">High Investment Appreciation Potential</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🤝</span>
                            <span class="font-medium text-sm text-on-surface">Owner Financing Available (No Bank)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📝</span>
                            <span class="font-medium text-sm text-on-surface">Minimum Paperwork (Fast Approval)</span>
                        </div>
                    </div>
                    
                    <a href="https://easylot.ky/project/rum-point-land/" class="bg-on-surface text-surface py-4 px-8 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-primary transition-all duration-300 w-fit">
                        Explore Availability
                        <span class="material-symbols-outlined">explore</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 3-Step Ownership Process -->
<section class="py-24 px-8 md:px-20 bg-[#1d1b1a] text-surface">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="font-headline text-4xl md:text-5xl font-bold mb-6">The 3-Step Ownership Process</h2>
        <p class="opacity-80 max-w-2xl mx-auto mb-20 text-lg font-light">Join over 100 families who have secured their future with Easy Lot.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-16 left-0 w-full h-[1px] bg-surface/10 z-0"></div>
            
            <!-- Step 1 -->
            <div class="relative z-10 flex flex-col items-center group">
                <div class="w-32 h-32 rounded-full bg-surface/5 border border-surface/10 text-primary flex items-center justify-center mb-8 shadow-2xl backdrop-blur-sm group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <span class="material-symbols-outlined text-5xl">map</span>
                </div>
                <div class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold absolute top-0 right-1/4 md:right-1/3 shadow-lg">1</div>
                <h3 class="font-headline text-2xl font-bold mb-4">Choose Your Lot</h3>
                <p class="opacity-70 leading-relaxed text-balance">Use our Interactive Map to explore available properties, view real-time prices, and find your perfect spot from the comfort of your home.</p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 flex flex-col items-center group">
                <div class="w-32 h-32 rounded-full bg-surface/5 border border-surface/10 text-primary flex items-center justify-center mb-8 shadow-2xl backdrop-blur-sm group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <span class="material-symbols-outlined text-5xl">tune</span>
                </div>
                <div class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold absolute top-0 right-1/4 md:right-1/3 shadow-lg">2</div>
                <h3 class="font-headline text-2xl font-bold mb-4">Customize Your Payments</h3>
                <p class="opacity-70 leading-relaxed text-balance">Take control of your budget. Use our online slider to adjust your down payment (starting at just 5%) and find a monthly installment that fits your lifestyle.</p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 flex flex-col items-center group">
                <div class="w-32 h-32 rounded-full bg-surface/5 border border-surface/10 text-primary flex items-center justify-center mb-8 shadow-2xl backdrop-blur-sm group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <span class="material-symbols-outlined text-5xl">verified</span>
                </div>
                <div class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold absolute top-0 right-1/4 md:right-1/3 shadow-lg">3</div>
                <h3 class="font-headline text-2xl font-bold mb-4">Submit Pre-Approval</h3>
                <p class="opacity-70 leading-relaxed text-balance">Skip the bank and the endless paperwork. Complete our simple online form and receive your approval response within 24 to 48 hours once your documents are verified.</p>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Payment Calculator Section -->
<section class="py-24 px-8 md:px-20 bg-surface-container" id="calculator">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div>
            <h2 class="font-headline text-5xl font-bold mb-8 leading-tight">Interactive Payment Calculator</h2>
            <p class="text-on-surface-variant text-xl mb-10 leading-relaxed font-light">
                Use our interactive calculator to find a monthly payment that fits your lifestyle. Adjust the purchase price, choose your down payment (starting at just 5%), and select your term length. No surprises—just a straightforward 9% fixed interest rate.
            </p>
            
            <div class="space-y-6">
                <div class="flex items-center gap-5 p-6 bg-surface rounded-2xl editorial-shadow border border-black/5">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-2xl">percent</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-1">9% Fixed Interest Rate</h4>
                        <p class="text-sm text-on-surface-variant">Your rate is locked in for the entire term of the loan.</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-5 p-6 bg-surface rounded-2xl editorial-shadow border border-black/5">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-2xl">verified_user</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-1">Fast Pre-Approval</h4>
                        <p class="text-sm text-on-surface-variant">Get approved in as little as 24-48 hours once documents are verified.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-surface p-8 md:p-12 rounded-[2.5rem] shadow-2xl border border-black/5 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16"></div>
            
            <!-- Purchase Price -->
            <div class="mb-10">
                <div class="flex justify-between items-center mb-6">
                    <label class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant">Purchase Price (KYD)</label>
                    <div class="font-headline text-3xl font-bold text-on-surface">$<span id="price-val">125,000</span></div>
                </div>
                <input class="w-full h-2 bg-surface-container-highest appearance-none rounded-full cursor-pointer accent-primary"
                    id="price-range" max="250000" min="30000" step="1000" type="range" value="125000" />
                <div class="flex justify-between mt-2 text-[10px] font-bold text-on-surface-variant/40 uppercase tracking-tighter">
                    <span>$30k</span>
                    <span>$250k</span>
                </div>
            </div>

            <!-- Down Payment -->
            <div class="mb-10">
                <div class="flex justify-between items-center mb-6">
                    <label class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant">Down Payment (<span id="down-pct">10</span>%)</label>
                    <div class="font-headline text-3xl font-bold text-on-surface">$<span id="down-val">12,500</span></div>
                </div>
                <input class="w-full h-2 bg-surface-container-highest appearance-none rounded-full cursor-pointer accent-primary"
                    id="down-range" max="50" min="5" step="1" type="range" value="10" />
                <div class="flex justify-between mt-2 text-[10px] font-bold text-on-surface-variant/40 uppercase tracking-tighter">
                    <span>Min 5%</span>
                    <span>Max 50%</span>
                </div>
            </div>

            <!-- Term Length -->
            <div class="mb-12">
                <label class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-6 block text-center">Select Loan Term</label>
                <div class="grid grid-cols-3 gap-4" id="term-selector">
                    <button class="py-4 px-2 border-2 border-outline-variant rounded-2xl font-bold text-on-surface-variant hover:border-primary transition-all outline-none text-sm"
                        data-years="5">5 Years</button>
                    <button class="py-4 px-2 border-2 border-primary bg-primary rounded-2xl font-bold text-white shadow-xl shadow-primary/20 transition-all outline-none text-sm"
                        data-years="10">10 Years</button>
                    <button class="py-4 px-2 border-2 border-outline-variant rounded-2xl font-bold text-on-surface-variant hover:border-primary transition-all outline-none text-sm"
                        data-years="15">15 Years</button>
                </div>
            </div>

            <!-- Result Box -->
            <div class="p-8 bg-surface-container rounded-3xl text-center border border-black/5 relative overflow-hidden group">
                <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/[0.02] transition-colors duration-500"></div>
                <span class="font-label text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-4 block relative z-10">Monthly Investment</span>
                <div class="text-6xl font-headline font-extrabold text-primary mb-4 relative z-10">
                    $<span id="monthly-payment">1,425.80</span>
                </div>
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/50 backdrop-blur-sm rounded-full text-[10px] font-bold text-primary uppercase tracking-widest relative z-10">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                    9% Fixed Interest Rate
                </div>
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