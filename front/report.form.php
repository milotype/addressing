<?php
/*
 * @version $Id: HEADER 1 2009-09-21 14:58 Tsmr $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2009 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 
// ----------------------------------------------------------------------
// Original Author of file: CAILLAUD Xavier & COLLET Remi
// Purpose of file: plugin addressing v1.8.0 - GLPI 0.80
// ----------------------------------------------------------------------
 */

//Options for GLPI 0.71 and newer : need slave db to access the report
$USEDBREPLICATE=1;
$DBCONNECTION_REQUIRED=0;

$NEEDED_ITEMS=array("networking","computer","printer","peripheral","phone","user","group");
define('GLPI_ROOT', '../../..');
include (GLPI_ROOT."/inc/includes.php");

useplugin('addressing',true);

commonHeader($LANG['plugin_addressing']['title'][1],$_SERVER['PHP_SELF'],"plugins","addressing");

if (!isset($_GET["start"])) $_GET["start"] = 0;
if (!isset($_GET["export"])) $_GET["export"] = false;

$PluginAddressingAddressing=new PluginAddressingAddressing;
$PluginAddressingAddressing->showReport($_GET);

commonFooter();

?>