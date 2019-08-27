<?php
$productos_args = get_field('productos');
$textos = get_field('textos');
// print_r($productos_args);

$args=array('post_type' => 'product');

$productos_args['productos_especificos'] 		= array_filter($productos_args['productos_especificos']);
$productos_args['cantidad_productos'] 			= intval($productos_args['cantidad_productos']);
$productos_args['productos_categoria']			= array_filter($productos_args['productos_categoria']);
$productos_args['orden_productos'] 				= ($productos_args['orden_productos']);


if(count($productos_args['productos_especificos'])>1){
	$args['post__in']=array_values($productos_args['productos_especificos']);
}

if(intval($productos_args['cantidad_productos'])>=0){
	$args['posts_per_page']=$productos_args['cantidad_productos'];
}

if($productos_args['orden_productos']=='fecha_asc'){
	$args['order']='ASC';	
	$args['orderby']='date';	
}
if($productos_args['orden_productos']=='fecha_desc'){
	$args['order']='DESC';	
	$args['orderby']='date';	
}
if($productos_args['orden_productos']=='random'){
	$args['orderby']='rand';	
}

if(count($productos_args['productos_categoria'])>0){
	
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'product_cat',
			'field'    => 'term_id',
			'terms'    => array_values($productos_args['productos_categoria']),
		),
	);
}

// print_r($args);
// print_r($textos);


$query = new WP_Query( $args );
?>
<section class="prod block wow fadeIn" data-wow-duration="1s">

	<div class="prod__info">
		<h6 class="prod__subheading"><?php echo $textos['header']; ?></h6>
		<h3><?php echo $textos['titulo']; ?></h3>
		<?php echo $textos['contenido']; ?>
		<?php if(filter_var($textos['enlace'], FILTER_VALIDATE_URL)){ ?>
			<a class="btn btn--primary" href="<?php echo $textos['enlace']; ?>"><?php echo $textos['texto_enlace'] ?></a>
		<?php } ?>

	</div>


	<div class="prod__carousel">
		<!-- <div class="prod__arrow prod__arrow--prev">
			<i class="material-icons">arrow_back_ios</i>
		</div> -->
		<div class="prod__items ">

			<?php
			if ( $query->have_posts() ) {
				// The Loop
				while ( $query->have_posts() ) {
					$query->the_post(); $product = new WC_Product( get_the_ID() ); ?>

						<div class="prod__item">
							<figure class="prod__figure">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('800x600'); ?>
									<figcaption class="prod__figcaption">
										<h3><?php the_title(); ?></h3>
										<span class="prod__price"><?php echo $product->get_price_html(); ?></span>
									</figcaption>
								</a>
							</figure>
						</div>

					<?php
				}

				wp_reset_postdata();
			}
			?>
			
			
			
		</div>
		<!-- <div class="prod__arrow prod__arrow--next">
			<i class="material-icons">arrow_forward_ios</i>
		</div> -->
	</div>

</section>