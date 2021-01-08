<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:38
         compiled from "/var/www/html/modules/conference/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:13713923475fe0a1265fa562-15156000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d07e1d1adc1f0fae67f8cbc319dd7bd13afc4c' => 
    array (
      0 => '/var/www/html/modules/conference/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13713923475fe0a1265fa562-15156000',
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
  'unifunc' => 'content_5fe0a12661bd56_04146714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a12661bd56_04146714')) {function content_5fe0a12661bd56_04146714($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>


<p>The option "Conference" in Issabel allows creating and managing conferences at any time. Here you can see all the current conferences. Use the filter to find past and future conferences.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_conference_report.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>If you want to see the details of any conference, click directly on the name. The parameters of the conference can't be edited.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_conference_view.png" border="0" />
<p>Figure 2</p></div>
<br />
<p>To delete a conference just select the checkbox located next to the conference's name and click on "Delete" button. </p>
<br />
<h2>Creating a new Conference</h2>
<p>To create a new conference click on "New Conference" button and fill out the required fields <i>(Figure 3)</i>. If you want to take control of a static conference created from the module "PBX Configuration", replace the "Conference Number" by the number of the static conference.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_conference_new.png" border="0" />
<p>Figure 3</p></div>
<br />

<p>Below a description of each parameter:</p>

<table class="inline">
  <tr>
    <th>Name</th><th>Mandatory</th><th>Description</th>
  </tr>
  <tr>
    <td>Conference Name</td><td>Yes</td><td>This is the name of the conference. It helps to identify it.</td>
  </tr>
  <tr>
    <td>Moderator PIN</td><td>No</td><td>A key that the moderator has to enter to join to the conference.</td>
  </tr>
  <tr>
    <td>User PIN</td><td>No</td><td>A key that the user has to enter to join to the conference.</td>
  </tr>
  <tr>
    <td>Start Time</td><td>Yes</td><td>Select the date and time in which the conference will start.</td>
  </tr>
  <tr>
    <td>Conference Number</td><td>Yes</td><td>When you create a conference a random number is generated automatically in this field. This number identifies the conference and you can change it if you want but make sure it is not being used by another conference.</td>
  </tr>
  <tr>
    <td>Conference Owner</td><td>No</td><td>The user who is in charge of the conference.</td>
  </tr>
  <tr>
    <td>Moderator Options</td><td>No</td><td>Differente options for the moderator.</td>
  </tr>
  <tr>
    <td>User Options</td><td>No</td><td>Different options for the user.</td>
  </tr>
  <tr>
    <td>Duration (HH:MM)</td><td>No</td><td>The duration of the conference</td>
  </tr>
  <tr>
    <td>Max Participants</td><td>Yes</td><td>The number of users that can participate in the conference simultaneously.</td>
  </tr>
</table>
<br />

<h2>Administration of Conferences</h2>
<p>To manage a particular conference, click on the Participants link from the Current Conferences list. Here you can Invite, Kick or Mute the participants of the Conference and also see the elapsed time of each user..</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_conference_callers.png" border="0" />
<p>Figure 4</p></div>
<br />
<h3>Invite a participant</h3>
<p>There are two ways to join a user to the conference:
<ul style="list-style-type:decimal">
<li>Select the extension number from the dropdown list and click on "Invite Caller". Immediately the user's phone will start to ring. When the user answers the phone he will be part of the conference.</li>
<li>Call to <b>5555</b> and when you are asked, enter the conference number followed by the pound key (#). </li>
</ul>
</p>

<p>If you want to silence a user, just select the checkbox from the mute column and click on "Mute". If you want to terminate a call, select the checkbox from Kick column and click on "Kick".</p>

<p>If you want to terminate all the calls, just click on "Kick All" button.</p>

<p>To update the list of the current participants of the conference click on "Update" button. If you want to go back to the list of conferences, click on "Cancel" button (This will not cancel the current conference).</p>

</body>
</html>
<?php }} ?>
