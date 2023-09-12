//jQuery no-conflict mode
(function( $ ) {

    $( document ).ready(function() {
    
        // RESPONSIVE CONTROLS
        var $window = $(window);
        function checkWidth() {
    
            if ($window.width() < 976) {
                $('.carousel-caption').find('p').removeClass('h3 pb-5');
                $('.promo--header').find('h3').addClass('pb-3 mt-5');
                $('.promo-content').removeClass('pt-5');
                
            };
            if ($window.width() >= 976) {
                $('.carousel-caption').find('p').addClass('h3 pb-5');
                $('.promo--header').find('h3').removeClass('pb-3 mt-5');
                $('.promo-content').addClass('pt-5');
                
            }
        }
        
        checkWidth();
        $(window).resize(checkWidth);
        
        // END RESPONSIVE CONTROL
        });	
    
    
    })( jQuery );