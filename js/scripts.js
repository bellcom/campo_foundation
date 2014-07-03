jQuery.noConflict();
(function($) {
Drupal.behaviors.campo_foundation = {
    attach: function(context) {

	$('#featured').flexslider({
			controlNav: false,
			prevText: "Forrige",
			nextText: "Næste",
			before: function(){
				$('#featured-text').flexslider("next")
                        }
	});   
        var $window = $(window), flexslider;
      var qty = $('.view-thumbnail-carousel-of-ambassadors-list ul li').length;
      if (qty < 2) {
        $('.view-thumbnail-carousel-of-ambassadors-list ul li').css('width','25%');
      }
	
       $(document).ready(function(){
           var gridSize = getGridSize();

           // replace '-' to space in the sideMenu. 
            var str = "<h3>"+ $(".sideMenuHolder h2").text().replace('_',' ')+"</h3>";
                str = str.replace('_',' ');
                str = str.replace('_',' ');
                str = str.replace('_',' ');
           // var str2 = "<h3>"+ $(".sideMenuHolder.blueGradient h2").text()+"</h3>"

            $(".sideMenuHolder h2").replaceWith(str);
           // $(".sideMenuHolder.blueGradient h2").replaceWith("<h3>"+ $(".sideMenuHolder.blueGradient h2").text()+"</h3>");
          // open pdf file in a new window.
           $(".views-field-field-file .file a").attr({target: "_blank"});
       });
        function getGridSize() {
		return (window.innerWidth < 600) ? 2 :
	         (window.innerWidth < 900) ? 3 : 4;
	}

	// check grid size on resize event

	$(window).on('resize', function() {
		var gridSize = getGridSize();

/*		flexslider.vars.minItems = gridSize;

		flexslider.vars.maxItems = gridSize;
*/			
		});
      var qty = $('.view-thumbnail-carousel-of-ambassadors-list ul li').length;
      if (qty < 2) {
        $('.view-thumbnail-carousel-of-ambassadors-list ul li').css('width','25%');
      }
     function scrollToDiv(element,navheight){
                var offset = element.offset();
               // var offset = document.getElementById(element).offsetTop;
                var offsetTop = offset.top;
                var totalScroll = offsetTop-navheight;

                $('body,html').animate({
                                scrollTop: totalScroll
                }, 500);
        }


/*        $('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 210,
			itemMargin: 5,
			minItems: getGridSize(), 
			maxItems: getGridSize(),
        		asNavFor: '#ambassadors-slider'
		});
         $('#ambassadors-slider').flexslider({
			animation: "fade",
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});


  */


	$('#pictures-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 210,
			itemMargin: 5,
			minItems: getGridSize(), // use function to pull in initial value
			maxItems: getGridSize(), // use function to pull in initial value
			
			asNavFor: '#pictures'
		});



	$('#pictures').flexslider({
			animation: "fade",
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#pictures-carousel"
		});


        
       $("#showAmbassadors-morebutton").on("click", function(e){

       
           $("#hiddenAmbassadors").slideDown(
             function(){

                $('#carousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        itemWidth: 210,
                        itemMargin: 5,
                        minItems: getGridSize(),
                        maxItems: getGridSize(),
                       asNavFor: '#ambassadors-slider'
                });
                $('#ambassadors-slider').flexslider({
                        animation: "fade",
                        controlNav: false,
                        directionNav: false,
                        animationLoop: false,
                        slideshow: false,
                        sync: "#carousel"
                });
                   var el = "#hiddenAmbassadors";
                   var elWrapped = $(el);
                   scrollToDiv(elWrapped,0);
                }
            );

            $(this).hide();
            $("#showAmbassadors-lessbutton").show();

            e.preventDefault();

      });
   }
  } 
})(jQuery);

