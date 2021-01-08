<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:22
         compiled from "/var/www/html/modules/voicemail/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:7444048185fe0a116349061-17342779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2dc7778fc1d49fa41525c5f0fb719d768d7243b' => 
    array (
      0 => '/var/www/html/modules/voicemail/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7444048185fe0a116349061-17342779',
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
  'unifunc' => 'content_5fe0a1163693a2_62164404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a1163693a2_62164404')) {function content_5fe0a1163693a2_62164404($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "Voicemail" of the Menu “PBX” in Issabel lets us view a list with details of the voicemails for the extension of the logged user.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_voicemail.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>The report will change depending on the values of the filter:</p>

<table class="inline">
  <tr>
    <th>Parameter</th><th>Description</th>
  </tr>
  <tr>
    <td>Start Date</td><td>Start date for the selection of voicemails.</td>
  </tr>
  <tr>
    <td>End Date</td><td>End date for the selection of voicemails.</td>
  </tr>
</table>
<br/>
<p>To delete a voicemail, just select the voicemail from the list and click on "Delete" button.</p>
<br />
<h2>Configuring the Voicemail</h2>
<p>You can also configure the parameters of the voicemail provided the logged user has an assigned extension in Issabel.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_voicemail_config.png" border="0" />
<p>Figure 2</p></div>
<br/>
<table class="inline">
  <tr>
    <th>Parameter</th><th>Description</th>
  </tr>
  <tr>
    <td>Status</td><td>Enable or Disable the voicemail for the user</td>
  </tr>
  <tr>
    <td>Email</td><td>The email address that voicemails are sent to.</td>
  </tr>
  <tr>
    <td>Pager Email Address</td><td>Pager/mobile email address that short voicemail notifications are sent to.</td>
  </tr>
  <tr>
    <td>Password</td><td>This is the password which is used by the user to access to his voicemail system.</td>
  </tr>

  <tr>
    <td>Email Attachment</td><td>Option to attach voicemails to email.</td>
  </tr>
  <tr>
  <td>Play CID</td><td>Read back caller's telephone number prior to playing the incoming message, and just after announcing the date and time the message was left.</td>
  </tr>
  <tr>
    <td>Play Envelope</td><td>Envelope controls whether the voicemail system will play the message envelope (date/time) before playing the voicemail message. This setting does not affect the operation of the envelope option in the advanced voicemail menu.</td>
  </tr>
  <tr>
    <td>Delete Vmail</td><td>If set to "yes" the message will be deleted from the voicemail box (after having been emailed). It provides functionality that allows a user to receive their voicemail via email alone, rather than having the voicemail able to be retrieved from the Web interface or the Extension handset.</td>
  </tr>
</table>
<br />
</body>
</html>
<?php }} ?>
