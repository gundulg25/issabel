<?php /* Smarty version Smarty-3.1.21, created on 2020-11-16 02:59:58
         compiled from "/var/www/html/modules/billing_rates/themes/default/edit_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19808412875fb2317e5176c0-76016239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d498bc28b365a9c0bde20d00b381a9ca26eabbd' => 
    array (
      0 => '/var/www/html/modules/billing_rates/themes/default/edit_rate.tpl',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19808412875fb2317e5176c0-76016239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'APPLY_CHANGES' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'checkUpdate' => 0,
    'text_info' => 0,
    'name' => 0,
    'Prefix' => 0,
    'Rate' => 0,
    'by_min' => 0,
    'currency' => 0,
    'Hidden_Digits' => 0,
    'Name' => 0,
    'Rate_offset' => 0,
    'Trunk' => 0,
    'prefix' => 0,
    'History' => 0,
    'Creation_Date' => 0,
    'Date_close' => 0,
    'Status' => 0,
    'arrRates' => 0,
    'rate' => 0,
    'id2' => 0,
    'rate2' => 0,
    'Current' => 0,
    'Obsolete' => 0,
    'id_rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb2317e607c35_54440343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb2317e607c35_54440343')) {function content_5fb2317e607c35_54440343($_smarty_tpl) {?><form method="POST" action="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" ></td>
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
            <td align="right" colspan="6"><span style="font-weight:bold; font-style: italic; color:#E35332; font-size: 14px;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['checkUpdate']->value['LABEL'];?>
</span><?php echo $_smarty_tpl->tpl_vars['checkUpdate']->value['INPUT'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-style: italic; font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['text_info']->value;?>
</span></td>
      </tr>
		<?php if ($_smarty_tpl->tpl_vars['name']->value=='Default') {?>
      <tr>
			<td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td width="25%">*</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['by_min']->value;?>
:<span  class="required">*</span></b></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['INPUT'];?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['INPUT'];?>
</td>
      </tr>
      <tr>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Name']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['INPUT'];?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td>*</td>
      </tr>
		<?php } else { ?>
	  <tr>
			<td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td width="25%"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
</td>
            <td><b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['by_min']->value;?>
: <span  class="required">*</span></b></td>
            <td><b><a style="text-decoration:none;" href="index.php?menu=currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate']->value['INPUT'];?>
</td>
            <td><b><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
            <td><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['INPUT'];?>
</td>
      </tr>
      <tr>
            <td><b><?php echo $_smarty_tpl->tpl_vars['Name']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
            <td><?php echo $_smarty_tpl->tpl_vars['Name']->value['INPUT'];?>
</td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
			<td><b><a href="index.php?menu=currency" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</a>&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['INPUT'];?>
</td>
            <td><b><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
            <td><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['INPUT'];?>
</td>
      </tr>
		<?php }?>
    </table>
  </td>
</tr>
</table>


<br />
<table width="99%" align="center" border="0" cellspacing="0" cellpadding="0" class="table_data">
    <tr class="moduleTitle">
        <td class="moduleTitle" valign="middle" colspan="8">&nbsp;&nbsp;<img src="images/1x1.gif" border="0" align="absmiddle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['History']->value;?>
</td>
    </tr>
</table>
<table width="99%" align="center" border="0" cellspacing="0" cellpadding="0" class="table_data">
    <tr class="table_title_row">
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Name']->value['LABEL'];?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Prefix']->value['LABEL'];?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Rate']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['by_min']->value;?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Rate_offset']->value['LABEL'];?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Creation_Date']->value;?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Date_close']->value;?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Trunk']->value['LABEL'];?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Hidden_Digits']->value['LABEL'];?>
</td>
        <td class="table_title_row" align="center"><?php echo $_smarty_tpl->tpl_vars['Status']->value;?>
</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrRates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rate']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['rate']->key;
 $_smarty_tpl->tpl_vars['rate']->index++;
 $_smarty_tpl->tpl_vars['rate']->first = $_smarty_tpl->tpl_vars['rate']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rates']['first'] = $_smarty_tpl->tpl_vars['rate']->first;
?>
         <tr onmouseout="this.style.backgroundColor='#ffffff';" onmouseover="this.style.backgroundColor='#f2f2f2';" style="background-color: #FFFFFF;">
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['rates']['first']) {?>
            <?php  $_smarty_tpl->tpl_vars['rate2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate2']->_loop = false;
 $_smarty_tpl->tpl_vars['id2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate2']->key => $_smarty_tpl->tpl_vars['rate2']->value) {
$_smarty_tpl->tpl_vars['rate2']->_loop = true;
 $_smarty_tpl->tpl_vars['id2']->value = $_smarty_tpl->tpl_vars['rate2']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['id2']->value!='id') {?>
                <?php if ($_smarty_tpl->tpl_vars['id2']->value=='estado') {?>
                    <?php if ($_smarty_tpl->tpl_vars['rate2']->value=='activo') {?>
                    <td class="table_data" align="center" style="color: green;"><?php echo $_smarty_tpl->tpl_vars['Current']->value;?>
</td>
                    <?php } else { ?>
                    <td class="table_data" align="center" style="color: green;"><?php echo $_smarty_tpl->tpl_vars['Obsolete']->value;?>
</td>
                    <?php }?>
                <?php } else { ?>
                    <td class="table_data" align="center" style="color: green;"><?php echo $_smarty_tpl->tpl_vars['rate2']->value;?>
</td>
                <?php }?>
            <?php }?>
            <?php } ?>
        </tr>
        <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['rate2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate2']->_loop = false;
 $_smarty_tpl->tpl_vars['id2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate2']->key => $_smarty_tpl->tpl_vars['rate2']->value) {
$_smarty_tpl->tpl_vars['rate2']->_loop = true;
 $_smarty_tpl->tpl_vars['id2']->value = $_smarty_tpl->tpl_vars['rate2']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['id2']->value!='id') {?>
                <?php if ($_smarty_tpl->tpl_vars['id2']->value=='estado') {?>
                    <?php if ($_smarty_tpl->tpl_vars['rate2']->value=='activo') {?>
                    <td align="center" class="table_data"><?php echo $_smarty_tpl->tpl_vars['Current']->value;?>
</td>
                    <?php } else { ?>
                    <td align="center" class="table_data"><?php echo $_smarty_tpl->tpl_vars['Obsolete']->value;?>
</td>
                    <?php }?>
                <?php } else { ?>
                    <td align="center" class="table_data"><?php echo $_smarty_tpl->tpl_vars['rate2']->value;?>
</td>
                <?php }?>
            <?php }?>
            <?php } ?>
        </tr>
        <?php }?>
    <?php } ?>
</table>

<input type="hidden" name="id_rate" value="<?php echo $_smarty_tpl->tpl_vars['id_rate']->value;?>
">
</form><?php }} ?>
