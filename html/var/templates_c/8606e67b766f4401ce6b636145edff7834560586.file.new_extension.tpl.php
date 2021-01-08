<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 23:02:52
         compiled from "/var/www/html/modules/userlist/plugins/extension/tpl/new_extension.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21147717445fc711ece251e0-42929845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8606e67b766f4401ce6b636145edff7834560586' => 
    array (
      0 => '/var/www/html/modules/userlist/plugins/extension/tpl/new_extension.tpl',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21147717445fc711ece251e0-42929845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LBL_EXTENSION_FIELDS' => 0,
    'extension' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc711ece6a284_92666293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc711ece6a284_92666293')) {function content_5fc711ece6a284_92666293($_smarty_tpl) {?><fieldset>
    <legend><img src="images/call.png" width="22" height="22" />&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['LBL_EXTENSION_FIELDS']->value;?>
</b></legend>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
        <tr>
            <td width="20%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['LABEL'];?>
:</td>
            <td width="30%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['INPUT'];?>
</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
</fieldset>
<?php }} ?>
