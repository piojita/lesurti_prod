<?php 
$heroimage = get_field('imagen_hero', get_the_id()); 
$enlace = get_field('enlace', get_the_id()); 
$img=wp_get_attachment_image_src($heroimage,'1920x1280');
?>

<section class="hero">
	<?php if(filter_var($enlace, FILTER_VALIDATE_URL)){ ?>
		<a href="<?php echo $enlace;?>">
			<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
		</a>
	<?php } else { ?>
		<img src="<?php echo $img[0]; ?>" alt="<?php the_title();; ?>">
	<?php } ?>
</section>