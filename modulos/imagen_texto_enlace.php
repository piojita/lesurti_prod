<?php 
$heroimage = get_field('heroimage', get_the_id()); 
$img=wp_get_attachment_image_src($heroimage['imagen'],'1920x1280');
?>

<section class="text-img block">
	
	<figure class="text-img__fig">
		<img src="<?php echo $img[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
	</figure>
	<div class="text-img__desc">
		<h1><?php echo $heroimage['titulo']; ?></h1>
		<?php echo $heroimage['texto'] ?>
		<?php if(filter_var($heroimage['enlace'], FILTER_VALIDATE_URL)){ ?>
			<a href="<?php echo $heroimage['enlace'];?>" class="btn btn--comprar"><?php echo $heroimage['texto_enlace']; ?></a>
		<?php } ?>
	</div>

</section>