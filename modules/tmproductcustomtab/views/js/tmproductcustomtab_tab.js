/*
 * 2002-2017 TemplateMonster
 *
 * TM Product Custom Tab
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
 *  @copyright 2002-2017 TemplateMonster
 *  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */


$(document).ready(function(){
  initAjaxTabs();
  $('#manage-products-remove').hide();
  $('.form-group.use-select-block').addClass('hidden');

  $(document).on('click', '#custom_assing_off', function(){
    $('.form-group.use-select-block').addClass('hidden');
  });
  $(document).on('click', '#custom_assing_on', function(){
    $('.form-group.use-select-block').removeClass('hidden');
  });
});

function sortInitTabs(elNumb){
  if ($("#tab-list-"+elNumb+" .tab-item").length > 1) {
    $("#tab-list-"+elNumb).sortable({
      cursor: 'move',
      start: function(e, ui){
        $(ui.item).find('textarea').each(function(){
          tinymce.execCommand('mceRemoveEditor', false, $(this).attr('id'));
        });
      },
      stop: function(e, ui){
        $(ui.item).find('textarea').each(function(){
          tinymce.execCommand('mceAddEditor', true, $(this).attr('id'));
        });
        $(this).sortable('refresh');
      },
      update: function(event, ui){
        $('#tab-list-'+elNumb+' li').not('.no-slides').each(function(index){
          $(this).find('.sort-order').text(index + 1);
        });
      }
    }).bind('sortupdate', function(){
      var items = $(this).sortable('toArray');
      $.ajax({
        type: 'POST',
        url: theme_url_custom_tab + '&ajax',
        headers: { "cache-control": "no-cache" },
        dataType: 'json',
        data: {
          action: 'updatepositiontab',
          item: items,
        },
        success: function(msg){
          if (msg.error) {
            showErrorMessage(msg.error);
            return;
          }
          showSuccessMessage(msg.success);
        }
      });
    });
  }
}

function initAjaxTabs(){
  $("#module_tmproductcustomtab .add_item").on('click', function(){
    var id_product = $('#form_id_product').val();

    var tab_name = $('input[id^=id]').map(function(){
      return $(this).val();
    }).get();

    var tab_description = $('textarea[id^=description]').map(function(){
      return $(this).val();
    }).get();

    var id_lang = $('input[class^=class]').map(function(){
      return $(this).val();
    }).get();

    $.ajax({
      type: 'POST',
      url: theme_url_custom_tab + '&ajax',
      headers: {"cache-control": "no-cache"},
      dataType: 'json',
      data: {
        action: 'additemtab',
        tab_name: tab_name,
        tab_description: tab_description,
        id_product: id_product,
        id_lang: id_lang
      },
      success: function(msg){
        if (msg.error_status) {
          showErrorMessage(msg.error_status);
          return;
        }
        showSuccessMessage(msg.success_status);
        location.reload();
      }
    });
    return false;
  });

  $(".tab-list .update_item").on('click', function(){
    var id_tab = $(this).parents('.tab-item').find('input[name="id_tab"]').val(),
        id_lang = $(this).parents('.tab-item').find('input[name="id_lang"]').val(),
        tab_name = $(this).parents('.tab-item').find('input[name="tab_name"]').val(),
        tab_description = $(this).parents('.tab-item').find('textarea[name="tab_description"]').val(),
        element = $(this).parents('.tab-item');
    $.ajax({
      type: 'POST',
      url: theme_url_custom_tab + '&ajax',
      headers: {"cache-control": "no-cache"},
      dataType: 'json',
      data: {
        action: 'updateitemtab',
        id_tab: id_tab,
        id_lang: id_lang,
        tab_name: tab_name,
        tab_description: tab_description,
      },
      success: function(msg){
        if (msg.error_status) {
          showErrorMessage(msg.error_status);
          return;
        }
        showSuccessMessage(msg.success_status);
        element.find('h4.item-title').text(tab_name);
      }
    });
    return false;
  });

  $(".tab-list .remove_item").on('click', function(){
    var id_tab = $(this).parents('.tab-item').find('input[name="id_tab"]').val(),
        id_lang = $(this).parents('.tab-item').find('input[name="id_lang"]').val(),
        element = $(this).parents('.tab-item');
    $.ajax({
      type: 'POST',
      url: theme_url_custom_tab + '&ajax',
      headers: {"cache-control": "no-cache"},
      dataType: 'json',
      data: {
        action: 'removeitemtab',
        id_tab: id_tab,
        id_lang: id_lang
      },
      success: function(msg){
        if (msg.error_status) {
          showErrorMessage(msg.error_status);
          return;
        }
        showSuccessMessage(msg.success_status);
        element.fadeOut();
      }
    });

    return false;
  });

  if (typeof(shopCount) !='undefined' && shopCount.length) {
    for (i = 0; i < shopCount.length; i++) {
      sortInitTabs(shopCount[i]);
    }
  }
};