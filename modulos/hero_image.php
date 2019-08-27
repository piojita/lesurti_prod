<?php 
$heroimage = get_field('heroimage', get_the_id()); 
$img=wp_get_attachment_image_src($heroimage['imagen'],'1920x1280');
$img_mobile=wp_get_attachment_image_src($heroimage['imagen'],'800x800');
?>
<main class="bighero wow bounceInUp" style="background-image: url('<?php echo $img[0]; ?>');">
	<div class="bighero__info">
		<h1 class="bighero__title"><?php echo $heroimage['titulo']; ?></h1>
		<h5 class="bighero__desc"><?php echo $heroimage['texto']; ?></h5>
	</div>


	<figure class="bighero__figure">
		<?php if(filter_var($heroimage['enlace'], FILTER_VALIDATE_URL)){ ?>
			<a href="<?php echo $heroimage['enlace'];?>">
				<img src="<?php echo $img_mobile[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
			</a>
		<?php } else { ?>
			<img src="<?php echo $img_mobile[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
		<?php } ?>
		
	</figure>
</main>


