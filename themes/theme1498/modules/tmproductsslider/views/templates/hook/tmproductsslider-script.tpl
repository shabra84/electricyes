{*
* 2002-2017 TemplateMonster
*
* TM Products Slider
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
* @copyright  2002-2017 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if $settings.slider_type == standard}
  <script type="text/javascript">
    $(document).ready(function () {
      $('.tm-products-slider').each(function () {
        var tm_products_slider = new Swiper($(this), {
          grabCursor: true,
          {if ($settings.standard_extended_settings && $settings.standard_slider_autoplay) || !$settings.standard_extended_settings}autoplay: {$settings.standard_slider_interval|escape:'htmlall':'UTF-8'}, {/if}
          {if ($settings.standard_extended_settings && $settings.standard_slider_loop) || !$settings.standard_extended_settings}
          loop: true,
          {/if}
          {if ($settings.standard_extended_settings && $settings.standard_slider_loop && $settings.standard_slider_thumbnails) || !$settings.standard_extended_settings}
          loopedSlides: 5,
          {elseif $settings.standard_extended_settings && !$settings.standard_slider_loop && $settings.standard_slider_thumbnails}
          initialSlide: 1,
          {/if}
          {if ($settings.standard_extended_settings && $settings.standard_slider_navigation) || !$settings.standard_extended_settings}
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          {/if}
          {if ($settings.standard_extended_settings && $settings.standard_slider_pagination) || !$settings.standard_extended_settings}
          pagination: '.swiper-pagination',
          paginationClickable: true,
          {/if}
          speed: {$settings.standard_slider_duration|escape:'htmlall':'UTF-8'}
        });
        {if ($settings.standard_extended_settings && $settings.standard_slider_autoplay) || !$settings.standard_extended_settings}
        $(this).parent().hover(function () {
          tm_products_slider.stopAutoplay();
        }, function () {
          tm_products_slider.startAutoplay();
        });
        {/if}
        {if ($settings.standard_extended_settings && $settings.standard_images_gallery) || !$settings.standard_extended_settings}
        $(this).find('.tmpr-inner-slider').each(function () {
          var tm_products_slider_inner = new Swiper($(this), {
            loop: true,
            loopedSlides: 8,
            observer: true,
            nested: true,
            onSlideChangeStart: function (swiper) {
              var activeSlide = swiper.activeIndex;
              var activeParentSlide = swiper.container.parents('.swiper-slide').attr('data-swiper-slide-index');
              swiper.container.parents('.swiper-wrapper').children('.swiper-slide[data-swiper-slide-index="' + activeParentSlide + '"]').find('.tmpr-inner-slider').attr('data-init-slide', activeSlide);
            },
            onObserverUpdate: function (swiper) {
              var goToSlide = swiper.container.attr('data-init-slide');
              swiper.slideTo(goToSlide, 500, false);
            }
          });
          var galleryThumbsInner = new Swiper($(this).next('.swiper-thumbnails'), {
            slidesPerView: 4,
            spaceBetween: 10,
            touchRatio: 0.2,
            loop: true,
            loopedSlides: 8,
            slideToClickedSlide: true,
            nested: true
          });
          tm_products_slider_inner.params.control = galleryThumbsInner;
          galleryThumbsInner.params.control = tm_products_slider_inner;
        });
        {/if}
        {if ($settings.standard_extended_settings && $settings.standard_slider_thumbnails) || !$settings.standard_extended_settings}
        var galleryThumbs = new Swiper($(this).next('.swiper-thumbnails'), {
          slideToClickedSlide: true,
          grabCursor: true,
          touchRatio: 0.2,
          slidesPerView: 3,
          spaceBetween: 30,
          {if ($settings.standard_extended_settings && $settings.standard_slider_loop && $settings.standard_slider_thumbnails) || !$settings.standard_extended_settings}
          loop: true,
          loopedSlides: 5
          {elseif $settings.standard_extended_settings && !$settings.standard_slider_loop && $settings.standard_slider_thumbnails}
          initialSlide: 1,
          centeredSlides: true
          {/if}
        });
        tm_products_slider.params.control = galleryThumbs;
        galleryThumbs.params.control = tm_products_slider;
        {/if}
      });
    });
  </script>
{elseif $settings.slider_type == list}
  <script type="text/javascript">
    $(document).ready(function () {
      $('.tm-products-slider').each(function () {
        var tm_products_slider = new Swiper($(this), {
          grabCursor: true,
          effect: 'fade',
          {if ($settings.list_extended_settings && $settings.list_slider_autoplay) || !$settings.list_extended_settings}
          autoplay: {$settings.list_slider_interval|escape:'htmlall':'UTF-8'},
          {/if}
          {if ($settings.list_extended_settings && $settings.list_slider_loop) || !$settings.list_extended_settings}
          loop: true,
          {/if}
          {if ($settings.list_extended_settings && $settings.list_slider_loop && $settings.list_slider_thumbnails) || !$settings.list_extended_settings}
          loopedSlides: 10,
          {elseif $settings.list_extended_settings && !$settings.list_slider_loop && $settings.list_slider_thumbnails}
          initialSlide: 1,
          {/if}
          {if ($settings.list_extended_settings && $settings.list_slider_navigation) || !$settings.list_extended_settings}
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          {/if}
          {if ($settings.list_extended_settings && $settings.list_slider_pagination) || !$settings.list_extended_settings}
          pagination: '.swiper-pagination',
          paginationClickable: true,
          {/if}
          speed: {$settings.list_slider_duration|escape:'htmlall':'UTF-8'}
        });
        {if ($settings.list_extended_settings && $settings.list_slider_autoplay) || !$settings.list_extended_settings}
        $(this).parent().hover(function () {
          tm_products_slider.stopAutoplay();
        }, function () {
          tm_products_slider.startAutoplay();
        });
        {/if}
        {if $settings.list_extended_settings && $settings.list_images_gallery}
        $(this).find('.tmpr-inner-slider').each(function () {
          var tm_products_slider_inner = new Swiper($(this), {
            slideToClickedSlide: true,
            paginationClickable: true,
            loop: true,
            loopedSlides: 8,
            observer: true,
            nested: true,
            speed: 0,
            onSlideChangeStart: function (swiper) {
              var activeSlide = swiper.activeIndex;
              var activeParentSlide = swiper.container.parents('.swiper-slide').attr('data-swiper-slide-index');
              swiper.container.parents('.swiper-wrapper').children('.swiper-slide[data-swiper-slide-index="' + activeParentSlide + '"]').find('.tmpr-inner-slider').attr('data-init-slide', activeSlide);
            },
            onObserverUpdate: function (swiper) {
              var goToSlide = swiper.container.attr('data-init-slide');
              swiper.slideTo(goToSlide, 500, false);
            }
          });
          var galleryThumbsInner = new Swiper($(this).next('.swiper-thumbnails-inner').find('.swiper-thumbnails'), {
            slidesPerView: 2,
            spaceBetween: 0,
            touchRatio: 0.2,
            loop: true,
            loopedSlides: 8,
            slideToClickedSlide: true,
            nested: true,
            speed: 0,
            onClick: function () {
              galleryThumbsInner.slideNext();
            }
          });
          tm_products_slider_inner.params.control = galleryThumbsInner;
          galleryThumbsInner.params.control = tm_products_slider_inner;
        });
        {/if}
        {if ($settings.list_extended_settings && $settings.list_slider_thumbnails) || !$settings.list_extended_settings}
        var galleryThumbs = new Swiper($(this).next('.swiper-thumbnails').find('.swiper-container'), {
          slideToClickedSlide: true,
          grabCursor: true,
          mousewheelControl: true,
          direction: 'vertical',
          spaceBetween: 10,
          touchRatio: 0.2,
          slidesPerView: 3,
          breakpoints: {
            479: {
              mousewheelControl: false,
              spaceBetween: 5,
              slidesPerView: 2,
              direction: 'horizontal'
            },
            767: {
              mousewheelControl: false,
              spaceBetween: 5,
              slidesPerView: 3,
              direction: 'horizontal'
            }
          },
          onAfterResize: function (swiper) {
            if (swiper.currentBreakpoint <= 767 && swiper.container.hasClass('swiper-container-vertical')) {
              swiper.wrapper.removeAttr('style').parent().removeClass('swiper-container-vertical').addClass('swiper-container-horizontal').find('.swiper-slide').removeAttr('style');
              swiper.slideTo(0, 0);
              swiper.update();
            } else if (swiper.currentBreakpoint == 'max' && swiper.container.hasClass('swiper-container-horizontal')) {
              swiper.wrapper.removeAttr('style').parent().removeClass('swiper-container-horizontal').addClass('swiper-container-vertical').find('.swiper-slide').removeAttr('style');
              swiper.slideTo(0, 0);
              swiper.update();
            }
          },
          {if ($settings.list_extended_settings && $settings.list_slider_loop && $settings.list_slider_thumbnails) || !$settings.list_extended_settings}
          loop: true,
          loopedSlides: 10
          {elseif $settings.list_extended_settings && !$settings.list_slider_loop && $settings.list_slider_thumbnails}
          initialSlide: 1,
          centeredSlides: true
          {/if}
        });
        tm_products_slider.params.control = galleryThumbs;
        galleryThumbs.params.control = tm_products_slider;
        {/if}
      });
    });
  </script>
{elseif $settings.slider_type == grid}
  <script type="text/javascript">
    $(document).ready(function () {
      $('.tm-products-slider').each(function () {
        var tm_products_slider = new Swiper($(this), {
          grabCursor: true,
          {if ($settings.grid_extended_settings && $settings.grid_slider_autoplay) || !$settings.grid_extended_settings}
          autoplay: {$settings.grid_slider_interval|escape:'htmlall':'UTF-8'},
          {/if}
          {if ($settings.grid_extended_settings && $settings.grid_slider_loop && !$settings.grid_slider_thumbnails)}
          loop: true,
          {/if}
          {if ($settings.grid_extended_settings && $settings.grid_slider_navigation) || !$settings.grid_extended_settings}
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          {/if}
          {if ($settings.grid_extended_settings && $settings.grid_slider_pagination) || !$settings.grid_extended_settings}
          pagination: '.swiper-pagination',
          paginationClickable: true,
          {/if}
          speed: {$settings.grid_slider_duration|escape:'htmlall':'UTF-8'},
          {if ($settings.grid_extended_settings && $settings.grid_slider_thumbnails) || !$settings.grid_extended_settings}
          onSlideChangeEnd: function () {
            if (galleryThumbs) {
              galleryThumbs.container.find('.swiper-slide').removeClass('grid-swiper-active').eq(tm_products_slider.activeIndex).addClass('grid-swiper-active');
              galleryThumbs.slideTo(tm_products_slider.activeIndex);
            }
          }
          {/if}
        });
        {if ($settings.grid_extended_settings && $settings.grid_slider_autoplay) || !$settings.grid_extended_settings}
        $(this).parent().hover(function () {
          tm_products_slider.stopAutoplay();
        }, function () {
          tm_products_slider.startAutoplay();
        });
        {/if}
        {if $settings.grid_extended_settings && $settings.grid_images_gallery}
        $(this).find('.tmpr-inner-slider').each(function () {
          var tm_products_slider_inner = new Swiper($(this), {
            loop: true,
            loopedSlides: 8,
            observer: true,
            nested: true,
            onSlideChangeStart: function (swiper) {
              var activeSlide = swiper.activeIndex;
              var activeParentSlide = swiper.container.parents('.swiper-slide').attr('data-swiper-slide-index');
              swiper.container.parents('.swiper-wrapper').children('.swiper-slide[data-swiper-slide-index="' + activeParentSlide + '"]').find('.tmpr-inner-slider').attr('data-init-slide', activeSlide);
            },
            onObserverUpdate: function (swiper) {
              var goToSlide = swiper.container.attr('data-init-slide');
              swiper.slideTo(goToSlide, 500, false);
            }
          });
          var galleryThumbsInner = new Swiper($(this).next('.swiper-thumbnails'), {
            slidesPerView: 4,
            spaceBetween: 10,
            touchRatio: 0.2,
            loop: true,
            loopedSlides: 8,
            slideToClickedSlide: true,
            nested: true
          });
          tm_products_slider_inner.params.control = galleryThumbsInner;
          galleryThumbsInner.params.control = tm_products_slider_inner;
        });
        {/if}
        {if ($settings.grid_extended_settings && $settings.grid_slider_thumbnails) || !$settings.grid_extended_settings}
        var galleryThumbs = new Swiper($(this).next('.swiper-thumbnails'), {
          slidesPerView: 3,
          direction: 'vertical',
          spaceBetween: 0,
          slidesPerColumn: 3,
          slidesPerColumnFill: 'column',
          slidesPerGroup: 3,
          onClick: function () {
            tm_products_slider.slideTo(galleryThumbs.clickedIndex);
          }
        });
        {/if}
      });
    });
  </script>
{elseif $settings.slider_type == fullwidth}
  <script type="text/javascript">
    $(document).ready(function () {
      $('.tm-products-slider').each(function () {
        var tm_products_slider = new Swiper($(this), {
          grabCursor: true,
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_autoplay) || !$settings.fullwidth_extended_settings}autoplay: {$settings.fullwidth_slider_interval|escape:'htmlall':'UTF-8'}, {/if}
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_loop) || !$settings.fullwidth_extended_settings}
          loop: true,
          {/if}
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_loop && $settings.fullwidth_slider_thumbnails) || !$settings.fullwidth_extended_settings}
          loopedSlides: 5,
          {elseif $settings.fullwidth_extended_settings && !$settings.fullwidth_slider_loop && $settings.fullwidth_slider_thumbnails}
          initialSlide: 1,
          {/if}
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_navigation) || !$settings.fullwidth_extended_settings}
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          {/if}
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_pagination) || !$settings.fullwidth_extended_settings}
          pagination: '.swiper-pagination',
          paginationClickable: true,
          {/if}
          speed: {$settings.fullwidth_slider_duration|escape:'htmlall':'UTF-8'}
        });
        {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_autoplay) || !$settings.fullwidth_extended_settings}
        $(this).parent().hover(function () {
          tm_products_slider.stopAutoplay();
        }, function () {
          tm_products_slider.startAutoplay();
        });
        {/if}
        {if ($settings.fullwidth_extended_settings && $settings.fullwidth_images_gallery) || !$settings.fullwidth_extended_settings}
        $(this).find('.tmpr-inner-slider').each(function () {
          var tm_products_slider_inner = new Swiper($(this), {
            loop: true,
            loopedSlides: 8,
            observer: true,
            nested: true,
            onSlideChangeStart: function (swiper) {
              var activeSlide = swiper.activeIndex;
              var activeParentSlide = swiper.container.parents('.swiper-slide').attr('data-swiper-slide-index');
              swiper.container.parents('.swiper-wrapper').children('.swiper-slide[data-swiper-slide-index="' + activeParentSlide + '"]').find('.tmpr-inner-slider').attr('data-init-slide', activeSlide);
            },
            onObserverUpdate: function (swiper) {
              var goToSlide = swiper.container.attr('data-init-slide');
              swiper.slideTo(goToSlide, 500, false);
            }
          });
          var galleryThumbsInner = new Swiper($(this).next('.swiper-thumbnails'), {
            slidesPerView: 4,
            spaceBetween: 10,
            touchRatio: 0.2,
            loop: true,
            loopedSlides: 8,
            slideToClickedSlide: true,
            nested: true
          });
          tm_products_slider_inner.params.control = galleryThumbsInner;
          galleryThumbsInner.params.control = tm_products_slider_inner;
        });
        {/if}
        {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_thumbnails) || !$settings.fullwidth_extended_settings}
        var galleryThumbs = new Swiper($(this).next('.swiper-thumbnails'), {
          slideToClickedSlide: true,
          grabCursor: true,
          touchRatio: 0.2,
          slidesPerView: 5,
          spaceBetween: 30,
          {if ($settings.fullwidth_extended_settings && $settings.fullwidth_slider_loop && $settings.fullwidth_slider_thumbnails) || !$settings.fullwidth_extended_settings}
          loop: true,
          loopedSlides: 5
          {elseif $settings.fullwidth_extended_settings && !$settings.fullwidth_slider_loop && $settings.fullwidth_slider_thumbnails}
          initialSlide: 1,
          centeredSlides: true
          {/if}
        });
        tm_products_slider.params.control = galleryThumbs;
        galleryThumbs.params.control = tm_products_slider;
        {/if}
      });
    });
  </script>
{/if}