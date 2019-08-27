<?php
$productos_args = get_field('productos');
$textos = get_field('textos');

// print_r($productos_args);

$args=array('post_type' => 'product');

$productos_args['productos_especificos'] 		= array_filter($productos_args['productos_especificos']);
$productos_args['cantidad_productos'] 			= intval($productos_args['cantidad_productos']);
$productos_args['productos_categoria']			= array_filter($productos_args['productos_categoria']);
$productos_args['orden_productos'] 				= ($productos_args['orden_productos']);

if(count($productos_args['productos_especificos'])>0){
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
$query = new WP_Query( $args );
?>


<?php
if ( $query->have_posts() ) {
	// The Loop
	while ( $query->have_posts() ) {
		$query->the_post(); $product = new WC_Product( get_the_ID() ); 
		$product = new WC_Product( get_the_ID() );
		$attachment_ids = $product->get_gallery_attachment_ids();
		if(has_post_thumbnail()){ array_unshift($attachment_ids,(get_post_thumbnail_id()) ); }
		
		?>

			<section class="sprod block wow fadeIn" data-wow-duration="2s">
				<div class="sprod__items-wrp">
					<div class="sprod__nav sprod__nav-prev">
						<i class="material-icons">arrow_back_ios</i>
					</div>
					<div class="sprod__items">
						<?php foreach ($attachment_ids as $attachment_id) { 
							$_img = wp_get_attachment_image_src($attachment_id,'600x600'); ?>
							<figure>
								<img src="<?php echo $_img[0] ?>" alt="<?php the_title();?>">
							</figure>
						<?php } ?>

					</div>
					<div class="sprod__nav sprod__nav-next">
						<i class="material-icons">arrow_forward_ios</i>
					</div>
				</div>
				<div class="sprod__nav">

					<div class="sprod__thumb">

						<?php foreach ($attachment_ids as $attachment_id) { 
							$_img = wp_get_attachment_image_src($attachment_id,'100x100'); ?>
							<figure>
								<img src="<?php echo $_img[0] ?>" alt="<?php the_title();?>">
							</figure>
						<?php } ?>


					</div>

				</div>




				<div class="sprod__desc wow fadeIn">

					<div class="prod__info ">
						<h6 class="prod__subheading"><?php echo $textos['header']; ?></h6>
						<h3><?php echo $textos['titulo']; ?></h3>
						<?php echo $textos['contenido']; ?>
						<?php if(filter_var($textos['enlace'], FILTER_VALIDATE_URL)){ ?>
							<a class="btn btn--primary" href="<?php echo $textos['enlace']; ?>"><?php echo $textos['texto_enlace'] ?></a>
						<?php }  ?>
					</div>

				</div>


			</section>

		<?php
	}

	wp_reset_postdata();
}
?>
