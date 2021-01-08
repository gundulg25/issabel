<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:14
         compiled from "/var/www/html/modules/summary_by_extension/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:7780042365fe0a14a6ff789-04445259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d737a668ce2b0f9c75576c50c7ce91343284f5' => 
    array (
      0 => '/var/www/html/modules/summary_by_extension/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7780042365fe0a14a6ff789-04445259',
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
  'unifunc' => 'content_5fe0a14a71d0b8_61610855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a14a71d0b8_61610855')) {function content_5fe0a14a71d0b8_61610855($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The option "Summary" of the menu "Reports" in Issabel shows a report of each Extension registered in the server. You can see the number of incoming and outgoing calls, the duration of the calls, the caller id and the dialing number. Use the filter to find and extension or user.</p>	
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_summary.png" border="0" />
	<p>Figure 1</p></div>
	<br />
	<p>Click on "View" to see more information of an extension.</p>
	<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_summary_graph.png" border="0" />
	<p>Figure 2</p></div>
	<br />
    </body>
</html>
<?php }} ?>
