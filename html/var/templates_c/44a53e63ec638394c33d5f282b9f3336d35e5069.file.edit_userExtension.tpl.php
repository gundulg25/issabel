<?php /* Smarty version Smarty-3.1.21, created on 2020-12-14 14:31:35
         compiled from "/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7656182535fd714d7a85e80-15864680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a53e63ec638394c33d5f282b9f3336d35e5069' => 
    array (
      0 => '/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl',
      1 => 1538488365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7656182535fd714d7a85e80-15864680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'THEMENAME' => 0,
    'HEADER_LIBS_JQUERY' => 0,
    'HEADER' => 0,
    'HEADER_MODULES' => 0,
    'icon' => 0,
    'title' => 0,
    'mb_message' => 0,
    'mb_title' => 0,
    'md_message_title' => 0,
    'CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fd714d7c689b9_97816536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd714d7c689b9_97816536')) {function content_5fd714d7c689b9_97816536($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Issabel</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
        <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
libs/js/base.js"><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['HEADER_MODULES']->value;?>

    </head>
    <body>
    <?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value=="elastixneo") {?>
      <div>
        <div class="elxneo-module-title">
            <div class="name-left"></div>
            <span class="name">
          <?php if ($_smarty_tpl->tpl_vars['icon']->value!=null) {?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" width="22" height="22" align="absmiddle" />
          <?php }?>
          &nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <div class="name-right"></div>
          </div>
      <div id="elxneo-content">
<?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
<div class="div_msg_errors" id="message_error">
    <div style="height:24px">
        <div class="div_msg_errors_title" style="padding-left:5px"><b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b></div>
        <div class="div_msg_errors_dismiss"><input type="button" onclick="hide_message_error();" value="<?php echo $_smarty_tpl->tpl_vars['md_message_title']->value;?>
"/></div>
    </div>
    <div style="padding:2px 10px 2px 10px"><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</div>
</div>
<?php }?>
          <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

       </div>
    <?php } else { ?>
<?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="message_board">
      <tbody id="table_error">
      <tr>
        <tr>
            <td valign="middle" class="mb_title">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</td>
        </tr>
        <tr>
            <td valign="middle" class="mb_message"><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</td>
        </tr>
    </tbody></table>
<?php }?>
    <div class="moduleTitle">
      &nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

<?php }?>
    </body>
</html>
<?php }} ?>
