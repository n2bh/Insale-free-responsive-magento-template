jQuery.noConflict();

jQuery(function($){
    
    $('.logo-small').hide();
    $('.logo-fixed').hide();
    $('.logo-big').show();
            
    function logoImageSwatch () {
        if ($(window).width() >= 1280 ) {
            $('.logo-small').hide();
            $('.logo-big').show();
        } else {
            $('.logo-small').show();
            $('.logo-big').hide();
        }
    }

    logoImageSwatch();
    $(window).resize(function() {
        if (!$('.logo-fixed').is(":visible")) {
           logoImageSwatch(); 
        }
        
    }); 
    
    
    var header = $('.website-header'),
    pos = header.offset();
    $(window).scroll(function(){
        if ($(window).width() >= 767 ) {
            if($(this).scrollTop() > pos.top+header.height() && header.hasClass('default')){
                header.fadeOut(10, function(){ 
                    $(this).removeClass('default').addClass('fixed').fadeIn(10);
                    $('.logo-fixed').show();
                    $('.logo-small').hide();
                    $('.logo-big').hide();

                });
            } else if($(this).scrollTop() <= 100 && header.hasClass('fixed')){
                header.fadeOut(10, function(){
                    $('.logo-fixed').hide();
                    logoImageSwatch();
                    $(this).removeClass('fixed').addClass('default').fadeIn(10);
                });
            }
        }
    });
    
        
    
        
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
    
    /* Product Items */    
    $(".products-grid .item").hover(
        function() {
            $(this).removeClass("shadow");
            $(this).children('.product-item').children('.promo-sale').hide();
            $(this).children('.product-item').children('.promo-new').hide();
            
//            $(this).children('.product-item-detailed').children('.promo-new')
//                .animate( { opacity: "0.4" }, { queue: false, duration: 1000 });
                
            $(this).children('.product-item-detailed').show();
            $(this).children('.product-item-detailed').children(".price-box")
                .animate( { right: "15px" }, { queue: false, duration: 1000 })
                .animate( { opacity: "1" }, { queue: false, duration: 1000 });
                
            $(this).children('.product-item-detailed').animate({boxShadow: '0 0 22px #ddd'});
            $(this).children('.product-item-detailed').children(".actions")
                .animate({height: '30px'}, { queue: false, duration: 300 });
                
        }, 
        function() {
            $(this).addClass("shadow");
            $(this).children('.product-item').children('.promo-sale').show();
            $(this).children('.product-item').children('.promo-new').show();
            $(this).children('.product-item-detailed').children(".actions")
             .css( "height", "0" );
            $(this).children('.product-item-detailed').children(".price-box")
            .css( "right", "-50px" )
            .css( "opacity", "0" );
            $(this).children('.product-item-detailed').animate({boxShadow: '0 0 0 #ddd'});
            $(this).children('.product-item-detailed').hide();            
        }
    );
        
    /* Header search */    
    $(".search-container #search").hover(
        function() {
            if ($(window).width() >= 1280 ) {
                $(this).animate({width: '200px'}, { queue: false, duration: 200 });
            }
        }, 
        function() {
            if ($(window).width() >= 1280 ) {
                $(this).animate({width: '155px'}, { queue: false, duration: 200 });          
            }            
            
        }
    );
        
    $(".sidebar-banner").hover(
        function() {
            $(this).animate({opacity: '0.9'}, { queue: false, duration: 500 });
        }, 
        function() {
            $(this).animate({opacity: '1'}, { queue: false, duration: 500 });          
        }
    );
        
    $(".category-image").hover(
        function() {
            $(this).animate({opacity: '0.8'}, { queue: false, duration: 500 });
        }, 
        function() {
            $(this).animate({opacity: '1'}, { queue: false, duration: 500 });          
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
        scrollbar: true,
        scrollbarDrag: true,
        scrollbarHide: false,
        scrollbarLocation: 'bottom',
        scrollbarHeight: '6px',
        scrollbarBorder: '1px solid #333',
        scrollbarMargin: '0 30px 16px 30px',
        scrollbarOpacity: '0.75'
        
    });    
    
    /* Prouct Zoom*/    
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
    if ($(window).width() >= 767 ) {    
        $().UItoTop({ easingType: 'easeOutQuart' });
    }
        
	
});