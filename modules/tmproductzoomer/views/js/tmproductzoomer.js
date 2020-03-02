/**
 * 2002-2016 TemplateMonster
 *
 * TM Product Zoomer
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
 *  @author    TemplateMonster
 *  @copyright 2002-2016 TemplateMonster
 *  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */

$(document).ready(function() {
  if (typeof(TMPRODUCTZOOMER_LIVE_MODE) == 'unefined' || !TMPRODUCTZOOMER_LIVE_MODE) {
    return fasle;
  }

  var $i = $('.images-container'),
      $d = $(this);

  // update zoomed image when page is loaded
  applyProductElevateZoom($('li img.selected:visible', $i).attr('data-image-large-src'));
  $('li img.selected:visible', $i).addClass('fancy');

  // do if image changing is on hover
  if (TMPRODUCTZOOMER_IMAGE_CHANGE_EVENT && !TMPRODUCTZOOMER_IS_MOBILE) {;
    $d.on('mouseenter', '.images-container li img', function() {
      if (!$(this).hasClass('fancy')) {
        $('.images-container li img').removeClass('fancy');
        $(this).trigger('click').addClass('fancy');
        restartProductElevateZoom($(this).attr('data-image-large-src'));
      }
    });
  } else {
    // refresh zoomed image on item click
    $d.on('click', '.images-container li img', function() {
      $('.images-container li img').removeClass('fancy');
      $(this).addClass('fancy');
      restartProductElevateZoom($(this).attr('data-image-large-src'));
    });
  }

  if (TMPRODUCTZOOMER_FANCY_BOX) {
    $d.on('click', '.images-container li img.fancy, .images-container .product-cover img', function() {
        $('.images-container .layer').trigger('click');
    });
  }
  // refresh zoomed image on color change

  $d.on('ajaxComplete', function(e, xhr, options){
    if (options.data.indexOf('action=productrefresh')) {
      setTimeout(function () {
        restartProductElevateZoom($('li img.selected:visible').attr('data-image-large-src'));
        $('li img.selected:visible').addClass('fancy');
      }, 300);
    }
  });


});

// reload the image zoomer when event happened
function applyProductElevateZoom(image) {
  var bigimage = image;

  if (TMPRODUCTZOOMER_IS_MOBILE || (typeof(contentOnly) != 'undefined') && contentOnly) {
    TMPRODUCTZOOMER_ZOOM_TYPE = 'lens';
    TMPRODUCTZOOMER_ZOOM_SHOW_LENS = true;
  }

  if (TMPRODUCTZOOMER_ZOOM_TYPE == 'inner') {
    TMPRODUCTZOOMER_ZOOM_SCROLL = false;
    TMPRODUCTZOOMER_ZOOM_LEVEL = 1;
  }

  if (TMPRODUCTZOOMER_ZOOM_TYPE == 'lens') {
    TMPRODUCTZOOMER_ZOOM_BORDER_SIZE = TMPRODUCTZOOMER_ZOOM_LENS_BORDER_SIZE;
    TMPRODUCTZOOMER_ZOOM_BORDER_COLOR = TMPRODUCTZOOMER_ZOOM_LENS_BORDER_COLOR;
  }

  $('.images-container .product-cover img').ezPlus({
    attrBigImageSrc: bigimage,
    zoomType: TMPRODUCTZOOMER_ZOOM_TYPE,
    responsive: TMPRODUCTZOOMER_ZOOM_RESPONSIVE,
    cursor: TMPRODUCTZOOMER_ZOOM_CURSOR,
    easing: TMPRODUCTZOOMER_ZOOM_EASING,
    easingAmount: TMPRODUCTZOOMER_ZOOM_EASING_AMOUNT,
    scrollZoom: TMPRODUCTZOOMER_ZOOM_SCROLL,
    zoomLevel: TMPRODUCTZOOMER_ZOOM_LEVEL,
    minZoomLevel: TMPRODUCTZOOMER_ZOOM_MIN_LEVEL,
    maxZoomLevel: TMPRODUCTZOOMER_ZOOM_MAX_LEVEL,
    scrollZoomIncrement: TMPRODUCTZOOMER_ZOOM_SCROLL_INCREMENT,
    // window settings
    zoomWindowFadeIn: TMPRODUCTZOOMER_ZOOM_WINDOW_FADE_IN,
    zoomWindowFadeOut: TMPRODUCTZOOMER_ZOOM_WINDOW_FADE_OUT,
    zoomWindowWidth: TMPRODUCTZOOMER_ZOOM_WINDOW_WIDTH,
    zoomWindowHeight: TMPRODUCTZOOMER_ZOOM_WINDOW_HEIGHT,
    zoomWindowOffsetX: TMPRODUCTZOOMER_ZOOM_WINDOW_OFFSET_X,
    zoomWindowOffsetY: TMPRODUCTZOOMER_ZOOM_WINDOW_OFFSET_Y,
    zoomWindowPosition: TMPRODUCTZOOMER_ZOOM_WINDOW_POSITION,
    zoomWindowBgColour: TMPRODUCTZOOMER_ZOOM_WINDOW_BG_COLOUR,
    borderSize: TMPRODUCTZOOMER_ZOOM_BORDER_SIZE,
    borderColour: TMPRODUCTZOOMER_ZOOM_BORDER_COLOR,
    // end window settings
    // lens setings
    showLens: TMPRODUCTZOOMER_ZOOM_SHOW_LENS,
    lensSize: TMPRODUCTZOOMER_ZOOM_LENS_SIZE,
    lensFadeIn: TMPRODUCTZOOMER_ZOOM_FADE_IN,
    lensFadeOut: TMPRODUCTZOOMER_ZOOM_FADE_OUT,
    lensOpacity: TMPRODUCTZOOMER_ZOOM_LENS_OPACITY,
    lensShape: TMPRODUCTZOOMER_ZOOM_LENS_SHAPE,
    lensColour: TMPRODUCTZOOMER_ZOOM_LENS_COLOUR,
    lensBorderSize: TMPRODUCTZOOMER_ZOOM_LENS_BORDER_SIZE,
    lensBorderColour: TMPRODUCTZOOMER_ZOOM_LENS_BORDER_COLOR,
    containLensZoom: TMPRODUCTZOOMER_ZOOM_CONTAIN_LENS_ZOOM,
    //end lens settings
    // tint settins
    tint: TMPRODUCTZOOMER_ZOOM_TINT,
    tintColour: TMPRODUCTZOOMER_ZOOM_TINT_COLOUR,
    tintOpacity: TMPRODUCTZOOMER_ZOOM_TINT_OPACITY,
    zoomTintFadeIn: TMPRODUCTZOOMER_ZOOM_WINDOW_TINT_FADE_IN,
    zoomTintFadeOut: TMPRODUCTZOOMER_ZOOM_WINDOW_TINT_FADE_OUT,
    // responsive
    respond: [
      {
        range: '1-767',
        zoomType: 'lens'
      }]
  });
}

function restartProductElevateZoom(image) {
  applyProductElevateZoom(image);
}