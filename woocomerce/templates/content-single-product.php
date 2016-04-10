<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<!-- <?php post_class(); ?> -->

<header class="headerSingle">
		<h2 itemprop="name" class="title">
			<?php the_title(); ?>
		</h2>
		<div class="headerShared">
			<div class="addthis_native_toolbox"></div>
		</div>
</header>

<section itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" class='sectionSingle' >

	

		<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );


		?>	
	<div class="singleCont">
		<section class="singleProducto--Iz">
			<div class="summary entry-summary">

				<?php
					/**
					 * woocommerce_single_product_summary hook
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>

			</div><!-- .summary -->
			
		</section>

		<aside class="singleProducto--De">

			<?php
				/**
				 * woocommerce_after_single_product_summary hook
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>

			<meta itemprop="url" content="<?php the_permalink(); ?>" />

			<article class="singleProducto--Article">
				<header class="singleProducto--Header">
					<h2 class="title">
						<i class="el el-credit-card"></i>
						Metodos de pago
					</h2>
					<figure class="singleProducto--Figure">
						<img src="http://oi68.tinypic.com/2yvm0ow.jpg" alt="MercadoPago vs Todopago">
					</figure>
				</header>
			</article>

		</aside>
	</div>

</section><!-- #product-<?php the_ID(); ?> -->



<?php do_action( 'woocommerce_after_single_product' ); ?>
