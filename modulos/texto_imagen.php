<?php 
$heroimage = get_field('heroimage', get_the_id()); 
$img=wp_get_attachment_image_src($heroimage['imagen'],'1920x1280');
$img_mobile=wp_get_attachment_image_src($heroimage['imagen'],'800x800');
?>

<section class="text-img block">
	<div class="text-img__desc">
		<h1><?php echo $heroimage['titulo']; ?></h1>
		<?php echo $heroimage['texto']; ?>
	</div>
	<figure class="text-img__fig">
		<?php if(filter_var($heroimage['enlace'], FILTER_VALIDATE_URL)){ ?>
			<a href="<?php echo $heroimage['enlace'];?>">
				<img src="<?php echo $img_mobile[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
			</a>
		<?php } else { ?>
			<img src="<?php echo $img_mobile[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
		<?php } ?>
	</figure>
</section>