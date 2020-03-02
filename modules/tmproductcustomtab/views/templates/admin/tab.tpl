{*
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
*}

<div class="row">
  <div class="col-md-8">
    <fieldset class="form-group">
      <label class="form-control-label">{l s='Tab Heading' mod='tmproductcustomtab'}</label>
      <div class="translations tabbable">
        <div class="translationsFields tab-content ">
          {foreach from=$languages item=language}
            <div class="translationsFields-form_step1_name_{$language.id_lang|escape:'htmlall':'UTF-8'} {if $default_language.id_lang == $language.id_lang}active{/if} tab-pane translation-label-{$language.iso_code|escape:'htmlall':'UTF-8'}">
              <input id="id{$language.id_lang|escape:'htmlall':'UTF-8'}" type="text" class="form-control" name="name_{$language.id_lang|escape:'htmlall':'UTF-8'}" value="" />
              <input type="hidden" class="class{$language.id_lang|escape:'htmlall':'UTF-8'}" value="{$language.id_lang|escape:'htmlall':'UTF-8'}" />
            </div>
          {/foreach}
        </div>
      </div>
    </fieldset>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <fieldset class="form-group">
      <label class="form-control-label">{l s='Tab Description' mod='tmproductcustomtab'}</label>
      <div class="translations tabbable tab-content">
        <div class="translationsFields tab-content bordered">
          {foreach from=$languages item=language}
            <div class="translationsFields-form_step1_description_{$language.id_lang|escape:'htmlall':'UTF-8'} {if $default_language.id_lang == $language.id_lang}active{/if} tab-pane translation-label-{$language.iso_code|escape:'htmlall':'UTF-8'}">
              <textarea name="description_{$language.id_lang|escape:'htmlall':'UTF-8'}" class="autoload_rte form-control"></textarea>
            </div>
          {/foreach}
        </div>
      </div>
    </fieldset>
  </div>
</div>

<a class="add_item btn btn-primary save uppercase">
  {l s='Add Item' mod='tmproductcustomtab'}
</a>

<script type="text/javascript">
  shopCount = []
</script>

{if isset($tab) && $tab}
  <h2 class="tab">{l s='Tab List' mod='tmproductcustomtab'}</h2>
  {foreach from=$tab key=index item=tabs name=tab}
    <script type="text/javascript">shopCount.push({$index|escape:'html':'UTF-8'})</script>
    <div class="translations tabbable">
      <div id="tab-list-{$index|escape:'html':'UTF-8'}" class="translationsFields tab-content tab-list">
        {foreach from=$tabs item=t name=new_tab}
          <div id="tab_{$t.id_tab|escape:'html':'UTF-8'}" class="tab-item  {if $default_language.id_lang == $t.id_lang}active{/if} tab-pane translation-label-{$t.iso_code|escape:'htmlall':'UTF-8'}">
            <div class="row">
              {if $t.selected_products != $id_product}
                <div class="alert alert-warning">
                  {l s='After editing of the tab it will change for the entire product category' mod='tmproductcustomtab'}
                </div>
              {/if}
              <div class="col-lg-8">
                <span style="display: none" class="sort-order">{$t.sort_order|escape:'html':'UTF-8'}</span>
                <div class="form-group">
                  <input type="text" name="tab_name" class="form-control" value="{if $t.tab_name}{$t.tab_name|escape:'html':'UTF-8'}{/if}"  autocomplete="off" />
                </div>
                <div class="form-group tab-content bordered">
                  <textarea class="autoload_rte form-control" name="tab_description" autocomplete="off">{if $t.tab_description}{$t.tab_description|escape:'html':'UTF-8'}{/if}</textarea>
                </div>
              </div>
              <div class="col-lg-2 controls">
                <a class="update_item btn btn-primary save uppercase">{l s='Update tab' mod='tmproductcustomtab'}</a>
                <a class="remove_item btn btn-primary save uppercase">{l s='Remove tab' mod='tmproductcustomtab'}</a>
              </div>
              <input type="hidden" name="id_lang" value="{$t.id_lang|escape:'html':'UTF-8'}" />
              <input type="hidden" name="id_tab" value="{$t.id_tab|escape:'html':'UTF-8'}" />
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  {/foreach}
{/if}

<script type="text/javascript">
  theme_url_custom_tab = '{$theme_url|escape:"javascript":"UTF-8"}';
</script>