<?php 
/**
 * Template Name: About Us Modern
 */
$seo_title = "About Easy Lot Cayman | Our Mission & Financing Story";
$seo_description = "Learn how Easy Lot empowers families to achieve land ownership in the Cayman Islands with guaranteed owner financing and high-elevation plots.";
$seo_image = "https://easylot.ky/wp-content/uploads/2023/08/Grand-Cayman-Aerial.jpg";
get_header(); 
?>

<!-- Schema Markup: About Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Easy Lot: Affordable Land in Cayman by Owner",
  "description": "Easy Lot empowers families to achieve land ownership in the Cayman Islands with guaranteed owner financing and high-elevation plots. Backed by Cayman Development Group and Director Tommy Sofield.",
  "publisher": {
    "@type": "Organization",
    "name": "Easy Lot",
    "logo": "https://easylot.ky/wp-content/uploads/2023/08/logo-easy-lot.svg"
  },
  "mainEntity": {
    "@type": "Organization",
    "name": "Easy Lot",
    "foundingDate": "2023",
    "founder": {
      "@type": "Person",
      "name": "Tommy Sofield"
    }
  }
}
</script>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden bg-surface">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent pointer-events-none"></div>
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-bold tracking-wider uppercase mb-6 animate-fade-in">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Our Mission
            </div>
            <h1 class="text-5xl md:text-7xl font-serif font-bold tracking-tighter text-on-surface mb-8 leading-[1.1]">
                About <span class="bg-gradient-to-r from-primary to-[#ff6b6b] bg-clip-text text-transparent italic">Easy Lot</span>: Affordable Land in Cayman
            </h1>
            <p class="text-xl md:text-2xl text-on-surface/70 leading-relaxed max-w-2xl mb-10 font-light">
                Our mission is to <span class="text-on-surface font-semibold underline decoration-primary/30 decoration-2 underline-offset-4">empower individuals</span> and families to achieve their dreams of land ownership within the Cayman Islands.
            </p>
            <div class="flex items-center gap-4">
                <div class="h-px w-12 bg-primary/30"></div>
                <p class="text-sm font-bold text-primary tracking-widest uppercase">Backed by Cayman Development Group</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Content Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/About-Us-Hero-Image.png" alt="About Us Hero" class="w-full h-full object-cover">
                </div>
                <!-- Trust Badge -->
                <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-3xl shadow-2xl max-w-xs hidden md:block border border-black/5">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <h4 class="font-serif font-bold text-lg">Cayman Expertise</h4>
                    </div>
                    <p class="text-sm text-on-surface/60 font-light leading-relaxed">
                        Backed by Cayman Development Group, a leader in land development with decades of local experience.
                    </p>
                </div>
            </div>
            
            <div class="space-y-8">
                <h2 class="text-4xl font-serif font-bold tracking-tight text-on-surface leading-tight">
                    Our Vision & <span class="italic text-primary">Commitment</span> to You
                </h2>
                <div class="space-y-6 text-lg text-on-surface/70 font-light leading-relaxed">
                    <p>
                        At <strong class="text-on-surface font-semibold">Cayman Development Group</strong>, we believe that every piece of land holds the potential for a brighter tomorrow. It is our hope that clients will not just find a piece of land, but a canvas on which they can create their future.
                    </p>
                    <p>
                        Whether it’s building a home or investing for the long term, our vision is to create a seamless, user-friendly environment driven by innovation. We aim to be a guiding light in the journey toward land ownership, providing a trustworthy partner that empowers clients to take bold steps toward their future.
                    </p>
                    <p>
                        With transparency, integrity, and professionalism as our cornerstones, we aim to build lasting relationships built on trust and mutual success.
                    </p>
                </div>
                <div class="pt-8 grid grid-cols-2 gap-8 border-t border-black/5">
                    <div>
                        <div class="text-3xl font-serif font-bold text-primary mb-1">Decades</div>
                        <div class="text-xs font-bold tracking-widest uppercase text-on-surface/40">of Experience</div>
                    </div>
                    <div>
                        <div class="text-3xl font-serif font-bold text-primary mb-1">100%</div>
                        <div class="text-xs font-bold tracking-widest uppercase text-on-surface/40">Owner Financed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Grid -->
<section class="py-24 bg-surface relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03] pointer-events-none"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <h2 class="text-4xl md:text-5xl font-serif font-bold tracking-tight text-on-surface mb-6">Our Core <span class="italic">Values</span></h2>
            <p class="text-lg text-on-surface/60 font-light italic">The principles that guide every interaction and project at Easy Lot.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Safety -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-safety.svg" alt="Safety" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Safety</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Prioritizing the well-being and security of individuals and environments in every development.</p>
            </div>

            <!-- People -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-people.svg" alt="People" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">People</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Building customer relationships through trust, transparency and understanding. Putting your needs at the forefront.</p>
            </div>

            <!-- Integrity -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-integrity.svg" alt="Integrity" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Integrity</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Upholding honesty, ethics, and moral principles in all actions and decisions. Doing more than what's expected.</p>
            </div>

            <!-- Respect -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-respect.svg" alt="Respect" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Respect</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Treating others with consideration, empathy, and valuing diverse perspectives in our community.</p>
            </div>

            <!-- Innovation -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-innovation.svg" alt="Innovation" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Innovation</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Embracing creativity, adapting to change, and seeking new solutions to simplify land ownership.</p>
            </div>

            <!-- Teamwork -->
            <div class="group bg-white p-10 rounded-[40px] shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors duration-500">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/icon-teamwork.svg" alt="Teamwork" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all duration-500">
                </div>
                <h3 class="text-2xl font-serif font-bold mb-4">Teamwork</h3>
                <p class="text-on-surface/60 font-light leading-relaxed">Combining individual strengths to develop exceptional results and lasting developments.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer CTA -->
<section class="py-20 bg-primary overflow-hidden relative">
    <!-- Abstract shapes -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-2xl"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-8">Ready to start your <span class="italic">legacy</span>?</h2>
        <p class="text-xl text-white/80 mb-12 max-w-2xl mx-auto font-light">Explore our developments and find the perfect canvas for your future home in paradise.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://easylot.ky/all-our-developments/" class="bg-white text-primary px-10 py-5 rounded-2xl font-bold text-lg hover:scale-105 transition-all duration-300 shadow-2xl">
                Explore Developments
            </a>
            <a href="https://easylot.ky/faq/" class="bg-primary/20 backdrop-blur-md text-white border border-white/30 px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 transition-all duration-300">
                View FAQs
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
