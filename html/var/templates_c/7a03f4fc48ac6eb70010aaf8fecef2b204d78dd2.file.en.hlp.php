<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:36
         compiled from "/var/www/html/modules/monitoring/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:17285568125fe0a124ab4ee5-67119631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a03f4fc48ac6eb70010aaf8fecef2b204d78dd2' => 
    array (
      0 => '/var/www/html/modules/monitoring/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17285568125fe0a124ab4ee5-67119631',
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
  'unifunc' => 'content_5fe0a124ad1f67_27277125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a124ad1f67_27277125')) {function content_5fe0a124ad1f67_27277125($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "Monitoring" of the Menu "PBX" in Issabel lets us view a list with details of all recorded calls for the extension associated to the connected user. The administrator account can see all the recordings.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_monitoring.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>The report will change depending on the values of the filter: </p>

<table class="inline">
  <tr>
    <th>Name</th><th>Description</th>
  </tr>
  <tr>
    <td>Start Date</td><td>The start date for the calls to be selected.</td>
  </tr>
  <tr>
    <td>End Date</td><td>The end date for the calls to be selected.</td>
  </tr>
  <tr>
    <td>Source</td><td>The extension that started the call.</td>
  </tr>
  <tr>
    <td>Destination</td><td>The extension that received the call.</td>
  </tr>
  <tr>
    <td>Type</td><td>The type of call such as Incoming, Outgoing, Queue or Group.</td>
  </tr>
</table>

<p>Also, we can listen to the calls by clicking on the option "Listen" for each call, or we can download an audio file with the .wav extension of the selected call.</p>
<p>If you want to export the list of the recorded calls, click on "Download" button and choose the type of file you want to download. The available extensions are: csv, xls and pdf.</p>

</body>
</html>
<?php }} ?>
