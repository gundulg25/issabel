<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:34
         compiled from "/var/www/html/modules/dest_distribution/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:16181839405fe0a15ebdaef2-96157442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a17580a44e05db890b3837cd320423dee0cf98' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16181839405fe0a15ebdaef2-96157442',
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
  'unifunc' => 'content_5fe0a15ebf9a32_03689449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a15ebf9a32_03689449')) {function content_5fe0a15ebf9a32_03689449($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The “Destination Distribution” option of the “Billing” Menu in Issabel lets us view graphically the distribution of the outgoing calls grouped by rate. The graph will change depending on the values of the filter:</p>

<table class="inline">
	<tr>
		<th>Name</th><th>Description</th>
	</tr>
	<tr>
		<td>Start Date</td><td>The start date for calls to be selected.</td>
	</tr>
	<tr>

		<td>End Date</td><td>The end date for calls to be selected.</td>
	</tr>
	<tr>
		<td>Criteria</td><td>Criteria for distribution: Distribution by Time, Distribution by Number of Calls, Distribution by Cost.</td>
	</tr>
</table>

<br />

<h3>Distribution by Time</h3>
 
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_dest_distrib_time.png" border="0" />
<p>Figure 1</p></div>
<br />

<h3>Distribution by Number of Calls</h3>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_dest_distrib_calls.png" border="0" />
<p>Figure 2</p></div>
<br />

<h3>Distribution by Cost</h3>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_dest_distrib_cost.png" border="0" />
<p>Figure 3</p></div>
<br />

</body>
</html>
<?php }} ?>
