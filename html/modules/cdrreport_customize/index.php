<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 0.5                                                  |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2006 Palosanto Solutions S. A.                         |
  +----------------------------------------------------------------------+
  | The contents of this file are subject to the General Public License  |
  | (GPL) Version 2 (the "License"); you may not use this file except in |
  | compliance with the License. You may obtain a copy of the License at |
  | http://www.opensource.org/licenses/gpl-license.php                   |
  |                                                                      |
  | Software distributed under the License is distributed on an "AS IS"  |
  | basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See  |
  | the License for the specific language governing rights and           |
  | limitations under the License.                                       |
  +----------------------------------------------------------------------+
  | The Initial Developer of the Original Code is PaloSanto Solutions    |
  +----------------------------------------------------------------------+
  $Id: index.php,v 1.1.1.1 2007/07/06 21:31:21 gcarrillo Exp $ */

include_once "libs/paloSantoGrid.class.php";
include_once "libs/paloSantoDB.class.php";
include_once "libs/paloSantoForm.class.php";
include_once "libs/paloSantoConfig.class.php";
include_once "libs/paloSantoCDR.class.php";
require_once "libs/misc.lib.php";

function _moduleContent(&$smarty, $module_name)
{
    require_once "modules/$module_name/libs/ringgroup.php";

    //include module files
    include_once "modules/$module_name/configs/default.conf.php";

    load_language_module($module_name);

    global $arrConf;
    global $arrConfModule;
    $arrConf = array_merge($arrConf,$arrConfModule);

    //folder path for custom templates
    $base_dir=dirname($_SERVER['SCRIPT_FILENAME']);
    $templates_dir=(isset($arrConf['templates_dir']))?$arrConf['templates_dir']:'themes';
    $local_templates_dir="$base_dir/modules/$module_name/".$templates_dir.'/'.$arrConf['theme'];

    // DSN para consulta de cdrs
    $dsn = generarDSNSistema('asteriskuser', 'asteriskcdrdb');
    $pDB     = new paloDB($dsn);
    $oCDR    = new paloSantoCDR($pDB);

    $pDBACL = new paloDB($arrConf['issabel_dsn']['acl']);
    if (!empty($pDBACL->errMsg)) {
        return "ERROR DE DB: $pDBACL->errMsg";
    }
    $pACL = new paloACL($pDBACL);
    if (!empty($pACL->errMsg)) {
        return "ERROR DE ACL: $pACL->errMsg";
    }

    $user = $_SESSION['issabel_user'];
    $extension = $pACL->getUserExtension($user);
    if ($extension == '') $extension = NULL;

    $bPuedeVerTodos = hasModulePrivilege($user, $module_name, 'reportany');

    // Sólo el administrador puede consultar con $extension == NULL
    if (is_null($extension)) {
        if ($bPuedeVerTodos)
            $smarty->assign("mb_message", "<b>"._tr("no_extension")."</b>");
        else{
            $smarty->assign("mb_message", "<b>"._tr("contact_admin")."</b>");
            return "";
        }
    }

    $bPuedeBorrar = hasModulePrivilege($user, $module_name, 'deleteany');

    // DSN para consulta de ringgroups
    $dsn_asterisk = generarDSNSistema('asteriskuser', 'asterisk');
    $pDB_asterisk=new paloDB($dsn_asterisk);
    $oRG    = new RingGroup($pDB_asterisk);
    $dataRG = $oRG->getRingGroup();
    $dataRG[''] = _tr('(Any ringgroup)');




    // Cadenas estáticas en la plantilla
    $smarty->assign(array(
        "Filter"    =>  _tr("Filter"),
    ));

    $arrFormElements = array(

        "destination"  => array("LABEL"                  => _tr("Destination"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),

        "extension"  => array("LABEL"                  => _tr("Extension"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),

        "start_range"  => array("LABEL"                  => _tr("Start Range"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),

        "caller_id"  => array("LABEL"                  => _tr("Caller ID"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),


        "date_start"  => array("LABEL"                  => _tr("Start Date"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "DATE",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),



        "date_end"    => array("LABEL"                  => _tr("End Date"),
                            "REQUIRED"               => "yes",
                            "INPUT_TYPE"             => "DATE",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),
        "caller_dst"    => array("LABEL"                  => _tr("Caller Destination"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),

        "tta"    => array("LABEL"                  => _tr("TTA (sec)"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[[:digit:]]{1,2}[[:space:]]+[[:alnum:]]{3}[[:space:]]+[[:digit:]]{4}$"),



//


        "field_name"  => array("LABEL"                  => _tr("Field Name"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "SELECT",
                            "INPUT_EXTRA_PARAM"      => array( "dst"         => _tr("Destination"),
                                                               "src"         => _tr("Source"),
                                                               "channel"     => _tr("Src. Channel"),
                                                               "accountcode" => _tr("Account Code"),
                                                               "dstchannel"  => _tr("Dst. Channel")),
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^(dst|src|channel|dstchannel|accountcode)$"),
        "field_pattern" => array("LABEL"                  => _tr("Field"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "TEXT",
                            "INPUT_EXTRA_PARAM"      => "",
                            "VALIDATION_TYPE"        => "ereg",
                            "VALIDATION_EXTRA_PARAM" => "^[\*|[:alnum:]@_\.,\/\-]+$"),
        "status"  => array("LABEL"                  => _tr("Status"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "SELECT",
                            "INPUT_EXTRA_PARAM"      => array(
                                                        "ALL"         => _tr("ALL"),
                                                        "ANSWERED"    => _tr("ANSWERED"),
                                                        "BUSY"        => _tr("BUSY"),
                                                        "FAILED"      => _tr("FAILED"),
                                                        "NO ANSWER "  => _tr("NO ANSWER")),
                            "VALIDATION_TYPE"        => "text",
                            "VALIDATION_EXTRA_PARAM" => ""),
        "ringgroup"  => array("LABEL"                  => _tr("Ring Group"),
                            "REQUIRED"               => "no",
                            "INPUT_TYPE"             => "SELECT",
                            "INPUT_EXTRA_PARAM"      => $dataRG ,
                            "VALIDATION_TYPE"        => "text",
                            "VALIDATION_EXTRA_PARAM" => ""),
        );

    $oFilterForm = new paloForm($smarty, $arrFormElements);

    // Parámetros base y validación de parámetros
    $url = array('menu' => $module_name);
    $paramFiltroBase = $paramFiltro = array(
        'date_start'    => date("d M Y"),
        'date_end'      => date("d M Y"),
        'field_name'    => 'dst',
        'field_pattern' => '',
        'status'        => 'ALL',
        'ringgroup'     =>  '',
    );
    foreach (array_keys($paramFiltro) as $k) {
        if (!is_null(getParameter($k))){
            $paramFiltro[$k] = getParameter($k);
        }
    }


    $oGrid  = new paloSantoGrid($smarty);



    if($paramFiltro['date_start']==="")
        $paramFiltro['date_start']  = " ";


    if($paramFiltro['date_end']==="")
        $paramFiltro['date_end']  = " ";


        $valueFieldName = $arrFormElements['field_name']["INPUT_EXTRA_PARAM"][$paramFiltro['field_name']];
        $valueStatus = $arrFormElements['status']["INPUT_EXTRA_PARAM"][$paramFiltro['status']];
        $valueRingGRoup = $arrFormElements['ringgroup']["INPUT_EXTRA_PARAM"][$paramFiltro['ringgroup']];


    $oGrid->addFilterControl(_tr("Filter applied: ")._tr("Start Date")." = ".$paramFiltro['date_start'].", "._tr("End Date")." = ".
    $paramFiltro['date_end'], $paramFiltro, array('date_start' => date("d M Y"),'date_end' => date("d M Y")),true);

    $oGrid->addFilterControl(_tr("Filter applied: ").$valueFieldName." = ".$paramFiltro['field_pattern'],$paramFiltro, array('field_name' => "dst",'field_pattern' => ""));

    $oGrid->addFilterControl(_tr("Filter applied: ")._tr("Status")." = ".$valueStatus,$paramFiltro, array('status' => 'ALL'),true);


    $oGrid->addFilterControl(_tr("Filter applied: ")._tr("Ring Group")." = ".$valueRingGRoup,$paramFiltro, array('ringgroup' => ''));

    $oGrid->addFilterControl(_tr("Filter applied: ")._tr("Ring Group")." = ".$valueRingGRoup,$paramFiltro, array('ringgroup' => ''));


    $htmlFilter = $oFilterForm->fetchForm("$local_templates_dir/filter.tpl", "", $paramFiltro);
    if (!$oFilterForm->validateForm($paramFiltro)) {
        $smarty->assign(array(
            'mb_title'      =>  _tr('Validation Error'),
            'mb_message'    =>  '<b>'._tr('The following fields contain errors').':</b><br/>'.
                                implode(', ', array_keys($oFilterForm->arrErroresValidacion)),
        ));
        $paramFiltro = $paramFiltroBase;
        unset($_POST['delete']);    // Se aborta el intento de borrar CDRs, si había uno.
    }

    // Tradudir fechas a formato ISO para comparación y para API de CDRs.
    $url = array_merge($url, $paramFiltro);
    $paramFiltro['date_start'] = translateDate($paramFiltro['date_start']).' 00:00:00';
    $paramFiltro['date_end'] = translateDate($paramFiltro['date_end']).' 23:59:59';

    // Valores de filtrado que no se seleccionan mediante filtro
    if (!$bPuedeVerTodos) $paramFiltro['extension'] = $extension;

    // Ejecutar el borrado, si se ha validado.
    if (isset($_POST['delete'])) {
        if ($bPuedeBorrar) {
            if ($paramFiltro['date_start'] <= $paramFiltro['date_end']) {
                $r = $oCDR->borrarCDRs($paramFiltro);
                if (!$r) $smarty->assign(array(
                    'mb_title'      =>  _tr('ERROR'),
                    'mb_message'    =>  $oCDR->errMsg,
                ));
            } else {
                $smarty->assign(array(
                    'mb_title'      =>  _tr('ERROR'),
                    'mb_message'    =>  _tr("Please End Date must be greater than Start Date"),
                ));
            }
        } else {
            $smarty->assign(array(
                'mb_title'      =>  _tr('ERROR'),
                'mb_message'    =>  _tr("Only administrators can delete CDRs"),
            ));
        }
    }

    $oGrid->setTitle(_tr("CDR Report Customize"));
    $oGrid->pagingShow(true); // show paging section.
    // $oGrid->deleteShow(true); // show paging section.

    // print_r(get_class_methods($oGrid));

    // $oGrid->enableExport();   // enable export.
    $oGrid->setNameFile_Export(_tr("CDRReport"));
    $oGrid->setURL($url);
    if ($bPuedeBorrar)
        // $oGrid->deleteList("Are you sure you wish to delete CDR(s) Report(s)?","delete",_tr("Delete"));



    $arrData = null;
    $total = $oCDR->contarCDRs($paramFiltro);

    if($oGrid->isExportAction()){
        $limit = $total;
        $offset = 0;

       $arrColumns = array(_tr("Ext."),_tr("caller_name"),_tr("Date"), _tr("Source"), _tr("Ring Group"), _tr("Destination"), _tr("Src. Channel"),_tr("Account Code"),_tr("Dst. Channel"),_tr("Status"),_tr("Duration"),_tr("UniqueID"),_tr("Recording"), _tr("Cnum"),_tr("Cnam"), _tr("Outbound Cnum"), _tr("DID"));  

      $oGrid->setColumns($arrColumns);

        $arrResult = $oCDR->listarCDRs($paramFiltro, $limit, $offset);

        if(is_array($arrResult['cdrs']) && $total>0){
            foreach($arrResult['cdrs'] as $key => $value){
                $arrTmp[0] = $value[0];
                $arrTmp[1] = $value[1];
                $arrTmp[2] = $value[11];
                $arrTmp[3] = $value[2];
                $arrTmp[4] = $value[3];
                $arrTmp[5] = $value[9];
                $arrTmp[6] = $value[4];
                $arrTmp[7] = $value[5];
                $iDuracion = $value[8];
                $iSec = $iDuracion % 60; $iDuracion = (int)(($iDuracion - $iSec) / 60);
                $iMin = $iDuracion % 60; $iDuracion = (int)(($iDuracion - $iMin) / 60);
                $sTiempo = "{$value[8]}s";
                if ($value[8] >= 60) {
                      if ($iDuracion > 0) $sTiempo .= " ({$iDuracion}h {$iMin}m {$iSec}s)";
                      elseif ($iMin > 0)  $sTiempo .= " ({$iMin}m {$iSec}s)";
                }
                $arrTmp[8]  = empty($sTiempo) ? $sTiempo :_tr('N/A');

                $arrTmp[9]  = $value[6];  //uniqueid
                $arrTmp[10] = $value[12]; //recordingfile 
                $arrTmp[11] = $value[13]; //cnum 
                $arrTmp[12] = $value[14]; //cnam
                $arrTmp[13] = $value[15]; //outbound_cnum
                $arrTmp[14] = $value[16]; //did

                $arrData[] = $arrTmp;
            }
        }
        if (!is_array($arrResult)) {
        $smarty->assign(array(
            'mb_title'      =>  _tr('ERROR'),
            'mb_message'    =>  $oCDR->errMsg,
        ));
        }
    }else {
        $limit = 20;
        $oGrid->setLimit($limit);
        $oGrid->setTotal($total);

        $offset = $oGrid->calculateOffset();
        $arrResult = $oCDR->listarCDRs($paramFiltro, $limit, $offset);

        $arrColumns = array(_tr("#"),_tr("&nbsp;"),_tr("Ext."),_tr("Caller Name"),_tr("Caller Number"), _tr("Caller Destination"), _tr("Recording"), _tr("Date"), _tr("Time"),_tr("TTA"),_tr("Duration"),_tr("PDD"),_tr("MOS"),_tr("Hangup Cause"));
        $oGrid->setColumns($arrColumns);

        if(is_array($arrResult['cdrs']) && $total>0){
            foreach($arrResult['cdrs'] as $key => $value){


                $hc = $arrConf['hangup_cause'][$value[17]];

                $arrTmp[0] = '<input type="checkbox" name="id-cdrs[]" value="'.$value[6].'"></input>';

                if ($value[5] == "ANSWERED") {
                   $value[5] = "<font color=green><i class='fa fa-download' style='display:block;'></i></font>";
                }
                elseif ($value[5] == "NO ANSWER") {
                   $value[5] = "<font color=red><i class='fa fa-download' style='display:block;'></i></font>";
                }
                elseif ($value[5] == "BUSY") {
                    $value[5] = "<font color=ambar><i class='fa fa-download' style='display:block;'></i></font>";
                }
                elseif ($value[5] == "FAILED") {
                    $value[5] = "<font color=red><i class='fa fa-download' style='display:block;'></i></font>";
                }
                else {
                    $value[5] = "<font color=red>$value[5]</font>";
                }

                $arrTmp[7] = $value[5];


                $arrTmp[2] = $value[1];
                $arrTmp[3] = $value[14];
                $arrTmp[4] = !empty($value[15]) ? $value[15] : _tr('N/A') ;
                $arrTmp[5] = $value[2];

                if(file_exists($value[12])){
                    $record =  'test';
                }


// print_r($value);
                $arrTmp[6] = '
                <a class="btn btn-sm btn-success" href="/index.php?menu=monitoring&action=display_record&id='.$value[6].'&rawmode=yes"><i class="fa fa-play" style="display:block;"></i></a>
                <a class="btn btn-sm btn-danger" target="_blank" href="/index.php?menu=monitoring&action=download&id='.$value[6].'&rawmode=yes"><i class="fa fa-download" style="display:block;"></i></a>';//$value[12];

                $arrTmp[7] = date('d M Y',strtotime($value[0]));
                $arrTmp[8] = date('H:i:s',strtotime($value[0]));


                $tta = $value[8] > 0 ? $value[7] : 0 ;


                $arrTmp[9] = !empty($tta) ? $tta.'s' : _tr('N/A') ;



                $iDuracion = $value[8];


                // print_r($value);

                if(is_array($jitter = explode(';', $value[18]))){
                    list($user, $pass, $uid, $gid, $rxcount, $txjitter, $txcount,$lp,$rtt) = explode(';', $value[18]);
                }



                $Jitter = @end(explode("=", $txjitter));
                $AverageLatency = @end(explode("=", $rtt));
                $PacketLoss = @end(explode("=", $lp));


                //Take the average latency, add jitter, but double the impact to latency
                //then add 10 for protocol latencies
                $EffectiveLatency = ( (float) @$AverageLatency + (float) @$Jitter * 2 + 10 );
                 

                // echo $PacketLoss.'<br>';


                //Implement a basic curve - deduct 4 for the R value at 160ms of latency
                //(round trip). Anything over that gets a much more agressive deduction
                if ($EffectiveLatency < 160){
                    $R = 93.2 - ($EffectiveLatency / 40);
                }else {
                    $R = 93.2 - ($EffectiveLatency - 120) / 10;
                }
                 
                //Now, let's deduct 2.5 R values per percentage of packet loss
                $R = $R - (@$PacketLoss * 2.5);
                 
                //Convert the R into an MOS value.(this is a known formula)
                $mos = 1 + (0.035) * $R + (.000007) * $R * ($R-60) * (100-$R);


                // print_r($mos);

                // $mos = round($mos,3,PHP_ROUND_HALF_DOWN);



                $iSec = $iDuracion % 60; $iDuracion = (int)(($iDuracion - $iSec) / 60);
                $iMin = $iDuracion % 60; $iDuracion = (int)(($iDuracion - $iMin) / 60);
                $sTiempo = "";

                if ($value[8] >= 60) {
                      if ($iDuracion > 0) $sTiempo .= " {$iDuracion}:{$iMin}:{$iSec}";
                      elseif ($iMin > 0)  $sTiempo .= " 00:{$iMin}:{$iSec}";
                }else{
                    $sTiempo = "00:00:".str_pad($value[8], 2, '0', STR_PAD_LEFT)."";
                }

                //$value[7] = 

                $arrTmp[10] = !empty($sTiempo) ? $sTiempo : _tr('N/A');
                $pdd =  abs($value[8] - $value[7]);
                $arrTmp[11] = !empty($pdd) ? $pdd.'s' : _tr('N/A') ;
                $arrTmp[12] =  !empty($mos) ? $mos : _tr('N/A');
                $arrTmp[13] =  !empty($hc) ? "<span data-value='{$value[17]}'>".$hc."</span>" : "$value[17]"._tr('N/A');





                // $arrTmp[9] = $value[6]; // uniqueid

                $arrData[] = $arrTmp;
            }
        }
        if (!is_array($arrResult)) {
        $smarty->assign(array(
            'mb_title'      =>  _tr('ERROR'),
            'mb_message'    =>  $oCDR->errMsg,
        ));
        }
    }
    $oGrid->setData($arrData);
    $smarty->assign("SHOW", _tr("Show"));
    $oGrid->showFilter($htmlFilter);
    $content = $oGrid->fetchGrid();
    return $content.'<style type="text/css">
  

#neo-table-header-filterrow {
     position:relative !important; 
    margin-bottom: 10px;
    padding:10px;
    background-color:#fff;
    z-index:110;
    border: 1px solid #ccc;
    /*    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;*/
    opacity: 0.94;
    filter: alpha(opacity=94);
    display:block;
    width:auto;
}

</style>';
}

// Abstracción de privilegio por módulo hasta implementar (Elastix bug #1100).
// Parámetro $module se usará en un futuro al implementar paloACL::hasModulePrivilege().
function hasModulePrivilege($user, $module, $privilege)
{
    global $arrConf;

    $pDB = new paloDB($arrConf['issabel_dsn']['acl']);
    $pACL = new paloACL($pDB);

    if (method_exists($pACL, 'hasModulePrivilege'))
        return $pACL->hasModulePrivilege($user, $module, $privilege);

    $isAdmin = ($pACL->isUserAdministratorGroup($user) !== FALSE);
    return ($isAdmin && in_array($privilege, array(
        'reportany',    // ¿Está autorizado el usuario a ver la información de todos los demás?
        'deleteany',    // ¿Está autorizado el usuario a borrar CDRs?
    )));
}
