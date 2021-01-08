<?php /* Smarty version Smarty-3.1.21, created on 2020-11-16 02:44:16
         compiled from "/var/www/html/modules/billing_rates/themes/default/new_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328004515fb22dd0087006-29236051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c949912928f78f913981405379eeaf8b7321e45' => 
    array (
      0 => '/var/www/html/modules/billing_rates/themes/default/new_rate.tpl',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '328004515fb22dd0087006-29236051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'Prefix' => 0,
    'Rate' => 0,
    'by_min' => 0,
    'currency' => 0,
    'Hidden_Digits' => 0,
    'Name' => 0,
    'Rate_offset' => 0,
    'Trunk' => 0,
    'id_rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb22dd0138058_45411457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb22dd0138058_45411457')) {function content_5fb22dd0138058_45411457($_smarty_tpl) {?><form method="POST" action="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="submit_save_rate" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td> 
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
			<td width="15%"><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['LABEL'];?>
: <span  class="required">*</span></td>
			<td width="25%"><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['INPUT'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Rate']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['by_min']->value;?>
:<span  class="required">*</span></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['INPUT'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['LABEL'];?>
: <span  class="required">*</span></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['INPUT'];?>
</td>
      </tr>
      <tr>
			<td><?php echo $_smarty_tpl->tpl_vars['Name']->value['LABEL'];?>
: <span  class="required">*</span></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Name']->value['INPUT'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['LABEL'];?>
: <span  class="required">*</span></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['INPUT'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['LABEL'];?>
: <span  class="required">*</span></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_rate" value="<?php echo $_smarty_tpl->tpl_vars['id_rate']->value;?>
">
</form>
<?php }} ?>
