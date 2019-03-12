<?php 
	$title = 'Dave Perlman | Photographer';
	require_once 'parts/header.php'; 
?>
	<div class="contact-form">
		<form action="">
			<input type="text">
			<input type="text">
		</form>
		<button class="close"></button>
	</div>
	<div class="bg">
		<!-- <div class="arch" data-info='body-set-arch'>
		</div>
		<div class="dark" data-info='body-set-dark'>
		</div> -->
		<div class="banner">
			
		</div>
	</div>
	

	<div class="menu">
		<ul>
			<li><a class="nav active" data-target="body-set-dark" data-carousel='dark' href="#">
				<i class="fas fa-moon"></i>
			</a></li>
			<li><a class="nav" data-target="body-set-arch" data-carousel='arch' href="#">
				<i class="fas fa-building"></i>
			</a></li>
			<li><a class="nav" data-target="body-set-people" data-carousel='people' href="#">
				<i class="fas fa-users"></i>
			</a></li>
			<li><a class="nav contact" href="#">
				<i class="fas fa-envelope"></i>
			</a></li>
		</ul>
	</div>
	
	<!-- <?php require_once 'parts/carousel.php'; ?> -->
	<div class="carousel">

	<script>
		
		function getCarousel(name) {
				if (name) {
					name = name
				}
		
		$.get( 'parts/carousel.php', {dir: name} ).done(function(data){
			$('.carousel').append(data).hide().fadeIn();
		});
		}

		getCarousel('dark');
		
	</script>

	</div>


	<!-- JS -->

	<script>

		$('.nav').click( function(event) {
			if ($(this).hasClass('active')) {
				return;
			}

			if ($(this).hasClass('contact')) {
				$('.contact-form').fadeIn();
				return;
			}
			event.preventDefault();
			current = $('.active').data('target');
			// //$(current).fadeOut(500);
			$('a').removeClass('active');
			$(this).addClass('active');
			target = $(this).data('target');	
			// //$(target).fadeIn(500);
			// scheme = ($(target).data('info'));
			$('body').removeClass();
			$('body').addClass(target);
			var name = $(this).data('carousel');
			$('.carousel').empty();
			getCarousel(name);
			
		});

		$('.close').click(function() {
			$(this).parent('.contact-form').fadeOut();
		});
		
	</script>

<?php 
	require_once 'parts/footer.php';
?>