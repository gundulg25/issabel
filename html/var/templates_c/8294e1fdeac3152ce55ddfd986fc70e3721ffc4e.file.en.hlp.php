<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:10
         compiled from "/var/www/html/modules/missed_calls/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:12333827355fe0a1460af917-55381325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8294e1fdeac3152ce55ddfd986fc70e3721ffc4e' => 
    array (
      0 => '/var/www/html/modules/missed_calls/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12333827355fe0a1460af917-55381325',
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
  'unifunc' => 'content_5fe0a1460ce119_49066689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a1460ce119_49066689')) {function content_5fe0a1460ce119_49066689($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
<p>The option "Missed Calls" of the menu "Reports" in Issabel shows a report of the missed calls of all extensions so you can know when an extension has been receiving calls. You can download this report by clicking on "Download" button. The available formats for this file are <i>csv, xml </i>and <i>pdf</i></p>
<p>You can filter the results by:</p> 
<ul>
  <li><b>Start Date:</b> Find missed calls from this date.</li>
  <li><b>End Date  :</b> Find missed calls until this date.</li>
  <li>
    <b>Search      :</b> You can filter the results by these parameters:
    <ul>
      <li><span style="font-style: italic; font-weight: bold;">Source :</span> Number that made the call.</li>
      <li><span style="font-style: italic; font-weight: bold;">Destination:</span> Number that received the call.</li>
    </ul>
  </li>
</ul>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_missed_calls.png" border="0" />
<p>Figure 1</p></div>
<br />
</body>
</html>

<?php }} ?>
