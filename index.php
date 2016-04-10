<?php get_header(); ?>

<section class="on">
	<div class="cssload-dots">
		<div class="cssload-dot"></div>
		<div class="cssload-dot"></div>
		<div class="cssload-dot"></div>
		<div class="cssload-dot"></div>
		<div class="cssload-dot"></div>
	</div>
</section>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<filter id="goo">
			<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
			<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></feColorMatrix>
			<!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
		</filter>
	</defs>
</svg>

<section class="slider">

		<ul class="ul--Slider">

			<li class="list">

				<img src="<?php bloginfo('template_url'); ?>/img/slider1.jpg">

			</li>

		</ul>

		<div class="promociones--Slider">

			<article class="article--Slider">

				<header class="header--Slider">

					<h1 class="title">

						PAQUETES EXCLUSIVOS OFERTAS EN 12 CUOTAS / INT

					</h1>

				</header>

				<div class="description--Slider">

					<p class="description">

						Viaja ahora en 12 cuotas sin interes, con todo pago haslo posible aprovecha grandes oferas imperdibles en el mes de diciembre

					</p>

				</div>

				<div class="btn--Slider">

					<button class="btn--One">

						<a class="link" href="#">

							Ver Paquetes

						</a>

					</button>

				</div>

			</article>

		</div>

</section>


<div class="woocommerce-message"><?php echo wp_kses_post( $message ); ?></div>
<main class='main-home'>

		<section class="contenido">

			<?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <article class="paquetesHome">  

                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <figure class="paquetesFigure">
                            <?php if (has_post_thumbnail( $loop->post->ID )) 
                            		echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                            	else 
                            		echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; 
                            ?>
							</figure>
                           <div class="paquetesTitle">
                           	 	<h3 class="title"><?php the_title(); ?></h3>
                           </div>
							<div class="paquetesPrecio">
								 <span class="price">
								 	<?php echo $product->get_price_html(); ?>
								 </span>
							</div>
							<div class="paquetesComprar">
								<div class="paquetesComprar--Iz">
									<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
								</div>
								<div class="paquetesComprar--De">
									<i class="el el-chevron-right"></i>
								</div>
							</div>
                        	  

                        </a>

                        
                   </article>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

			
		</section>

		<aside class="asideHome">

			<article class="articleAside">
				<figure class="aside--Figure">
					<img src="http://static-avt.avantrip.com/fkt-flight/images/financiacion-home-generico-20151124.jpg" alt="">
				</figure>
			</article>

			<div class="articleHome">
				
				<header class="articleNovedades--Header">
					<h2 class="title">Novedades</h2>
				</header>

				<?php query_posts('cat=10&showposts=7&paged='.$page_num); ?>				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="linkAside">
					<article class="articleNovedades--Cont">
						<figure class="figureNovedades">
							<?php if( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
						</figure>
						<div class="descriptionNovedades">
							<span class="title">
								<?php the_title(); ?>
							</span>
						</div>
					</article>
				</a>
				<?php endwhile; endif; ?>


		

			</div>
			
		</aside>


</main>
<?php get_footer(); ?>
