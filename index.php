<?php 
	$title = 'Dave Perlman | Photographer';
	require_once 'parts/header.php'; 
?>
	<div class="bg">
		
	</div>

	<div class="bg bg-arch hidden">
		
	</div>

	<div class="bg bg-people hidden">
		
	</div>

	<div class="bg contact hidden">
		
	</div>

	<div class="menu">
		<ul>
			<li><a data-target="_css/arch.css" href="#">
				<i class="fas fa-moon"></i>
			</a></li>
			<li><a data-target=".bg-arch" href="#">
				<i class="fas fa-building"></i>
			</a></li>
			<li><a data-target=".bg-people" href="#">
				<i class="fas fa-users"></i>
			</a></li>
			<li><a href="#">
				<i class="fas fa-envelope"></i>
			</a></li>
		</ul>
	</div>
	
	<div class="carousel">
		<?php $files = scandir('_img/dark'); ?>
		<?php foreach ($files as $key): ?>
			<img class="carousel-item" src="_img/dark/<?php echo $key ?>" alt="">
		<?php endforeach ?>
	</div>


	<!-- JS -->

	<script>
		$('a').click( function(event) {
			event.preventDefault();
			$('a').removeClass('active');
			$(this).addClass('active');
			target = $(this).data('target');
			$('#colorpicker').attr('href', target);
		});
	</script>

<?php 
	require_once 'parts/footer.php';
?>