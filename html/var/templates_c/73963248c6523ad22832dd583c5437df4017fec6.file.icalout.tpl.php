<?php /* Smarty version Smarty-3.1.21, created on 2020-12-04 18:42:35
         compiled from "/var/www/html/modules/calendar/themes/default/icalout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9565346535fca20ab5949b4-96312385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73963248c6523ad22832dd583c5437df4017fec6' => 
    array (
      0 => '/var/www/html/modules/calendar/themes/default/icalout.tpl',
      1 => 1532462280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9565346535fca20ab5949b4-96312385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eventlist' => 0,
    'event' => 0,
    'idx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fca20ab64baa8_32332458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca20ab64baa8_32332458')) {function content_5fca20ab64baa8_32332458($_smarty_tpl) {?>BEGIN:VCALENDAR
PRODID:-//Issabel Development Department// Issabel 4.0 //EN
VERSION:2.0
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
BEGIN:VEVENT
DTSTAMP:<?php echo $_smarty_tpl->tpl_vars['event']->value->icalstart;?>

CREATED:<?php echo $_smarty_tpl->tpl_vars['event']->value->icalstart;?>

UID:<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['event']->value->id;?>

SUMMARY:<?php echo $_smarty_tpl->tpl_vars['event']->value->title;?>

CLASS:PUBLIC
PRIORITY:5
DTSTART:<?php echo $_smarty_tpl->tpl_vars['event']->value->icalstart;?>

DTEND:<?php echo $_smarty_tpl->tpl_vars['event']->value->icalend;?>

TRANSP:OPAQUE
SEQUENCE=0
END:VEVENT
<?php } ?>
END:VCALENDAR
<?php }} ?>
