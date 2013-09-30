(function($) {
/*  Drupal.behaviors.campo_foundation1 = {
    attach: function(context) {
      $(".section-reports").click(function() {
        var $this = $(this);
        //$this.hide();
        window.location='.section-accordion';
      });
    }
 }*/

$(document).foundation();
$(document).ready(function(){

if (document.documentElement.clientWidth >= 768) {
	
  // ---------- Backstretch ----------
/*  $("#vision").backstretch("/sites/default/files/video_ulla_1200x650_0.jpg");*/
//  $("#ambassadors").backstretch("/sites/all/themes/campo_foundation/img/content/citat-frit_1200x600_1.jpg");

		}

	});



$('#accordion').foundation('section', {
	deep_linking: false, 
	callback: function (){

/*
		var instance = $("#fp-accordion").data("backstretch");
		instance.resize();
*/	
	}
});


$(document).ready(function(){	


	// ---------- Flexslider ----------

	

	$('#topSlider').flexslider({
		controlNav: false,
		prevText: "Forrige",
		nextText: "Næste"
	});	

	

	if (document.documentElement.clientWidth >= 768) {

		$('#featured').flexslider({
			controlNav: false,
			prevText: "Forrige",
			nextText: "Næste",
			/*before: function(){
				$('#flexslider-2').flexslider("next")
                        }*/
                        asNavFor: '#featured-text'


		});	

		$('#featured-text').flexslider({
                        sync:"#featured",
			touch: false,
			controlNav: false,
			directionNav: false
		});


	}


	// Frontpage 
	$('.accordion-slider').flexslider({
		animation: "fade",
		controlNav: false,
		slideshow: false,
		prevText: "Forrige",
		nextText: "Næste"
	});		  
	


	$("#menuIcon").on("click", function(e){
		$(this).toggleClass("active");
		$("#navTop").slideToggle();
		$("#subNavigation").slideToggle();
		e.preventDefault();
	});	


	$("#searchIcon").on("click", function(e){
		$(this).toggleClass("active");
		$("#searchBox").slideToggle();
		e.preventDefault();
	});	


	/*

	Search drop down

	*/


	$('#searchInputBox').click(function(e) {
	    e.stopPropagation();
	    $("#searchDropDown").fadeIn();
	});


	$('html').click(function() {
		$("#searchDropDown").fadeOut();
	});

	$('#searchDropDown').click(function(event){
		event.stopPropagation();
	});



	/*

	Accordion

	*/

	$('.ccAccordion').on("click", ".head", function(e){
		e.preventDefault();
		//$(this).closest('li').toggleClass('active').find('.content').not(':animated').slideToggle();
                var $content = $(this).closest('li');                                
                if($content.find('.content').is(":visible")){
                     $content.toggleClass('active').find('.content').slideUp("slow");
                } else {
                     $content.siblings().removeClass('active').find('.content').slideUp("slow");
                     $content.toggleClass('active').find('.content').slideToggle("slow");
               }          
	});


		$('.accordionSlider').flexslider({
			animation: "fade",
			controlNav: true,
			slideshow: false,
			prevText: "Forrige",
			nextText: "Næste"
		});	
	


		$('#pictures-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 210,
			itemMargin: 5,
		/*	minItems: getGridSize(), // use function to pull in initial value
			maxItems: getGridSize(), // use function to pull in initial value
			*/
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




	// ---------- More / less button ----------

/*	$("#showAmbassadors-morebutton").on("click", function(e){


		var $window = $(window), flexslider;

		function getGridSize() {
			return (window.innerWidth < 600) ? 2 :
				   (window.innerWidth < 900) ? 3 : 4;
		}

		// check grid size on resize event

		$(window).on('resize', function() {

			var gridSize = getGridSize();

		/*	flexslider.vars.minItems = gridSize;
			flexslider.vars.maxItems = gridSize;
			
		});


		$('#flexslider-7').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 210,
			itemMargin: 5,
			minItems: getGridSize(), 
			maxItems: getGridSize(), 
			asNavFor: '#flexslider-6'
		});

		$('#flexslider-6').flexslider({
			animation: "fade",
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#flexslider-7"
		});



	    $("#hiddenAmbassadors").slideDown(
	    	function(){
				var el = "#hiddenAmbassadors";
				var elWrapped = $(el);
				scrollToDiv(elWrapped,0);
	    	}	
	    );

	    $(this).hide();
	    $("#showAmbassadors-lessbutton").show(); 

	    e.preventDefault();
	});*/	


	$("#showAmbassadors-lessbutton").on("click", function(e){
	    $("#hiddenAmbassadors").slideUp();
	    $(this).hide();
	    $("#showAmbassadors-morebutton").show();    
	    e.preventDefault();
	});	
	


	

	// ---------- SVG fallback ----------

	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}


	// ---------- Scroll to ----------

	$('.shortcuts a').on('click',function(e){
		var el = $(this).attr('href');
		var elWrapped = $(el);
		scrollToDiv(elWrapped,0);
		e.preventDefault();
	});
	

	// ---------- Reports  ----------
	
	$('ul#filter a').on('click',function(e) {
		$(this).css('outline','none');
		$('ul#filter .current').removeClass('current');
		$(this).parent().addClass('current');
		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('.reportsList li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			$('.reportsList li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('normal').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}
		
		e.preventDefault();
	});
	
	
	


    $(".reportsList li").on('click','.reportListContent',function(e){

		var listItem = $(this).parent("li"); 
		var listContent = $(this).siblings().html();
		//var reportViewer = listItem.closest(".reportViewer");	
		
		// When click on current active listitem
		if (listItem.hasClass('active')) {
			$("#report-viewer").slideUp();
			//reportViewer.slideUp();
			listItem.removeClass("active")
			return false;
    	}
		
		// When click on active listitem
		if ($("#report-viewer").hasClass('active')) {
			
			$("#report-viewer").slideUp(500, function() {
				$(".reportsList li").removeClass("active");
    			$("#report-viewer-content div").replaceWith("<div class='row'>" + listContent + "</div>");
				listItem.addClass("active");
				$("#report-viewer").slideDown(500, function() {

			//		var el = "#report-viewer";
			//		var elWrapped = $(el);
			//		scrollToDiv(elWrapped,0);

				});			
  			});
			
			return false;	
			
    	}	
				
		
		$(".reportsList li").removeClass("active");
		
		listItem.addClass("active");
		
		$("#report-viewer").addClass("active");	
		$("#report-viewer-content div").replaceWith("<div class='row'>" + listContent + "</div>");
		$("#report-viewer").slideDown();
	
		var offset = $("#report-viewer").offset();
		var offsetTop = offset.top;
		var totalScroll = offsetTop -20;
		
		//$('body,html').animate({
		//		scrollTop: totalScroll
		//}, 500);
				
		e.preventDefault();
                //return false;
		
	});
	
	$("#close-reportContent").on('click',function(){
		$("#report-viewer").slideUp();
		$(".reportsList li").removeClass("active");
		return false;
	});
	

});


// ---------- Functions ----------


	// ---------- Scroll to ----------

	function scrollToDiv(element,navheight){
		var offset = element.offset();
		var offsetTop = offset.top;
		var totalScroll = offsetTop-navheight;
		
		$('body,html').animate({
				scrollTop: totalScroll
		}, 500);
	}	

})(jQuery);
