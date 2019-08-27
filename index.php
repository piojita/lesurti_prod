<?php 


get_header(); 



	$args = array(
		'post_type' 			=> array( 'portadas' ),
		'post_status' 			=> array( 'publish' ),
		'order' 				=> 'ASC',
		'orderby' 				=> 'menu_order',
		'posts_per_page' 		=> -1,
	);
	$wpquery = new WP_Query( $args );
	$prev_tmpl=null;
	if ( $wpquery->have_posts() ) {
		while ( $wpquery->have_posts() ) {
			$wpquery->the_post();

			$_prev=get_next_post();
			$prev_tmpl=trim(get_post_meta($_prev->ID,'tpml',true));
			$_next=get_adjacent_post();
			$next_tmpl=trim(get_post_meta($_next->ID,'tpml',true));

			$tmpl=trim(get_post_meta(get_the_id(),'tpml',true));

			set_query_var( 'prev_tmpl', $prev_tmpl );
			set_query_var( 'next_tmpl', $next_tmpl );
			set_query_var( 'tmpl', $tmpl );

			get_template_part('modulos/'.$tmpl);

		}
	}
	wp_reset_postdata();




get_footer(); 





