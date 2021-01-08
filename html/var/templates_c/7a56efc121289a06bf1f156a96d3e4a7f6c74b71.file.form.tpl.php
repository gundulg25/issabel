<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:59
         compiled from "/var/www/html/modules/vacations/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6794112415fb1f5073b8af4-35474427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a56efc121289a06bf1f156a96d3e4a7f6c74b71' => 
    array (
      0 => '/var/www/html/modules/vacations/themes/default/form.tpl',
      1 => 1526474513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6794112415fb1f5073b8af4-35474427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activate' => 0,
    'DISACTIVATE_MESSAGE' => 0,
    'ACTIVATE_MESSAGE' => 0,
    'REQUIRED_FIELD' => 0,
    'DATE' => 0,
    'FROM' => 0,
    'ini_date' => 0,
    'TO' => 0,
    'end_date' => 0,
    'num_days' => 0,
    'days' => 0,
    'email' => 0,
    'link_emails' => 0,
    'subject' => 0,
    'body' => 0,
    'ID' => 0,
    'title_popup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f5073f42a8_37572756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f5073f42a8_37572756')) {function content_5fb1f5073f42a8_37572756($_smarty_tpl) {?><table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left">
	    <?php if ($_smarty_tpl->tpl_vars['activate']->value=='enabled') {?>
	    <input class="button" id="actionVacation" type="submit" name="disactivate" value="<?php echo $_smarty_tpl->tpl_vars['DISACTIVATE_MESSAGE']->value;?>
">
	    <?php } else { ?>
	    <input class="button" id="actionVacation" type="submit" name="activate" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVATE_MESSAGE']->value;?>
">
	    <?php }?>
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" width="100%" >
    <tr class="letra12">
        <td align="left" width="10%"><b><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
: <span  class="required">*</span></b></td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['FROM']->value;?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['ini_date']->value['INPUT'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['TO']->value;?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['end_date']->value['INPUT'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<b><span id="num_days"><?php echo $_smarty_tpl->tpl_vars['num_days']->value;?>
</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['days']->value;?>
</b></td>
    </tr>
    <tr class="letra12">
        <td align="left" width="10%"><b><?php echo $_smarty_tpl->tpl_vars['email']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['email']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['link_emails']->value;?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['subject']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['subject']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['body']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['body']->value['INPUT'];?>
</td>
    </tr>
</table>
<input class="button" type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
<input class="button" type="hidden" name="title_popup" id="title_popup" value="<?php echo $_smarty_tpl->tpl_vars['title_popup']->value;?>
" />
<input type="hidden" id="lblDisactivate" name="lblDisactivate" value="<?php echo $_smarty_tpl->tpl_vars['DISACTIVATE_MESSAGE']->value;?>
" />
<input type="hidden" id="lblActivate" name="lblActivate" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVATE_MESSAGE']->value;?>
" /><?php }} ?>
