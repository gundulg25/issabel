<?php /* Smarty version Smarty-3.1.21, created on 2020-11-16 02:50:20
         compiled from "/var/www/html/modules/billing_rates/themes/default/view_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10958880115fb22f3c354925-75910542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f290db9f57425d143112e4c8c543cfb3936ebaf1' => 
    array (
      0 => '/var/www/html/modules/billing_rates/themes/default/view_rate.tpl',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10958880115fb22f3c354925-75910542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'EDIT' => 0,
    'name' => 0,
    'DELETE' => 0,
    'CONFIRM_CONTINUE' => 0,
    'CANCEL' => 0,
    'Prefix' => 0,
    'prefix' => 0,
    'Rate' => 0,
    'by_min' => 0,
    'currency' => 0,
    'rate' => 0,
    'Creation_Date' => 0,
    'creation_date' => 0,
    'Name' => 0,
    'Rate_offset' => 0,
    'rate_offset' => 0,
    'Trunk' => 0,
    'trunk' => 0,
    'Hidden_Digits' => 0,
    'hidden_digits' => 0,
    'id_rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb22f3c3fcda9_25838391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb22f3c3fcda9_25838391')) {function content_5fb22f3c3fcda9_25838391($_smarty_tpl) {?><form method="POST" action="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">
			 <?php if ($_smarty_tpl->tpl_vars['name']->value!='Default') {?>
          <input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')">
			 <?php }?>
			 <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
		  </td>        
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
			<td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['LABEL'];?>
: </b></td>
			<td width="25%"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['by_min']->value;?>
:</b></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Creation_Date']->value['LABEL'];?>
: </b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['creation_date']->value;?>
</td>
      </tr>
      <tr>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Name']->value['LABEL'];?>
: </b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['LABEL'];?>
: </b></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['rate_offset']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['LABEL'];?>
: </b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['trunk']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['LABEL'];?>
: </b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['hidden_digits']->value;?>
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
