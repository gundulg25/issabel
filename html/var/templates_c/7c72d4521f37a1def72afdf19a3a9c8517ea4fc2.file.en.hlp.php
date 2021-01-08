<?php /* Smarty version Smarty-3.1.21, created on 2020-12-29 21:08:16
         compiled from "/var/www/html/modules/sec_fb_banned/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:15000475655feb38503bcf54-93051107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c72d4521f37a1def72afdf19a3a9c8517ea4fc2' => 
    array (
      0 => '/var/www/html/modules/sec_fb_banned/help/en.hlp',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15000475655feb38503bcf54-93051107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THEMENAME' => 0,
    'node_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5feb38503d97e5_11453331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5feb38503d97e5_11453331')) {function content_5feb38503d97e5_11453331($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The module "Fail2Ban Banned IP" lets you see the current banned IP addresses and it will let you unban them if you wish</p>
        <br />
	<h2>Unban IP</h2>
	<p>To unban IPs, just select them by clicking on each checkbox, and finally click the "Unban" button at the top.</p>
        <br />
    </body>
</html>
<?php }} ?>
