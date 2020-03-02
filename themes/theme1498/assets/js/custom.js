/*

 * Custom code goes here.

 * A template should always ship with an empty custom.js

 */

if ($('body#product #main .product-accessories > .products, body#index #footer .featured-products > .products').length) {

    setNbPrItems();

    customCarousel = $('body#product #main .product-accessories > .products, body#index #footer .featured-products > .products').bxSlider({

        responsive: true,

        useCSS: false,

        minSlides: carousel_nb_new2,

        maxSlides: carousel_nb_new2,

        slideWidth: 500,

        slideMargin: carousel_margin2,

        infiniteLoop: true,

        hideControlOnEnd: false,

        randomStart: false,

        moveSlides: 1,

        pager: carousel_pager2,

        autoHover: true,

        auto: true,

        speed: 500,

        pause: 3000,

        controls: carousel_controls2,

        autoControls: false,

        startText: '',

        stopText: ''

    });

    var tm_prd_doit;

    $(window).resize(function () {

        clearTimeout(tm_prd_doit);

        tm_prd_doit = setTimeout(function () {

            resizedwtm_prd();

        }, 201);

    });

}

function resizedwtm_prd() {

        setNbPrItems();

        customCarousel.reloadSlider({

            responsive: true,

            useCSS: false,

            minSlides: carousel_nb_new2,

            maxSlides: carousel_nb_new2,

            slideWidth: 500,

            slideMargin: carousel_margin2,

            infiniteLoop: true,

            hideControlOnEnd: false,

            randomStart: false,

            moveSlides: moveSlides,

            pager: carousel_pager2,

            autoHover: true,

            auto: true,

            speed: 500,

            pause: 3000,

            controls: carousel_controls2,

            autoControls: false,

            startText: '',

            stopText: ''

        });

}

function setNbPrItems() {

    if ($('body#product #main .product-accessories, body#index #footer .featured-products').width() < 320) {

        carousel_nb_new2 = 1;

        moveSlides = 1;

        carousel_pager2 = 0;

        carousel_controls2 = 1;

        carousel_margin2 = 10;

    }

    if ($('body#product #main .product-accessories, body#index #footer .featured-products').width() >= 320) {

        carousel_nb_new2 = 2;

        moveSlides = 1;

        carousel_pager2 = 0;

        carousel_controls2 = 1;

        carousel_margin2 = 10;

    }

    if ($('body#product #main .product-accessories, body#index #footer .featured-products').width() >= 560) {

        carousel_nb_new2 = 3;

        moveSlides = 1;

        carousel_pager2 = 0;

        carousel_controls2 = 1;

        carousel_margin2 = 10;

    }

    if ($('body#product #main .product-accessories, body#index #footer .featured-products').width() > 840) {

        carousel_nb_new2 = 4;

        moveSlides = 4;

        carousel_pager2 = 1;

        carousel_controls2 = 0;

        carousel_margin2 = 30;

    }

}





$('body#cms #testimonials, #daydeal-products .daydeal-products').bxSlider({

    responsive: true,

    useCSS: false,

    pager: true,

    controls: false,

    minSlides: 1,

    maxSlides: 1,

    moveSlides: 1,

    slideWidth: 1500,

    slideMargin: 0

});



$(document).ready(function(){

    // hide #back-top first

    $("#toTop").css('visibility', 'visible');

    $("#toTop").hide();



    // fade in #back-top

    $(function () {

        $(window).scroll(function () {

            if ($(this).scrollTop() > 100) {

                $('#toTop').fadeIn();

            } else {

                $('#toTop').fadeOut();

            }

        });



        // scroll body to 0px on click

        $('#toTop').click(function () {

            $('body,html').animate({

                scrollTop: 0

            }, 800);

            return false;

        });

    });

});



$(document).ready(function(){

    $('#testimonials').bxSlider({

        responsive:true,

        useCSS: false,

        minSlides: 1,

        maxSlides: 1,

        slideWidth: 1200,

        slideMargin: 0,

        moveSlides: 1,

        pager: false,

        autoHover: false,

        speed: 500,

        pause: 3000,

        controls: true,

        autoControls: true,

        startText:'',

        stopText:'',

        prevText:'',

        nextText:''

    });

});



function init() {

    var idx = 0;

    [].slice.call(document.querySelectorAll('.tmmp_row_3_3 .tmmp-frontend-banner:not(.slider-item) a.tilter')).forEach(function(el, pos) {

        idx = pos%2 === 0 ? idx+1 : idx;

        new TiltFx(el, options555);

    });

}



var options555 = {

    movement: {

        // The main wrapper.

        imgWrapper : {

            translation : {x: 30, y: 30, z: 30},

            rotation : {x: 0, y: -10, z: 0},

            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}

        },

        // The caption/text element.

        caption : {

            translation : {x: 10, y: 10, z: 10},

            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}

        }

    }

};



init();


$(function(){
    $('input[type="text"], input[type="email"]').prev('label').css({
        'position':'absolute',
        'margin-top':'0.8rem',
        'margin-left' : '0.5rem',
        'color': '#b1b1b1',
       });

    $('input[type="text"], input[type="email"]').parent().css({
        'margin-bottom': '1rem'
    })

    $($('input[type="text"], input[type="email"]')).each(function(i, e){
        if (e.value !== '') {
            $(`label[for="${$(this).prop('name')}"]`).hide();
         }
    })

    $('body').on('blur', 'input[type="text"], input[type="email"]', function(){
        if (this.value !== '') {
            $(`label[for="${$(this).prop('name')}"]`).hide();
         }else {
            $(`label[for="${$(this).prop('name')}"]`).show();
         }
    } )

    $('body').on('focus', 'input[type="text"], input[type="email"]', function(){
        $(`label[for="${$(this).prop('name')}"]`).hide();
    })

    $('body').on('blur', '#div_leave_message textarea', function(){
        if (this.value !== '') {
            $(`#div_leave_message p`).hide();
         }else {
            $(`#div_leave_message p`).show();
         }
    } )

    $('body').on('focus', '#div_leave_message textarea', function(){
        $(`#div_leave_message p`).hide();
    })

    $('body').on('click', '#div_leave_message p', function(){ 
        $('#div_leave_message textarea').focus()
    })
     

    

});