<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>">


	<title><?php
    
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    // Añadir el nombre de la web
    bloginfo( 'name' );
 
    // Añadir descripccion al home de la web
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
 
    ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">

	

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f7cb4c203b55dcc" async="async"></script>
	

	
	<?php if ( is_singular() ) : ?>
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:description" content="<?php echo wp_strip_all_tags( $content['main'] ); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

	<?php else: ?>
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
	<meta property="og:type" content="blog" />
	<meta property="og:image" content="<?php echo get_template_directory_uri() . '/img/choloconcheFB.jpg'; ?>" />

	<?php endif; ?>
	

</head>

<body>



	<header class="header">

		<section class="header--Cont">

			<figure class="header--Logo">

				<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">

			</figure>

			<form role="search" class="header--Form" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">

				<fieldset class="header--Fieldset">
					<input type="search" class="inputSearch" placeholder="Encuentra tu paquete" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>">
					<div class="form--Icon">
						<i class="el el-search-alt"></i>
					</div>
					<input style="display:none;" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
					<input type="hidden" name="post_type" value="product" />
				</fieldset>

			</form>

			<!--<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
				<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
				<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
				<input type="hidden" name="post_type" value="product" />
			</form>-->


			<div class="header--Description">

				<span class="title">

					Ventas: 054 4864-2742

				</span>

			</div>

		</section>

	</header>



	<nav class="menu">

		<section class="menu--Cont">

			<ul class="ul">
				
				<?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );

				?>
					

			</ul>

			<ul class="ul">
				<li class="list">
					<?php if ( is_user_logged_in() ) { ?>
					 	<a class="link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>">
					 		<i class="el el-child"></i>
							Mis Viajes
					 	</a>
					 <?php } 

					 else { ?>
					 	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>">
					 		<i class="el el-child"></i>
							Registrate
					 	</a>
					 <?php } ?>
					
				</li>

				<li class="list">

					<a href="#" class="link">

						<i class="el el-facebook"></i>

					</a>

				</li>

				<li class="list">

					<a href="#" class="link">

						<i class="el el-twitter"></i>

					</a>

				</li>

				<li class="list">

					<a href="#" class="link">

						<i class="el el-googleplus"></i>

					</a>

				</li>

				<li class="list">

					<a href="#" class="link clickMenu">

						<i class="el el-align-justify"></i>

					</a>

				</li>

			</ul>

		</section>

		<section class="menu--Mobil">
			<ul class="ul--Mob">
				<li class="list">
					<a href="http://www.amaruviajes.com/" class="link">
						Inicio
					</a>
				</li>
				<li class="list">
					<a href="http://www.amaruviajes.com/nosotros" class="link">
						Nosotros
					</a>
				</li>
				<li class="list">
					<a href="http://www.amaruviajes.com/servicios" class="link">
						Servicios
					</a>
				</li>
				<li class="list">
					<a href="http://www.amaruviajes.com/tienda" class="link">
						Paquetes
					</a>
				</li>
				<li class="list">
					<a href="http://amaruviajes.com/?s=promociones&post_type=product" class="link">
						Promociones
					</a>
				</li>
			</ul>
		</section>

		

	</nav>