<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:50
         compiled from "/var/www/html/modules/email_list/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13393920215fb1f4fed735b0-58414415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5e1e5cc7cb03ad57e296d78ce1b43d1901cd1a' => 
    array (
      0 => '/var/www/html/modules/email_list/themes/default/filter.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13393920215fb1f4fed735b0-58414415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VirtualDomains' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4fed94bc6_55558852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4fed94bc6_55558852')) {function content_5fb1f4fed94bc6_55558852($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['VirtualDomains']->value) {?>
    <table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
	<tr class="letra12">
	    <td width="5%" align="right"><?php echo $_smarty_tpl->tpl_vars['domain']->value['LABEL'];?>
: </td>
	    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['domain']->value['INPUT'];?>
</td>
	</tr>
    </table>
<?php }?><?php }} ?>
