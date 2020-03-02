{*

* 2007-2017 PrestaShop

*

* NOTICE OF LICENSE

*

* This source file is subject to the Academic Free License (AFL 3.0)

* that is bundled with this package in the file LICENSE.txt.

* It is also available through the world-wide-web at this URL:

* http://opensource.org/licenses/afl-3.0.php

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

*  @author PrestaShop SA <contact@prestashop.com>

*  @copyright  2007-2017 PrestaShop SA

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

*  International Registered Trademark & Property of PrestaShop SA

*}



<div class="block_newsletter">

    <h3 class="h5 hidden-sm-down">Síguenos</h3>

    <form action="{$urls.pages.index}#footer-bottom" method="post">

      <div class="input-wrap">

        <input

          name="email"

          class="form-control"

          type="text"

          value="{$value}"

          placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"

          aria-labelledby="block-newsletter-label"

        >

        <input

          class="material-icons"

          name="submitNewsletter"

          type="submit"

          value="&#xE5C8;"

        >

      </div>

      <input type="hidden" name="action" value="0">

      {if $conditions}

        <p>{$conditions}</p>

      {/if}

      {if $msg}

        <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">

          {$msg}

        </p>

      {/if}

    </form>

    <div class="social">
      <a href="#"><img src="../img/social/facebook.png" alt=""></a>
      <a href="#"><img src="../img/social/linkedin.png" alt=""></a>
      <a href="#"><img src="../img/social/instagram.png" alt=""></a>
      <a href="#"><img src="../img/social/twitter.png" alt=""></a>
      <a href="#"><img src="../img/social/whatsapp.png" alt=""></a>
    </div>

    <img class="payment-methods" src="../img/footer-money.jpg" alt="">

</div>

