<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:51
         compiled from "/var/www/html/modules/cdrreport_customize/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:17431589845fe0a133376c66-68105255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0031d12ca94627dfb2d7b7d601d0fbfe07bb21' => 
    array (
      0 => '/var/www/html/modules/cdrreport_customize/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17431589845fe0a133376c66-68105255',
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
  'unifunc' => 'content_5fe0a133394958_10431064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a133394958_10431064')) {function content_5fe0a133394958_10431064($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>

<p>The option "CDR Reports" of the Menu “Reports” in Issabel lets us view a list with the details of the calls. You can download this list in different format files such as CSV, XLS and PDF.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_cdr_report_list.png" border="0" />
<p>Figure 1</p></div>
<br />

<p>The report will change depending on the values of the filter:</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_cdr_report_filters.png" border="0" />
<p>Figure 2</p></div>
<br />

<table class="inline">
  <tr>
    <th>Field</th><th>Description</th>
  </tr>
  <tr>
    <td>Start Date</td><td>The start date of the calls to be selected.</td>
  </tr>
  <tr>
    <td>End Date</td><td>The end date of the calls to be selected.</td>
  </tr>
  <tr>
    <td>Field</td><td>Additional fields for filtering: Source, Destination, Dst. Channel, Src. Channel, Account Code.</td>
  </tr>
  <tr>
    <td>Status</td><td>Status of call: Answered, Busy, Failed, No Answer.</td>
  </tr>
  <tr>
    <td>Ring group</td><td>The ring group of the calls to be selected.</td>
  </tr>
</table>
<br />

<p>If you want to delete the reports just find the records you want to get rid by using the filters and click on "Delete displayed CDR(s)" button.</p>
<br />
</body>
</html>
<?php }} ?>
