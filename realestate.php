<?php  
	$title = 'Dave Perlman | Real Estate';
	$directory = "_img/realestate/";
	$images    = glob($directory . "*.jpg");
	require_once 'parts/header.php';
?>

<div class="image-container">
   <div class="close">X</div>
   <div class="previous"><</div>
   <div class="next">></div>
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
        // x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
 }
</script>

<script type="text/javascript">

(function($, undefined){
   "use strict";

   var currentImageIndex = 0;
   var maxImages = 0;
   var thumbs;


   function init(){
      allowClose();
      allowThumbnailClick();
      allowNextPrevious();
   }

   function allowClose(){
      $('.close').on('click', function(){
         $(this).parent().hide();
      });
   }

   function allowThumbnailClick(){
      thumbs = $('.responsive-image').each(function(index, elem){
         var src = $(this).attr('src').split('/');
         $(elem).attr({
            'data-index': index,
            'data-full': '<?php echo $directory;?>full/' + src[src.length - 1]
         }).on('click', function(){
            currentImageIndex = $(this).data('index');
            $('.image-container > img').attr('src', $(this).data('full')).parent().fadeIn();
         });
         maxImages++;
      });
   }

   function allowNextPrevious(){
      $('.image-container .previous, .image-container .next').on('click', function(){
         var direction = this.className;
         var largeImage = $('.image-container > img');
         var newSrc;

         if( /next/i.test(direction) ){
            if(thumbs.eq(currentImageIndex + 1).length){
               currentImageIndex++;
            }
         }else{
            if(currentImageIndex >= 1 && thumbs.eq(currentImageIndex - 1).length){
               currentImageIndex--;
            }
         }

         largeImage.attr('src', thumbs.eq(currentImageIndex).data('full'));
      });
   }

   $(init);
}(jQuery));

</script>

<?php 
	require_once 'parts/footer.php';
 ?>