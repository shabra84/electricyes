<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:07
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085b18c5a9_16282266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1540700049,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ddc085b18c5a9_16282266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="block_myaccount_infos" class="links">
  <h3 class="h5 hidden-sm-down">
    <a class="text-uppercase" href="https://electricyes.es/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://electricyes.es/datos-personales" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="https://electricyes.es/historial-compra" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
            <li>
          <a href="https://electricyes.es/facturas-abono" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="https://electricyes.es/direcciones" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="favorites-link" href="https://electricyes.es/module/pk_favorites/account">
  <span class="link-item">
    <svg class="svgic smooth500"><use xlink:href="#si-like-stroke"></use></svg>
    <span>My favorite products</span>
  </span>
</a>
	</ul>
</div>
<?php }
}
