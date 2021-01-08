<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:40:28
         compiled from "/var/www/html/modules/dhcp_by_mac/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668969295fb1f4ac0eecf4-39461032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170b0daaf00aec412bf23850a29d33ca68196adb' => 
    array (
      0 => '/var/www/html/modules/dhcp_by_mac/themes/default/filter.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668969295fb1f4ac0eecf4-39461032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_field' => 0,
    'filter_value' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4ac114513_05106519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4ac114513_05106519')) {function content_5fb1f4ac114513_05106519($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="left">
            <?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

            <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
        </td>
    </tr>
</table><?php }} ?>
