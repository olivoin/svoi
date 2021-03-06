// global

jQuery(document).ready(function($) {
    
    // hello slider
    
    $('.hello-stat-slider').bxSlider({
        mode: 'vertical',
        auto: true,
        width: 455,
        height: 140
    });
    
    $('.tcon.tcon-menu--xcross').click(function() {
        $('.header-nav-menu').toggleClass('active');
    });
    
    $('#header a, .katalog-beer a, #footer a').click(function() {
        $('#page-preloader, .spinner').fadeIn();
    });
    
    $(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});
    
    // page menu
    
    
    
    // select
    
    $('select').selectOrDie();
    
    // burger
    
    $('.header-mobile-burger').click(function(){
        $('.header-mobile-nav').toggleClass('show');
    });
    
    $('.header-mobile-search').click(function(){
        $('.header-bottom-search').toggleClass('show');
    });
    
    transformicons.add('.tcon')
    
});
