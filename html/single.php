<?php include 'includes/header.php'; ?>

<section class="single block--half">

	<!-- Slider Desktop -->
	
	<div class="single__thumbs hide-mobile">
		<?php for ($prod = 0; $prod < 5; $prod++){ ?>
			<figure class="">
				<a data-scroll href="#id<?php echo $prod ?>">
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</a>
			</figure>
		<?php }?>
	</div>

	<div class="single__slideshow hide-mobile">
		<figure class="" id="id0">
			<img src="https://source.unsplash.com/user/erondu/800x800" alt="">
		</figure>
		<figure class="" id="id1">
			<img src="https://source.unsplash.com/user/hdrmdrctr/800x800" alt="">
		</figure>
		<figure class="" id="id2">
			<img src="https://source.unsplash.com/user/matt_kerslake/800x800" alt="">
		</figure>
		<figure class="" id="id3">
			<img src="https://source.unsplash.com/user/erondu/800x800" alt="">
		</figure>
		<figure class="" id="id4">
			<img src="https://source.unsplash.com/user/hdrmdrctr/800x800" alt="">
		</figure>
	</div>
	

	<!-- Slider Mobile -->

	<div class="sprod  mobile-only">
		<div class="sprod__items-wrp">
			<div class="sprod__nav sprod__nav-prev">
				<i class="material-icons">arrow_back_ios</i>
			</div>
			<div class="sprod__items">

				<figure>
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</figure>
				<figure>
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</figure>
				<figure>
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</figure>
				
			</div>
			<div class="sprod__nav sprod__nav-next">
				<i class="material-icons">arrow_forward_ios</i>
			</div>
		</div>
		<div class="sprod__nav">

			<div class="sprod__thumb">
				<div class="sprod__thumb-item">
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</div>
				<div class="sprod__thumb-item">
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</div>
				<div class="sprod__thumb-item">
					<img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm12-pf-mu5-minty-04-phonemockup2-l_1.jpg?w=400&dpr=1&fit=default&crop=default&auto=format&fm=pjpg&q=75&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-1.1.1&s=ae4d4817e0de6a6fd09bc8b6030362b1" alt="">
				</div>
			</div>

		</div>
	</div>
	<!-- Columna 2 descripción -->
	<div class="single__desc">
		<div class="prod__info single__info">
			<h6 class="prod__subheading">A la carga dijo Vargas</h6>
			<h3>A los SurtiSticks</h3>
			<p>Comprando un ejemplar, apoyas el proyecto cultural del Fotociclo para registrar la ciudad.</p>
			<ul class="prod__feature">
				<li><strong>tamaño:</strong> 3cm x 4cm</li>
				<li><strong>color:</strong> rojo, lila, amarillo</li>
				<li><strong>peso:</strong> 45kg, 34kg, 21kg</li>
				<li><strong>precio:</strong> Gs.3000</li>
			</ul>
			<div class="cantidad">
				<button class="cantidad__button cantidad__button--menos">
					<i class="material-icons"> remove </i>
				</button>
				<button class="cantidad__anadir">
					añadir  <span>1</span>
				</button>
				<button class="cantidad__button cantidad__button--mas">
					<i class="material-icons">add</i>
				</button>
			</div>
		</div>

	</div>



</section>


<?php include 'includes/footer.php'; ?>