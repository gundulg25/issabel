<?php /* Smarty version Smarty-3.1.21, created on 2020-12-21 20:19:58
         compiled from "/var/www/html/themes/tenant/_common/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4579343085fe0a0fed16c79-70958298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ef339a78bc62fd9256bde6e47be8d061e201b9' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/help.tpl',
      1 => 1538488365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4579343085fe0a0fed16c79-70958298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'WEBPATH' => 0,
    'THEMENAME' => 0,
    'id_nodo' => 0,
    'name_nodo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fe0a0fed35881_50203934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe0a0fed35881_50203934')) {function content_5fe0a0fed35881_50203934($_smarty_tpl) {?><html>
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  <head>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css" />
  </head>
  <frameset cols="20%,80%" border="1" > 
    <frame src="frameLeft.php?id_nodo=<?php echo $_smarty_tpl->tpl_vars['id_nodo']->value;?>
" name="navegacion" noresize>
    <frame src="frameRight.php?id_nodo=<?php echo $_smarty_tpl->tpl_vars['id_nodo']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['name_nodo']->value;?>
" name="contenido" class="mainHelp" noresize>
  </frameset>
</html>
<?php }} ?>
