<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php include('head.php') ?>
</head>

<body>
	<?php include('header.php') ?>
	<div id="page-title">

		<div id="page-title-page"></div>
		<script type='text/javascript'>
			jQuery(document).ready(function($) {
				$("#page-title-page").backstretch([
					"images/demo/page-title-2.jpg"
				], {
					duration: 8000,
					fade: 500
				});
			});
		</script>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	<div id="main">
		<div class="width-container">
			<div id="content-container">

				<div class="content-container-anchor overlay-container-anchor">
					<h2 class="title-anchor title-heading">suíte PREMIUM</h2>
					<div class="room-featured">

						<div class="flexslider gallery-anchor">
							<ul class="slides">
								<li><a href="images/demo/premium-1.jpg" rel="prettyphoto[gallery-room]"><img src="images/demo/premium-1.jpg"></a></li>
								<li><a href="images/demo/premium-2.jpg" rel="prettyphoto[gallery-room]"><img src="images/demo/premium-2.jpg"></a></li>
								<li><a href="images/demo/premium-3.jpg" rel="prettyphoto[gallery-room]"><img src="images/demo/premium-3.jpg"></a></li>
							</ul>
						</div><!-- close .gallery-anchor -->
						<script>
							jQuery(document).ready(function($) {
								$('.gallery-anchor').flexslider({
									animation: "fade",
									slideDirection: "horizontal",
									slideshow: false,
									slideshowSpeed: 7000,
									animationDuration: 200,
									directionNav: true,
									controlNav: true
								});
							});
						</script>
					</div><!-- close .room-featured -->

					<p>Suíte para você que tem bom gosto e gosta de apimentar as suas experiências.</p>

				</div><!-- close .content-container-anchor -->
			</div>

			<div id="sidebar">
				<div class="content-container-anchor overlay-container-anchor">
					<h5>Preços</h5>
					<div class="grid4column">
						<span>R$</span>
						<h5 class="price-rooms">59,99</h5><br />
						<div class="rooms-per-night">3 Horas</div>
						<span style="color: black; font-weight: bold;">SEM CORTESIA</span>
					</div>
					<div class="grid4column">
						<span>R$</span>
						<h5 class="price-rooms">75,99</h5><br />
						<div class="rooms-per-night">6 Horas</div>
						<span style="color: black; font-weight: bold;">SEM CORTESIA</span>
					</div>
					<div class="grid4column">
						<span>R$</span>
						<h5 class="price-rooms">89,99</h5><br />
						<div class="rooms-per-night">12 Horas</div>
						<span style="color: black; font-weight: bold;">COM CORTESIA</span>
					</div>
					<div class="sidebar-divider"></div>
				</div><!-- close .content-container-anchor -->
			</div>

			<div id="sidebar">
				<div class="content-container-anchor overlay-container-anchor">
					<h5>Atrativos</h5>
					<ul>
						<li>TV LED&rdquo;42</li>
						<li>Cama King size</li>
						<li>Ar Condicionado Split</li>
						<li>Garagem privativa automática</li>
						<li>Iluminação de Led's</li>
						<li>Canal erótico</li>
						<li>Hidro</li>
						<li>Ducha dupla</li>
						<li>Frigobar</li>
						<li>Som</li>
					</ul>
					<div class="sidebar-divider"></div>
				</div><!-- close .content-container-anchor -->
			</div>

			<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->
	<?php include('footer.php') ?>
</body>

</html>