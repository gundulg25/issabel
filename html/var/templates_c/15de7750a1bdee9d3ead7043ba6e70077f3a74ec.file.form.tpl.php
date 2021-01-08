<?php /* Smarty version Smarty-3.1.21, created on 2021-01-04 10:35:52
         compiled from "/var/www/html/modules/sec_ports/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:978183695ff28d184daf91-44086370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15de7750a1bdee9d3ead7043ba6e70077f3a74ec' => 
    array (
      0 => '/var/www/html/modules/sec_ports/themes/default/form.tpl',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '978183695ff28d184daf91-44086370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODE' => 0,
    'SAVE' => 0,
    'EDIT' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'name' => 0,
    'protocol' => 0,
    'port_style' => 0,
    'port' => 0,
    'port2' => 0,
    'HAS' => 0,
    'type_style' => 0,
    'type' => 0,
    'code_style' => 0,
    'code' => 0,
    'protocol_style' => 0,
    'protocol_number' => 0,
    'comment' => 0,
    'IDTEMP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ff28d1853a2e7_65807809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff28d1853a2e7_65807809')) {function content_5ff28d1853a2e7_65807809($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left">
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="new") {?>
            <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit") {?>
            <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="view") {?>
            <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">&nbsp;
        <?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	<?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?>
	    <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
	<?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12" id="name">
        <td align="left" width="8%"><b><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['protocol']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['protocol']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['port_style']->value;?>
 class="letra12" id="port">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['port']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="new") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="view") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp; <?php if ($_smarty_tpl->tpl_vars['HAS']->value=="yes") {?>:<?php }?> &nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12" id="type">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['code_style']->value;?>
 class="letra12" id="code">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['code']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['code']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['protocol_style']->value;?>
 class="letra12" id="protocol_number">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['protocol_number']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value!="view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['protocol_number']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['comment']->value['LABEL'];?>
:</b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['comment']->value['INPUT'];?>
</td>
    </tr>
</table>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
">
<input type="hidden" name="idtemp" value="<?php echo $_smarty_tpl->tpl_vars['IDTEMP']->value;?>
">
<?php }} ?>
