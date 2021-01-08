<?php /* Smarty version Smarty-3.1.21, created on 2020-12-01 23:36:16
         compiled from "/var/www/html/modules/time_config/themes/default/time.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18361120555fc719c074b7e4-57383187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498c806929b054320ef670d18542a39853b00ed2' => 
    array (
      0 => '/var/www/html/modules/time_config/themes/default/time.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18361120555fc719c074b7e4-57383187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_DATETIME' => 0,
    'INDEX_ACTUALIZAR' => 0,
    'TIME_MSG_1' => 0,
    'INDEX_HORA_SERVIDOR' => 0,
    'TIME_NUEVA_FECHA' => 0,
    'CURRENT_DATE' => 0,
    'TIME_NUEVA_HORA' => 0,
    'TIME_NUEVA_ZONA' => 0,
    'ZONA_ACTUAL' => 0,
    'LISTA_ZONAS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fc719c07b26c3_23039464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc719c07b26c3_23039464')) {function content_5fc719c07b26c3_23039464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_time')) include '/usr/share/php/Smarty/plugins/function.html_select_time.php';
if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><?php echo '<script'; ?>
 type="text/javascript">
 
var serv_date2 = new Date(<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATETIME']->value;?>
);
var browser_date = new Date();
var serv_msecdiff = browser_date.getTime() - serv_date2.getTime();
<?php echo '</script'; ?>
>


<form action="#" method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
            <td align='left'><input class="button" type="submit" name="Actualizar" value="<?php echo $_smarty_tpl->tpl_vars['INDEX_ACTUALIZAR']->value;?>
" onClick="return confirm('<?php echo $_smarty_tpl->tpl_vars['TIME_MSG_1']->value;?>
');" /></td>
          </tr>
     </table>
</td>
</tr>
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">

          <tr> 
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['INDEX_HORA_SERVIDOR']->value;?>
:</b></td>
            <td><span id="SERVER_TIME" align='right'></span></td>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_FECHA']->value;?>
:</b></td>
            <td><input type="text" name="date" id="datepicker" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
" style = "width: 10em; color: rgb(136, 68, 0); background-color: rgb(250, 250, 250); border: 1px solid rgb(153, 153, 153); text-align: center;" READONLY>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_HORA']->value;?>
:</b></td>
            <td><?php echo smarty_function_html_select_time(array('prefix'=>"ServerDate_"),$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_ZONA']->value;?>
:</b></td>
            <td><?php echo smarty_function_html_options(array('name'=>"TimeZone",'selected'=>$_smarty_tpl->tpl_vars['ZONA_ACTUAL']->value,'values'=>$_smarty_tpl->tpl_vars['LISTA_ZONAS']->value,'output'=>$_smarty_tpl->tpl_vars['LISTA_ZONAS']->value),$_smarty_tpl);?>

            </td>
          </tr>

        </table>
    </td>
  </tr>
  </table>
  <input type='hidden' name='configurar_hora' id='configurar_hora' value='0' />
</form>
<?php }} ?>
