<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:19:59
         compiled from "/var/www/html/modules/calendar/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:10875894655fe0a0ff19a9d1-42352956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37b34c03271cd0323555673d4f52579941efd7c' => 
    array (
      0 => '/var/www/html/modules/calendar/help/en.hlp',
      1 => 1532462280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10875894655fe0a0ff19a9d1-42352956',
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
  'unifunc' => 'content_5fe0a0ff1c0ea4_42492760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a0ff1c0ea4_42492760')) {function content_5fe0a0ff1c0ea4_42492760($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "Calendar" allows you to organize your day, week and month by creating events and reminders.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_calendar.png" border="0" />
<p>Figure 1</p></div>
<br />
<p>To export the calendar, click on "Download ical calendar" link. <i>(Figure 2)</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_export_ical.png" border="0" />
<p>Figure 2</p></div>
<br />
<h2>Create a new event</h2>
<p>To create a new event click on "Create New Event" button and fill out the required fields. If all the information is correct click on "Save". <i>(Figure 3)</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_newEvent.png" border="0" />
<p>Figure 3</p></div>
<br />
<p>Here the description of each field:</p>
<table class="inline">
<tr><th>Name</th><th>Description</th></tr>
<tr><td>Name</td><td>Name of the event</td></tr>
<tr><td>Description</td><td>A brief description of the event</td></tr>
<tr><td>Start</td><td>Time at which the event will begin</td></tr>
<tr><td>End</td><td>Time at which the event will end</td></tr>
<tr><td>Color</td><td>Set a color to the event</td></tr>
<tr><td>Call to</td><td>When the event begins, this extension will start ringing.</td></tr>
<tr><td>Reminder</td><td>A reminder before the event starts.</td></tr>
<tr><td>Text to speech</td><td>Write the message you want to hear from Issabel when you receive a call to your extension announcing the event. This option is available if the Festival service is enabled (go to PBX->Tools->Festival).</td></tr>
<tr><td>Emails to Notify</td><td>Issabel will automatically send an email to this list before the event starts.</td></tr>
</table>
<br />
<h2>Edit/Delete an existing event</h2>
<p>To edit or delete an existing event, just click on the event from the calendar and the click on "Edit" or "Delete" button. <i>(Figure 4 and 5)</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_newEvent2.png" border="0" />
<p>Figure 4</p></div>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_viewEvent.png" border="0" />
<p>Figure 5</p></div>
<br />
<p>Another way to edit an event is by clicking on the edge of the event and drag horizontally (if you are seeing the vents by month) or vertically (if you are seeing the events by week or day). Below are some examples.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_monthEvent.png" border="0" />
<p>Figure 6</p></div>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_weekEvent.png" border="0" />
<p>Figure 7</p></div>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_dayEvent.png" border="0" />
<p>Figure 8</p></div>
<br />
<br />
</body>
</html>

<?php }} ?>
