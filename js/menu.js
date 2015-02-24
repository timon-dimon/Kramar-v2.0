( function( $ ) {
$( document ).ready(function() {
$('.menu-top-menu-container').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
    var activeElement = $('.menu-top-menu-container>ul>li:first');

    $('.menu-top-menu-container>ul>li').each(function() {
        if ($(this).hasClass('active')) {
            activeElement = $(this);
        }
    });


	var posLeft = activeElement.position().left;
	var elementWidth = activeElement.width();
	posLeft = posLeft + elementWidth/2 -6;
	if (activeElement.hasClass('has-sub')) {
		posLeft -= 6;
	}

	$('.menu-top-menu-container #pIndicator').css('left', posLeft);
	var element, leftPos, indicator = $('.menu-top-menu-container pIndicator');
	
	$(".menu-top-menu-container>ul>li").hover(function() {
        element = $(this);
        var w = element.width();
        if ($(this).hasClass('has-sub'))
        {
        	leftPos = element.position().left + w/2 - 12;
        }
        else {
        	leftPos = element.position().left + w/2 - 6;
        }

        $('.menu-top-menu-container #pIndicator').css('left', leftPos);
    }
    , function() {
    	$('.menu-top-menu-container #pIndicator').css('left', posLeft);
    });

	$('.menu-top-menu-container>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
	$( "#menu-button" ).click(function(){
    		if ($(this).parent().hasClass('open')) {
    			$(this).parent().removeClass('open');
    		}
    		else {
    			$(this).parent().addClass('open');
    		}
    	});
});
} )( jQuery );
