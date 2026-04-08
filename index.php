<?php
/**
 * Main template file
 */

get_header(); ?>

<div class="py-24 px-8 md:px-20">
    <div class="max-w-7xl mx-auto">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="font-headline text-4xl font-bold mb-8"><?php the_title(); ?></h1>
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
