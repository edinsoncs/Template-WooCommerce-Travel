<?php get_header(); ?>
	
	<main class="flex postContent">

		<section class="contenidoIz">
			<header class="contenidoIz-Header">
				<h2 class="title">
					<?php the_title(); ?>
				</h2>
			</header>
			<section class="contenidoIz--Data">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
			</section>
			
		</section>
		<aside class="contenidoDe">
			<header class="contenidoDe--Header">
				<h2 class="title">Guía Para Viajeros</h2>
			</header>
			
			<?php query_posts('cat=17&showposts=6&paged='.$page_num); ?>
				 <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

				<article class="contenidoDe--Articles">
					<a href="<?php the_permalink() ?>">
						<figure class="contenidoDe--ArticlesFigure">
							<?php 
									if(has_post_thumbnail()) {
										the_post_thumbnail();
									}
								 ?>
						</figure>
						<header class="contenidoDe--ArticlesHeader">
							<h2 class="title">
								<?php the_title(); ?>
							</h2>
						</header>
					</a>
				</article>

			<?php endwhile; endif; ?>
		</aside>
		

	</main>


<?php get_footer(); ?>