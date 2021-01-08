<?php /* Smarty version Smarty-3.1.21, created on 2020-12-29 21:07:04
         compiled from "/var/www/html/modules/sec_advanced_settings/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:4857246485feb3808f0efa2-89604882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f224dbafb3d0433b544ec165c153b5e453d76b6' => 
    array (
      0 => '/var/www/html/modules/sec_advanced_settings/help/en.hlp',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4857246485feb3808f0efa2-89604882',
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
  'unifunc' => 'content_5feb3808f2f4f9_44668888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5feb3808f2f4f9_44668888')) {function content_5feb3808f2f4f9_44668888($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
        <p align="Justify"></p>
        <!-- Form to add images -->
        <!--<div><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/images.png" border="0"></div> -->
	<p>The module "Advanced Settings" of the menu "Security" allows changing the Database and Web Administration IssabelPBX Password as well as enabling the non-embedded access to IssabelPBX and the anonymous SIP calls.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_advanced_settings.png" border="0" />
        <p>Figure 1</p></div>
        <br />
	<p>In Enable Access set to ON/OFF to enable the non-embedded access to IssabelPBX, and the anonymous SIP calls.</p>
	<p>In Database and Web Administration IssabelPBX Password text field you must enter the new password. In Password Confirmation text field you must enter again the new password. Remember that the new password may only contain alphanumeric characters, spaces, or the following: .&amp;-@=_!&lt;&gt;.</p>
	<p>Once you finish click on the "Save" button to apply the changes.</p>
	<br />

    </body>
</html>
<?php }} ?>
