<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header(); 

?>
	<section class="allprods__header block--half">
		<div class="allprods__desc">
			<h3><?php woocommerce_page_title(); ?></h3>

			<p><?php do_action( 'woocommerce_archive_description' ); ?> </p>

		</div>

	</section>
	<nav class="allprods__nav ">
		<?php wp_list_categories(array('taxonomy'=>'product_cat','title_li'=>'','hide_title_if_empty'=>true)); ?>
		<!-- <ul>
			<li><a href="#">Todas</a></li>
			<li class="active"><a href="#">Stickers</a></li>
			<li><a href="#">Bolsos</a></li>
			<li><a href="#">Remeras</a></li>
			<li><a href="#">Prints</a></li>
		</ul> -->
	</nav>

	<section class="allprods__items block">

		<?php  
		if ( woocommerce_product_loop() ) {
			
			//do_action( 'woocommerce_before_shop_loop' );


				// woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				// woocommerce_product_loop_end();


			do_action( 'woocommerce_after_shop_loop' );

		} else {
			do_action( 'woocommerce_no_products_found' );
		}
		?>
		
		<!-- <figure class="allprods__figure allprods__figure--agotado">
			<a href="#">
				<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				<figcaption class="prod__figcaption prod__figcaption--grid">
					<h3>La eterna transición con</h3>
					<span class="prod__price">Gs.20.000</span>
					<div class="btn btn--comprar">COMPRAR</div>
				</figcaption>
			</a>
		</figure> -->

<!-- 			<figure class="allprods__figure">
				<a href="#">
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
					<figcaption class="prod__figcaption prod__figcaption--grid">
						<h3>La eterna transición</h3>
						<span class="prod__price">Gs.20.000</span>
						<div class="btn btn--comprar">COMPRAR</div>
					</figcaption>
				</a>
			</figure> -->

	</section> 

<?php get_footer();