<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>
	<article class="avisoOk">
		<header class="header--User">
			<span class="description">
				<?php echo wp_kses_post( $message ); ?>
			</span>
		</header>
	</article>
<?php endforeach; ?>
