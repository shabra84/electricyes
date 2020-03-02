{*
* 2002-2016 TemplateMonster
*
* TemplateMonster Social Feeds
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
* @author     TemplateMonster
* @copyright  2002-2016 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if $hook_content}
  <div class="socialfeedblock block socialfeedblock-{$hook_name|escape:'htmlall':'UTF-8'}">
    {if $hook_name != 'displayNav'}<div class="row hook_{$hook_name|escape:'htmlall':'UTF-8'}">{/if}
      {foreach from=$hook_content item=content name=myLoop}
        <div class="socialfeedblock-item item_{$smarty.foreach.myLoop.iteration|escape:'htmlall':'UTF-8'} {if $hook_name != 'displayNav'}{if $hook_name == 'displayLeftColumn' || $hook_name == 'displayRightColumn' || $hook_name == 'displayFooterBefore'}col-xs-12{else} col-xs-3{/if}{else}nav-element{/if}">
          {if $content.item_type == 'twitter' && $global_twitter}
            {if $hook_name == 'displayNav'}<span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-twitter4"></i></span>{/if}
            <div class="twitter-socialfeed">
              <a class="twitter-timeline" href="https://twitter.com/{$global_twitter_account|escape:'html':'UTF-8'}"
                {if isset($content.item_theme) && $content.item_theme}
                  data-theme="{$content.item_theme|escape:'html':'UTF-8'}"
                {/if}
                {if isset($content.item_width) && $content.item_width}
                  width="{$content.item_width|escape:'html':'UTF-8'}"
                {/if}
                {if isset($content.item_height) && $content.item_height}
                  height="{$content.item_height|escape:'html':'UTF-8'}"
                {/if}
               data-chrome="{if !$content.item_header}noheader{/if} {if !$content.item_footer}nofooter{/if} {if !$content.item_border}noborder{/if} {if !$content.item_scroll}noscrollbar{/if} {if !$content.item_background}transparent{/if}"
               data-show-replies="{if $content.item_replies == 1}true{else}false{/if}"
                {if isset($content.item_limit) && $content.item_limit} data-tweet-limit="{$content.item_limit|escape:'html':'UTF-8'}"{/if}>
              </a>
            </div>
          {elseif $content.item_type == 'facebook' && $global_facebook}
            {if $hook_name == 'displayNav'}<span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-facebook7"></i></span>{/if}
            <div class="facebook-socialfeed">
              <div class="fb-page"
                data-href="{$global_facebook_id|escape:'html':'UTF-8'}"
                data-tabs="{if $content.item_scroll}timeline{else}messages{/if}"
                data-width="{$content.item_width|escape:'html':'UTF-8'}"
                data-height="{$content.item_height|escape:'html':'UTF-8'}"
                data-adapt-container-width="true"
                data-show-facepile="{if $content.item_replies == 1}true{else}false{/if}"
                data-small-header="{if $content.item_header}true{else}false{/if}"
                data-hide-cover="{if $content.item_border}true{else}false{/if}">
                <div class="fb-xfbml-parse-ignore"></div>
              </div>
            </div>
          {elseif $content.item_type == 'pinterest' && $global_pinterest}
            {if $hook_name == 'displayNav'}<span class="expand-more" data-toggle="dropdown">{l s='Pinterest' mod='tmsocialfeeds'}</span>{/if}
            <div class="pinterest-socialfeed">
              <a data-pin-do="embedUser" href="{$global_pinterest_id|escape:'html':'UTF-8'}" {if isset($content.item_col_width) && $content.item_col_width} data-pin-scale-width="{$content.item_col_width|escape:'html':'UTF-8'}"{/if}{if isset($content.item_height) && $content.item_height} data-pin-scale-height="{$content.item_height|escape:'html':'UTF-8'}"{/if} {if isset($content.item_width) && $content.item_width} data-pin-board-width="{$content.item_width|escape:'html':'UTF-8'}"{/if}></a>
            </div>
          {elseif $content.item_type == 'instagram' && $global_instagram}
            {if $hook_name == 'displayNav'}<span class="expand-more" data-toggle="dropdown">{l s='instagram' mod='tmsocialfeeds'}</span>{/if}
            <div class="instagram-widget">
              <a href="http://instagram.com/{if isset($global_instagram_username) && $global_instagram_username}{$global_instagram_username|escape:'html':'UTF-8'}{/if}" target="_blank" class="title">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA+dpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTQtMDEtMjhUMjA6MDA6NTcrMDc6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE0LTAxLTI4VDIwOjAxOjEyKzA3OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE0LTAxLTI4VDIwOjAxOjEyKzA3OjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0MzQ2MTUyRDg4MUMxMUUzOTlEODlEQUE1ODlCOUIyRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0MzQ2MTUyRTg4MUMxMUUzOTlEODlEQUE1ODlCOUIyRSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjpp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" class="icon"/>
                <div class="text">{l s='Instagram' mod='tmsocialfeeds'}</div>
              </a>
              <div id="instafeed_{$content.hook_name|escape:'html':'UTF-8'}" class="data">
                <div class="instagram_items ">
                  {foreach from=$instagram_param.media.nodes item=media name=media}
                    {if $smarty.foreach.media.iteration <= $content.item_limit}
                      <a class="instagram_link" href="https://www.instagram.com/p/{$media.code|escape:'htmlall':'UTF-8'}/" target="_blank" rel="nofollow">
                        <img class="instagram__img" src="{$media.thumbnail_src|escape:'htmlall':'UTF-8'}" alt="">
                      </a>
                    {/if}
                  {/foreach}
                </div>
              </div>
            </div>
          {/if}
        </div>
      {/foreach}
    {if $hook_name != 'displayNav'}</div>{/if}
  </div>
{/if}