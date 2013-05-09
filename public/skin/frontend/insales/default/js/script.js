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
    
    /* Product Items */    
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
        
    /* Recently Viewed */
    $('.iosSlider-recently').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        navNextSelector: $('.recently-viewed .scroll-left'),
        navPrevSelector: $('.recently-viewed .scroll-right')        
    });
    
    /* Recently Viewed */    
    $('.iosSlider-upsell').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        navNextSelector: $('.box-up-sell .scroll-left'),
        navPrevSelector: $('.box-up-sell .scroll-right')        
    });
    
    /* Related Products */    
    $('.iosSlider-related').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        navNextSelector: $('.box-related .scroll-left'),
        navPrevSelector: $('.box-related .scroll-right')        
    });
        
    

    /* Product Zoom */
//    $('#elevatezoom-product').elevateZoom();
        $("#elevatezoom-product").elevateZoom({
          zoomType : "inner",
          cursor: "crosshair"
        });
//        $("#elevatezoom-product").elevateZoom({
//          zoomType				: "lens",
//          lensShape : "round",
//          lensSize    : 200
//        });        

    /* Product Tabs */
    jQuery('#tabs .tab-item').hide();
    jQuery('#tabs .tab-item:first').show();
    jQuery('#tabs ul li:first').addClass('active');

    jQuery('#tabs ul li a').click(function(){
            jQuery('#tabs ul li').removeClass('active');
            jQuery(this).parent().addClass('active');
            var currentTab = jQuery(this).attr('href');
            jQuery('#tabs .tab-item').hide();
            jQuery(currentTab).show();
            return false;
            });
        
        
        
	
});