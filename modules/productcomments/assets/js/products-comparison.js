/**
* Promokit Comments Module
*
* @package   alysum
* @version   5.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/
$(document).ready(function() 
{
	$('input.star').rating();
	$('.auto-submit-star').rating();
	$('a.cluetip').cluetip({
		local:true,
		cursor: 'pointer',
		cluetipClass: 'comparison_comments',
		dropShadow: false,
		dropShadowSteps: 0,
		showTitle: false,
		tracking: true,
		sticky: false,
		mouseOutClose: true,
	    width: 450,
		fx: {             
	    	open:       'fadeIn',
	    	openSpeed:  'fast'
		}
	}).css('opacity', 0.8);
});

function closeCommentForm()
{
	$('#sendComment').slideUp('fast');
	$('input#addCommentButton').fadeIn('slow');
}