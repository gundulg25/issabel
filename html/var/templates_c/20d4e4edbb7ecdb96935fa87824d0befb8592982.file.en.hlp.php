<?php /* Smarty version Smarty-3.1.21, created on 2020-12-29 21:07:33
         compiled from "/var/www/html/modules/sec_accessaudit/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:15831277715feb3825d21d96-40494631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d4e4edbb7ecdb96935fa87824d0befb8592982' => 
    array (
      0 => '/var/www/html/modules/sec_accessaudit/help/en.hlp',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15831277715feb3825d21d96-40494631',
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
  'unifunc' => 'content_5feb3825d3d8a7_62968245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5feb3825d3d8a7_62968245')) {function content_5feb3825d3d8a7_62968245($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The module "Audit" of the menu "Security" in Issabel shows a list of all the users that have logged in the system with the date, the username, the source IP address and other details. The results can be filtered by date and string. The coincidences with the string will be highlighted in the results.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_audit.png" border="0" />
        <p>Figure 1</p></div>
        <br />
	<p>The results of the search can be downloaded in different formats such as PDF, XML and CSV by clicking on the "Download" button.</p>
        <br />
    </body>
</html>
<?php }} ?>
