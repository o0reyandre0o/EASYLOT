<?php
/**
 * Template Name: Video Guides
 *
 * The full video library. Content comes from easylot_get_video_guides()
 * in functions.php — that array is the only place you need to edit to
 * add, remove or swap a video.
 */
$seo_title       = "Video Guides: Buying Land in the Cayman Islands | Easy Lot";
$seo_description = "Short videos answering the questions we get asked most about buying land in Grand Cayman & Little Cayman: how owner financing works, how to apply, and what happens after approval.";
$seo_image       = "https://easylot.ky/wp-content/uploads/2023/08/Grand-Cayman-Aerial.jpg";
get_header();

$videos     = easylot_get_video_guides();
$categories = easylot_get_video_categories();

// Only show filter pills for categories that actually have videos.
$used_categories = array();
foreach ( $videos as $v ) {
    if ( isset( $categories[ $v['category'] ] ) ) {
        $used_categories[ $v['category'] ] = $categories[ $v['category'] ];
    }
}
?>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://easylot.ky/" },
    { "@type": "ListItem", "position": 2, "name": "Video Guides", "item": "<?php echo esc_url( easylot_video_guides_url() ); ?>" }
  ]
}
</script>

<?php easylot_video_schema( $videos, 'Easy Lot Video Guides' ); ?>

<!-- Hero -->
<section class="relative overflow-hidden bg-surface pt-32 pb-16">
    <div class="pointer-events-none absolute top-0 right-0 h-full w-1/2 bg-gradient-to-l from-primary/5 to-transparent"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-8 text-center md:px-20">
        <div class="mx-auto max-w-3xl">
            <div class="mb-8 inline-flex items-center gap-2 rounded-full bg-primary/10 px-4 py-1.5 text-sm font-bold uppercase tracking-wider text-primary">
                <span class="material-symbols-outlined text-sm">play_circle</span>
                Watch &amp; Learn
            </div>

            <h1 class="mb-8 font-headline text-5xl font-bold leading-[1.1] tracking-tighter text-on-surface md:text-7xl">
                Video Guides:
                <span class="bg-gradient-to-r from-primary to-[#ff6b6b] bg-clip-text pr-4 italic tracking-normal text-transparent">Buying Land in Cayman</span>
            </h1>

            <p class="mb-12 text-xl font-light leading-relaxed text-on-surface/70">
                Buying land raises a lot of questions. We answered the ones we hear most in short videos —
                no jargon, no sales pitch, just straight answers you can watch in a couple of minutes.
            </p>
        </div>
    </div>
</section>

<!-- Library -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6">

        <!-- Category filter -->
        <?php /* role="button" divs, not <button> — Elementor's global button styles
                 paint every real <button> with the primary colour and win over
                 bg-surface, which is how these pills ended up red-on-red. */ ?>
        <div class="mb-14 flex flex-wrap justify-center gap-3" id="video-filters">
            <div role="button" tabindex="0" data-filter="all"
                    class="video-filter is-active cursor-pointer select-none rounded-full border border-black/5 bg-primary px-6 py-3 text-sm font-bold text-white transition-all">
                All Videos
            </div>
            <?php foreach ( $used_categories as $slug => $label ) : ?>
                <div role="button" tabindex="0" data-filter="<?php echo esc_attr( $slug ); ?>"
                        class="video-filter cursor-pointer select-none rounded-full border border-black/5 bg-surface px-6 py-3 text-sm font-bold text-on-surface/70 transition-all hover:border-primary/30 hover:text-primary">
                    <?php echo esc_html( $label ); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Grid -->
        <?php /* 4 columns on wide screens: the cards are 9:16, so 3 across would
                 make each one enormous. */ ?>
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4" id="video-grid">
            <?php foreach ( $videos as $v ) : ?>
                <?php easylot_video_card( $v, array( 'dark' => false, 'location' => 'video_guides_page' ) ); ?>
            <?php endforeach; ?>
        </div>

        <p id="video-empty" class="hidden py-16 text-center text-lg font-light text-on-surface/50">
            No videos in this category yet — more are on the way.
        </p>
    </div>
</section>

