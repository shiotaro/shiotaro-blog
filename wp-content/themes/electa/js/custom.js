/**
 * Electa Theme Custom Functionality
 *
 */
( function( $ ) {
    
    jQuery( document ).ready( function() {
        
		// Search Show / Hide
        $(".search-btn").toggle(function(){
            $(".search-button").addClass('search-on');
            $(".search-block").show().animate( { left: '+=5' }, 200 );
            $(".search-block .search-field").focus();
        },function(){
            $(".search-block").animate( { left: '-=5' }, 200 ).hide();
            $(".search-button").removeClass('search-on');
        });
		
    });
    
    $(window).resize(function () {
        
        
    }).resize();
    
    $(window).load(function() {
        
    });
    
} )( jQuery );