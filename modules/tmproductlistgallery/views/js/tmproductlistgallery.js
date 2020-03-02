/*
* 2002-2016 TemplateMonster
*
* TM Product List Gallery
*
* NOTICE OF LICENSE
*
* This source file is subject to the General Public License (GPL 2.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/GPL-2.0
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade the module to newer
* versions in the future.
*
* @author     TemplateMonster
* @copyright  2002-2016 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*/

/* Rollover */
$(document).ready(function () {
  if (TM_PLG_TYPE == 'rollover') {
    images_view();
  }
});
function images_view()
{
  $(document).on('mouseenter', '.thumbnail-container', function()
  {
    if ($(this).find('.product-thumbnail').children('img.hover-image').length)
    {
      if (TM_PLG_ROLLOVER_ANIMATION == 'opacity') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().animate({opacity: 0});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().animate({opacity: 1});
      } else if (TM_PLG_ROLLOVER_ANIMATION == 'horizontal_slide') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().css('left', 0).animate({left: '-100%'});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().css({left: '100%', opacity: 1}).animate({left: 0});
      } else if (TM_PLG_ROLLOVER_ANIMATION == 'vertical_slide') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().css('top', 0).animate({top: '100%'});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().css({top: '-100%', opacity: 1}).animate({top: 0});
      }
    }
  });
  $(document).on('mouseleave', '.thumbnail-container', function()
  {
    if ($(this).find('.product-thumbnail').children('img.hover-image').length)
    {
      if (TM_PLG_ROLLOVER_ANIMATION == 'opacity') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().animate({opacity: 1});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().animate({opacity: 0});
      } else if (TM_PLG_ROLLOVER_ANIMATION == 'horizontal_slide') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().animate({left: '0'});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().animate({left: '100%'});
      } else if (TM_PLG_ROLLOVER_ANIMATION == 'vertical_slide') {
        $(this).find('.product-thumbnail').children('img:not(.hover-image)').stop().animate({top: '0'});
        $(this).find('.product-thumbnail').children('img.hover-image').stop().animate({top: '-100%'});
      }
    }
  });
}

/* Slideshow */
$(document).on("click", ".product-thumbnail em.next", function(e) {
  e.preventDefault();
  var slider = $(this).closest(".product-thumbnail"),
    lastSlide = $(slider).find("img").last().index(),
    activeSlide = $(slider).find("img.current").index(),
    leftSlide = true;
  if (activeSlide < 0) {index = activeSlide + 2;} else if (activeSlide < lastSlide) {index = activeSlide + 1;} else {index = 0;}
  if (activeSlide > 0) {indexActive = activeSlide;} else {indexActive = 0;}
  slideJs(index, slider, indexActive, leftSlide);
});
$(document).on("click", ".product-thumbnail em.prev", function(e) {
  e.preventDefault();
  var slider = $(this).closest(".product-thumbnail"),
    lastSlide = $(slider).find("img").last().index(),
    activeSlide = $(slider).find("img.current").index(),
    leftSlide = false;
  if (activeSlide > 0) {index = activeSlide - 1;} else {index = lastSlide;}
  if (activeSlide > 0) {indexActive = activeSlide;} else {indexActive = 0;}
  slideJs(index, slider, indexActive, leftSlide);
});
$(document).on("click", ".product-thumbnail .slideshow-pager em", function(e) {
  e.preventDefault();
  var slider = $(this).closest(".product-thumbnail"),
    index = $(this).index();
  fadeJS(index, slider);
});
function slideJs(index, slider, indexActive, leftSlide) { // slide right
  var durationLeft,
    durationRight;
  if (leftSlide) {durationLeft = '-100%';durationRight = '100%';} else {durationLeft = '100%'; durationRight = '-100%';}
  $(slider).addClass('active').find('img').removeClass('current').eq(indexActive).stop().animate({left: durationLeft, opacity: 0}, 400).parent().find('img').eq(index).addClass("current").css('left', durationRight).stop().animate({left: 0, opacity: 1}, 400);
  $(slider).find(".slideshow-pager em").removeClass("current").end().find(".slideshow-pager em").eq(index).addClass("current");
}
function fadeJS(index, slider) { // fade
  $(slider).addClass('active').find('img').css('left', '0').removeClass('current').animate({opacity: 0}, 250);
  $(slider).find(".slideshow-pager em").removeClass("current").end().find(".slideshow-pager em").eq(index).addClass("current");
  $(slider).find("img").eq(index).addClass("current").animate({opacity: 1}, 250);
}

/* Gallery */
$(document).on('click', '.gallery-thumb-list li span', function(e) {
  e.preventDefault();
  var imgTitle = $(this).attr('data-title'),
    imgAlt = $(this).attr('data-alt'),
    imgURL = $(this).attr('data-href'),
    imgContainer = $(this).parents('.thumbnail-container').find('.product-thumbnail > img');
  $(imgContainer).attr({
    title:imgTitle,
    alt:imgAlt,
    src:imgURL
  });
  $(this).parents('.thumbnail-container').find('li.active').removeClass('active');
  $(this).parent().addClass('active');
});
$(document).on("click", ".gallery-wrapper .gallery-controls span.prev", function(e) {
  e.preventDefault();
  var slider = $(this).closest(".gallery-wrapper"),
    visibleElements = TM_PLG_CAROUSEL_NB,
    lastSlide = $(slider).find("li").last().index();
  if ($(this).closest(".gallery-wrapper").find('li.current').length) {
    activeElement = $(slider).find("li.current").last().index()
  } else {
    activeElement = 0
  }
  if (activeElement > 0) {
    index = activeElement - 1;
  } else {
    index = lastSlide - visibleElements + 1;
  }
  galleryJS(index, slider);
});
$(document).on("click", ".gallery-wrapper .gallery-controls span.next", function(e) {
  e.preventDefault();
  var slider = $(this).closest(".gallery-wrapper"),
    visibleElements = TM_PLG_CAROUSEL_NB,
    lastSlide = $(slider).find("li").last().index();
  if ($(this).closest(".gallery-wrapper").find('li.current').length) {
    activeElement = $(slider).find("li.current").last().index()
  } else {
    activeElement = 0
  }
  if (activeElement + visibleElements > lastSlide) {
    index = 0;
  } else {
    index = activeElement + 1;
  }
  galleryJS(index, slider);
});
function galleryJS(index, slider) { // thumbnails carousel
  var step = $(slider).find("span:first-child").outerWidth();
  $(slider).find("li.current").removeClass('current');
  $(slider).find('.gallery-thumb-list').stop().animate({
    marginLeft: "-" + step * index
  }, 500).find('li').eq(index).addClass('current');
}

/* Swipe for gallery and slideshow */
$(document).on( "swiperight", ".product-thumbnail", function() {
  $(this).find('.prev').trigger('click');
});
$(document).on( "swipeleft", ".product-thumbnail", function() {
  $(this).find('.next').trigger('click');
});