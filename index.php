<?php 
	$title = 'Dave Perlman | Photographer';
	require_once 'parts/header.php'; 
?>
	<div class="bg">
		
	</div>

	<div class="menu">
		<ul>
			<li><a href="#">Dark</a></li>
			<li><a href="#">RE</a></li>
			<li><a href="#">People</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	
	<div class="carousel">
		<?php $files = scandir('_img/dark'); ?>
		<?php foreach ($files as $key): ?>
			<img class="carousel-item" src="_img/dark/<?php echo $key ?>" alt="">
		<?php endforeach ?>
	</div>

<?php 
	require_once 'parts/footer.php';
?>