<!-- Prefer to read? -->
<section class="bg-surface-container py-20">
    <div class="container mx-auto px-6">
        <div class="mx-auto flex max-w-4xl flex-col items-center gap-8 rounded-[40px] border border-black/5 bg-surface p-10 text-center editorial-shadow md:flex-row md:p-14 md:text-left">
            <div class="flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-3xl bg-primary/10 text-primary">
                <span class="material-symbols-outlined text-4xl">quiz</span>
            </div>
            <div class="flex-1">
                <h2 class="mb-3 font-headline text-2xl font-bold text-on-surface md:text-3xl">Prefer to read?</h2>
                <p class="text-lg font-light leading-relaxed text-on-surface-variant">
                    Every one of these answers — plus a lot more on zoning, utilities, titles and taxes — is written out on our FAQ page.
                </p>
            </div>
            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"
               class="flex w-full items-center justify-center gap-3 rounded-2xl bg-on-surface px-8 py-4 font-bold text-surface transition-all duration-300 hover:bg-primary md:w-auto">
                Read the FAQs
                <span class="material-symbols-outlined">east</span>
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-surface/50 py-24">
    <div class="container mx-auto px-6">
        <div class="relative mx-auto max-w-4xl overflow-hidden rounded-[50px] bg-primary p-12 text-center md:p-20">
            <div class="absolute top-0 right-0 h-64 w-64 -translate-y-32 translate-x-32 rounded-full bg-white/10 blur-3xl"></div>

            <h2 class="relative z-10 mb-8 font-headline text-3xl font-bold text-white md:text-5xl">Still didn't find your answer?</h2>
            <p class="relative z-10 mb-12 text-xl font-light text-white/80">
                Ask us directly. Our land experts are ready to help — we speak English, Spanish and French.
            </p>

            <div class="relative z-10 flex flex-wrap justify-center gap-6">
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"
                   class="rounded-2xl bg-white px-10 py-5 font-bold text-primary shadow-2xl transition-transform hover:scale-105">
                    Contact Us
                </a>
                <a href="https://wa.me/13459362660" target="_blank" rel="noopener"
                   class="flex items-center gap-3 rounded-2xl border border-white/20 px-10 py-5 font-bold text-white transition-colors hover:bg-white/10">
                    <img src="https://easylot.ky/wp-content/uploads/2023/08/whatsapp-svgrepo-com.svg" class="h-6 w-6" alt="" />
                    Chat on WhatsApp
                </a>
                <a href="https://www.youtube.com/@EasyLotKy" target="_blank" rel="noopener"
                   class="flex items-center gap-3 rounded-2xl border border-white/20 px-10 py-5 font-bold text-white transition-colors hover:bg-white/10">
                    <span class="material-symbols-outlined">smart_display</span>
                    Subscribe on YouTube
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var filters = document.querySelectorAll('.video-filter');
    var cards   = document.querySelectorAll('#video-grid .easylot-video-card');
    var empty   = document.getElementById('video-empty');

    var activeClasses   = ['bg-primary', 'text-white'];
    var inactiveClasses = ['bg-surface', 'text-on-surface/70'];

    filters.forEach(function (btn) {

        // role="button" divs need Enter / Space wired up by hand.
        btn.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ' || e.key === 'Spacebar') {
                e.preventDefault();
                btn.click();
            }
        });

        btn.addEventListener('click', function () {

            filters.forEach(function (b) {
                b.classList.remove.apply(b.classList, activeClasses);
                b.classList.add.apply(b.classList, inactiveClasses);
                b.classList.remove('is-active');
            });
            btn.classList.remove.apply(btn.classList, inactiveClasses);
            btn.classList.add.apply(btn.classList, activeClasses);
            btn.classList.add('is-active');

            var filter  = btn.dataset.filter;
            var visible = 0;

            cards.forEach(function (card) {
                var show = (filter === 'all' || card.dataset.category === filter);
                card.classList.toggle('hidden', !show);
                if (show) { visible++; }
            });

            if (empty) { empty.classList.toggle('hidden', visible > 0); }

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ 'event': 'video_filter', 'video_category': filter });
        });
    });
});
</script>

<?php get_footer(); ?>
