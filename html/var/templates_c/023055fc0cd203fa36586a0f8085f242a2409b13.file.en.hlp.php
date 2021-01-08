<?php /* Smarty version Smarty-3.1.21, created on 2020-12-30 10:35:02
         compiled from "/var/www/html/modules/dashboard/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:3492039825febf5667f2679-39871224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '023055fc0cd203fa36586a0f8085f242a2409b13' => 
    array (
      0 => '/var/www/html/modules/dashboard/help/en.hlp',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3492039825febf5667f2679-39871224',
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
  'unifunc' => 'content_5febf5668206a1_59441917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5febf5668206a1_59441917')) {function content_5febf5668206a1_59441917($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "Dashboard" of menu "System" in Issabel is a visualization tool that shows a general view of the system and gives a faster access to administrative actions in order to allow the user an easy administration of the server such as "System Resources", "Processes Status", "Hard Drives", "Performance Graphics", "Communication Activity", and so on. Below a short description of each one.
</p>
<p><b>System Resources: </b>Here shows general information about the system where Issabel is running.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/system_resources.png" border="0" />
<p>Figure 1</p>
</div>
<br />
<p><b>Processes Status: </b>It shows the enabled and disabled processes. Here you can start, stop and restart these processes.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/processes_status.png" border="0" />
<p>Figure 2</p>
</div>
<br />
<p><b>Hard Drives: </b>Hard Drives shows the free and used space of the hard drives installed on your server.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/hard_drives.png" border="0" />
<p>Figure 3</p>
</div>
<br />
<p><b>Performance Graphic: </b>It allows to check out the history of CPU and Memory usage as well as simultaneous calls over the time.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/performance_graphic.png" border="0" />
<p>Figure 4</p>
</div>
<br />
<p><b>News: </b>Keep track of the latest news about Issabel from www.issabel.org</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/news.png" border="0">
<p>Figure 5</p>
</div>
<br />
<p><b>Communication Activity: </b>This applet shows the number of extensions, trunks and calls currently on Issabel server.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/communication_activity.png" border="0" />
<p>Figure 6</p>
</div>
<br />
<p><b>Calendar: </b>It shows the schedule of activities for the logged user</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/calendar.png" border="0" />
<p>Figure 7</p>
</div>
<br />
<p><b>Calls: </b>It is a history of calls with time and duration related to the extension of the logged user.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/calls.png" border="0" />
<p>Figure 8</p>
</div>
<br />
<p><b>Emails: </b>The logged user can see when he receives emails.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/emails.png" border="0" />
<p>Figure 9</p>
</div>
<br />
<p><b>Faxes: </b>It shows the received faxes on the extension of the logged user.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/faxes.png" border="0" />
<p>Figure 10</p>
</div>
<br />
<p><b>Voicemails: </b>This applet inform when the extension of the logged user has voicemails.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/voicemails.png" border="0" />
<p>Figure 11</p>
</div>
<br />
<p><b>System: </b>It shows the assigned space on hard drive to the logged user.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/system.png" border="0" />
<p>Figure 12</p>
</div>
<br />
<p><b>Telephony Hardware: </b>It shows a general view of the installed telephony devices on Issabel server.</p>
<div align="center" class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/help/telephony_hardware.png" border="0" />
<p>Figure 13</p>
</div>
<br />
<br />
</body>
</html>
<?php }} ?>
