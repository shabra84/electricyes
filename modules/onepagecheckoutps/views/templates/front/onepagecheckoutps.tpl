{*
    * We offer the best and most useful modules PrestaShop and modifications for your online store.
    *
    * We are experts and professionals in PrestaShop
    *
    * @author    PresTeamShop.com <support@presteamshop.com>
    * @copyright 2011-2018 PresTeamShop
    * @license   see file: LICENSE.txt
    * @category  PrestaShop
    * @category  Module
*}

{extends file=$layout}

{block name='content'}
    <section id="main">
        {$onepagecheckoutps->includeTpl('theme.tpl', ['CONFIGS' => $OnePageCheckoutPS.CONFIGS]) nofilter}

        <div id="onepagecheckoutps" class="js-current-step {if $register_customer}rc{/if}">
            <input type="hidden" id="logged" value="{$customer.is_logged|intval}" />

            <div class="loading_big">
                <div class="loader">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>

            {hook h='emailVerificationOPC'}

            {if !$register_customer}
                <div id="onepagecheckoutps_header" class="col-xs-12 col-12">
                    <div class="row">
                        <div id="div_onepagecheckoutps_info" class="{if $customer.is_logged}col-md-8{/if} col-sm-12 col-xs-12 col-12">
                            <h1>{l s='Quick Checkout' mod='onepagecheckoutps'}</h1>
                            <p>{l s='Complete the following fields to process your order.' mod='onepagecheckoutps'}</p>
                        </div>
                        {if $customer.is_logged}
                            <div id="div_onepagecheckoutps_login" class="col-md-4 col-sm-12 col-xs-12 col-12">
                                <div class="text-md-right">
                                    <p>
                                        {l s='Welcome' mod='onepagecheckoutps'},&nbsp;
                                        <a href="{$urls.pages.my_account}">
                                            <b>{$customer.firstname} {$customer.lastname}</b>
                                        </a>
                                        <br/>
                                        <button id="btn-logout" data-link="{$urls.actions.logout}" title="{l s='Log me out' mod='onepagecheckoutps'}" class="btn btn-primary btn-sm">
                                            <i class="fa-pts fa-pts-sign-out fa-pts-1x"></i>
                                            {l s='Log out' mod='onepagecheckoutps'}
                                        </button>
                                    </p>
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
            {/if}

            <div class="row">
                {$onepagecheckoutps->includeTpl('custom_html/header.tpl', []) nofilter}
            </div>

            <div id="onepagecheckoutps_contenedor" class="col-xs-12 col-12">
                <div id="onepagecheckoutps_forms" class="hidden"></div>
                <div id="opc_temporal" class="hidden"></div>

                {if !$customer.is_logged}
                    <div id="opc_login" class="hidden" title="{l s='Login' mod='onepagecheckoutps'}">
                        <div class="login-box">
                            {if isset($opc_social_networks) && ($opc_social_networks->facebook->client_id neq '' || $opc_social_networks->google->client_id neq '')}
                                <section id="opc_social_networks">
                                    {foreach from=$opc_social_networks key='name' item='network'}
                                        {if $network->client_id neq ''}
                                            <button type="button" class="btn btn-sm btn-{$name}" onclick="Fronted.openWindow('{$link->getModuleLink('onepagecheckoutps', 'login', ['sv' => $network->network])}', true)">
                                                <i class="fa-pts fa-pts-1x fa-pts-{$network->class_icon}"></i>
                                                {$network->name_network}
                                            </button>
                                        {/if}
                                    {/foreach}
                                </section>
                                <br/>
                            {/if}
                            <form id="form_login" autocomplete="off">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa-pts fa-pts-envelope-o fa-pts-fw"></i></span>
                                    <input
                                        id="txt_login_email"
                                        class="form-control"
                                        type="text"
                                        placeholder="{l s='E-mail' mod='onepagecheckoutps'}"
                                        data-validation="isEmail"
                                    />
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa-pts fa-pts-key fa-pts-fw"></i></span>
                                    <input
                                        id="txt_login_password"
                                        class="form-control"
                                        type="password"
                                        placeholder="{l s='Password' mod='onepagecheckoutps'}"
                                        data-validation="length"
                                        data-validation-length="min5"
                                    />
                                </div>
                                <br/>
                                <div class="alert alert-warning  pts-nopadding hidden"></div>
                                <br/>
                                <button type="button" id="btn_login" class="btn btn-info btn-block">
                                    <i class="fa-pts fa-pts-lock fa-pts-lg"></i>
                                    {l s='Login' mod='onepagecheckoutps'}
                                </button>

                                <p class="forget_password">
                                    <a href="{$urls.pages.password}">{l s='Forgot your password?' mod='onepagecheckoutps'}</a>
                                </p>
                            </form>
                        </div>
                    </div>
                {/if}
                <div class="row">
                    {foreach from=$position_steps item=column}
                        <div class="{$column.classes}">
                            <div class="row">
                                {foreach from=$column.rows item=row}
                                    {$onepagecheckoutps->includeTpl('steps/'|cat:$row.name_step|cat:'.tpl', [register_customer => $register_customer, classes => $row.classes, 'CONFIGS' => $OnePageCheckoutPS.CONFIGS, 'OnePageCheckoutPS' => $OnePageCheckoutPS]) nofilter}
                                {/foreach}
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>

            <div class="row">
                {$onepagecheckoutps->includeTpl('custom_html/footer.tpl', []) nofilter}
            </div>

            <div id="payment-confirmation" class="hidden"><div class="ps-shown-by-js"><button class="button btn-primary" type="submit"></button></div></div>

            <div class="clear clearfix"></div>
        </div>
    </section>
{/block}