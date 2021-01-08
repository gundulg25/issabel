<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:31
         compiled from "/var/www/html/modules/billing_rates/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:9628065125fe0a15bc0e6b9-29026908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53e06f54e7089f38f371b6e75c681b824b1e9f7' => 
    array (
      0 => '/var/www/html/modules/billing_rates/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9628065125fe0a15bc0e6b9-29026908',
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
  'unifunc' => 'content_5fe0a15bc30f40_71675772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a15bc30f40_71675772')) {function content_5fe0a15bc30f40_71675772($_smarty_tpl) {?><html>
    <header>
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
    </header>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
	<p>The option "Rates" of the menu "Reports" allows creating new rates and editing existing ones for billing.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_billing_rate.png" border="0" />
        <p>Figure 1</p></div>
        <br />
	
	<p>To edit or delete a rate, click on the "View" link from the list in <i>Figure 1</i>.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_rate_view.png" border="0" />
        <p>Figure 2</p></div>
        <br />	

        <h2>Create a new Rate</h2>
        <p> You can create a new rate by clicking on "Create New Rate" button. <i>(Figure 2)</i></p><br />
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_new_rate.png" border="0" />
        <p>Figure 3</p></div>
        <br />
	<p>Below a description of each parameter:</p>
	
	<table class="inline">
	  <tr>
	    <th>Parameter</th><th>Description</th>
	  </tr>
	  <tr>
	    <td>Prefix</td><td>All the numbers that begin with this prefix will apply to this rate.</td>
	  </tr>
	  <tr>
	    <td>Name</td><td>This is the name to identify the rate.</td>
	  </tr>
	  <tr>
	    <td>Rate (by min)</td><td>This is the rate that will be apply to every single minute of consumption.</td>
	  </tr>
	  <tr>
	    <td>Rate offset</td><td>This is the rate assigned for the connection.</td>
	  </tr>
	  <tr>
	    <td>Hidden Digits</td><td>This indicates the amount of digits you want to hide in the destination number.</td>
	  </tr>
	  <tr>
	    <td>Trunk</td><td>Select the trunk that will apply for the rate. Make sure the trunk you want to use is enabled. To check this, go to "Billing Setup" module. </td>
	  </tr>
	</table>
	<br />
	<h2>Edit an existing Rate</h2>
	<p>Here you can edit all the parameters except the Prefix. If you want to keep the old rate just to have a history of all changes, you can do it by selecting the "File Current rate" checkbox and then clicking on "Apply Changes" button.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_edit_rate.png" border="0" />
        <p>Figure 4</p></div>
        <br />
        <h2>Import Rates</h2>
        <p> You can import a file containing the information of rates you want to create. It must be a CSV file.</p>
        <br />
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_import_rate.png" border="0" />
        <p>Figure 5</p></div>
	<p>The <i>Figure 6</i> shows an example of this file.</p>
        <div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_import_rate_file.png" border="0" />
        <p>Figure 6</p></div>
    </body>
</html>
<?php }} ?>
