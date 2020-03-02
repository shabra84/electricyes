<div class="m-b-1 m-t-1">
    <h2>{l s='Agregue los Atributos que se pediran en las Propiedades' mod='hhproduct'}</h2>
    
        <fieldset class="form-group">
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 1' mod='hhproduct'}</label>
                {if $atributo_1 && $atributo_1 != ''}{$atributo_1}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 2' mod='hhproduct'}</label>
                {if $atributo_2 && $atributo_2 != ''}{$atributo_2}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 3' mod='hhproduct'}</label>
                {if $atributo_3 && $atributo_3 != ''}{$atributo_3}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 4' mod='hhproduct'}</label>
                {if $atributo_4 && $atributo_4 != ''}{$atributo_4}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 5' mod='hhproduct'}</label>
                {if $atributo_5 && $atributo_5 != ''}{$atributo_5}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 6' mod='hhproduct'}</label>
                {if $atributo_6 && $atributo_6 != ''}{$atributo_6}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 7' mod='hhproduct'}</label>
                {if $atributo_7 && $atributo_7 != ''}{$atributo_7}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 8' mod='hhproduct'}</label>
                {if $atributo_8 && $atributo_8 != ''}{$atributo_8}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 9' mod='hhproduct'}</label>
                {if $atributo_9 && $atributo_9 != ''}{$atributo_9}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Atributo 10' mod='hhproduct'}</label>
                {if $atributo_10 && $atributo_10 != ''}{$atributo_10}{/if}
            </div> 
            <!--
            <div class="col-lg-12 col-xl-12">        
                <label class="form-control-label">{l s='my custom lang field wysiwyg' mod='hhproduct'}</label>
                <div class="translations tabbable">
                    <div class="translationsFields tab-content bordered">
                        {foreach from=$languages item=language }
                            <div class="tab-pane translation-label-{$language.iso_code} {if $default_language == $language.id_lang}active{/if}">
                               <textarea name="custom_field_lang_wysiwyg_{$language.id_lang}" class="autoload_rte">{if isset({$custom_field_lang_wysiwyg[$language.id_lang]}) && {$custom_field_lang_wysiwyg[$language.id_lang]} != ''}{$custom_field_lang_wysiwyg[$language.id_lang]}{/if}</textarea>    
                            </div>    
                        {/foreach}    
                    </div>
                </div>
            </div>
            -->
            
        </fieldset>
    
        <div class="clearfix"></div>
</div>

<div class="m-b-1 m-t-1">
    <h2>{l s='Agregue el Numero de conexiones de la pieza' mod='hhproduct'}</h2>
    
        <fieldset class="form-group">
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Arriba' mod='hhproduct'}</label>
                {if $coordenada_1 && $coordenada_1 != ''}{$coordenada_1}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Abajo' mod='hhproduct'}</label>
                {if $coordenada_3 && $coordenada_3 != ''}{$coordenada_3}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Derecha' mod='hhproduct'}</label>
                {if $coordenada_2 && $coordenada_2 != ''}{$coordenada_2}{/if}
            </div>
            <div class="col-lg-12 col-xl-4">
                <label class="form-control-label">{l s='Izquierda' mod='hhproduct'}</label>
                {if $coordenada_4 && $coordenada_4 != ''}{$coordenada_4}{/if}
            </div>
            
        </fieldset>
    
        <div class="clearfix"></div>
</div>