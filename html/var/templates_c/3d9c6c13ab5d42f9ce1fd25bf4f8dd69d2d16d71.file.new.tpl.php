<?php /* Smarty version Smarty-3.1.21, created on 2020-12-02 13:46:28
         compiled from "/var/www/html/modules/themes_system/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11844224605fc73844e0c433-32119871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d9c6c13ab5d42f9ce1fd25bf4f8dd69d2d16d71' => 
    array (
      0 => '/var/www/html/modules/themes_system/themes/default/new.tpl',
      1 => 1538488365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11844224605fc73844e0c433-32119871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHANGE' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc73844e2c447_43968508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc73844e2c447_43968508')) {function content_5fc73844e2c447_43968508($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
	<td>
          <input class="button" type="submit" name="changeTheme" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE']->value;?>
" >
	</td>
    </tr>
</table>
<table class="tabForm" width="100%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['themes']->value['LABEL'];?>
:</b></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['themes']->value['INPUT'];?>
</td>
    </tr>
</table>
</form><?php }} ?>
