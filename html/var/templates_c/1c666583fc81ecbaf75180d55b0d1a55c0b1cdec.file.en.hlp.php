<?php /* Smarty version Smarty-3.1.21, created on 2020-12-29 21:08:20
         compiled from "/var/www/html/modules/sec_fb_admin/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:7897900005feb3854bdeee3-20182845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c666583fc81ecbaf75180d55b0d1a55c0b1cdec' => 
    array (
      0 => '/var/www/html/modules/sec_fb_admin/help/en.hlp',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7897900005feb3854bdeee3-20182845',
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
  'unifunc' => 'content_5feb3854bfce17_07037081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5feb3854bfce17_07037081')) {function content_5feb3854bfce17_07037081($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The module "Fail2Ban Jails" of the menu "Security" in Issabel allows setting up preferences for Fail2Ban jails, like ban time, whitelist, etc.</p>
	<h2>View Jail</h2>
	<p>To view an existing jail, click on the "View" link located in the row corresponding to the jail. Here you can see the information of the jail and edit it if needed. (See figure 1)</p>        
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_definejails_view.png" border="0" />
        <p>Figure 1</p></div>
        <br />
	<h2>Edit Jail</h2>
        <p>To edit a jail, click on the "View" link corresponding to the jail you want to modify and then click on "Edit" button. A form will appear with the parameters of the jail ready to be modified. (See Figure 2)</p>
        <br />
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_definejail_edit.png" border="0" />
        <p>Figure 2</p></div>
        <br />
    </body>
</html>
<?php }} ?>
