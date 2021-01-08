<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:44
         compiled from "/var/www/html/modules/email_relay/themes/default/form_relay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16014708645fb1f4f8c5fad2-30722883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3640efaf66b2571397b999b98347d3536ef323e' => 
    array (
      0 => '/var/www/html/modules/email_relay/themes/default/form_relay.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16014708645fb1f4f8c5fad2-30722883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'EMAIL_RELAY_MSG' => 0,
    'RELAY_CONTENT' => 0,
    'APPLY_CHANGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4f8c7f822_84074976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4f8c7f822_84074976')) {function content_5fb1f4f8c7f822_84074976($_smarty_tpl) {?><form method='POST' action="?menu=email_relay">
 <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center"  class="tabForm">
  <tr>
    <td><i><?php echo $_smarty_tpl->tpl_vars['EMAIL_RELAY_MSG']->value;?>
</i></td>
    <td>
       <textarea name='redes_relay' cols='40' rows='8'><?php echo $_smarty_tpl->tpl_vars['RELAY_CONTENT']->value;?>
</textarea>
    </td>
  </tr>
  <tr>
   <td></td>
    <td align='left'>
      <input type='submit' name='update_relay' value='<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
'>
    </td>
  </tr>
 </table>
</form><?php }} ?>
