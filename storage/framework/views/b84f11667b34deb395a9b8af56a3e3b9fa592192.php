<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $__env->yieldContent('title', 'Home'); ?></title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
	integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
	crossorigin="anonymous" />

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"
	integrity="sha512-ztsAq/T5Mif7onFaDEa5wsi2yyDn5ygdVwSSQ4iok5BPJQGYz1CoXWZSA7OgwGWrxrSrbF0K85PD5uLpimu4eQ=="
	crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
	href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap"
	rel="stylesheet">

</head>
<body>

	

	<div class="hero">
		<div class="hero__content">
			<p class="intro-text">Intro text</p>
			<h1 class="big-text">Titolo della pagina web</h1>
			<a href="#" class="button">Discover more</a>
		</div>
		
	</div>


	<div class="poster mt-3">
		<div class="poster__img">
			<img src="img/bg-text.jpg" alt="">
		</div>
		<div class="poster__content">
			<h3 class="big-text">Titolo del poster</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod
				tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim
				veniam, quis nostrum exercitationem ullamLorem ipsum dolor sit amet,
				consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrum
				exercitationem ullam</p>
			<a href="" class="button">Call to action</a>
		</div>
	</div>

	<div class="bg-cover mt-3">
		<div class="bg-cover__title">
			<h3 class="big-text tw">Titolo del mio blocco cover</h3>
		</div>
		<div class="bg-cover__text">
			<h4 class="normal-text tw">Titolo del mio paragrafo</h4>
			<p class="tw">Lorem ipsum dolor sit amet, consectetur adipisci elit,
				sed eiusmod tempor incidunt Lorem ipsum dolor sit amet, consectetur
				adipisci elit, sed eiusmod tempor incidunt</p>

			<h4 class="normal-text tw">Titolo del mio paragrafo</h4>
			<p class="tw">Lorem ipsum dolor sit amet, consectetur adipisci elit,
				sed eiusmod tempor incidunt Lorem ipsum dolor sit amet, consectetur
				adipisci elit, sed eiusmod tempor incidunt</p>

			<h4 class="normal-text tw">Titolo del mio paragrafo</h4>
			<p class="tw">Lorem ipsum dolor sit amet, consectetur adipisci elit,
				sed eiusmod tempor incidunt Lorem ipsum dolor sit amet, consectetur
				adipisci elit, sed eiusmod tempor incidunt</p>
		</div>
	</div>

	<div class="grid mt-3">
		<div class="col">
			<h3 class="big-text">
				Lorem ispums <br /> sia maet
			</h3>
		</div>
		<div class="col">
			<p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing
				elit, sed do eiusmod tempor incididunt ut labore et dolore magna
				aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
				dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est
				laborum.</p>
		</div>
	</div>

	<div class="main-carousel"
		data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": true }'>
		<!--<div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true}'>-->
		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">NISSAN</p>
				<p class="carousel-cell-title-modello">MICRA</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/micra.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 4.900</p>
			</div>
		</div>

		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">BMW</p>
				<p class="carousel-cell-title-modello">180 i</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/serie1.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 8.900</p>
			</div>
		</div>

		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">MERCEDES</p>
				<p class="carousel-cell-title-modello">CLASSE A</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/classeA.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 9.900</p>
			</div>
		</div>

		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">AUDI</p>
				<p class="carousel-cell-title-modello">Q3 SPORTBACK</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/audi_q3sportback.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 11.900</p>
			</div>
		</div>

		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">RENAULT</p>
				<p class="carousel-cell-title-modello">CAPTURE</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/capture.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 12.400</p>
			</div>
		</div>

		<div class="carousel-cell">
			<div class="carousel-cell-title">
				<p class="carousel-cell-title-marca">MERCEDES</p>
				<p class="carousel-cell-title-modello">AMG GTS SPECIAL EDITION</p>
			</div>

			<div class="carousel-cell-img"
				style="background-image: url('img/auto/gts.jpg');"></div>

			<div class="carousel-cell-body grid">
				<div class="carousel-cell-body-left col">
					<ul>
						<li>Anno:</li>
						<li>Motore:</li>
						<li>Potenza:</li>
						<li>KM:</li>
						<li>Cambio:</li>
					</ul>
				</div>
				<div class="carousel-cell-body-right col">
					<ul>
						<li>2018</li>
						<li>1.9 diesel</li>
						<li>115 kw (140 cv)</li>
						<li>80.000</li>
						<li>Automatico</li>
					</ul>
				</div>
			</div>
			<div class="carousel-cell-prezzo">
				<p>€ 128.000</p>
			</div>
		</div>
	</div>

	<div class="panel-blue mt-3">
		<div class="grid">
			<div class="col panel-blue__dots">
				<div class="dot">Text</div>
				<div class="dot">Text</div>
				<div class="dot">Text</div>
				<div class="dot">Text</div>
			</div>
			<div class="col panel-blue__text">
				<div class="grid">
					<div class="col">
						<h3 class="big-text tw">Lorem ipsum</h3>
					</div>
					<div class="col">
						<p class="tw mt-2">Lorem ipsum dolor sit amet, consectetur
							adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

</body>
</html>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/concessionaria/resources/views/layout/index.blade.php ENDPATH**/ ?>