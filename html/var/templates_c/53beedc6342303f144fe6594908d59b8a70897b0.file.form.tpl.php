<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:46
         compiled from "/var/www/html/modules/antispam/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11314657675fb1f4faac8162-47984898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53beedc6342303f144fe6594908d59b8a70897b0' => 
    array (
      0 => '/var/www/html/modules/antispam/themes/default/form.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11314657675fb1f4faac8162-47984898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UPDATE' => 0,
    'status' => 0,
    'level' => 0,
    'LEGEND' => 0,
    'politica' => 0,
    'header' => 0,
    'time_spam' => 0,
    'levelNUM' => 0,
    'statusSpam' => 0,
    'statusSieve' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4faaf3378_12894531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4faaf3378_12894531')) {function content_5fb1f4faaf3378_12894531($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left"><input class="button" type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
"></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: </b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
: </b></td>
        <td align="left" width="20%">
            <div>
                <p style="margin: 0px;">
                    <label for="amount"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
:</label>
                    <span id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;"></span>
                </p>
                <div id="slider-range-max"></div>
            </div>
        </td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['LEGEND']->value;?>
</td>
    </tr>
    <tr class="letra12" height="30px">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['politica']->value['LABEL'];?>
: </b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['politica']->value['INPUT'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['header']->value['INPUT'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['time_spam']->value['INPUT'];?>
</td>
    </tr>
</table>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['levelNUM']->value;?>
" id="levelnum" name="levelnum" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['statusSpam']->value;?>
" id="statusSpam" name="statusSpam" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['statusSieve']->value;?>
" id="statusSieve" name="statusSieve" />
<?php }} ?>
