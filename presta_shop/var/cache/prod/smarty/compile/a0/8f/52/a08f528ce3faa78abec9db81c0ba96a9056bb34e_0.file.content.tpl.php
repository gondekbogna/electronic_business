<?php
/* Smarty version 3.1.39, created on 2021-11-04 16:24:31
  from '/var/www/html/main/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6183fb2f2836f1_87338054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08f528ce3faa78abec9db81c0ba96a9056bb34e' => 
    array (
      0 => '/var/www/html/main/themes/new-theme/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6183fb2f2836f1_87338054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
