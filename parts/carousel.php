
		<?php $dir = $_GET['dir']; ?>
		<?php $files = scandir("../_img/$dir"); ?>
		<?php foreach ($files as $key => $value): ?>
			<img class="carousel-item" src="<?php echo "_img/" . $dir . '/' . $value?>" alt="">
		<?php endforeach ?>
	