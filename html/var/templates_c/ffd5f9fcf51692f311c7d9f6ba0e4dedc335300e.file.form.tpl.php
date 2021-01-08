<?php /* Smarty version Smarty-3.1.21, created on 2020-11-03 04:00:13
         compiled from "/var/www/html/modules/sec_advanced_settings/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1008577825fa11c1d660856-98830453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd5f9fcf51692f311c7d9f6ba0e4dedc335300e' => 
    array (
      0 => '/var/www/html/modules/sec_advanced_settings/themes/default/form.tpl',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1008577825fa11c1d660856-98830453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'subtittle1' => 0,
    'status_ipbx_frontend' => 0,
    'value_ipbx_frontend' => 0,
    'status_anonymous_sip' => 0,
    'value_anonymous_sip' => 0,
    'subtittle2' => 0,
    'ipbx_password' => 0,
    'ipbx_confirm_passwrod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fa11c1d690c28_57181963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa11c1d690c28_57181963')) {function content_5fa11c1d690c28_57181963($_smarty_tpl) {?><table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
        <td align="left">
            <input class="button" type="submit" name="update_advanced_security_settings" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
        </td>
        <?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr>
	<td  width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b class='form-label-style'><?php echo $_smarty_tpl->tpl_vars['subtittle1']->value;?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $_smarty_tpl->tpl_vars['status_ipbx_frontend']->value['LABEL'];?>
:</b>
                    </td>
		    <td align="left" ><input type="hidden" name="oldstatus_ipbx_frontend" id="oldstatus_ipbx_frontend" value="<?php if ($_smarty_tpl->tpl_vars['value_ipbx_frontend']->value) {?>1<?php } else { ?>0<?php }?>" /><input type="checkbox" name="status_ipbx_frontend" id="status_ipbx_frontend" <?php if ($_smarty_tpl->tpl_vars['value_ipbx_frontend']->value) {?>checked="checked"<?php }?> /></td>
		</tr>
        <tr class="letra12">
            <td align="left" ><b><?php echo $_smarty_tpl->tpl_vars['status_anonymous_sip']->value['LABEL'];?>
:</b></td>
            <td align="left" ><input type="hidden" name="oldstatus_anonymous_sip" id="oldstatus_anonymous_sip" value="<?php if ($_smarty_tpl->tpl_vars['value_anonymous_sip']->value) {?>1<?php } else { ?>0<?php }?>" /><input type="checkbox" name="status_anonymous_sip" id="status_anonymous_sip" <?php if ($_smarty_tpl->tpl_vars['value_anonymous_sip']->value) {?>checked="checked"<?php }?> /></td>
        </tr>
	    </table>
	</td>
	<td width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b class='form-label-style'><?php echo $_smarty_tpl->tpl_vars['subtittle2']->value;?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $_smarty_tpl->tpl_vars['ipbx_password']->value['LABEL'];?>
:</b>                        
                    </td>
		    <td align="left" ><?php echo $_smarty_tpl->tpl_vars['ipbx_password']->value['INPUT'];?>
</td>
		</tr>
		<tr class="letra12">
		    <td align="left" ><b><?php echo $_smarty_tpl->tpl_vars['ipbx_confirm_passwrod']->value['LABEL'];?>
:</b></td>
		    <td align="left" ><?php echo $_smarty_tpl->tpl_vars['ipbx_confirm_passwrod']->value['INPUT'];?>
</td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<?php }} ?>
