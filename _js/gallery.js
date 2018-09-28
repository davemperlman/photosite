
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
