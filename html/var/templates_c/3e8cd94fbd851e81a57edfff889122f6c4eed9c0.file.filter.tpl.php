<?php /* Smarty version Smarty-3.1.21, created on 2020-10-23 02:08:32
         compiled from "/var/www/html/modules/reports_break/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7350611475f927360647af7-69393946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e8cd94fbd851e81a57edfff889122f6c4eed9c0' => 
    array (
      0 => '/var/www/html/modules/reports_break/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7350611475f927360647af7-69393946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'txt_fecha_init' => 0,
    'txt_fecha_end' => 0,
    'btn_consultar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f927360667044_86439296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f927360667044_86439296')) {function content_5f927360667044_86439296($_smarty_tpl) {?>  <table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['INPUT'];?>
</td>
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['INPUT'];?>
</td>
        <td width="8%" align="center">
            <input class="button" type="submit" name="submit_fecha" value="<?php echo $_smarty_tpl->tpl_vars['btn_consultar']->value;?>
" >
        </td>
      </tr>
   </table>
<?php }} ?>
