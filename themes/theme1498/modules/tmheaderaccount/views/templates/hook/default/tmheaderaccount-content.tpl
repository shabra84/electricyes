
{** 2002-2016 TemplateMonster*}
{***}
{** TemplateMonster Social Login*}
{***}
{** NOTICE OF LICENSE*}
{***}
{** This source file is subject to the General Public License (GPL 2.0)*}
{** that is bundled with this package in the file LICENSE.txt.*}
{** It is also available through the world-wide-web at this URL:*}
{** http://opensource.org/licenses/GPL-2.0*}
{***}
{** DISCLAIMER*}
{***}
{** Do not edit or add to this file if you wish to upgrade the module to newer*}
{** versions in the future.*}
{***}
{** @author     TemplateMonster*}
{** @copyright  2002-2016 TemplateMonster*}
{** @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)*}

<ul class="header-login-content{if $customer.is_logged} is-logged{/if} dropdown-menu">
  {if $customer.is_logged}
  <li {if $hook == 'displayNav2'}class="{$configs.TMHEADERACCOUNT_DISPLAY_STYLE|escape:'quotes':'UTF-8'}"{/if}>
    <ul>
      <li class="user-data">
        {if $configs.TMHEADERACCOUNT_USE_AVATAR}
          <img class="img-fluid" src="{$avatar}" alt=""{if $hook == 'displayNav'} width="{if $configs.TMHEADERACCOUNT_DISPLAY_STYLE == "twocolumns"}150{else}90{/if}"{/if}>
        {/if}
        <p><span>{$firstname}</span> <span>{$lastname}</span></p>
      </li>
      <li>
        <a href="{$link->getPageLink('history', true)|escape:'htmlall':'UTF-8'}" title="{l s='My orders' mod='tmheaderaccount'}" rel="nofollow">
          {l s='My orders' mod='tmheaderaccount'}
        </a>
      </li>
      {if $returnAllowed}
        <li>
          <a href="{$link->getPageLink('order-follow', true)|escape:'htmlall':'UTF-8'}" title="{l s='My returns' mod='tmheaderaccount'}" rel="nofollow">
            {l s='My merchandise returns' mod='tmheaderaccount'}
          </a>
        </li>
      {/if}
      <li>
        <a href="{$link->getPageLink('order-slip', true)|escape:'htmlall':'UTF-8'}" title="{l s='My credit slips' mod='tmheaderaccount'}" rel="nofollow">
          {l s='My credit slips' mod='tmheaderaccount'}
        </a>
      </li>
      <li>
        <a href="{$link->getPageLink('addresses', true)|escape:'htmlall':'UTF-8'}" title="{l s='My addresses' mod='tmheaderaccount'}" rel="nofollow">
          {l s='My addresses' mod='tmheaderaccount'}
        </a>
      </li>
      <li>
        <a href="{$link->getPageLink('identity', true)|escape:'htmlall':'UTF-8'}" title="{l s='Manage my personal information' mod='tmheaderaccount'}" rel="nofollow">
          {l s='My personal info' mod='tmheaderaccount'}
        </a>
      </li>
      {if $voucherAllowed}
        <li>
          <a href="{$link->getPageLink('discount', true)|escape:'htmlall':'UTF-8'}" title="{l s='My vouchers' mod='tmheaderaccount'}" rel="nofollow">
            {l s='My vouchers' mod='tmheaderaccount'}
          </a>
        </li>
      {/if}
      {if $f_status}
        <a href="{$link->getModuleLink('tmheaderaccount', 'facebooklink', [], true)}" title="{l s='Facebook Login Manager' mod='tmheaderaccount'}" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-facebook7"></i>
        {if !$facebook_id}{l s='Connect With Facebook' mod='tmheaderaccount'}{else}{l s='Facebook Login Manager' mod='tmheaderaccount'}{/if}
      </span>
        </a>
      {/if}
      {if $g_status}
        <a {if isset($back) && $back}href="{$link->getModuleLink('tmheaderaccount', 'googlelogin', ['back' => $back], true)}" {else}href="{$link->getModuleLink('tmheaderaccount', 'googlelogin', [], true)}"{/if} title="{l s='Google Login Manager' mod='tmheaderaccount'}" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-twitter4"></i>
        {if !$google_id}{l s='Connect With Google' mod='tmheaderaccount'}{else}{l s='Google Login Manager' mod='tmheaderaccount'}{/if}
      </span>
        </a>
      {/if}
      {if $vk_status}
        <a {if isset($back) && $back}href="{$link->getModuleLink('tmheaderaccount', 'vklogin', ['back' => $back], true)}" {else}href="{$link->getModuleLink('tmheaderaccount', 'vklogin', [], true)}"{/if} title="{l s='VK Login Manager' mod='tmheaderaccount'}" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-google4"></i>
        {if !$vkcom_id}{l s='Connect With VK' mod='tmheaderaccount'}{else}{l s='VK Login Manager' mod='tmheaderaccount'}{/if}
      </span>
        </a>
      {/if}

    </ul>
    <p class="logout">
      <a class="btn btn-primary" href="{$link->getPageLink('index')|escape:'html':'UTF-8'}?mylogout" title="{l s='Sign out' mod='tmheaderaccount'}" rel="nofollow">
        <i class="fa fa-unlock left"></i>
        {l s='Sign out' mod='tmheaderaccount'}
      </a>
    </p>
  </li>
  {else}
  <li class="login-content">
    <form action="{$link->getPageLink('authentication', true)|escape:'html':'UTF-8'}" method="post">
      <div class="form_content clearfix">
        {assign value=$login_form.formFields var="formFields"}
        {include file="./_partials/form.tpl"}
        <p class="submit">
          <button type="submit" name="HeaderSubmitLogin" class="btn btn-primary">
            <i class="fa fa-lock left"></i>
            {l s='Sign in' mod='tmheaderaccount'}
          </button>
        </p>
        <p>
          <a href="{$link->getPageLink('my-account', true)|escape:'htmlall':'UTF-8'}" class="create btn btn-secondary">
            {l s='Create an account' mod='tmheaderaccount'}
          </a>
        </p>
        <p>
          <a href="{$link->getPageLink('password', 'true')|escape:'html':'UTF-8'}" class="forgot-password">
            {l s='Forgot your password?' mod='tmheaderaccount'}
          </a>
        </p>
        {hook h="displayHeaderLoginButtons"}
      </div>
    </form>
  </li>
  <li class="create-account-content hidden">
    <div class="alert alert-danger" style="display:none;"></div>
    <form action="{$link->getPageLink('authentication', true)|escape:'html':'UTF-8'}" method="post" class="std">
      {hook h='HOOK_CREATE_ACCOUNT_TOP'}
      <div class="account_creation">
        <div class="clearfix">
          {assign value=$register_form.formFields var="formFields"}
          {include file="./_partials/form.tpl"}
        </div>
      </div>
      {$HOOK_CREATE_ACCOUNT_FORM}
      <div class="submit clearfix">
        <input type="hidden" name="email_create" value="1"/>
        <input type="hidden" name="is_new_customer" value="1"/>
        <input type="hidden" class="hidden" name="back" value="my-account"/>
        <p class="submit">
          <button type="submit" name="submitAccount" class="btn btn-primary">
            <span>
              {l s='Register' mod='tmheaderaccount'}
            </span>
          </button>
        </p>
        <p>
          <a href="#" class="btn btn-secondary signin"><span>{l s='Sign in' mod='tmheaderaccount'}</span></a>
        </p>
      </div>
    </form>
  </li>
  <li class="forgot-password-content hidden">
    <form action="{$request_uri|escape:'html':'UTF-8'}" method="post" class="std">
      <p class="text-muted">{l s='Please enter the email address you used to register. We will then send you a new password. ' mod='tmheaderaccount'}</p>
      <fieldset>
        <div class="form-group">
          <div class="alert alert-success" style="display:none;"></div>
          <div class="alert alert-danger" style="display:none;"></div>
          <label for="email-forgot">{l s='Email address' mod='tmheaderaccount'}</label>
          <input class="form-control" type="email" name="email" id="email-forgot" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'html':'UTF-8'|stripslashes}{/if}"/>
        </div>
        <p class="submit">
          <button type="submit" class="btn btn-primary">
            <span>
              {l s='Retrieve Password' mod='tmheaderaccount'}
            </span>
          </button>
        </p>
        <p>
          <a href="#" class="btn btn-secondary signin"><span>{l s='Sign in' mod='tmheaderaccount'}</span></a>
        </p>
      </fieldset>
    </form>
  </li>
    <script>
    {strip}
      {if isset($smarty.post.id_state) && $smarty.post.id_state}
        idSelectedState = "{$smarty.post.id_state|intval}";
      {elseif isset($address->id_state) && $address->id_state}
        idSelectedState = "{$address->id_state|intval}";
      {else}
        idSelectedState = false;
      {/if}
      {if isset($smarty.post.id_state_invoice) && isset($smarty.post.id_state_invoice) && $smarty.post.id_state_invoice}
        idSelectedStateInvoice = "{$smarty.post.id_state_invoice|intval}";
      {else}
        idSelectedStateInvoice = false;
      {/if}
      {if isset($smarty.post.id_country) && $smarty.post.id_country}
        idSelectedCountry = "{$smarty.post.id_country|intval}";
      {elseif isset($address->id_country) && $address->id_country}
        idSelectedCountry = "{$address->id_country|intval}";
      {else}
        idSelectedCountry = false;
      {/if}
      {if isset($smarty.post.id_country_invoice) && isset($smarty.post.id_country_invoice) && $smarty.post.id_country_invoice}
        idSelectedCountryInvoic = "{$smarty.post.id_country_invoice|intval}";
      {else}
        idSelectedCountryInvoic = false;
      {/if}
      {if isset($countries)}
        countries = {$countries|json_encode nofilter};
      {/if}
      {if isset($vatnumber_ajax_call) && $vatnumber_ajax_call}
        vatnumber_ajax_call = "{$vatnumber_ajax_call}";
      {/if}
      {if isset($email_create) && $email_create}
        vatnumber_ajax_call = "{$email_create|boolval}";
      {else}
        vatnumber_ajax_call = false;
      {/if}
    {/strip}
  {/if}
    </script>
</ul>