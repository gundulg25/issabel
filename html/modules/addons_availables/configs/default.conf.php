<?php
/*
  vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 4.0.0-15                                               |
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
  $Id: default.conf.php,v 1.1 2007/01/09 23:49:36 alex Exp $
*/
global $arrConf;
global $arrConfModule;

$arrConfModule = array(
    'templates_dir'     =>  'themes',
    'dsn_conn_database' =>  "sqlite3:///$arrConf[issabel_dbdir]/addons.db",
    'socket_conn_ip'    =>  'localhost',
    'socket_conn_port'  =>  20004,
    'url_webservice'    =>  'https://cloud.issabel.org/wsdl.php?type=wsdl&name=addons',
    'url_images'        =>  '//cloud.issabel.org/modules/addons_availables/images_newAddons',
);
?>
