<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:21:21
         compiled from "/var/www/html/modules/graphic_report/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:8306859815fe0a1516eb1d1-66796569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f726dcd8484e3d90677af0f8022aba91b5b55a' => 
    array (
      0 => '/var/www/html/modules/graphic_report/help/en.hlp',
      1 => 1533499298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8306859815fe0a1516eb1d1-66796569',
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
  'unifunc' => 'content_5fe0a15170d1b3_50209991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a15170d1b3_50209991')) {function content_5fe0a15170d1b3_50209991($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
<p>The option "Graphic Report" of the "Reports" module allows visualizing graphically information about the number of calls, queues and trunks of the system both in quantity and percentage.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_graphic_report_1.png" border="0" />
<p>Figure 1</p></div>
<br />
<p>To see the information of a specific extension, select "Extension(Number)" and then click on the link "Here". In the pop-up window, choose the phone number and then click on "Show button". <i>See Figure 2 and 3</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_graphic_report_2.png" border="0" />
<p>Figure 2</p></div>
<br />
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_graphic_report_3.png" border="0" />
<p>Figure 3</p></div>
<br />
<p>It is possible to generate a graphic of Number of Calls vs. Queues. To do this just select "Queue" from the dropdown menu. <i>See Figure 4</i></p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_graphic_report_4.png" border="0" />
<p>Figure 4</p></div>
<br />
<p>To generate a graphic of calls for the trunks, select "Trunk" from the first dropdown menu, and then select the name of the trunk from the second dropdown menu. Here you can check the duration of incoming and outgoing calls.</p>
<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_graphic_report_5.png" border="0" />
<p>Figure 5</p></div>
</body>
</html>
<?php }} ?>
