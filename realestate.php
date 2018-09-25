<?php  
	$title = 'Dave Perlman | Real Estate';
	$directory = "_img/realestate/";
	$images    = glob($directory . "*.jpg");
	require_once 'parts/header.php';
?>

<div class="gallery show">
	<div class="grid">
		<?php  foreach ($images as $image) : ?>
			<div class="cell">
				<img class="responsive-image" src="<?php echo $image; ?>" alt="">
			</div>
		<?php endforeach; ?>
	</div>
	<button class=".next" onclick="plusDivs(-1)">&#10094;</button>
	<button class=".prev" onclick="plusDivs(+1)">&#10095;</button>
</div>



<script>
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("responsive-image");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
</script>

<?php 
	require_once 'parts/footer.php';
 ?>