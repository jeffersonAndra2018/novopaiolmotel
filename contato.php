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
					"images/demo/page-title-4.jpg"
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
					<div class="row m0">
						<h3>Nos encontre no Google Maps</h3>
						<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8290236258526!2d-46.47872568502174!3d-23.574583384676277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66569f33a56f%3A0xdd1d4fe805641130!2sNovo+Paiol+Motel!5e0!3m2!1spt-BR!2sbr!4v1564879040990!5m2!1spt-BR!2sbr" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

					</div>
					<p><strong>Endereço:</strong>
						<em><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8290236258526!2d-46.47872568502174!3d-23.574583384676277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66569f33a56f%3A0xdd1d4fe805641130!2sNovo+Paiol+Motel!5e0!3m2!1spt-BR!2sbr!4v1564879040990!5m2!1spt-BR!2sbr" target="_blank">Av. Afonso de Sampaio e
								souza, 1884</a></em> &nbsp;&nbsp;
						<strong>Bairro: </strong>Itaquera, São Paulo - SP</p>
					<div id="contact-wrapper">
						<script type="text/javascript">
							jQuery(document).ready(function() {
								jQuery("#contactform").validate();
							});
						</script>
						<form method="post" action="https://api.whatsapp.com/send?phone=5511963512670&text=Novo%20Paiol%20Motel" id="contactform" target="_blank">
							<div><input type="submit" style="background: #25d366; color: white" value="Mensagem pelo WhatsApp" name="submit" class="submit" /></div>
						</form>

					</div><!-- close #contact-wrapper -->

				</div><!-- close .content-container-anchor -->

			</div><!-- close #content-container -->


			<div id="sidebar">
				<div class="content-container-anchor overlay-container-anchor">
					<h5>Contatos</h5>
					<ul>
						<li><strong>Telefone:</strong> 11 2217-2512 <br>
						</li>
						<li>
							<strong>WhatsApp:</strong> 11 96351-2670
						</li>
					</ul>
					<div class="sidebar-divider"></div>


					<h5>E-mails</h5>
					<ul>
						<li>
							<a href="mailto:novopaiol@bol.com.br">novopaiol@bol.com.br</a>
						</li>
						<li>
							<strong>Endereço:</strong>
							<em><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8290236258526!2d-46.47872568502174!3d-23.574583384676277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66569f33a56f%3A0xdd1d4fe805641130!2sNovo+Paiol+Motel!5e0!3m2!1spt-BR!2sbr!4v1564879040990!5m2!1spt-BR!2sbr" target="_blank">Av. Afonso de Sampaio e
									souza, 1884</a></em> &nbsp;&nbsp;
							<strong>Bairro: </strong>Itaquera, São Paulo - SP
						</li>
					</ul>

					<div class="sidebar-divider"></div>


					<script type="text/javascript">
						//Flickr Widget in Sidebar			
						jQuery(document).ready(function($) {
							// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
							$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&amp;lang=en-us&amp;format=json&amp;jsoncallback=?", displayImages); //YOUR IDGETTR GOES HERE
							function displayImages(data) {
								// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
								var iStart = Math.floor(Math.random() * (0));

								// Reset our counter to 0
								var iCount = 1;

								// Start putting together the HTML string
								var htmlString = "<ul>";

								// Now start cycling through our array of Flickr photo details
								$.each(data.items, function(i, item) {

									// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
									if (iCount > iStart && iCount < (iStart + 7)) {

										// I only want the ickle square thumbnails
										var sourceSquare = (item.media.m).replace("_m.html", "_s.html");

										// Here's where we piece together the HTML
										htmlString += '<li><a href="' + item.link + '" target="_blank">';
										htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
										htmlString += '</a></li>';
									}
									// Increase our counter by 1
									iCount++;
								});

								// Pop our HTML in the #images DIV	
								$('.flickr-widget-1').html(htmlString + "</ul>");

								// Close down the JSON function call
							}

							// The end of our jQuery function	
						});
					</script>
					<div id="flickr-footer" class="flickr-widget-1"></div>
					<div class="sidebar-divider"></div>


				</div><!-- close .content-container-anchor -->
			</div>



			<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->
	<?php include('footer.php') ?>
</body>

</html>