<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php include('head.php') ?>
</head>

<body>
	<?php include('header.php') ?>
	<div id="page-title">
		<div class="flexslider" id="homepage-slider">
			<ul class="slides">
				<li><a href="suite-lumine.php">
						<div class="flex-caption">
							<div class="width-container">
								<div class="slider-container">
									<div class="caption-text">Suíte LUMINE</div>
								</div><!-- close .slider-container -->
							</div><!-- close .width-container -->
						</div><!-- close .flex-caption -->
						<img src="images/demo/slide1.jpg" alt="slider">
					</a>
				</li>
				<li><a href="suite-fashion.php">
						<div class="flex-caption">
							<div class="width-container">
								<div class="slider-container">
									<div class="caption-text">Suíte FASHION</div>
								</div><!-- close .slider-container -->
							</div><!-- close .width-container -->
						</div><!-- close .flex-caption -->
						<img src="images/demo/slide2.jpg" alt="slider">
					</a>
				</li>
				<li><a href="suite-paiol.php">
						<div class="flex-caption">
							<div class="width-container">
								<div class="slider-container">
									<div class="caption-text">Suíte PAIOL</div>
								</div><!-- close .slider-container -->
							</div><!-- close .width-container -->
						</div><!-- close .flex-caption -->
						<img src="images/demo/slide4.jpg" alt="slider">
					</a>
				</li>
			</ul>
		</div><!-- close .flexslider -->
	</div><!-- #page-title -->
	<div class="clearfix"></div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#homepage-slider').flexslider({
				animation: "fade", //String: Select your animation type, "fade" or "slide"
				slideshow: false, //Boolean: Animate slider automatically
				slideshowSpeed: 8500, //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationDuration: 250, //Integer: Set the speed of animations, in milliseconds
				directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
				controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				keyboardNav: true, //Boolean: Allow slider navigating via keyboard left/right keys
				mousewheel: false, //Boolean: Allow slider navigating via mousewheel
				prevText: "Previous", //String: Set the text for the "previous" directionNav item
				nextText: "Next", //String: Set the text for the "next" directionNav item
				pausePlay: false, //Boolean: Create pause/play dynamic element
				pauseText: 'Pause', //String: Set the text for the "pause" pausePlay item
				playText: 'Play', //String: Set the text for the "play" pausePlay item
				randomize: false, //Boolean: Randomize slide order
				slideToStart: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
				useCSS: true,
				animationLoop: true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
				pauseOnAction: true, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				pauseOnHover: false //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			});
		});
	</script>
	<div id="main">
		<div class="width-container"> <br />

			<div class="content-container-anchor">
				<h2 class="title-anchor">Pacotes Especiais</h2>
				<div class="grid3column">
					<div class="home-image"><a href="suite-fashion.php"><img src="images/demo/home-1.jpg" alt="home-image"></a></div>
					<h4><A href="suite-fashion.php">Suíte Fashion</a></h4>
					<a href="suite-fashion.php" class="button-anchor">Mais informações</a>
				</div>
				<div class="grid3column">
					<div class="home-image"><a href="suite-lumine.php"><img src="images/demo/home-2.jpg" alt="home-image"></a></div>
					<h4><A href="suite-lumine.php">Suíte Lumine</a></h4>
					<a href="suite-lumine.php" class="button-anchor">Mais informações</a>
				</div>
				<div class="grid3column lastcolumn">
					<div class="home-image"><a href="suite-exclusive.php"><img src="images/demo/home-3.jpg" alt="home-image"></a></div>
					<h4><A href="suite-exclusive.php">Suíte Exclusive</a></h4>
					<a href="suite-exclusive.php" class="button-anchor">Mais informações</a>
				</div>
				<div class="clearfix"></div>
			</div><!-- close .content-container-anchor -->
			<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->

	<?php include('footer.php') ?>

	<script src="js/jquery-ui.js"></script><!-- date-picker javascript -->
	<script>
		$(function() {
			$(".datepicker").datepicker();
		});
	</script><!-- date-picker javascript -->
</body>

</html>