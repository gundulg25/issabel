<?php /* Smarty version Smarty-3.1.21, created on 2020-12-02 13:46:34
         compiled from "/var/www/html/modules/language/themes/default/language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1772584125fc7384af1e485-20111503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848c96116fb4043adab1aa6566b8acd6c3f49ecf' => 
    array (
      0 => '/var/www/html/modules/language/themes/default/language.tpl',
      1 => 1538488365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772584125fc7384af1e485-20111503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CAMBIAR' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc7384af3d8c0_44023867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc7384af3d8c0_44023867')) {function content_5fc7384af3d8c0_44023867($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
    <td>
        <input class="button" type="submit" name="save_language" value="<?php echo $_smarty_tpl->tpl_vars['CAMBIAR']->value;?>
" >
	</td>
    </tr>
</table>
<table class="tabForm" width="100%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['language']->value['LABEL'];?>
:</b></td>
        <td width="35%"><?php echo $_smarty_tpl->tpl_vars['language']->value['INPUT'];?>
</td>
    </tr>
</table>
</form><?php }} ?>
