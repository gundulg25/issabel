<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 22:57:04
         compiled from "/var/www/html/modules/shutdown/themes/default/shutdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8416549135fc7109000be04-08809741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7721f98f89a786aab773380f7f6f074d8625ff4' => 
    array (
      0 => '/var/www/html/modules/shutdown/themes/default/shutdown.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8416549135fc7109000be04-08809741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACCEPT' => 0,
    'CONFIRM_CONTINUE' => 0,
    'HALT' => 0,
    'REBOOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc7109002c083_74354172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc7109002c083_74354172')) {function content_5fc7109002c083_74354172($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="submit_accept" value="<?php echo $_smarty_tpl->tpl_vars['ACCEPT']->value;?>
" onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')">
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="1">&nbsp;<?php echo $_smarty_tpl->tpl_vars['HALT']->value;?>
 </td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="2" checked>&nbsp;<?php echo $_smarty_tpl->tpl_vars['REBOOT']->value;?>
</td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }} ?>
