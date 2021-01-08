<?php /* Smarty version Smarty-3.1.21, created on 2020-12-29 21:07:17
         compiled from "/var/www/html/modules/sec_weak_keys/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:10429539895feb3815e84be9-50428381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66223e7fec55032721b705e8881c4db4bb746fd8' => 
    array (
      0 => '/var/www/html/modules/sec_weak_keys/help/en.hlp',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10429539895feb3815e84be9-50428381',
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
  'unifunc' => 'content_5feb3815ea43c1_50047081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5feb3815ea43c1_50047081')) {function content_5feb3815ea43c1_50047081($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The module "Weak Keys" of the menu "Security" lets us identify the keys that are not enough strong for the extensions created in Issabel (SIP and IAX2). This module shows all the extensions but you can filter the results by entering a specific extension number or part of it.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_weakkeys.png" border="0" />
        <p>Figure 1</p></div>
        <br />
        <p> You can download the results in different formats such as PDF, XML and CSV by clicking on the "Download" button.</p>
	<h2>Change Key</h2>
	<p>If the key of an extension is not enough strong, you will be notified through the Status column and a link called "Change Secret" will be available to change the key. Once you click on this link, you will see a form where you can set the new secret. The secret must be at minimum six characters in length of which must contain at least two numbers and two letters. When the new secret is set, click on the "Save" button to apply the changes. (See figure 2). </p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_weakkeys_change.png" border="0" />
        <p>Figure 2</p></div>
        <br />
    </body>
</html>

<?php }} ?>
