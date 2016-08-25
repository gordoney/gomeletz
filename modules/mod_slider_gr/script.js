jQuery(document).ready(function () {
    function modSliderGrHandler () {
        jQuery('.mod-slider-gr').each(function () {
            jQuery(this).find('.js-slick-slider').slick({  
                dots: false,
                arrows: false,
                speed: 500,
                slidesToShow: 1,
                fade: true,
                draggable: false,
            }); 
        });

        jQuery('.js-dot').click(function () {
            jQuery(this).closest('.mod-slider-gr').find('.js-slick-slider').slick('slickGoTo', jQuery(this).index());
            jQuery('.js-dot').removeClass('active');
            jQuery(this).addClass('active');
        });
    }

    modSliderGrHandler ();
});
