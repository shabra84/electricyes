{**

 * 2007-2017 PrestaShop

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

 * @copyright 2007-2017 PrestaShop SA

 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)

 * International Registered Trademark & Property of PrestaShop SA

 *}

<div class="footer-before-container">

  {block name='hook_footer_before'}

    {hook h='displayFooterBefore'}

  {/block}

</div>

<div id="footer-bottom" class="footer-container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-lg-9 footer-L">

        {block name='hook_footer'}

          {hook h='displayFooter'}

        {/block}

      </div>

      <div class="col-xs-12 col-lg-3 footer-R">

        {block name='hook_footer_after'}

          {hook h='displayFooterAfter'}

        {/block}

      </div>

    </div>

  </div>

  <div class="copyright-block">

    {block name='copyright_link'}

      <div class="container">

        Copyright 2018 | ELECTICYES S.L | Todos los derechos reservados | Diseñada por <a href="https://www.linkedin.com/company/kreativeimagen/">KreativeImagen</a>

      </div>

    {/block}

  </div>

</div>
