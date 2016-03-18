
(function($){

	$(document).ready(function(){

		$('a').click(function(){ // smoothscroll function
		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top
		    }, 500);
		    return false;
		});

		$('.active-trail.dropdown').toggleClass('open',true);
		$('.active-trail.dropdown').on('hide.bs.dropdown',function(e) {
		    e.preventDefault();
		    return false;
		});



	    $('.anchor').each(function () { //waypoints for next buttons
            new Waypoint({
                element: this,
                handler: function(direction) {

                    var previousWaypoint = this.previous();
                    var nextWaypoint = this.next();

                    if (this != this.group.last()){
                        document.getElementById('next').setAttribute('href','#' + nextWaypoint.element.id)
                        $('#next').show();
                    } else {
                        $('#next').hide();
                    };
                }
            })
        })

		    
		.popover({ //Popover, activated by clicking
		    selector: "[data-toggle='popover']",
		    container: "body",
		    html: true
		});
		$('#page-nav').popover({ //Popover data
		   'placement':'left',
		   'title':'navigate this page',
		   'content':'Click the down arrow to move to the next section. Click the up arrow to return to the top of the page. Click anywhere to dismiss.'
		})
		setTimeout(function() { // delays popover show
		  $('#page-nav').popover('show');
		}, 2000);
		//.popover('show'); // shows popover on load, need for each popover
		$('#block-views-exp-senior-tips-page').popover({ //popover data
		   'placement':'top',
		   'title':'How to filter tips',
		   'content':'Input your age or use the slider to select it, then click the tags you want to include. Then click the "apply filters" button to show tips relevant to you.'
		})
		setTimeout(function() { // delays popover show
		  $('#block-views-exp-senior-tips-page').popover('show');
		}, 2000);
		//.popover('show'); // shows popover on load, need for each popover
		$('html').on('click', function(e) { // sets popover behavior like modal click anywhere to close
		  if (typeof $(e.target).data('original-title') == 'original-title') {
		    $('[data-original-title]').popover('hide');
		  }
		  else $('[data-original-title]').popover('hide'); // i added this, supposed to close popover on click
		});
		$('#next').on('click', function() { // sets popover to close on different element click
		  $('[data-original-title]').popover('hide');
		});		

		$('body').scrollspy({
		    target: '.about-sidebar',
		    offset: 40
		});

		var navpos = $('#navbar').offset();//sticky nav
		console.log(navpos.top);
	    $(window).bind('scroll', function() {
	      if ($(window).scrollTop() > navpos.top) { 
	        $('#navbar').addClass('fixed');
	        $('body').css("margin-top","100px");
	       }
	       else {
	         $('#navbar').removeClass('fixed');
	         $('body').css("margin-top","0px");
	       }
	    });

		var sidenavpos 		= $('#aboutusnav').offset();//sticky sidebar nav that stops
		var postscriptpos 	= $('#postscript').offset();
		var sidenavheight	= $('#aboutusnav').height();

		console.log(sidenavpos.top + (-100));
		console.log(postscriptpos.top + (-sidenavheight));

	    $(window).bind('scroll', function() {
	      if ($(window).scrollTop() > (sidenavpos.top + (-100)) && $(window).scrollTop() < (postscriptpos.top + (-sidenavheight))) { 
	        $('#aboutusnav').addClass('fixed-side');
	       }
	       else {
	         $('#aboutusnav').removeClass('fixed-side');
	       }

	    });


	});


	$(document).keydown(function(e){ // uses arrow keys to click previous & next buttons
		// e.preventDefault(); // this stops all keyboard input
		e.stopPropagation();
	    if (e.keyCode == 38) { 
	    	$("a.previous").get(0).click();
	       return false;
	    }
	    else if (e.keyCode == 40) {
	    	$("a.next").get(0).click();
	    	return false;
	    }
	});

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll <= 1000) {
	        $("#page-up").addClass("hidden");
	    } else {
	        $("#page-up").removeClass("hidden");
	    }


	            /* Check the location of each desired element */
        $('.fademe').each( function(i){
            
	        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
	        var bottom_of_window = $(window).scrollTop() + $(window).height();
	        
	        /* If the object is completely visible in the window, fade it it */
	        if( bottom_of_window > bottom_of_object ){
	            
	            $(this).animate({'opacity':'1'},700);
	                
	        }
            
        }); 

	});

})(jQuery); //don't delete!

