<?php /* Smarty version Smarty-3.1.21, created on 2020-11-04 03:34:16
         compiled from "/var/www/html/modules/dhcp_server/themes/default/dhcp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11267554715fa267885d11e8-63693002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386b1d84cf7fa0d8398ef8a8b561a218fd990cd3' => 
    array (
      0 => '/var/www/html/modules/dhcp_server/themes/default/dhcp.tpl',
      1 => 1538163615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11267554715fa267885d11e8-63693002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIGURATION_UPDATE' => 0,
    'SERVICE_STARING' => 0,
    'SERVICE_STOP' => 0,
    'SERVICE_START' => 0,
    'REQUIRED_FIELD' => 0,
    'STATUS' => 0,
    'DHCP_STATUS' => 0,
    'START_RANGE_OF_IPS' => 0,
    'in_ip_ini_1' => 0,
    'in_ip_ini_2' => 0,
    'in_ip_ini_3' => 0,
    'in_ip_ini_4' => 0,
    'END_RANGE_OF_IPS' => 0,
    'in_ip_fin_1' => 0,
    'in_ip_fin_2' => 0,
    'in_ip_fin_3' => 0,
    'in_ip_fin_4' => 0,
    'in_lease_time' => 0,
    'OF_1_TO_50000_SECONDS' => 0,
    'DNS_1' => 0,
    'in_dns1_1' => 0,
    'in_dns1_2' => 0,
    'in_dns1_3' => 0,
    'in_dns1_4' => 0,
    'OPTIONAL' => 0,
    'DNS_2' => 0,
    'in_dns2_1' => 0,
    'in_dns2_2' => 0,
    'in_dns2_3' => 0,
    'in_dns2_4' => 0,
    'WINS' => 0,
    'in_wins_1' => 0,
    'in_wins_2' => 0,
    'in_wins_3' => 0,
    'in_wins_4' => 0,
    'GATEWAY' => 0,
    'in_gw_1' => 0,
    'in_gw_2' => 0,
    'in_gw_3' => 0,
    'in_gw_4' => 0,
    'in_gwm_1' => 0,
    'in_gwm_2' => 0,
    'in_gwm_3' => 0,
    'in_gwm_4' => 0,
    'NEXT_SERVER' => 0,
    'in_next_1' => 0,
    'in_next_2' => 0,
    'in_next_3' => 0,
    'in_next_4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fa26788654645_24467426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa26788654645_24467426')) {function content_5fa26788654645_24467426($_smarty_tpl) {?><form method="post">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="4" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <input class="button" name="in_actualizar_conf_red" value="<?php echo $_smarty_tpl->tpl_vars['CONFIGURATION_UPDATE']->value;?>
" type="submit" />&nbsp;&nbsp;
                            <?php if ($_smarty_tpl->tpl_vars['SERVICE_STARING']->value) {?>
                                <input class="button" name="in_finalizar"           value="<?php echo $_smarty_tpl->tpl_vars['SERVICE_STOP']->value;?>
"         type="submit" />
                            <?php } else { ?>
                                <input class="button" name="in_iniciar"             value="<?php echo $_smarty_tpl->tpl_vars['SERVICE_START']->value;?>
"        type="submit" />&nbsp;&nbsp;
                            <?php }?>
                        </td>
                        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
:</b></td>
                        <td><b><?php echo $_smarty_tpl->tpl_vars['DHCP_STATUS']->value;?>
</b></td>
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['START_RANGE_OF_IPS']->value;?>
: <span  class="required">*</span></b></td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_ip_ini_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_ip_ini_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_ini_4']->value['INPUT'];?>

                        </td>
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['END_RANGE_OF_IPS']->value;?>
: <span  class="required">*</span></b></td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_ip_fin_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_ip_fin_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_ip_fin_4']->value['INPUT'];?>

                        </td>
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['in_lease_time']->value['LABEL'];?>
 </b><span  class="required">*</span></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['in_lease_time']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OF_1_TO_50000_SECONDS']->value;?>
)</td>
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['DNS_1']->value;?>
: </td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_dns1_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_dns1_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns1_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns1_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns1_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns1_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns1_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns1_4']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
)
                        </td>
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['DNS_2']->value;?>
: </b></td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_dns2_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_dns2_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns2_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns2_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns2_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns2_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_dns2_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_dns2_4']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
)
                        </td> 
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['WINS']->value;?>
: </b></td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['in_wins_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_wins_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_wins_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_wins_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_wins_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_wins_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_wins_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_wins_4']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
)
                        </td> 
                    </tr>
                    <tr> 
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['GATEWAY']->value;?>
: </b></td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_gw_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_gw_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gw_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gw_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gw_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gw_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gw_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gw_4']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
)
                        </td>
                    </tr>
                   <!-- <tr> 
                        <td width="22%"><b><?php echo $_smarty_tpl->tpl_vars['GATEWAY']->value;?>
: <span  class="required">*</span></b></td>
                        <td> 
                            <?php echo $_smarty_tpl->tpl_vars['in_gwm_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_gwm_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gwm_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gwm_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gwm_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gwm_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_gwm_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_gwm_4']->value['INPUT'];?>

                        </td>
                    </tr>-->
                    <tr>
                        <td width="26%"><b><?php echo $_smarty_tpl->tpl_vars['NEXT_SERVER']->value;?>
: </b></td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['in_next_1']->value['LABEL'];
echo $_smarty_tpl->tpl_vars['in_next_1']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_next_2']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_next_2']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_next_3']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_next_3']->value['INPUT'];?>

                            <b><?php echo $_smarty_tpl->tpl_vars['in_next_4']->value['LABEL'];?>
</b><?php echo $_smarty_tpl->tpl_vars['in_next_4']->value['INPUT'];?>
&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
)
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<?php }} ?>
