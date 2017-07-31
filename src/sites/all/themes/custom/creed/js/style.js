
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

    addButtonClicks = function(){
        $('#btn-list').click(
            function() {
                $('.panel-pane').removeClass('pane-grid');
                $('.panel-pane').addClass('pane-list');
            } 
        );

        $('#btn-grid').click(
            function(){
                //alert("sndkjasbc");
                $('.panel-pane').removeClass('pane-list');
                $('.panel-pane').addClass('pane-grid');
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
        $('.panel-pane').addClass('pane-list');      
        addImage();
        addButtonClicks();
    });

    
}) (jQuery);
