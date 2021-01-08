<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:48:56
         compiled from "/var/www/html/modules/monitoring/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3917126165fb1f6a88c32b6-43912290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2f4a38c90143ae62ea6f42a71ed743729aed47' => 
    array (
      0 => '/var/www/html/modules/monitoring/themes/default/filter.tpl',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3917126165fb1f6a88c32b6-43912290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'date_end' => 0,
    'filter_field' => 0,
    'filter_value' => 0,
    'SELECTED_1' => 0,
    'INCOMING' => 0,
    'SELECTED_2' => 0,
    'OUTGOING' => 0,
    'SELECTED_3' => 0,
    'QUEUE' => 0,
    'SELECTED_4' => 0,
    'GROUP' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f6a88ee5d3_60977819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f6a88ee5d3_60977819')) {function content_5fb1f6a88ee5d3_60977819($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
	<td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
	<td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

	  <select id="filter_value_recordingfile" name="filter_value_recordingfile" size="1" style="display:none">
                <option value="incoming" <?php echo $_smarty_tpl->tpl_vars['SELECTED_1']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['INCOMING']->value;?>
</option>
                <option value="outgoing" <?php echo $_smarty_tpl->tpl_vars['SELECTED_2']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['OUTGOING']->value;?>
</option>
                <option value="queue" <?php echo $_smarty_tpl->tpl_vars['SELECTED_3']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['QUEUE']->value;?>
</option>
		<option value="group" <?php echo $_smarty_tpl->tpl_vars['SELECTED_4']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</option>
           </select>
    </td>
	<td align="right"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /></td>
    </tr>
</table>
<?php }} ?>
