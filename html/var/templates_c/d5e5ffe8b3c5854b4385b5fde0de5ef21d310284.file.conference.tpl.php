<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:48:59
         compiled from "/var/www/html/modules/conference/themes/default/conference.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7083010735fb1f6ab3c7f88-57385015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e5ffe8b3c5854b4385b5fde0de5ef21d310284' => 
    array (
      0 => '/var/www/html/modules/conference/themes/default/conference.tpl',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7083010735fb1f6ab3c7f88-57385015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accion' => 0,
    'UPDATE' => 0,
    'CANCEL' => 0,
    'INVITE_CALLER' => 0,
    'device' => 0,
    'KICK_ALL' => 0,
    'conference' => 0,
    'filter' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f6ab3f4d64_16717272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f6ab3f4d64_16717272')) {function content_5fb1f6ab3f4d64_16717272($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['accion']->value=="show_callers") {?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td width="5%" align="right"><input class="button" type="submit" name="update_show_callers" value="<?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
"></td>
        <td width="5%" align="right"><input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
        <td width="10%" align="right"><input class="button" type="submit" name="caller_invite" value="<?php echo $_smarty_tpl->tpl_vars['INVITE_CALLER']->value;?>
"></td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['device']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="callers_kick_all" value="<?php echo $_smarty_tpl->tpl_vars['KICK_ALL']->value;?>
"></td>
    </tr>
</table>
<?php } else { ?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td width="3%" align="right"><?php echo $_smarty_tpl->tpl_vars['conference']->value['LABEL'];?>
: </td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['conference']->value['INPUT'];?>
</td>
        <td width="5%" align="right"><?php echo $_smarty_tpl->tpl_vars['filter']->value['LABEL'];?>
: </td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['filter']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
"></td>
    </tr>
</table>
<?php }?><?php }} ?>
