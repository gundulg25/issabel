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
  $Id: default.conf.php,v 1.1.1.1 2007/07/06 21:31:56 gcarrillo Exp $ */

global $arrConf;

$arrConf['basePath'] = realpath(dirname(__FILE__).'/..');
$arrConf['issabel_dbdir'] = '/var/www/db';
$arrConf['issabel_dsn'] = array(
                                "acl"       =>  "sqlite3:///$arrConf[issabel_dbdir]/acl.db",
                                "settings"  =>  "sqlite3:///$arrConf[issabel_dbdir]/settings.db",
                                "menu"      =>  "sqlite3:///$arrConf[issabel_dbdir]/menu.db",
                                "samples"   =>  "sqlite3:///$arrConf[issabel_dbdir]/samples.db",
                            );
$arrConf['theme'] = 'default'; //theme personal para los modulos esencialmente

// Verifico si las bases del framework están, debido a la migración de dichas bases como archivos .db a archivos .sql
checkFrameworkDatabases($arrConf['issabel_dbdir']);

$arrConf['mainTheme'] = load_theme($arrConf['basePath']."/"); //theme para la parte plantilla principal de Issabel (se usa para la inclusion de los css)
$arrConf['issabel_version'] = load_version_issabel($arrConf['basePath']."/"); //la version y le release del sistema Issabel
$arrConf['defaultMenu'] = 'config';
$arrConf['language'] = 'en';

/* La siguiente lista define los módulos provistos por el framework que deben
 * estar siempre disponibles sin importar el estado del menú. Estos módulos deben
 * funcionar únicamente con requerimientos AJAX, y para consistencia, todo
 * requerimiento a un módulo listado aquí debe usar rawmode=yes.
 * El módulo _issabelutils sirve para contener las utilidades json que
 * atienden requerimientos de varios widgets de la interfaz Issabel. Todo
 * requerimiento nuevo que no sea un módulo debe de agregarse en _issabelutils.
 * El módulo registration atiende las funcionalidades de registro de Issabel.
 * El módulo _issabelpanel redirige la petición al panel indicado por el parámetro panel.*/
$arrConf['elx_framework_globalmodules'] = array('_issabelutils', 'registration', '_issabelpanel');
// cadena_dsn es sólo para compatibilidad con versiones de elastix-callcenter < 2.2.0-6 (Elastix bug #1795)
$arrConf['cadena_dsn'] = "mysql://asterisk:asterisk@localhost/call_center";
$arrConf['hangup_cause'] = [0=>"Cause not defined",1=> "Unallocated Number",2=> "No Route To Specified Transmit Network",3=> "No Route To Destination",5=> "Misdialled Trunk Prefix",6=> "Channel Unacceptable",7=> "Call Awarded And Being Delivered In An Established Channel",8=> "Preemption",14=> "QoR: Ported Number",16=> "Normal Clearing",17=> "User Busy",18=> "No User Responding",19=> "No Answer From User",20=> "Subscriber Absent",21=> "Call Rejected",22=> "Number Changed",23=> "Redirected To New Destination",26=> "Non-selected User Clearing",27=> "Destination Out Of Order",28=> "Invalid Number Format",29=> "Facility Rejected",30=> "Response To STATUS ENQUIRY",31=> "Normal Unspecified",34=> "No Circuit/Channel Available",38=> "Network Out Of Order",41=> "Temporary Failure",42=> "Switching Equipment Congestion",43=> "Acces Information Discarded",44=> "Requested Circuit/Channel Not Available",50=> "Requested Facility Not Subscribed",52=> "Outgoing Call Barred",54=> "Incoming Call Barred",57=> "Bearer Capability Not Authorized",58=> "Bearer Capability Not Presently Availabel",65=> "Bearer Capability Not Impelemented",66=> "Channel Type Not Implemented",69=> "Requested Facility Not Implemented",81=> "Invalid Call Reference Value",88=> "Incompatible Destination",95=> "Invalide Message Unspecified",96=> "Mandatory Information Element Is Missing",97=> "Message Type Non-Existent or Not Implemented",98=> "Message Not Compatile With Call State",99=> "Information Element Non Existent",100=> "Invalid Information Element Contents",101=> "Message Not compatible With Call State",102=> "Recover On Timer Expiry",111=> "Protocol Error, Unspecified",127=> "Interworking, Unspecified",487=>"Originator Cancel"];

?>
