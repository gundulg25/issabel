<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 4.0                                                  |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2018 Issabel Foundation                                |
  +----------------------------------------------------------------------+
  | This program is free software: you can redistribute it and/or modify |
  | it under the terms of the GNU General Public License as published by |
  | the Free Software Foundation, either version 3 of the License, or    |
  | (at your option) any later version.                                  |
  |                                                                      |
  | This program is distributed in the hope that it will be useful,      |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
  | GNU General Public License for more details.                         |
  |                                                                      |
  | You should have received a copy of the GNU General Public License    |
  | along with this program.  If not, see <http://www.gnu.org/licenses/> |
  +----------------------------------------------------------------------+
  | The Initial Developer of the Original Code is Issabel LLC            |
  +----------------------------------------------------------------------+
  $Id: index.php, Tue 04 Sep 2018 05:56:55 PM EDT, nicolas@issabel.com
*/

$f3=require('lib/base.php');
$f3->set('AUTOLOAD','models/; controllers/');
$f3->set('DEBUG',255);

if(is_file("/etc/issabel.conf")) {
    $data    = parse_ini_file("/etc/issabel.conf");
    $dbpass  = $data['mysqlrootpwd'];
    $mgrpass = $data['amiadminpwd'];
}

$options = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // generic attribute
    \PDO::ATTR_PERSISTENT => TRUE,  // we want to use persistent connections
    \PDO::MYSQL_ATTR_COMPRESS => TRUE, // MySQL-specific attribute
);

$f3->set('MGRPASS',$mgrpass);
$f3->set('DB', new DB\SQL('mysql:host=localhost;port=3306;dbname=asterisk', 'root', $dbpass, $options));


$f3->set('JWT_KEY', 'ZWRiYWMxZTYxYWFmZDI3YWNhOTE1ZDdmZTkxNmUwZDU5ZGY1ZGJjYjJjMzA4ZDJi');
$f3->set('JWT_EXPIRES', 60 * 60);

$f3->route('GET /','help->display');

$f3->map('/@controller','@controller');
$f3->map('/@controller/@id','@controller');

$f3->route('GET /@controller/search/@term','@controller->search');

$f3->run();
