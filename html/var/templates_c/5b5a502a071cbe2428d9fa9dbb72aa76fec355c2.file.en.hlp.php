<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:36
         compiled from "/var/www/html/modules/billing_setup/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:17964138735fe0a16063a019-53197841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5a502a071cbe2428d9fa9dbb72aa76fec355c2' => 
    array (
      0 => '/var/www/html/modules/billing_setup/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17964138735fe0a16063a019-53197841',
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
  'unifunc' => 'content_5fe0a160655d41_03042725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a160655d41_03042725')) {function content_5fe0a160655d41_03042725($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option “Billing Setup” of the Menu “Billing” in Issabel lets us determine the cost per minute of the connection for the route by omission, and also determine which of the trunks will be used for the billing process</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_trunk_bill_configuration.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>The list shows all of the registered trunks; you should select the ones that will be used for billing and click on the “Billing Capable” button.</p>

</body>
</html>
<?php }} ?>
