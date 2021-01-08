<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:53
         compiled from "/var/www/html/modules/address_book/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:18193871305fe0a17195b291-57267219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e9050dcda039d5011390478ec33d7ac546e3e4' => 
    array (
      0 => '/var/www/html/modules/address_book/help/en.hlp',
      1 => 1532462280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18193871305fe0a17195b291-57267219',
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
  'unifunc' => 'content_5fe0a17197fa69_20058124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a17197fa69_20058124')) {function content_5fe0a17197fa69_20058124($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
<p>The option "Address Book" of the menu "Agenda" shows a phone directory that contains internal and external phone numbers. The internal extensions are the ones that have been created in PBX module and they cannot be edited from this module. The external extension are the ones that has been created by the users from this module and don't belong to Issabel. To create an external extension click on "New Contact" button.</p>
<p>The following figure shows a list of internal extensions:</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_address1.png" border="0" />
<p>Figure 1</p></div>
<br/>
<p>The figure 2 shows a list of external telephone numbers. Notice that you can edit or delete these extensions:</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_address2.png" border="0" />
<p>Figure 2</p></div>
<br />

<p>The description of each field is detailed as follows:</p>
<table class="inline">
<tr><th>Name</th><th>Description</th></tr>
<tr><td>Name</td><td>Name of the extension</td></tr>
<tr><td>Phone number</td><td>Number of the extension</td></tr>
<tr><td>Email</td><td>Electronic contact</td></tr>
<tr><td>Call</td><td>Click here to call to the extension. Remember that the currently user must be associate an extension number to his account in order to make calls from here. You can do this in the module "System => Users"</td></tr>
<tr><td>Transfer</td><td>Transfer the call to other extension</td></tr>
<tr>
	<td>Type Contact</td>
	<td>
		<p><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/public.png" border="0" /> Public contact: Created by other user (non editable)</p>
		<p><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/public_edit.png" border="0" /> Public contact: Editable by the user who created it.</p>
		<p><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/contact.png" border="0" /> Private contact: Editable by the user who created it.</p>
	</td>
</tr>
</table>
<br />
<h2>Create a new contact</h2>
<p>To create an external new contact, just click on "New Contact" button and fill out the form. These contacts are not considered internal extensions. <i>Figure 3</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_address3.png" border="0" />
<p>Figure 3</p></div>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_address4.png" border="0" />
<p>Figure 4</p></div>
<br />
<p>You can also add new contacts by importing a csv file with the information of the contacts in three columns. This file must be separated by comma and the required fields are: Name, Last Name, Phone Number. The names of the fields must be in the first line of the file.</p>
<p>Also you can export your current external contacts list by clicking on "Download Address Book" button.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_address5.png" border="0" />
<p>Figure 5</p></div>
<br />



</body>
</html>
<?php }} ?>
