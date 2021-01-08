<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:33
         compiled from "/var/www/html/modules/billing_report/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:10650446415fe0a15d497828-55336818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d72a919a6286088f83d56155958e5f48312820e' => 
    array (
      0 => '/var/www/html/modules/billing_report/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10650446415fe0a15d497828-55336818',
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
  'unifunc' => 'content_5fe0a15d4b40a8_28661683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a15d4b40a8_28661683')) {function content_5fe0a15d4b40a8_28661683($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
        <p>The option "Billing Report" in Issabel shows a complete report of calls according to a rate established in "Billing Rates". You can filter the results by date, rate applied, duration and so on <i>(See Figure 1)</i>. Also you can download this report in different formats such as CSV, XLS and PDF.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_billing_report.png" border="0" />
        <p>Figure 1</p></div>
        <br />
        <p>The fields in this report are:</p>
	<table class="inline">
	  <tr>
	    <th>Name</th><th>Description</th>
	  </tr>
	  <tr>
	    <td>Date</td><td>Initial date of call</td>
	  </tr>
	  <tr>
	    <td>Rate Applied</td><td>Name of Rate applied</td>
	  </tr>
	  <tr>
	    <td>Rate Value</td><td>Rate value by minutes</td>
	  </tr>
	  <tr>
	    <td>Source</td><td>Number or source</td>
	  </tr>
	  <tr>
	    <td>Destination</td><td>Destination Number</td>
	  </tr>
	  <tr>
	    <td>Dst. Channel</td><td>Channel Destination (Example: DAHDI/1)</td>
	  </tr>
	  <tr>
	    <td>Account Code</td><td>Code of account extension</td>
	  </tr>
	  <tr>
	    <td>Duration</td><td>Duration in seconds of calls</td>
	  </tr>
	  <tr>
	    <td>Cost</td><td>Cost of call</td>
	  </tr>
	  <tr>
	    <td>Summary Cost</td><td>Sum of all calls by cost field</td>
	  </tr>
	</table>
	<br />
    </body>
</html>
<?php }} ?>
