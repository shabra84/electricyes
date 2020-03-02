{*
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @category  PrestaShop
 * @category  Module
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2018 PresTeamShop
 * @license   see file: LICENSE.txt
*}

{if isset($OPC_FIELDS[$OPC_GLOBALS->object->customer])}
    <h5 class="onepagecheckoutps_p_step onepagecheckoutps_p_step_one">
        <i class="fa-pts fa-pts-user fa-pts-2x"></i>
        {l s='Your data' mod='onepagecheckoutps'}
    </h5>

	{if !$customer.is_logged && isset($opc_social_networks) && ($opc_social_networks->facebook->client_id neq '' || $opc_social_networks->google->client_id neq '' || $opc_social_networks->paypal->client_id neq '')}
		<section id="opc_social_networks">
			<h5>{l s='Login using your social networks' mod='onepagecheckoutps'}</h5>
			{foreach from=$opc_social_networks key='name' item='network'}
				{if $network->client_id neq ''}
					<button type="button" class="btn btn-sm btn-{$name|escape:'html':'UTF-8'}" onclick="Fronted.openWindow('{$link->getModuleLink('onepagecheckoutps', 'login', ['sv' => $network->name_network])|escape:'htmlall':'UTF-8'}', true)">
						<i class="fa-pts fa-pts-1x fa-pts-{$network->class_icon|escape:'html':'UTF-8'}"></i>
						{$network->name_network|escape:'html':'UTF-8'}
					</button>
				{/if}
			{/foreach}
		</section>
	{/if}

    <section id="customer_container">
        {if !$customer.is_logged}
            <button type="button" id="opc_show_login" class="btn btn-primary btn-xs pull-right" >
                {*<i class="fa-pts fa-pts-unlock-alt fa-pts-1x"></i>*}
                {l s='Already registered?' mod='onepagecheckoutps'}
            </button>
        {/if}
        <form id="form_customer" autocomplete="on">
            {foreach from=$OPC_FIELDS[$OPC_GLOBALS->object->customer] item='fields' name='f_row_fields'}
                <div class="row">
                    {foreach from=$fields item='field' name='f_fields'}
                        {include file="./controls.tpl" field=$field cant_fields=$smarty.foreach.f_fields.total}
                    {/foreach}
                </div>
            {/foreach}

            {if !$customer.is_logged}
                {foreach from=$additional_customer_form_fields item="field"}
                    {include file="./form-fields.tpl" field=$field}
                {/foreach}
            {/if}

        </form>
    </section>
{/if}

{$hook_create_account_top nofilter}

