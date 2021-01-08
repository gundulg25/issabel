<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:25
         compiled from "/var/www/html/modules/asterisk_log/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:15206533265fe0a1559a91d5-67799114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5efd6715b9f2b782997ac704c14342bc879e4423' => 
    array (
      0 => '/var/www/html/modules/asterisk_log/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15206533265fe0a1559a91d5-67799114',
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
  'unifunc' => 'content_5fe0a1559c71e9_84938148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a1559c71e9_84938148')) {function content_5fe0a1559c71e9_84938148($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
<p>The option "Asterisk Logs" of the "Reports" module allows visualizing the content of Asterisk logs for monitoring the events. You can filter the results by date or strings that are in the content of the logs </p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_asterisk_log.png" border="0" />
<p>Figure 1</p></div>

<p>Below a description of each column.</p>
<table class="inline">
  <tr>
    <th>Column</th><th>Description</th>
  </tr>
  <tr>
    <td>Date</td><td>The date of the event.</td>
  </tr>
  <tr>
    <td>Type</td><td>The type of the event.</td>
  </tr>
  <tr>
    <td>Source</td><td>Where the event comes from.</td>
  </tr>
  <tr>
    <td>Message</td><td>The description of the event.</td>
  </tr>
</table>

</body>
</html>
<?php }} ?>
