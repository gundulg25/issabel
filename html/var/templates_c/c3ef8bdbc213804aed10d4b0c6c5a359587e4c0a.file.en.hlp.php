<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:20:46
         compiled from "/var/www/html/modules/text_to_wav/help/en.hlp" */ ?>
<?php /*%%SmartyHeaderCode:12618960035fe0a12ed9ca31-96718392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ef8bdbc213804aed10d4b0c6c5a359587e4c0a' => 
    array (
      0 => '/var/www/html/modules/text_to_wav/help/en.hlp',
      1 => 1536346712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12618960035fe0a12ed9ca31-96718392',
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
  'unifunc' => 'content_5fe0a12edb9ea0_88520563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a12edb9ea0_88520563')) {function content_5fe0a12edb9ea0_88520563($_smarty_tpl) {?><html>
<header>
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
  <link rel="stylesheet" href="/themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
</header>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['node_name']->value;?>
</h1>
<p>The option "Text to Wav" of the Menu "PBX" in Issabel allows transforming text to Audio. The output format of the file can be ".wav" or ".gsm". Write the message you want to transform, select the output format and click on "Generate Audio File" button. Automatically you will be asked to save the file in a location of your hard drive.</p>

<div class="hlp_figures"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
/images/hlp_text_to_wav.png" border="0" />
<p>Figure 1</p></div>
<br/ >

</body>
</html>
<?php }} ?>
