<?php /* Smarty version Smarty-3.1.21, created on 2020-12-30 10:15:01
         compiled from "/var/www/html/modules/sec_ports/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1685166155febf0b501d249-74491064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aafec20e1b5ab9284e95496863ffb2d8dd5920c8' => 
    array (
      0 => '/var/www/html/modules/sec_ports/themes/default/filter.tpl',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1685166155febf0b501d249-74491064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_type' => 0,
    'filter_txt' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5febf0b5040251_13094249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5febf0b5040251_13094249')) {function content_5febf0b5040251_13094249($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="left">
            <?php echo $_smarty_tpl->tpl_vars['filter_type']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_type']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_txt']->value['INPUT'];?>

            <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
        </td>
    </tr>
</table>
<?php }} ?>
