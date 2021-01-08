<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 23:00:10
         compiled from "/var/www/html/modules/_issabelutils/themes/default/_change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13455996875fc7114ad57e57-35004728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e92e4c44cf5fd3803caaca9f3df48d0750c2702' => 
    array (
      0 => '/var/www/html/modules/_issabelutils/themes/default/_change_password.tpl',
      1 => 1538488365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13455996875fc7114ad57e57-35004728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'CURRENT_PASSWORD' => 0,
    'NEW_PASSWORD' => 0,
    'RETYPE_PASSWORD' => 0,
    'CHANGE_PASSWORD_BTN' => 0,
    'CURRENT_PASSWORD_ALERT' => 0,
    'NEW_RETYPE_PASSWORD_ALERT' => 0,
    'PASSWORDS_NOT_MATCH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc7114ad9f208_01114183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc7114ad9f208_01114183')) {function content_5fc7114ad9f208_01114183($_smarty_tpl) {?><?php echo '<script'; ?>
 type='text/javascript' src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/js/change_password.js"><?php echo '</script'; ?>
>
<table class='tabForm' width='100%' >
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass' name='curr_pass' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass_new' name='curr_pass_new' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['RETYPE_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass_renew' name='curr_pass_renew' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='center' colspan='2'><input type='button' id='sendChanPass' name='sendChanPss' value='<?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD_BTN']->value;?>
' /></td>
    </tr>
</table>
<input type="hidden" id="lblCurrentPassAlert" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblNewRetypePassAlert"   value="<?php echo $_smarty_tpl->tpl_vars['NEW_RETYPE_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblPassNoTMatchAlert" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORDS_NOT_MATCH']->value;?>
" />
<?php }} ?>
