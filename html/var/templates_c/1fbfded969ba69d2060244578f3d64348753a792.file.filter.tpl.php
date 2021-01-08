<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:48:53
         compiled from "/var/www/html/modules/voicemail/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5312698705fb1f6a595e0b9-26203150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbfded969ba69d2060244578f3d64348753a792' => 
    array (
      0 => '/var/www/html/modules/voicemail/themes/default/filter.tpl',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5312698705fb1f6a595e0b9-26203150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'date_end' => 0,
    'Filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f6a5984c01_53208016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f6a5984c01_53208016')) {function content_5fb1f6a5984c01_53208016($_smarty_tpl) {?>    <table width="99%" cellpadding="4" cellspacing="0" border="0" align="center">
      <tr class="letra12">
        <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" ></td>
      </tr>
   </table>
<a href="javascript:seleccionar_checkbox(1)">Marcar todos</a> | <a href="javascript:seleccionar_checkbox(0)">Desmarcar Todos</a>
<?php }} ?>
