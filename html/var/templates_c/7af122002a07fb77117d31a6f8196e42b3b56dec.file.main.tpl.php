<?php /* Smarty version Smarty-3.1.21, created on 2020-12-17 18:01:17
         compiled from "/var/www/html/modules/pbxadmin/themes/default/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5387783875f92770292c1b7-21417141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af122002a07fb77117d31a6f8196e42b3b56dec' => 
    array (
      0 => '/var/www/html/modules/pbxadmin/themes/default/main.tpl',
      1 => 1608202872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5387783875f92770292c1b7-21417141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f92770295d056_33459045',
  'variables' => 
  array (
    'leftmenu' => 0,
    'category' => 0,
    'menucategory' => 0,
    'menuitem' => 0,
    'Option' => 0,
    'Unembedded_IssabelPBX' => 0,
    'INFO' => 0,
    'htmlFPBX' => 0,
    'isissabelpbx' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f92770295d056_33459045')) {function content_5f92770295d056_33459045($_smarty_tpl) {?><table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td valign="top" width="220">
      <div id="nav">
        <div id="nav-setup" class="tabs-container">

          <ul>
            <?php  $_smarty_tpl->tpl_vars['menucategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menucategory']->_loop = false;
 $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['leftmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menucategory']->key => $_smarty_tpl->tpl_vars['menucategory']->value) {
$_smarty_tpl->tpl_vars['menucategory']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->value = $_smarty_tpl->tpl_vars['menucategory']->key;
?>
                <li class="category category-header accordion" ><div 
                  id="accordionExample<?php echo md5($_smarty_tpl->tpl_vars['category']->value);?>
" 
                  class="accordion-button collapsed" 
                  data-toggle="collapse" 
                  data-target="#accordion<?php echo md5($_smarty_tpl->tpl_vars['category']->value);?>
" 
                  aria-expanded="true" 
                  aria-controls="#accordion<?php echo md5($_smarty_tpl->tpl_vars['category']->value);?>
"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#nav-setup"

                  ><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
 <div class="pull-right" style="margin-right:10px;"><i class="fa  fa-caret-right"></i></div></div></li>
                <ul  id="accordion<?php echo md5($_smarty_tpl->tpl_vars['category']->value);?>
" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo md5($_smarty_tpl->tpl_vars['category']->value);?>
">
                <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menucategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value) {
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>

                    <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['urlkey'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['name'];?>
</a></li>
                <?php } ?>
              </ul>
            <?php } ?>
<!-- 
            <li  class="category category-header accordion hidden" ><div id="accordionExample-options" data-toggle="collapse" data-target="#accordion-options" aria-expanded="true" aria-controls="#accordion-options"><?php echo $_smarty_tpl->tpl_vars['Option']->value;?>
<div class="pull-right" style="margin-right:10px;"><i class="fa  fa-caret-right"></i></div></div></li>
            <ul  id="accordion-options" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordionExample-options">
              <li style="float:left;border-right:0px"><a href="/admin/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Unembedded_IssabelPBX']->value;?>
</a></li>
            </ul>
            <div style="height:0px" class="hidden">
                <a href="#" class="info"><span style='margin-left:0.2cm; margin-top:-1.8cm; width:303px'><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</span></a>
            </div>
 -->
          </ul>
        </div>
      </div>
      <br /> <br /> <br /> <br />
    </td>
    <td id="content_pbx" valign="top"><?php echo $_smarty_tpl->tpl_vars['htmlFPBX']->value;?>
</td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['isissabelpbx']->value=="0") {?>
  <tr>
    <td></td>
    <td valign="bottom">
      <div align="center">
      </div>
    </td>
  </tr>
  <?php }?>
</table>
<?php }} ?>
