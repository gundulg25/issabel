<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:11
         compiled from "/var/www/html/modules/pbxadmin/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:16909139355fe0a10bb44a72-90827339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbec6ef497b69a032c7181059d7e3d36ea3e5160' => 
    array (
      0 => '/var/www/html/modules/pbxadmin/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16909139355fe0a10bb44a72-90827339',
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
  'unifunc' => 'content_5fe0a10bb62aa3_48018221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a10bb62aa3_48018221')) {function content_5fe0a10bb62aa3_48018221($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option “PBX Configuration” of the Menu “PBX” lets us configure extensions, trunks, routes, dialplan, queues, IVR and so on for Issabel.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_freepbx.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>In the left part, we can observe that we have different options for configuration.</p>

<p>Issabel uses the free software IssabelPBX as a tool for administration of Asterisk&copy;.</p>

</body>
</html>
<?php }} ?>
