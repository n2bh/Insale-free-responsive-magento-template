jQuery.noConflict();

//function showProductImage($element) {
//    jQuery('.product-big-image').hide();
//    jQuery('.product-image-'+$element).show();
//}
//    

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
    
    
    // HEADER SCROLL
    var header = $('.website-header'),
    pos = header.offset();
    $(window).scroll(function(){
        
        if($(this).scrollTop() > pos.top+header.height() && header.hasClass('default')){
            header.fadeOut('fast', function(){
                $(this).removeClass('default').addClass('fixed').fadeIn('fast');
            });
        } else if($(this).scrollTop() <= pos.top && header.hasClass('fixed')){
            header.fadeOut('fast', function(){
                $(this).removeClass('fixed').addClass('default').fadeIn('fast');
            });
        }
    });
    
    
    
    
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
        responsiveSlides: true,
        keyboardControls: true,
//        autoSlide: true,
        navNextSelector: $('.recently-viewed .scroll-left'),
        navPrevSelector: $('.recently-viewed .scroll-right')        
    });
    
    /* Recently Viewed */    
    $('.iosSlider-upsell').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        responsiveSlides: true,
        keyboardControls: true,
//        autoSlide: true,
        navNextSelector: $('.box-up-sell .scroll-left'),
        navPrevSelector: $('.box-up-sell .scroll-right')        
    });
    
    /* Related Products */    
    $('.iosSlider-related').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        responsiveSlides: true,
        keyboardControls: true,
//        autoSlide: true,
        navNextSelector: $('.box-related .scroll-left'),
        navPrevSelector: $('.box-related .scroll-right')        
    });
    
    /* Crosssell Products */    
    $('.iosSlider-crosssell').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        responsiveSlides: true,
        keyboardControls: true,
//        autoSlide: true,
        navNextSelector: $('.crosssell .scroll-left'),
        navPrevSelector: $('.crosssell .scroll-right')        
    });
    
    /* New Products */    
    $('.iosSlider-newproducts').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        responsiveSlides: true,
        keyboardControls: true,
        navNextSelector: $('.widget-new-products .scroll-left'),
        navPrevSelector: $('.widget-new-products .scroll-right')        
    });    
    /* Reviews */   
    $('.iosSlider-reviews').iosSlider({
        responsiveSlideWidth: true,
        desktopClickDrag: true,
        responsiveSlides: true,
        autoSlide: true,
        snapToChildren: true,
        scrollbar: true,
        scrollbarDrag: true,
        scrollbarHide: false,
        scrollbarLocation: 'bottom',
        scrollbarHeight: '6px',
        scrollbarBorder: '1px solid #333',
        scrollbarMargin: '0 30px 16px 30px',
        scrollbarOpacity: '0.75'
        
    });    
    
    
        
    

    /* Product Zoom */
//    $('#elevatezoom-product').elevateZoom();
//        $(".elevatezoom-product").elevateZoom({
//          zoomType : "inner",
//          cursor: "crosshair"
//        });

//    $("#product-zoom").elevateZoom({gallery:'gallery_01', cursor: 'crosshair', zoomType : "inner", galleryActiveClass: 'active'}); 
        
//        $("#elevatezoom-product").elevateZoom({
//          zoomType				: "lens",
//          lensShape : "round",
//          lensSize    : 200
//        });    

    $("#zoom-image").elevateZoom({gallery:'image-gallery', cursor: 'pointer',zoomType	: "inner", galleryActiveClass: "active"}); 

    $("#zoom-image").bind("click", function(e) {  
      var ez =   $('#zoom-image').data('elevateZoom');
      ez.closeAll(); //NEW: This function force hides the lens, tint and window	
            $.fancybox(ez.getGalleryList());
      return false;
    }); 


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
            
            
    /* QTY */
    $("#qty-increase").bind("click", function(e) {
        var qty = $('#qty').val(); 
        if (!isNaN( qty )){
            qty++;
            $('#qty').val(qty);
        }         
        return false;
    });
    $("#qty-decrease").bind("click", function(e) {
        var qty = $('#qty').val(); 
        if( qty == 2) {
        $('.quantity_box_button_down').css({
                'visibility' : 'hidden'
        });
        }
        if( !isNaN( qty ) && qty > 1 ){
            qty--;
            $('#qty').val(qty);
        }         
        return false;
    });

            
    /* To Top */
    $().UItoTop({ easingType: 'easeOutQuart' });
        
	
});