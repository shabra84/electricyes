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

$(document).ready(function() {
  tmproductlistgallery_type_check();
  $(document).on('change', 'select[name="TM_PLG_TYPE"]', function() {
      tmproductlistgallery_type_check();
  });
});

function tmproductlistgallery_type_check() {
  tmproductlistgallery_type = $('select[name="TM_PLG_TYPE"]').val();
  if (tmproductlistgallery_type == 'rollover') {
    $('.form-wrapper > .form-group').each(function() {
      if ($(this).hasClass('rollover-type')) {
        $(this).removeClass('hidden');
      } else {
        $(this).addClass('hidden');
      }
    });
  } else if (tmproductlistgallery_type == 'gallery') {
    $('.form-wrapper > .form-group').each(function() {
      if ($(this).hasClass('gallery-type')) {
        $(this).removeClass('hidden');
      } else {
        $(this).addClass('hidden');
      }
    });
  } else if (tmproductlistgallery_type == 'slideshow') {
    $('.form-wrapper > .form-group').each(function() {
      if ($(this).hasClass('slideshow-type')) {
        $(this).removeClass('hidden');
      } else {
        $(this).addClass('hidden');
      }
    });
  }
}