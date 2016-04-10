<?php get_header(); ?>


<main>

	
	<?php if ( have_posts() ) : ?>


		<?php woocommerce_content(); ?>
	

	<?php endif; ?>

</main>

<?php get_footer(); ?>