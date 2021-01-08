<?php /* Smarty version Smarty-3.1.21, created on 2020-11-04 04:06:16
         compiled from "/var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13466218155fa26f0888dc61-65683561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af33d4e01297473340ffd1901d8e20ed4f11e47' => 
    array (
      0 => '/var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13466218155fa26f0888dc61-65683561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LABEL_CAMPAIGN_STATE' => 0,
    'estados' => 0,
    'estado_sel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fa26f088ac008_84984031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa26f088ac008_84984031')) {function content_5fa26f088ac008_84984031($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><table width="100%" border="0">
<tr>
    <td align="right" class="letra12" width="20%" ><b><?php echo $_smarty_tpl->tpl_vars['LABEL_CAMPAIGN_STATE']->value;?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name'=>'cbo_estado','id'=>'cbo_estado','options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado_sel']->value,'onchange'=>'submit();'),$_smarty_tpl);?>
</td>
</tr>
</table>

<?php }} ?>
