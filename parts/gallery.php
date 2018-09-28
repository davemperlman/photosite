<div class="image-container">
   <div class="close">
   	<i class="fas fa-times"></i>
   </div>
   <div class="previous">
   	<i class="fas fa-chevron-left"></i>
   </div>
   <div class="next">
   	<i class="fas fa-chevron-right"></i>
   </div>
   <img src="">
</div>

<div class="gallery">
	<div class="grid">
		<?php  foreach ($images as $image) : ?>
			<div class="cell">
				<img class="responsive-image" src="<?php echo $image; ?>" alt="">
			</div>
		<?php endforeach; ?>
	</div>
</div>