jQuery.noConflict();

jQuery(function($){
    

//    $(".dropdown-content").hover(
//      function () {
////        $(this).removeClass("hover");
//        alert();
//      }
//    );    
//    $('.form-currency').hover(function() {
//        $(this).toggle('hover');
//    });
//
//
        
        
        
//    //  recently-viewed;
//    jQuery('.iosSlider-recently').iosSlider({
//        responsiveSlideWidth: true,
//    //                snapToChildren: true,
//        desktopClickDrag: true,
//    //                infiniteSlider: true,                
//        desktopClickDrag: true,
//        navNextSelector: '.recently-next',
//        navPrevSelector: '.recently-prev'
//    });
        
    // Drop-dowms
    var config = {
        over: function(){
            if ($(this).hasClass('.dropdown-container')){
                $(this).parent().addClass('over');
            } else {
                $(this).addClass('over');
            }
            $('.dropdown-content', this).animate({opacity:1, height:'toggle'}, 200);
        },
        timeout: 0, // number = milliseconds delay before onMouseOut
        out: function(){
            var that = this;
            $('.dropdown-content', this).animate({opacity:0, height:'toggle'}, 200, function(){
                if ($(this).hasClass('.dropdown-container')){
                    $(that).parent().removeClass('over');
                } else {
                    $(that).removeClass('over');
                }
            });
        }
    };
    $('.dropdown-container').hoverIntent( config );
    
    
    // Scroll 
//    var header = $('.website-header'),
//    pos = header.offset();
//    $(window).scroll(function(){
//        
//        if($(this).scrollTop() > pos.top+header.height() && header.hasClass('default')){
//            header.fadeOut('fast', function(){
//                $(this).removeClass('default').addClass('fixed').fadeIn('fast');
//            });
//        } else if($(this).scrollTop() <= pos.top && header.hasClass('fixed')){
//            header.fadeOut('fast', function(){
//                $(this).removeClass('fixed').addClass('default').fadeIn('fast');
//            });
//        }
//    });
    
    // Product Items
    $(".products-grid .item").hover(
        function() {
            $(this).removeClass("shadow");
            $(this).children('.product-item-detailed').show();
        }, 
        function() {
            $(this).addClass("shadow");
            $(this).children('.product-item-detailed').hide();
            
        }
    );
        
	
});