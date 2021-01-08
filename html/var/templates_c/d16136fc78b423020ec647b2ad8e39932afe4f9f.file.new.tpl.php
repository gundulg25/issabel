<?php /* Smarty version Smarty-3.1.21, created on 2020-12-04 17:16:03
         compiled from "/var/www/html/modules/sec_letsencrypt/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16688862245fca0c63ce6e44-48824674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16136fc78b423020ec647b2ad8e39932afe4f9f' => 
    array (
      0 => '/var/www/html/modules/sec_letsencrypt/themes/default/new.tpl',
      1 => 1536941046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16688862245fca0c63ce6e44-48824674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NO_HOSTNAME_NOTICE' => 0,
    'valueemail' => 0,
    'INSTALLNEW' => 0,
    'HASDATA' => 0,
    'DOMAIN' => 0,
    'valuedomain' => 0,
    'EMAIL' => 0,
    'STAGING' => 0,
    'INSTALL' => 0,
    'RENEWCERT' => 0,
    'RENEW' => 0,
    'USAGE' => 0,
    'STEP1' => 0,
    'STEP2' => 0,
    'STEP3' => 0,
    'STEP4' => 0,
    'STEP5' => 0,
    'STEP6' => 0,
    'STEP7' => 0,
    'STEP8' => 0,
    'STEP9' => 0,
    'STEP10' => 0,
    'STEP11' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fca0c63d24dd7_57866003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca0c63d24dd7_57866003')) {function content_5fca0c63d24dd7_57866003($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['NO_HOSTNAME_NOTICE']->value!='') {?>
<br/>
<div class="alert alert-danger">
<?php echo $_smarty_tpl->tpl_vars['NO_HOSTNAME_NOTICE']->value;?>

</div>

<?php } else { ?>

<div class="box-header well span5">

<?php if ($_smarty_tpl->tpl_vars['valueemail']->value=='') {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['INSTALLNEW']->value;?>
</h3>
<?php } else { ?>
       <div id="varstat" class="alert alert-success" align="center">
           <strong><?php echo $_smarty_tpl->tpl_vars['HASDATA']->value;?>
</strong>
       </div>
<?php }?>

<div class='row'>
<div class='col-md-6'>
    <label for="domain"><?php echo $_smarty_tpl->tpl_vars['DOMAIN']->value;?>
</label>
</div>
<div class='col-md-6'>
    <input type="text" placeholder="your.domain.com" id="domain" name="domain" class="text ui-widget-content ui-corner-all form-control col-md-6" value="<?php echo $_smarty_tpl->tpl_vars['valuedomain']->value;?>
"/>
</div>
</div>
<br/>
<div class='row'>
<div class='col-md-6'>
    <label for="email"><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
</div>
<div class='col-md-6'>
<input type="text" placeholder="myemail@mycompany.com" id="email" name="email" class="text ui-widget-content ui-corner-all form-control col-md-6" value="<?php echo $_smarty_tpl->tpl_vars['valueemail']->value;?>
"/>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['valueemail']->value=='') {?>
<br/>
<div class='row'>
<div class='col-md-6'>
    <label for="staging"><?php echo $_smarty_tpl->tpl_vars['STAGING']->value;?>
</label>
</div>
<div class='col-md-6'>
<input type="checkbox" name="staging" value="--test-cert" id="staging" />
</div>
</div>
<?php }?>
<br/>

<?php if ($_smarty_tpl->tpl_vars['valueemail']->value=='') {?>
    <input name="btninstall" type="submit" id="btninstall" value="<?php echo $_smarty_tpl->tpl_vars['INSTALL']->value;?>
" class="btn btn-primary" />
<?php }?>

</div>

<div id="loading1"></div>
<div id="output"></div>

<?php if ($_smarty_tpl->tpl_vars['valueemail']->value!='') {?>
    <div class="box-header well span5" data-original-title>
        <h3><?php echo $_smarty_tpl->tpl_vars['RENEWCERT']->value;?>
</h3>
        <input name="btnrenew" id="btnrenew" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['RENEW']->value;?>
" class="btn btn-primary" />
    </div>
<?php }?>

<div class="box-header well span5" data-original-title>
    <h3><?php echo $_smarty_tpl->tpl_vars['USAGE']->value;?>
:</h3>
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['STEP1']->value;?>
</li>
            <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['STEP2']->value;?>
</li>
            <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['STEP3']->value;?>
</li>
            <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['STEP4']->value;?>
</li>
            <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['STEP5']->value;?>
</li>
            <li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['STEP6']->value;?>
</li>
            <li class="list-group-item list-group-item-warning"><?php echo $_smarty_tpl->tpl_vars['STEP7']->value;?>
</li>
            <li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['STEP8']->value;?>
</li>
            <li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['STEP9']->value;?>
</li>
            <li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['STEP10']->value;?>
</li>
            <li class="list-group-item list-group-item-warning"><?php echo $_smarty_tpl->tpl_vars['STEP11']->value;?>
</li>
        </ul>
</div>
<?php }?>
<?php }} ?>
