<?php 
/**
 * Template Name: Team Modern
 */
$seo_title = "Meet the Easy Lot Team | Cayman Land Experts";
$seo_description = "Discover the team behind Easy Lot Cayman. Experts in real estate, accessible financing, and helping families secure their future in the islands.";
$seo_image = "https://easylot.ky/wp-content/uploads/2023/08/Tommy-Sofield.jpg";
get_header(); 
?>

<!-- Schema Markup: Team & Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Tommy Sofield",
  "jobTitle": "Director",
  "worksFor": {
    "@type": "Organization",
    "name": "Easy Lot Cayman",
    "@id": "https://easylot.ky/#organization"
  },
  "image": "https://easylot.ky/wp-content/uploads/2023/08/Tommy-Sofield.jpg"
}
</script>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden bg-surface">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-8 md:px-20 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-bold tracking-wider uppercase mb-6">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                The Heart of Easy Lot
            </div>
            <h1 class="text-5xl md:text-7xl font-serif font-bold tracking-tighter text-on-surface mb-8 leading-[1.1]">
                Meet our <span class="bg-gradient-to-r from-primary to-[#ff6b6b] bg-clip-text text-transparent italic">Cayman Experts</span>
            </h1>
            <p class="text-xl text-on-surface/70 leading-relaxed font-light mb-0">
                Get acquainted with the exceptional individuals whose skills, dedication, and passion propel us forward in making land ownership accessible in the Cayman Islands.
            </p>
        </div>
    </div>
</section>

<!-- Team Grid Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
            
            <!-- Tommy Sofield -->
            <div class="group relative overflow-hidden rounded-[40px] bg-surface h-[550px]">
                <img src="https://easylot.ky/wp-content/uploads/2023/08/PHOTO-2023-08-27-12-48-09-e1693489329947.jpg" alt="Tommy Sofield" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10 text-white">
                    <h3 class="text-3xl font-serif font-bold mb-1">Tommy Sofield</h3>
                    <p class="text-white/70 mb-4 font-light tracking-wide uppercase text-sm">Director & Project Manager</p>
                    <div class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 overflow-hidden transition-all duration-500">
                        <p class="text-sm leading-relaxed text-white/80 font-light mb-4 text-pretty">Drives strategic oversight and ensures every facet of development aligns with perfection. <br><br><span class="italic text-primary font-semibold">Fun Fact: Don't eat yellow snow.</span></p>
                    </div>
                </div>
            </div>

            <!-- Kim Andrada -->
            <div class="group relative overflow-hidden rounded-[40px] bg-surface h-[550px]">
                <img src="https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Kim-Andrada-e1693489960525-1024x1024.jpeg" alt="Kim Andrada" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10 text-white">
                    <h3 class="text-3xl font-serif font-bold mb-1">Kim Andrada</h3>
                    <p class="text-white/70 mb-4 font-light tracking-wide uppercase text-sm">Admin & Finance Coordinator</p>
                    <div class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 overflow-hidden transition-all duration-500">
                        <p class="text-sm leading-relaxed text-white/80 font-light mb-4 text-pretty">Essential oversight of financial activities and government closing processes, ensuring seamless operations.</p>
                    </div>
                </div>
            </div>

            <!-- Patrick Brown -->
            <div class="group relative overflow-hidden rounded-[40px] bg-surface h-[550px]">
                <img src="https://easylot.ky/wp-content/uploads/2023/08/Richard-Easy-Lot.jpg" alt="Patrick Brown" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10 text-white">
                    <h3 class="text-3xl font-serif font-bold mb-1">Patrick Brown</h3>
                    <p class="text-white/70 mb-4 font-light tracking-wide uppercase text-sm">Site Operations Support</p>
                    <div class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 overflow-hidden transition-all duration-500">
                        <p class="text-sm leading-relaxed text-white/80 font-light mb-4 text-pretty">The backbone of our operations, ensuring every project phase runs smoothly on the ground.</p>
                    </div>
                </div>
            </div>

            <!-- Bentley -->
            <div class="group relative overflow-hidden rounded-[40px] bg-surface h-[550px]">
                <img src="https://easylot.ky/wp-content/uploads/2023/08/Bentley-The-Dog.jpg" alt="Bentley The Dog" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10 text-white">
                    <div class="absolute top-8 right-8 bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter shadow-lg">Good Boy</div>
                    <h3 class="text-3xl font-serif font-bold mb-1">Bentley <span class="italic text-primary-light">"The Dog"</span></h3>
                    <p class="text-white/70 mb-4 font-light tracking-wide uppercase text-sm">Chief Morale Officer</p>
                    <div class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 overflow-hidden transition-all duration-500">
                        <p class="text-sm leading-relaxed text-white/80 font-light mb-4 text-pretty">Bringing joy and stress relief to our team and clients alike with his gentle nature. <br><br><span class="italic text-primary font-semibold">Fun Fact: Loves water jumps.</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Join the Legacy Footer -->
<section class="py-24 bg-surface border-t border-black/5 relative overflow-hidden">
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-2xl mx-auto">
            <img src="https://easylot.ky/wp-content/uploads/2023/08/Easy-Lot-Pin-Big.png" alt="Easy Lot Icon" class="w-20 h-20 mx-auto mb-8 opacity-20">
            <h2 class="text-4xl font-serif font-bold text-on-surface mb-6">Work with the <span class="italic text-primary">Best</span> in Cayman</h2>
            <p class="text-lg text-on-surface/60 font-light leading-relaxed mb-10">
                Our team is dedicated to your success. From the first inquiry to the final handover, we are with you every step of the way.
            </p>
            <a href="https://easylot.ky/all-our-developments/" class="inline-flex items-center gap-3 bg-primary text-white px-10 py-5 rounded-2xl font-bold hover:scale-95 transition-all duration-300 shadow-2xl shadow-primary/20">
                Explore Our Properties
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
