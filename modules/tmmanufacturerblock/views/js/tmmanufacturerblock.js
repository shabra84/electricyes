/*
 * 2002-2016 TemplateMonster
 *
 * TM Manufacturers block
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
 * @author     TemplateMonster (Alexander Grosul)
 * @copyright  2002-2016 TemplateMonster
 * @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */
function initTMManufacturerCarousel(id_carousel,
                                    m_caroucel_nb,
                                    m_caroucel_slide_width,
                                    m_caroucel_slide_margin,
                                    m_caroucel_item_scroll,
                                    m_caroucel_auto,
                                    m_caroucel_speed,
                                    m_caroucel_auto_pause,
                                    m_caroucel_random,
                                    m_caroucel_loop,
                                    m_caroucel_hide_controll,
                                    m_caroucel_pager,
                                    m_caroucel_control,
                                    m_caroucel_auto_control,
                                    m_caroucel_auto_hover) {
  if ($('#' + id_carousel + ' > ul').length && !!$.prototype.bxSlider) {
    tmslider = $('#' + id_carousel + ' > ul').bxSlider({
      responsive       : true,
      useCSS           : false,
      minSlides        : setNbMItems(id_carousel, m_caroucel_nb),
      maxSlides        : setNbMItems(id_carousel, m_caroucel_nb),
      slideWidth       : m_caroucel_slide_width,
      slideMargin      : m_caroucel_slide_margin,
      infiniteLoop     : m_caroucel_loop,
      hideControlOnEnd : m_caroucel_hide_controll,
      randomStart      : m_caroucel_random,
      moveSlides       : m_caroucel_item_scroll,
      pager            : m_caroucel_pager,
      autoHover        : m_caroucel_auto_hover,
      auto             : m_caroucel_auto,
      speed            : m_caroucel_speed,
      pause            : m_caroucel_auto_pause,
      controls         : m_caroucel_control,
      autoControls     : m_caroucel_auto_control,
      startText        : '',
      stopText         : '',
    });
    var m_doit;
    $(window).resize(function() {
      clearTimeout(m_doit);
      carouselTimeout = setTimeout(function() {
        resizedwm(
          tmslider,
          id_carousel,
          m_caroucel_nb,
          m_caroucel_slide_width,
          m_caroucel_slide_margin,
          m_caroucel_item_scroll,
          m_caroucel_auto,
          m_caroucel_speed,
          m_caroucel_auto_pause,
          m_caroucel_random,
          m_caroucel_loop,
          m_caroucel_hide_controll,
          m_caroucel_pager,
          m_caroucel_control,
          m_caroucel_auto_control,
          m_caroucel_auto_hover
        );
      }, 201);
    });
  }
}
function resizedwm(tmslider,
                   id_carousel,
                   m_caroucel_nb,
                   m_caroucel_slide_width,
                   m_caroucel_slide_margin,
                   m_caroucel_item_scroll,
                   m_caroucel_auto,
                   m_caroucel_speed,
                   m_caroucel_auto_pause,
                   m_caroucel_random,
                   m_caroucel_loop,
                   m_caroucel_hide_controll,
                   m_caroucel_pager,
                   m_caroucel_control,
                   m_caroucel_auto_control,
                   m_caroucel_auto_hover) {
  tmslider.reloadSlider({
    responsive       : true,
    useCSS           : false,
    minSlides        : setNbMItems(id_carousel, m_caroucel_nb),
    maxSlides        : setNbMItems(id_carousel, m_caroucel_nb),
    slideWidth       : m_caroucel_slide_width,
    slideMargin      : m_caroucel_slide_margin,
    infiniteLoop     : m_caroucel_loop,
    hideControlOnEnd : m_caroucel_hide_controll,
    randomStart      : m_caroucel_random,
    moveSlides       : m_caroucel_item_scroll,
    pager            : m_caroucel_pager,
    autoHover        : m_caroucel_auto_hover,
    auto             : m_caroucel_auto,
    speed            : m_caroucel_speed,
    pause            : m_caroucel_auto_pause,
    controls         : m_caroucel_control,
    autoControls     : m_caroucel_auto_control,
    startText        : '',
    stopText         : '',
  });
}
function setNbMItems(id_carousel, m_caroucel_nb) {
  if ($('#' + id_carousel).width() < 400) {
    var m_caroucel_nb_new = 4;
  }
  if ($('#' + id_carousel).width() >= 400) {
    var m_caroucel_nb_new = 6;
  }
  if ($('#' + id_carousel).width() >= 560) {
    var m_caroucel_nb_new = 8;
  }
  if ($('#' + id_carousel).width() > 840) {
    var m_caroucel_nb_new = m_caroucel_nb;
  }
  return m_caroucel_nb_new;
}
