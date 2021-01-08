<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 23:02:52
         compiled from "/var/www/html/modules/userlist/plugins/webmail/tpl/new_webmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9247210935fc711ece94512-76559674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8469b51da5b90d1c4e43c1d7582d9b22d74d74f1' => 
    array (
      0 => '/var/www/html/modules/userlist/plugins/webmail/tpl/new_webmail.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9247210935fc711ece94512-76559674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LBL_WEBMAIL_FIELDS' => 0,
    'webmailuser' => 0,
    'webmaildomain' => 0,
    'webmailpassword1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc711ecebc8d0_73368787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc711ecebc8d0_73368787')) {function content_5fc711ecebc8d0_73368787($_smarty_tpl) {?><fieldset>
    <legend><img src="images/email.png" width="22" height="22" />&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['LBL_WEBMAIL_FIELDS']->value;?>
</b></legend>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['LABEL'];?>
: </td>
        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['INPUT'];?>
</td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['LABEL'];?>
: </td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['INPUT'];?>
</td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['INPUT'];?>
</td>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
</fieldset>
<?php }} ?>
