<?php /* Smarty version Smarty-3.1.21, created on 2020-12-04 16:53:29
         compiled from "/var/www/html/modules/text_to_wav/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18532000275fca07195d7598-09508563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e39f94ea21accdc689cac9922e65b71c36c696' => 
    array (
      0 => '/var/www/html/modules/text_to_wav/themes/default/form.tpl',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18532000275fca07195d7598-09508563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FILENAME' => 0,
    'BACK' => 0,
    'GENERATE' => 0,
    'message' => 0,
    'format' => 0,
    'EXECUTE' => 0,
    'PATH' => 0,
    'EXTENSION' => 0,
    'DOWNLOAD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fca07196077d3_66707671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca07196077d3_66707671')) {function content_5fca07196077d3_66707671($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
     <?php if ($_smarty_tpl->tpl_vars['FILENAME']->value) {?>
     <td align="left"><input class="button" type="submit" name="back" value="<?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
"></td>
     <?php } else { ?>
     <td align="left"><input class="button" type="submit" name="generate" value="<?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
"></td>
     
        <td align="right" nowrap><span class="letra12"></td><?php }?>
    </tr>
</table>
<table>
    <tr><?php if (!$_smarty_tpl->tpl_vars['FILENAME']->value) {?>
        <table class="tabForm" style="font-size: 16px;" width="100%" >
            <tr class="letra12">
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['message']->value['LABEL'];?>
:</b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['message']->value['INPUT'];?>
</td>
                <td width="40%"></td>
            </tr>
            <tr class="letra12">
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['format']->value['LABEL'];?>
:</b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['format']->value['INPUT'];?>
</td>
                <td align="left"></td>
            </tr>
        </table>
	<?php } else { ?>
	<table class="tabForm" style="font-size: 16px;" width="100%" >
            <tr class="letra12">
                <td align="left"><b> <?php if ($_smarty_tpl->tpl_vars['EXECUTE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FILENAME']->value;
echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
</a><?php }?></b></td>
            </tr>
        </table>
	
	<?php }?>
   <tr>
</table>
<?php }} ?>
