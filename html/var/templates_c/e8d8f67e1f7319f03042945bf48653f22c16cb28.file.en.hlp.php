<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:15
         compiled from "/var/www/html/modules/control_panel/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:18717878475fe0a10fad0b53-73048553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d8f67e1f7319f03042945bf48653f22c16cb28' => 
    array (
      0 => '/var/www/html/modules/control_panel/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18717878475fe0a10fad0b53-73048553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THEMENAME' => 0,
    'node_name' => 0,
    'node_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fe0a10faed726_61200518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a10faed726_61200518')) {function content_5fe0a10faed726_61200518($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
        <p align="Justify">The option "Operator Panel" of the menu "PBX" in Issabel allows managing the telephony operations. You can control inbound calls, outbound calls, the order in which the calls are taken, the area that is designated to attend a call, etc.</p>
<p align="Justify">This module is useful for receptionists who have a general view of the queues, conferences, parking lots, internal extensions, trunks. Here the recepcionist can start a call or transfer a call by dragging one extension to another, or include several extension to a conference room, or a queue. The receptionist can also see the busy extensions, the elapsed time and the caller ID.</p>

        <!-- Form to add images -->
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_operator_panel.png" border="0" />
	<p>Figure 1</p></div>
	<p></p>
    </body>
</html>
<?php }} ?>
