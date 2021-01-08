<?php /* Smarty version Smarty-3.1.21, created on 2020-11-03 03:58:57
         compiled from "/var/www/html/modules/dashboard/applets/ProcessesStatus/tpl/process_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14889538185fa11bd17ccbc9-05537604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b387bf575677872c39503dfb451c558e8bddbe7c' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/ProcessesStatus/tpl/process_status.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14889538185fa11bd17ccbc9-05537604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'sMsgStop' => 0,
    'sMsgStart' => 0,
    'sMsgRestart' => 0,
    'sMsgActivate' => 0,
    'sMsgDeactivate' => 0,
    'services' => 0,
    'infoServicio' => 0,
    'sServicio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fa11bd1801913_84746842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa11bd1801913_84746842')) {function content_5fa11bd1801913_84746842($_smarty_tpl) {?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/js/javascript.js'><?php echo '</script'; ?>
>

<div class="neo-applet-processes-menu">
<input type="hidden" id="neo_applet_selected_process" value="" />
<div id="neo-applet-processes-controles">
<input type="button" class="neo_applet_process" name="processcontrol_stop" id="neo_applet_process_stop" value="<?php echo $_smarty_tpl->tpl_vars['sMsgStop']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_start" id="neo_applet_process_start" value="<?php echo $_smarty_tpl->tpl_vars['sMsgStart']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_restart" id="neo_applet_process_restart" value="<?php echo $_smarty_tpl->tpl_vars['sMsgRestart']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_activate" id="neo_applet_process_activate" value="<?php echo $_smarty_tpl->tpl_vars['sMsgActivate']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_deactivate" id="neo_applet_process_deactivate" value="<?php echo $_smarty_tpl->tpl_vars['sMsgDeactivate']->value;?>
" />
</div>
<img id="neo-applet-processes-processing" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/loading.gif" style="display: none;" alt="" />
</div>
<?php  $_smarty_tpl->tpl_vars['infoServicio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['infoServicio']->_loop = false;
 $_smarty_tpl->tpl_vars['sServicio'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['infoServicio']->key => $_smarty_tpl->tpl_vars['infoServicio']->value) {
$_smarty_tpl->tpl_vars['infoServicio']->_loop = true;
 $_smarty_tpl->tpl_vars['sServicio']->value = $_smarty_tpl->tpl_vars['infoServicio']->key;
?>
<div class="neo-applet-processes-row">
    <div class="neo-applet-processes-row-icon"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['icon'];?>
" width="32" height="28" alt="<?php echo $_smarty_tpl->tpl_vars['sServicio']->value;?>
" /></div>
    <div class="neo-applet-processes-row-name"><?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['name_service'];?>
</div>
    <div class="neo-applet-processes-row-menu">
        <input type="hidden" name="key-servicio" id="key-servicio" value="<?php echo $_smarty_tpl->tpl_vars['sServicio']->value;?>
" />
        <input type="hidden" name="status-servicio" id="status-servicio" value="<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_service'];?>
" />
        <input type="hidden" name="activate-process" id="activate-process" value="<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['activate'];?>
" />
        <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_service_icon'];?>
" style="cursor:<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['pointer_style'];?>
;" width="15" height="15" alt="menu" />
    </div>
    <div class="neo-applet-processes-row-status-msg" style="color: <?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_desc'];?>
</div>
    <div class="neo-applet-processes-row-status-icon"></div>
</div>
<?php } ?>
<?php }} ?>
