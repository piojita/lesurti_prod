<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<?php
global $product;

	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
?>
<section class="single block--half">

	<!-- Slider Desktop -->
	
	<div class="single__thumbs hide-mobile">
		<?php $attachment_ids = $product->get_gallery_image_ids(); array_push($attachment_ids, get_post_thumbnail_id(get_the_ID())) ?>
		<?php foreach ($attachment_ids as $k => $attachment_id) { ?>
			<figure class="">
				<a data-scroll href="#id<?php echo $k; ?>">
					<?php echo wp_get_attachment_image($attachment_id,'1000x1000'); ?>
				</a>
			</figure>
		<?php }?>
	</div>

	<div class="single__slideshow hide-mobile">
		<?php foreach ($attachment_ids as $k => $attachment_id) { ?>
			<figure class="" id="id<?php echo $k; ?>">
				<?php echo wp_get_attachment_image($attachment_id,'1000x1000'); ?>
			</figure>
		<?php } ?>
	</div>
	

	<!-- Slider Mobile -->

	<div class="sprod  mobile-only">
		<div class="sprod__items-wrp">
			<div class="sprod__nav sprod__nav-prev">
				<i class="material-icons">arrow_back_ios</i>
			</div>
			<div class="sprod__items">
				<?php foreach ($attachment_ids as $k => $attachment_id) { ?>
					<figure>
						<?php echo wp_get_attachment_image($attachment_id,'1000x1000'); ?>
					</figure>
				<?php } ?>
				
			</div>
			<div class="sprod__nav sprod__nav-next">
				<i class="material-icons">arrow_forward_ios</i>
			</div>
		</div>
		<div class="sprod__nav">

			<div class="sprod__thumb">
				<?php foreach ($attachment_ids as $k => $attachment_id) { ?>			
					<div class="sprod__thumb-item">
						<?php echo wp_get_attachment_image($attachment_id,'1000x1000') ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
	<!-- Columna 2 descripción -->
	<div class="single__desc">
		<div class="prod__info single__info">
			<!-- <h6 class="prod__subheading">A la carga dijo Vargas</h6> -->
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<div class="single__prod__price"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?> </div>

			<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>

				<div class="cantidad">
					<button type="button" class="cantidad__button cantidad__button--menos">
						<i class="material-icons"> remove </i>
					</button>
					<button class="cantidad__anadir" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt">
						añadir  <span>1</span>
					</button>
					<button type="button" class="cantidad__button cantidad__button--mas">
						<i class="material-icons">add</i>
					</button>
				</div>

				<?php 
				woocommerce_quantity_input( array(
					'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
					'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
					'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				) ); 
				?>
			</form>
		</div>

	</div>

</section>

<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>

<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
