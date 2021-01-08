<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:49
         compiled from "/var/www/html/modules/remote_smtp/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10303158095fb1f4fd8bf800-35128531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527fe3edc69776db3da4441199c4614bccb5e8f7' => 
    array (
      0 => '/var/www/html/modules/remote_smtp/themes/default/form.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10303158095fb1f4fd8bf800-35128531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIGURATION_UPDATE' => 0,
    'REQUIRED_FIELD' => 0,
    'status' => 0,
    'MSG_REMOTE_SMTP' => 0,
    'SMTP_Server' => 0,
    'relayhost' => 0,
    'port' => 0,
    'user' => 0,
    'Example' => 0,
    'password' => 0,
    'autentification' => 0,
    'MSG_REMOTE_AUT' => 0,
    'lbldomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4fd8f0002_39404601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4fd8f0002_39404601')) {function content_5fb1f4fd8f0002_39404601($_smarty_tpl) {?><table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td>
            <input class="button" name="save" value="<?php echo $_smarty_tpl->tpl_vars['CONFIGURATION_UPDATE']->value;?>
" type="submit" />&nbsp;&nbsp;
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%" >
    <tr class="letra12">
        <td align="left" width="9%"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
:</b></td>
        <td align="left" width="34%"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
        <td rowspan='5' width="40%"><?php echo $_smarty_tpl->tpl_vars['MSG_REMOTE_SMTP']->value;?>
</td>
        <td rowspan="5" width="10%">&nbsp;</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['LABEL'];?>
:</b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['port']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['user']->value['INPUT'];?>
 &nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['Example']->value;?>
. <span id="example">example@domain.com</span>)</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['password']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['password']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['autentification']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['autentification']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['MSG_REMOTE_AUT']->value;?>
</td>
    </tr>
</table>

<input type="hidden" name="lbldomain" id="lbldomain" value="<?php echo $_smarty_tpl->tpl_vars['lbldomain']->value;?>
"/><?php }} ?>
