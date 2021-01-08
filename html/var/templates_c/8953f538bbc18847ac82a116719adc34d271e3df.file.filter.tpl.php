<?php /* Smarty version Smarty-3.1.21, created on 2020-12-30 11:26:00
         compiled from "/var/www/html/modules/cdrreport_customize/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4491511975fc7116b6cdbe4-84210205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8953f538bbc18847ac82a116719adc34d271e3df' => 
    array (
      0 => '/var/www/html/modules/cdrreport_customize/themes/default/filter.tpl',
      1 => 1609302355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4491511975fc7116b6cdbe4-84210205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc7116b6f4c64_00257019',
  'variables' => 
  array (
    'extension' => 0,
    'caller_id' => 0,
    'start_range' => 0,
    'date_start' => 0,
    'date_end' => 0,
    'field_pattern' => 0,
    'field_name' => 0,
    'Filter' => 0,
    'caller_dst' => 0,
    'tta' => 0,
    'status' => 0,
    'ringgroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc7116b6f4c64_00257019')) {function content_5fc7116b6f4c64_00257019($_smarty_tpl) {?><table width="99%" cellpadding="4" cellspacing="0" border="0" align="center">
  <tr class="letra12">
    <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['extension']->value['LABEL'];?>
:</td>
    <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['extension']->value['INPUT'];?>
</td>
    <td width="10%" align="left" nowrap>&nbsp;</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['caller_id']->value['LABEL'];?>
: </td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['caller_id']->value['INPUT'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['caller_id']->value['INPUT'];?>
</td>
  </tr>

  <tr class="letra12">
    <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['start_range']->value['LABEL'];?>
:</td>
    <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
    <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
    <td width="11%" align="right"><?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['LABEL'];?>
: </td>
    <td width="14%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['field_name']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['INPUT'];?>
</td>
    <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
  </tr>



  <tr class="letra12">
    <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['caller_dst']->value['LABEL'];?>
:</td>
    <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['caller_dst']->value['INPUT'];?>
</td>
    <td width="10%" align="left" nowrap>&nbsp;</td>
    <td width="11%" align="right"><?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['LABEL'];?>
: </td>
    <td width="14%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['field_name']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['INPUT'];?>
</td>
    <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
  </tr>



  <tr class="letra12">
    <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['tta']->value['LABEL'];?>
:</td>
    <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['tta']->value['INPUT'];?>
</td>
    <td width="10%" align="left" nowrap>&nbsp;</td>
    <td width="11%" align="right"><?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['LABEL'];?>
: </td>
    <td width="14%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['field_name']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['INPUT'];?>
</td>
    <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
  </tr>




  <tr class="letra12">
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
    <td width="10%" align="left" nowrap>&nbsp;</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: </td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
  </tr>
  <tr class="letra12">
    <td /td>
    <td /td>
    <td width="10%" align="left" nowrap>&nbsp;</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['ringgroup']->value['LABEL'];?>
: </td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['ringgroup']->value['INPUT'];?>
</td>
  </tr>
</table>


<?php }} ?>
