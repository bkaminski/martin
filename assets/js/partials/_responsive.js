//jQuery no-conflict mode
(function( $ ) {

    $( document ).ready(function() {
    
        // RESPONSIVE CONTROLS
        var $window = $(window);
        function checkWidth() {
    
            if ($window.width() < 976) {
                $('.carousel-caption').find('p').removeClass('h3 pb-5');
                
            };
            if ($window.width() >= 976) {
                $('.carousel-caption').find('p').addClass('h3 pb-5');
                
            }
        }
        
        checkWidth();
        $(window).resize(checkWidth);
        
        // END RESPONSIVE CONTROL
        });	
    
    
    })( jQuery );