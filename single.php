<?php get_header(); ?>
<section id="content" role="main" class="columns small-centered small-6">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry','content' ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>