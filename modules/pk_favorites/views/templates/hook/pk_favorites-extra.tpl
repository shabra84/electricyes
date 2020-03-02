{*
* Promokit Favorites Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*}
{assign var="pkfp_text" value=''}
{assign var="pkfp_class" value=''}
{if !$isCustomerFavoriteProduct AND $customer.is_logged}
  {assign var="pkfp_text" value={l s='Add to favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='addToFav'}
{else if $isCustomerFavoriteProduct AND $customer.is_logged}
  {assign var="pkfp_text" value={l s='Remove from favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='removeFromFav icon_checked'}
{else if !$customer.is_logged}
  {assign var="pkfp_text" value={l s='Add to favorites' mod='pk_favorites'}}
  {assign var="pkfp_title" value={l s='You have to login to add product to Favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='loginToAdd'}
{/if}
<!--noindex-->
<svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs><symbol id="si-like-stroke" viewBox="0 0 16 14">
<path d="M7.706,13.901 C7.808,13.960 7.921,13.999 8.044,13.999 C8.156,13.999 8.279,13.970 8.382,13.901 C8.659,13.727 15.155,9.669 15.893,5.543 C16.272,3.407 15.575,2.086 14.930,1.358 C14.171,0.503 13.044,-0.001 11.927,-0.001 C11.558,-0.001 11.200,0.057 10.882,0.174 C9.325,0.727 8.269,1.708 7.695,2.377 C7.132,1.717 6.169,0.766 5.000,0.388 C4.642,0.271 4.252,0.213 3.843,0.213 C2.797,0.213 1.803,0.620 1.117,1.339 C0.512,1.970 -0.174,3.173 0.041,5.271 C0.471,9.397 7.408,13.717 7.706,13.901 ZM2.029,2.115 C2.654,1.465 3.433,1.368 3.843,1.368 C4.109,1.368 4.365,1.407 4.601,1.484 C6.025,1.941 7.162,3.659 7.183,3.669 C7.296,3.844 7.501,3.950 7.716,3.940 C7.931,3.940 8.126,3.824 8.238,3.649 C8.249,3.630 9.273,1.979 11.323,1.251 C11.497,1.193 11.712,1.155 11.927,1.155 C12.686,1.155 13.454,1.514 13.987,2.106 C14.684,2.882 14.919,4.009 14.673,5.349 C14.407,6.824 13.136,8.591 10.995,10.465 C9.786,11.523 8.597,12.339 8.044,12.707 C7.460,12.329 6.199,11.456 4.918,10.349 C2.685,8.407 1.424,6.610 1.271,5.154 C1.137,3.824 1.394,2.775 2.029,2.115 Z"/>
</symbol></defs>
</svg><!--/noindex-->
{if $pkfp_text != ''}
<div class="wrap_alert relative dib">
  <a href="#" class="flex-container align-items-center favoritesButton icon-button {$pkfp_class}" title="{$pkfp_text}" data-pid="{$pid}">
    <svg class="svgic"><use xlink:href="#si-like-stroke"></use></svg><span>{$pkfp_text}</span>
  </a>
  {if !$customer.is_logged}
    <div class="alert_note">
      {l s='You must be logged in' mod='pk_favorites'}
      <p class="login_links">
          <a class="inline" href="{$link->getPageLink('my-account', true)}">{l s='Sign in' d='Shop.Theme.Actions'}</a> | <a class="inline" href="{$link->getPageLink('my-account', true)}">{l s='Register' d='Modules.Customersignin.Shop'}</a>
      </p>
    </div>
  {/if}
  {if $isCustomerFavoriteProduct AND $customer.is_logged}
    <div class="alert_note">
      {l s='This product is in your' mod='pk_favorites'}&nbsp;<a href="{$link->getModuleLink('pk_favorites', 'account', array(), true)}">{l s='favorites' mod='pk_favorites'}</a>
    </div>
  {/if}

</div>
{/if}