<div id="panel_addresses_customer" class="card-group">
{*    <div class="col-xs-12 col-12">*}
        {if isset($OPC_FIELDS[$OPC_GLOBALS->object->delivery]) && sizeof($OPC_FIELDS[$OPC_GLOBALS->object->delivery]) > 1 && (($CONFIGS.OPC_SHOW_DELIVERY_VIRTUAL && $is_virtual_cart) or !$is_virtual_cart)}
            <div id="panel_address_delivery" class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <a data-toggle="collapse" href="#delivery_address_container">
                            <i class="more-less fa-pts fa-pts-angle-up pull-right"></i>
                            {if $register_customer and $customer.is_logged}
                                {l s='Your addresses' mod='onepagecheckoutps'}
                            {else}
                                {l s='Select your delivery address' mod='onepagecheckoutps'}
                            {/if}
                        </a>
                    </h5>
                </div>
                <div class="card-body">
                    <div id="delivery_address_container" class="collapse in show">
                        <div class="row addresses_customer_container delivery" data-object="delivery"></div>

                        <form id="form_address_delivery" autocomplete="on" style="display: none;">
                            <div class="fields_container">
                                {foreach from=$OPC_FIELDS[$OPC_GLOBALS->object->delivery] item='fields' name='f_row_fields'}
                                    <div class="row">
                                        {foreach from=$fields item='field' name='f_fields'}
                                            {include file="./controls.tpl" field=$field cant_fields=$smarty.foreach.f_fields.total}
                                        {/foreach}
                                    </div>
                                {/foreach}
                                {*if !$customer.is_logged and $CONFIGS.OPC_ENABLE_INVOICE_ADDRESS}
                                    <div id="label_help_invoice" class="row">
                                        <div class="form-group col-xs-12">
                                            {if $CONFIGS.OPC_REQUIRED_INVOICE_ADDRESS}
                                                <u>{l s='Remember to set your invoice address.' mod='onepagecheckoutps'}</u>
                                            {else}
                                                <u>{l s='Do you want to enter another address for billing?' mod='onepagecheckoutps'}</u>
                                            {/if}
                                        </div>
                                    </div>
                                {/if*}
                                <div class="row">
                                    <div class="fields_required col-xs-12 clear clearfix">
                                        <span>{l s='The fields with red asterisks(*) are required.' mod='onepagecheckoutps'}</span>
                                    </div>
                                </div>

                                <div id="action_address_delivery" class="row {if !$customer.is_logged}hidden{/if}">
                                    <div class="col-sm-5 col-xs-12 pts-nopadding-left">
                                        <button type="reset" id="btn_cancel_address_delivery" class="btn btn-link btn-sm btn-block">
                                            <i class="fa-pts fa-pts-reply"></i>
                                            {l s='Cancel' mod='onepagecheckoutps'}
                                        </button>
                                    </div>
                                    <div class="col-sm-7 col-xs-12 pts-nopadding-right">
                                        <button type="button" id="btn_update_address_delivery" class="btn btn-primary btn-sm btn-block pull-right">
                                            <i class="fa-pts fa-pts-save fa-pts-lg"></i>
                                            {l s='Update' mod='onepagecheckoutps'}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {else}
            <input type="hidden" id="delivery_id" value="{$id_address_delivery|intval}"/>
        {/if}
        {if !$register_customer or (!$customer.is_logged and $register_customer)}
            {if isset($OPC_FIELDS[$OPC_GLOBALS->object->invoice]) && sizeof($OPC_FIELDS[$OPC_GLOBALS->object->invoice]) > 1 && $CONFIGS.OPC_ENABLE_INVOICE_ADDRESS}
                {if !$CONFIGS.OPC_REQUIRED_INVOICE_ADDRESS}
                    <label for="checkbox_create_invoice_address">
                        <input type="checkbox" name="checkbox_create_invoice_address" id="checkbox_create_invoice_address" class="input_checkbox not_unifrom not_uniform"/>
                        {l s='I want to set another address for my invoice.' mod='onepagecheckoutps'}
                    </label>
                {/if}
                <div id="panel_address_invoice" class="card hidden">
                    <div class="card-header">
                        <h5 class="card-title">
                            <a data-toggle="collapse" href="#invoice_address_container">
                                <i class="more-less fa-pts fa-pts-angle-up pull-right"></i>
                                {l s='Select your invoice address' mod='onepagecheckoutps'}
                            </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div id="invoice_address_container" class="collapse in show">
                            <div class="row addresses_customer_container invoice" data-object="invoice"></div>

                            <form id="form_address_invoice" autocomplete="on" style="display: none;">
                                <div class="fields_container">
                                    {foreach from=$OPC_FIELDS[$OPC_GLOBALS->object->invoice] item='fields' name='f_row_fields'}
                                        <div class="row">
                                            {foreach from=$fields item='field' name='f_fields'}
                                                {include file="./controls.tpl" field=$field cant_fields=$smarty.foreach.f_fields.total}
                                            {/foreach}
                                        </div>
                                    {/foreach}

                                    <div class="row">
                                        <div class="fields_required col-xs-12 clear clearfix">
                                            <span>{l s='The fields with red asterisks(*) are required.' mod='onepagecheckoutps'}</span>
                                        </div>
                                    </div>

                                    <div id="action_address_invoice" class="row {if !$customer.is_logged}hidden{/if}">
                                        <div class="col-sm-5 col-xs-12 pts-nopadding-left">
                                            <button type="reset" id="btn_cancel_address_invoice" class="btn btn-link btn-sm btn-block">
                                                <i class="fa-pts fa-pts-reply"></i>
                                                {l s='Cancel' mod='onepagecheckoutps'}
                                            </button>
                                        </div>
                                        <div class="col-sm-7 col-xs-12 pts-nopadding-right">
                                            <button type="button" id="btn_update_address_invoice" class="btn btn-primary btn-sm btn-block pull-right">
                                                <i class="fa-pts fa-pts-save fa-pts-lg"></i>
                                                {l s='Update' mod='onepagecheckoutps'}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            {else}
                <input type="hidden" id="invoice_id" value="{$id_address_invoice|intval}"/>
            {/if}
        {/if}
{*    </div>*}
</div>

{if (!$customer.is_logged || $customer.is_guest) && $CONFIGS.OPC_ENABLE_PRIVACY_POLICY}
    <div id="div_privacy_policy">
        <p id="p_privacy_policy">
            <label for="privacy_policy">
                <input type="checkbox" class="not_unifrom not_uniform" name="privacy_policy" id="privacy_policy" value="1"/>
                {l s='I have read and accept the Privacy Policy.' mod='onepagecheckoutps'}
                <span class="read">{l s='(read)' mod='onepagecheckoutps'}</span>
            </label>
        </p>
    </div>
{/if}

{*support module: psgdpr - v1.0.0 - PrestaShop*}
{if isset($message_psgdpr)}
    <div id="gdpr_consent">
        <label for="gdpr_consent_checkbox">
            <input type="checkbox" class="not_unifrom not_uniform" name="psgdpr_consent_checkbox" id="gdpr_consent_checkbox"/>
            {$message_psgdpr nofilter}
        </label>
    </div>
{/if}

{if (!$customer.is_logged && $CONFIGS.OPC_SHOW_BUTTON_REGISTER) || $register_customer}
    <button type="button" id="btn_save_customer" class="btn btn-primary btn-lg btn-block">
        <i class="fa-pts fa-pts-save fa-pts-lg"></i>
        {l s='Save information' mod='onepagecheckoutps'}
    </button>
{/if}

<div class="row">
    {include file='./custom_html/address.tpl'}
</div>