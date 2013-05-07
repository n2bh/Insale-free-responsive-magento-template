jQuery.noConflict();

jQuery.setObservers = function() {

        
    jQuery( "#slider-range" ).slider({
        range: true,
        animate: true,
        step:1,
        min: categoryMinPrice,
        max: categoryMaxPrice,
        values: [ categoryMinPrice, categoryMaxPrice ]
    });
    
    jQuery.each(jQuery(".ajax-option-select"), function() {
        jQuery(this).on("click",function(){
            jQuery.ProcessEvent(this.value);
        })
    });  
    jQuery.each(jQuery(".ajax-option-checkbox"), function() {
        jQuery(this).on("click",function(){
            jQuery.ProcessEvent(this.value);
        })
    });  
    
    jQuery.each(jQuery(".ajax-option-link"), function() {
        jQuery(this).on("click",function(event){
            event.preventDefault();
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });   
    
    jQuery.each(jQuery("a.list"), function() {
        jQuery(this).on("click",function(event){
            event.preventDefault();
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    }); 
    
    jQuery.each(jQuery("a.grid"), function() {
        jQuery(this).on("click",function(event){
            event.preventDefault();
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });   
    
    jQuery.each(jQuery("div.sort-by select"), function(element) {
        jQuery(this).attr("onchange" , "");
        jQuery(this).on("change",function(event){
            var query = jQuery.getUrlQuery(this.value);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });   
    jQuery.each(jQuery("div.sort-by a"), function(element) {
        jQuery(this).on("click",function(event){
            event.preventDefault();     
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });  
    
    jQuery.each(jQuery("div.sort-by a"), function(element) {
        jQuery(this).on("click",function(event){
            event.preventDefault();     
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });   
    
    jQuery.each(jQuery("div.limiter select"), function(element) {
        jQuery(this).attr("onchange" , "");        
        jQuery(this).on("change",function(event){
            event.preventDefault();     
            var query = jQuery.getUrlQuery(this.value);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });  
    
    jQuery.each(jQuery("div.pages li a"), function(element) {
        jQuery(this).on("click",function(event){
            event.preventDefault();     
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });  
    
    jQuery.each(jQuery("a.btn-remove"), function(element) {
        jQuery(this).on("click",function(event){
            event.preventDefault();     
            var query = jQuery.getUrlQuery(this.href);
            if (query) {
                var url = categoryUrl + query;
            } else {
                var url = categoryUrl;
            }
            jQuery.ProcessEvent(url);
        })
    });  

    jQuery("#from-price-range").on("change",function(event){
        var fromValue = jQuery("#from-price-range").val();
        var toValue = jQuery("#to-price-range").val();
        if ( fromValue < categoryMinPrice ) {
            fromValue = categoryMinPrice;
            jQuery("#from-price-range").val(categoryMinPrice);
        }
        if ( fromValue > toValue ) {
            fromValue = toValue;
            jQuery("#from-price-range").val(fromValue);
        }
        jQuery( "#slider-range" ).slider( "option", "values", [fromValue,toValue] );

    })
    jQuery("#to-price-range").on("change",function(event){
        var fromValue = jQuery("#from-price-range").val();
        var toValue = jQuery("#to-price-range").val();
        if ( toValue > categoryMaxPrice ) {
            toValue = categoryMaxPrice;
            jQuery("#to-price-range").val(categoryMaxPrice);
        }
        if ( toValue < fromValue ) {
            toValue = fromValue;
            jQuery("#to-price-range").val(toValue);
        }
//        alert();
        jQuery( "#slider-range" ).slider( "option", "values", [fromValue,toValue] );
    })
    
}
jQuery.BindSlider = function() {
     jQuery( "#slider-range" ).bind( "slidechange", function(event, ui) {
        jQuery('#from-price-range').val(ui.values[0]); 
        jQuery('#to-price-range').val(ui.values[1]);           
        jQuery.ProcessEvent(jQuery.getPriceQuery(ui.values[0],ui.values[1]));
    });        
}



jQuery.getUrlQuery = function(url) {
    var Href = url;
    if ( Href.indexOf("?") > -1 ){
        var data = Href.substr(Href.indexOf("?")).toLowerCase();
        return data;
    }
    return false;
}

jQuery.getPriceQuery = function(from,to) {
        
        var strReturn = "";
        var price = 'price='+from+','+to;        
        var strHref = document.location.hash;
        
        if ( strHref.indexOf("#") > -1 ){
            var strQueryString = strHref.replace('#', '');
            var aQueryString = strQueryString.split("&");
            for ( var i = 0; i < aQueryString.length; i++ ){
                if (aQueryString[i].indexOf("price=") == -1 ){
                    strReturn= strReturn + aQueryString[i] + "&" ;
                }
            }
        }
        
        strReturn = "?" + strReturn + price;
        return strReturn;
    }



jQuery.ProcessEvent = function(url) {
////    alert('Check ProcessEvent URL param')
////    window.location = url;
//
//    var hash = "";
    
    if ( url.indexOf("catalogsearch/result") > -1 ){
        var hash = url.substring(url.indexOf('?'));
        hash = hash.replace('?', '');        
//        alert(hash);
        document.location.hash = hash;
    } else {
        hash = url.replace('?', '#');
        document.location = hash; 
//        alert(hash);
    }





    jQuery.ShowLoader();
//    alert(url);
    jQuery.getJSON(url, function(jsondata) {
        jQuery('.block-layered-nav').html(jsondata.filter);
        jQuery('.col-main').html(jsondata.categoryName + " " + jsondata.list);
        jQuery.setObservers();

        jQuery("#slider-range" ).slider({
            values: [ jsondata.minPrice, jsondata.maxPrice ]
        });
        jQuery('#from-price-range').val(jsondata.minPrice); 
        jQuery('#to-price-range').val(jsondata.maxPrice);          
        
        jQuery.BindSlider(); 
        jQuery.HideLoader();
    });

}




// ======================================= LOADERS ====
jQuery.ShowLoader = function() {
    jQuery(".col-main").append("<div class=\"products-list-loader-main\"><div></div></div>");
    jQuery(".block-layered-nav").append("<div class=\"products-list-loader-layered\"><div></div></div>");
    var layered = jQuery('div.block-layered-nav');
    var layered_left = jQuery('div.block-layered-nav').offset().left;
    var layered_top = jQuery('div.block-layered-nav').offset().top;
    var layered_h = jQuery('div.block-layered-nav').height();
    var layered_w = jQuery('div.block-layered-nav').width();
    
    jQuery(".products-list-loader-layered").css({
        'top' : layered_top, 
        'left' : layered_left,
        'width' : layered_w, 
        'height' : layered_h
    });    
    var maincol = jQuery('div.col-main');
    var layered_left = jQuery('div.col-main').offset().left;
    var layered_top = jQuery('div.col-main').offset().top;
    var layered_h = jQuery('div.col-main').height();
    var layered_w = jQuery('div.col-main').width();
    
    jQuery(".products-list-loader-main").css({
        'top' : layered_top, 
        'left' : layered_left,
        'width' : layered_w, 
        'height' : layered_h
    });    
}

jQuery.HideLoader = function() {
    jQuery(".col-main .products-list-loader-main").remove();
    jQuery(".block-layered-nav .products-list-loader-layered").remove();
}
