
// jQuery(document).ready(function(){
// 	$(".row-1 col-1 img").hover(

// 	function (event) {
// 		var a = $('.row-1 col-1 img').attr('src');
// 		$('#slideshow').src = a;
// 	}
// 	);
// });

(function ($) {
    addImage= function() {
        $('.slide_show .row-1 img').click(
        		function(){
        			var a = $(this).attr('src');
        			$('#slideshow').attr('src', a)
        		}
        	);  
    }

}) (jQuery);

(function ($) {
    $(document).ready(function() {
        $('.slide_show .view-content .col-1 img').load(
        		function(){
        			var a = $(this).attr('src');
        			//console.log(a)
        			$('#slideshow').attr('src', a)
        		}
        	);  
        addImage();
    }); 
}) (jQuery);
