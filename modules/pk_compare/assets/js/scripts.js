// promokit popup
(function($) {
 $.fn.pkPopup = function(options) {

    var defaults = {action: 'show', state: 'success', text: 'Success'},
        options = $.extend(defaults, options),
        mainclass = 'pk-infomessage',
        itemclass = 'pk-infomessage-item',
        closeclass = 'pk-close-popup',
        timerclass = 'pk-close-timer',
        closebutton = '<a href="#" class="'+closeclass+'"><svg class="svgic"><use xlink:href="#si-cross"></use></svg></a>',
        timetoclose = 5000,
        $parent = $('body'),
        $th = $(this);

    $parent.on('click', '.'+closeclass, function() {
      hidePopup($(this));
      return false;
    });

    if ($('.'+mainclass).length == 0 ) {
      $parent.append('<div class="'+mainclass+'"></div>');
    }

    if (options.action == 'show') {
      showPopup($th);
    }

    if (options.action == 'hide') {
      hidePopup($th);
    }

    function showPopup($el) {
      var classes = itemclass+' relative state-'+options.state;
      $('.'+mainclass).append('<div class="'+classes+'"><div>'+options.text+'</div>'+closebutton+'<div class="'+timerclass+'"></div></div>');
      $('.'+timerclass).animate({
          width: "0"
      }, timetoclose, 'linear', function() {
          hidePopup($(this));
      });
    }

    function hidePopup($el) {
      $el.parent().animate({
        height: "0"
      }, 300, function() {
        $(this).remove();
      });
    }
};
})(jQuery);

var button = '.add_to_compare',
    $form = $('.compare_info'),
    $counter = $('.total-compare-val'),
    module_url = $form.data('ajax'),
    comparedProductsIds = $form.data('ids'),
    comparator_max_item = $form.data('comparemax'),
    max_item = $form.data('max'),
    min_item = $form.data('min');

$(document).ready(function(){

    $(document).on('click', button, function(e){
        e.preventDefault();
        addToCompare(parseInt($(this).data('pid')));
    });

    totalCompareButtons();

    $(document).on('click', '.cmp-remove', function(e){
        e.preventDefault();
        var idProduct = parseInt($(this).data('pid'));
        $.ajax({
            url: module_url+'?ajax=1&action=remove&id_product=' + idProduct,
            async: false,
            cache: false,
            success: function(data) {
                $('td.product-'+idProduct).fadeOut(600);
            },
            error: function(){
                $('body').pkPopup({state:"error", text: "Some error occured. Try once again"});
            }
        });
    });

});

function addToCompare(productId) {
    
    var totalValueNow = parseInt($counter.text()),
        action, 
        totalVal;

    if($.inArray(parseInt(productId),comparedProductsIds) === -1)
        action = 'add';
    else
        action = 'remove';

    $.ajax({
        url: module_url+'?ajax=1&action='+action+'&id_product=' + productId,
        async: true,
        cache: false,
        success: function(data) {
            var lnk = $(button).data('cmplink');
            if (action === 'add' && comparedProductsIds.length < comparator_max_item) {
                comparedProductsIds.push(parseInt(productId)),
                $(button+"[data-pid='"+productId+"']").addClass('in_comparison');
                totalVal = totalValueNow +1,
                $counter.text(totalVal),
                totalValue(totalVal);
                $('body').pkPopup({state:"success", text: "Product added to <a href="+lnk+">compare list</a>"});
            }
            else if (action === 'remove') {
                comparedProductsIds.splice($.inArray(parseInt(productId),comparedProductsIds), 1),
                $(button+"[data-pid='"+productId+"']").removeClass('in_comparison');
                totalVal = totalValueNow -1,
                $counter.text(totalVal),
                totalValue(totalVal);
                $('body').pkPopup({state:"info", text: "Product removed from compare list"});
            }
            else {
                $('body').pkPopup({state:"error", text: max_item});
            }
            totalCompareButtons();
        },
        error: function(){},
        beforeSend: function(){
            $(button+"[data-pid='"+productId+"']").addClass('in_progress');
        },
        complete: function(){
            $(button+"[data-pid='"+productId+"']").removeClass('in_progress');
        }
    });
}

function compareButtonsStatusRefresh() {   

    $(button).each(function() {
        if ($.inArray(parseInt($(this).data('id-product')),comparedProductsIds)!== -1)
            $(this).addClass('in_comparison');
        else
            $(this).removeClass('in_comparison');
    });
    
}

function totalCompareButtons() {

    var totalProductsToCompare = parseInt($counter.text());
    if (typeof totalProductsToCompare !== "number" || totalProductsToCompare === 0)
        $('.bt_compare').attr("disabled",true);
    else
        $('.bt_compare').attr("disabled",false);

}

function totalValue(value) {
    $counter.text(value);
}