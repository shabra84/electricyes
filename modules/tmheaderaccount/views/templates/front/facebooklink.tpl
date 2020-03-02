{*
* 2002-2016 TemplateMonster
*
* TemplateMonster Social Login
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
* @author     TemplateMonster (Alexander Grosul)
* @copyright  2002-2016 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}
{extends file=$layout}
{include file="$tpl_dir./errors.tpl"}
{block name='breadcrumb'}
  <nav class="breadcrumb hidden-sm-down">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{$link->getPageLink('my-account', true)|escape:'htmlall':'UTF-8'}" title="{l s='Manage my account' mod='tmheaderaccount'}" rel="nofollow">{l s='My account' mod='tmheaderaccount'}</a>
      </li>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span>
            <span itemprop="name">{l s='Facebook account' mod='tmheaderaccount'}</span>
          </span>
      </li>
    </ol>
  </nav>
{/block}
{block name="content"}
<div class="sociallogininfo">
  {if $facebook_status == 'error'}
    <div class="alert alert-danger">
      {$facebook_massage|escape:'htmlall':'UTF-8'}
    </div>
    <div class="box clearfix">
      {if isset($facebook_picture)}
        <div class="social-avatar">
        <img class="img-responsive" src="{$facebook_picture|escape:'htmlall':'UTF-8'}"></div>
      {/if}
      <h4 class="social-name">{$facebook_name|escape:'htmlall':'UTF-8'}</h4>
    </div>
  {elseif $facebook_status == 'linked' || $facebook_status == 'confirm'}
    <div class="alert alert-success">
      {$facebook_massage|escape:'htmlall':'UTF-8'}
    </div>
    <div class="box clearfix">
      {if isset($facebook_picture)}
        <div class="social-avatar">
        <img class="img-responsive" src="{$facebook_picture|escape:'htmlall':'UTF-8'}"></div>
      {/if}
      <h4 class="social-name">{$facebook_name|escape:'htmlall':'UTF-8'}</h4>
    </div>
  {else}
    <div class="alert alert-danger">
      {l s='Sorry, there was error with Facebook Profile Connect.' mod='tmheaderaccount'}
    </div>
  {/if}
</div>
{/block}