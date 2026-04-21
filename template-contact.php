<?php 
/**
 * Template Name: Contact Us Modern
 */
$seo_title = "Contact Easy Lot Cayman | Real Estate & Land Support";
$seo_description = "Have questions about buying land in Cayman? Contact our expert team today for information on owner financing, property availability, and viewing appointments.";
$seo_image = "https://easylot.ky/wp-content/uploads/2023/06/background_hero_high_rock_estates_aerial.jpg";
get_header(); 
?>

<!-- Schema Markup: Contact Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Easy Lot Cayman",
  "description": "Customer support and sales inquiry page for Easy Lot Cayman land developments.",
  "url": "<?php echo esc_url(get_permalink()); ?>",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Easy Lot Cayman",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "207 Sparky Dr. Suite 6",
      "addressLocality": "George Town",
      "addressRegion": "Grand Cayman",
      "postalCode": "KY1-1205",
      "addressCountry": "KY"
    },
    "telephone": "+1-345-936-2660",
    "email": "admin@easylot.ky"
  }
}
</script>

<main class="pt-32 pb-24 bg-surface">
    <div class="max-w-7xl mx-auto px-8 md:px-20">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="font-headline text-5xl md:text-7xl font-bold tracking-tighter text-on-surface mb-6">
                Get in <span class="bg-gradient-to-r from-primary to-[#ff6b6b] bg-clip-text text-transparent italic pr-4">Touch</span>
            </h1>
            <p class="text-on-surface-variant text-xl max-w-2xl leading-relaxed">
                We're here to help you secure your piece of paradise. Whether you have questions about financing or want to schedule a site visit, our team is ready.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <!-- Left Side: Info & Map -->
            <div class="space-y-12">
                <!-- Contact Details -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-surface-container-low p-8 rounded-3xl border border-black/5">
                        <span class="material-symbols-outlined text-primary text-4xl mb-4">location_on</span>
                        <h2 class="font-headline text-xl font-bold mb-2">Our Office</h2>
                        <p class="text-on-surface-variant leading-relaxed">
                            207 Sparky Dr. Suite 6<br/>
                            George Town, Grand Cayman<br/>
                            Cayman Islands
                        </p>
                    </div>
                    <div class="bg-surface-container-low p-8 rounded-3xl border border-black/5">
                        <span class="material-symbols-outlined text-primary text-4xl mb-4">support_agent</span>
                        <h2 class="font-headline text-xl font-bold mb-2">Sales & Support</h2>
                        <p class="text-on-surface-variant leading-relaxed">
                            <a href="tel:+13459362660" class="hover:text-primary transition-colors">+1 (345) 936-2660</a><br/>
                            <a href="mailto:admin@easylot.ky" class="hover:text-primary transition-colors">admin@easylot.ky</a>
                        </p>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="rounded-3xl overflow-hidden shadow-2xl shadow-black/5 border border-black/5 h-[400px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1874.1220999999997!2d-81.3662291!3d19.3061251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f25870057c0dbb7%3A0xcf75d052742720b8!2sEasylot!5e0!3m2!1sen!2sky!4v1713700000000!5m2!1sen!2sky" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="bg-white p-10 md:p-16 rounded-[40px] shadow-2xl shadow-black/5 border border-black/5 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-full -mr-12 -mt-12 transition-transform duration-700 group-hover:scale-150"></div>
                
                <h2 class="font-headline text-3xl font-bold mb-8">Send a Message</h2>
                <form id="contact-form" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-on-surface/60 uppercase tracking-widest ml-1">Full Name</label>
                            <input type="text" name="your-name" placeholder="John Doe" required 
                                class="w-full bg-surface-container-low border-0 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-on-surface/60 uppercase tracking-widest ml-1">Email Address</label>
                            <input type="email" name="your-email" placeholder="john@example.com" required 
                                class="w-full bg-surface-container-low border-0 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 transition-all">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-on-surface/60 uppercase tracking-widest ml-1">Phone Number</label>
                        <input type="tel" name="your-tel" placeholder="+1 (345) 000-0000" 
                            class="w-full bg-surface-container-low border-0 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-on-surface/60 uppercase tracking-widest ml-1">Your Message</label>
                        <textarea name="your-message" rows="5" placeholder="Tell us about the property you're interested in..." required 
                            class="w-full bg-surface-container-low border-0 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 transition-all resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-on-surface text-surface py-5 rounded-2xl font-bold text-lg hover:bg-primary transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-3">
                        Submit Inquiry
                        <span class="material-symbols-outlined">send</span>
                    </button>
                    
                    <p class="text-xs text-on-surface-variant text-center mt-4">
                        By submitting this form, you agree to our <a href="/privacy-policy" class="underline">Privacy Policy</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>

<section class="py-24 bg-on-surface text-surface text-center">
    <div class="max-w-3xl mx-auto px-8">
        <h2 class="text-4xl font-headline font-bold mb-8 italic text-primary">Prefer an Instant Reply?</h2>
        <p class="text-xl text-surface/70 mb-12 font-light">
            Chat directly with our sales director, Tommy Sofield, on WhatsApp for real-time information on land availability.
        </p>
        <a href="https://wa.me/13459362660" class="inline-flex items-center gap-4 bg-white text-on-surface px-10 py-5 rounded-2xl font-bold text-xl hover:scale-105 transition-all shadow-xl">
            <svg class="w-8 h-8 fill-[#25D366]" viewBox="0 0 24 24">
                <path d="M12 .002a12 12 0 0 0-10.42 18L.053 24l6.155-1.616A11.944 11.944 0 1 0 12 0a11.9 11.9 0 0 0-.001.002Z"/>
                <path fill="#FFF" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            Chat on WhatsApp
        </a>
    </div>
</section>

<?php get_footer(); ?>
