/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';

export default class ProductSelect {
  init() {

    var selectedFlag = false;
    var el_number;
    var new_el_number;

    $('.js-modal-thumb').on('click', (event) => {
      if($('.js-modal-thumb').hasClass('selected')){
        $('.js-modal-thumb').removeClass('selected');
      }
      $(event.currentTarget).addClass('selected');
      $('.js-modal-product-cover').attr('src', $(event.target).data('image-large-src'));
      $('.js-modal-product-cover').attr('title', $(event.target).data('title'));
      $('.js-modal-product-cover').attr('alt', $(event.target).data('alt'));
    });
    $('.js-qv-product-images li').on('click', (event) => {
      if(selectedFlag){
        selectedFlag = false;
      }
    });
    $('#el_prev').on('click', (event) => {
      var count = $('.js-modal-product-images li').size();
      if(selectedFlag){
        el_number = $('.js-modal-product-images li .selected').parent().index();
      } else {
        el_number = $('.js-qv-product-images li .selected').parent().index();
      }
      if (count > 1) {
        $('.js-modal-product-images li').eq(el_number - 1).children().trigger('click');
        selectedFlag = true;
      }
    });
    $('#el_next').on('click', (event) => {
      var count = $('.js-modal-product-images li').size();
      if(selectedFlag){
        el_number = $('.js-modal-product-images li .selected').parent().index();
      } else {
        el_number = $('.js-qv-product-images li .selected').parent().index();
      }
      if (count > el_number + 1) {
        $('.js-modal-product-images li').eq(el_number + 1).children().trigger('click');
        selectedFlag = true;
      } else {
        $('.js-modal-product-images li').eq(0).children().trigger('click');
        selectedFlag = true;
      }
    });
  }
}
