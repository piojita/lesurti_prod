<?php include "includes/header.php" ?>


<section class="allprods__header block--half">
	<div class="allprods__desc">
		<h3>Productos</h3>

		<p>Un recorrido hacia las maravillosas tierras del mundo imaginario de Shinchan, Pimienta Castillo, su hijo Petunio Castillo Marandari Espinola Fernandez 	de Moreira ..Continua </p>

	</div>

</section>
<nav class="allprods__nav ">
	<ul>
		<li><a href="">Todas</a></li>
		<li class="active"><a href="">Stickers</a></li>
		<li><a href="">Bolsos</a></li>
		<li><a href="">Remeras</a></li>
		<li><a href="">Prints</a></li>
	</ul>
</nav>

<section class="allprods__items block">
	
	<figure class="allprods__figure allprods__figure--agotado">
		<a href="">
			<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
			<figcaption class="prod__figcaption prod__figcaption--grid">
				<h3>La eterna transición con</h3>
				<span class="prod__price">Gs.20.000</span>
				<div class="btn btn--comprar">COMPRAR</div>
			</figcaption>
		</a>
	</figure>

	<?php for ($prod = 0; $prod < 11; $prod++){ ?>
		<figure class="allprods__figure">
			<a href="">
				<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				<figcaption class="prod__figcaption prod__figcaption--grid">
					<h3>La eterna transición</h3>
					<span class="prod__price">Gs.20.000</span>
					<div class="btn btn--comprar">COMPRAR</div>
				</figcaption>
			</a>
		</figure>
		

	<?php }?>
	



</section>


<?php include "includes/footer.php" ?>