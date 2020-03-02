(function($) {
 $.fn.pkPopupFav = function(options) {

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

$(document).ready(function(){

	var fButton = 'favoritesButton',
				removeButton = 'remove-fav';

	$('body').on('click', '.'+fButton, function(){

		if ($(this).hasClass('addToFav')) {
			addToFavorites($(this), false);
		}

		if ($(this).hasClass('removeFromFav')) {
			removeFromFavorites($(this), false);
		}

		return false;

	});

	$('body').on('click', '.'+removeButton, function(){

		removeFromFavorites($(this), true);
		return false;

	});

	// add remove button to favorites page
	if ( $('#favoriteproducts_block_account')[0] ) {
		$('#favoriteproducts_block_account .product-miniature').each(function (index, value) { 
		  $(this).append('<div class="'+removeButton+' btn">Delete</div>');
		});
	}

});

function ToggleButtonState(button) {

	button.toggleClass('removeFromFav').toggleClass('addToFav').toggleClass('icon_checked');

}

function hideProduct(item) {

	item.closest('.product-miniature').slideUp();

}

function addToFavorites($th, icon_button) {

	$.ajax({
		url: favorites.favorite_products_url_add + '&rand=' + new Date().getTime(),
		type: "POST",
		headers: { "cache-control": "no-cache" },
		data: {
			"id_product": $th.data('pid')
		},
		success: function(result){
			ToggleButtonState($th);
			$('body').pkPopupFav({state:"success", text: favorites.phrases.added});
			$th.find('span').text(favorites.phrases.remove);
	 	},
	 	error: function(){},
    beforeSend: function(){
  		beforeSendCallback(icon_button, $th);
    },
    complete: function(){
      completeCallback(icon_button, $th);
    }
	});

}

function removeFromFavorites($th, icon_button) {

	if (icon_button) {
		pid = $th.parent().data('id-product');
	} else {
		pid = $th.data('pid')
	}

	$.ajax({
		url: favorites.favorite_products_url_remove + '&rand=' + new Date().getTime(),
		type: "POST",
		headers: { "cache-control": "no-cache" },
		data: {
			"id_product": pid
		},
		success: function(result){
			if (icon_button) {
				hideProduct($th);
			} else {
				ToggleButtonState($th);
			}
			$('body').pkPopupFav({state:"info", text: favorites.phrases.removed});
			$th.find('span').text(favorites.phrases.add);
	 	},
	 	error: function(){},
    beforeSend: function(){
    	beforeSendCallback(icon_button, $th);
    },
    complete: function(){
    	completeCallback(icon_button, $th);
    }
	});

}

function completeCallback(icon_button, $th) {
	if (icon_button) {
  	$th.removeClass('in_progress');
	} else {
		$th.find('svg').removeClass('in_progress');
	}
}

function beforeSendCallback(icon_button, $th) {
	if (icon_button) {
  	$th.addClass('in_progress');
	} else {
		$th.find('svg').addClass('in_progress');
	}
}