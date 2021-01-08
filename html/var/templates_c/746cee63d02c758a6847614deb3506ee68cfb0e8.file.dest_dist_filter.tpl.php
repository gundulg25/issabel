<?php /* Smarty version Smarty-3.1.21, created on 2020-12-04 17:14:58
         compiled from "/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5390780715fca0c22e82b81-00218103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746cee63d02c758a6847614deb3506ee68cfb0e8' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5390780715fca0c22e82b81-00218103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'date_end' => 0,
    'criteria' => 0,
    'Filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fca0c22ea6851_72611157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca0c22ea6851_72611157')) {function content_5fca0c22ea6851_72611157($_smarty_tpl) {?><td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
<td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
<td width="10%" align="right"><?php echo $_smarty_tpl->tpl_vars['criteria']->value['LABEL'];?>
: </td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['criteria']->value['INPUT'];?>
</td>
<td width="12%" align="center"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" ></td>
<?php }} ?>
