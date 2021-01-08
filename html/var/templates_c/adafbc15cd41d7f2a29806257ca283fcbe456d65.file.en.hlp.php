<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:45
         compiled from "/var/www/html/modules/recordings/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:13163593135fe0a12d609903-89318640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adafbc15cd41d7f2a29806257ca283fcbe456d65' => 
    array (
      0 => '/var/www/html/modules/recordings/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13163593135fe0a12d609903-89318640',
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
  'unifunc' => 'content_5fe0a12d6295a0_04492141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a12d6295a0_04492141')) {function content_5fe0a12d6295a0_04492141($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "Recordings" of the menu "PBX" in Issabel allows creating audio files from the recording of our voice. Also you can upload audio files from your hard disk. This option is only available if the connected user has an extension assigned to his account.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_recordings_record.png" border="0" />
<p>Figure 1</p></div>
<br />
<p>To record an audio file, you have to enter the name of the recording and click on "Record" button. When your extension is ringing, answer the phone and start your voice recording after the tone. When done press '#' and hang up the phone. Click on "Save" button to save the recording.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_recordings_record_2.png" border="0" />
<p>Figure 2</p></div>
<br />
<p>Also, you can upload an existing audio file.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_recordings_upload.png" border="0" />
<p>Figure 3</p></div>
<br />
<p>This option was used with the Calendar module in old Issabel version. All the recordings and uploaded files are stores at <b>/var/lib/asterisk/sounds/custom/XXX</b> , where XXX is the extension number of the connected user.</p>

</body>
</html>


<?php }} ?>
