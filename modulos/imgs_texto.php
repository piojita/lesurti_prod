<?php 
$imagenes = get_field('imagenes', get_the_id()); 
?>

<section class="process block">


	<?php foreach ($imagenes as $imagen) { ?>
		<?php 
			$img=wp_get_attachment_image_src($imagen['imagen'],'800x800');

		?>
		<figure>


			<?php if(filter_var($imagen['enlace'], FILTER_VALIDATE_URL)){ ?>
				<a href="<?php echo $imagen['enlace'];?>">
					<img src="<?php echo $img[0];?>" alt="<?php echo $imagen['titulo'] ?>">
				</a>
			<?php } else { ?>
				<img src="<?php echo $img[0];?>" alt="<?php echo $imagen['titulo'] ?>">
			<?php } ?>

			<figcaption>
				<h4><?php echo $imagen['titulo'] ?></h4>
				<?php echo $imagen['texto'] ?>
			</figcaption>
		</figure>
	
	<?php } ?>

</section>