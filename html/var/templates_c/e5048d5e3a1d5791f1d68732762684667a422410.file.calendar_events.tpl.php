<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 23:08:45
         compiled from "/var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9284229315fc7134df32e95-98251274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5048d5e3a1d5791f1d68732762684667a422410' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9284229315fc7134df32e95-98251274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'EVENTOS_DIAS' => 0,
    'evento' => 0,
    'tag_date' => 0,
    'tag_call' => 0,
    'NO_EVENTOS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc7134e01ead4_77069985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc7134e01ead4_77069985')) {function content_5fc7134e01ead4_77069985($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EVENTOS_DIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value) {
$_smarty_tpl->tpl_vars['evento']->_loop = true;
?>
<a href='?menu=calendar&amp;action=display&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
&amp;event_date=<?php echo $_smarty_tpl->tpl_vars['evento']->value['dateshort'];?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['evento']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['tag_date']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['evento']->value['date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tag_call']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['evento']->value['call'];?>
<br/>
<?php }
if (!$_smarty_tpl->tpl_vars['evento']->_loop) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['NO_EVENTOS']->value;?>
</p>
<?php } ?>
<?php }} ?>
