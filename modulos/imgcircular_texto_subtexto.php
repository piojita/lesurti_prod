<?php 
$heroimage = get_field('heroimage', get_the_id()); 
$img=wp_get_attachment_image_src($heroimage['imagen'],'400x400');
?>	
<section class="autor block">
	<div class="autor__avatar">
		<?php if(filter_var($heroimage['enlace'], FILTER_VALIDATE_URL)){ ?>
			<a href="<?php echo $heroimage['enlace'];?>">
				<img src="<?php echo $img[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
			</a>
		<?php } else { ?>
			<img src="<?php echo $img[0]; ?>" alt="<?php echo $heroimage['titulo']; ?>">
		<?php } ?>
	</div>
	<h3 class="autor__name"><?php echo $heroimage['titulo']; ?></h3>
	<?php echo $heroimage['texto']; ?>
</section>




