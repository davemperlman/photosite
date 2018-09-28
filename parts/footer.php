	<footer>
		<ul class="social">
			<li>
				<a href="">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</footer>
</body>
<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */

images = $('.responsive-image');
images.hide();

function imageFade() {
	var $images = $('.responsive-image');
	var time = 500;

	$images.each(function(){
		var currentImage = $(this);
		setTimeout(function( ){
			currentImage.fadeIn();
		}, time);
		time += 75;
	});
}

	imageFade();

function openNav() {
	$('#menu').hide();
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
   	$('.social').css("right", "-5rem");
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
	$('#menu').show();
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    $('.social').css("right", "2rem");
}

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
         $('.gallery').fadeIn();
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
            $('.gallery').fadeOut();
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

</html>