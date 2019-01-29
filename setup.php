<?php
/*
 * -------------------------------------------------------------------------
Mask plugin
Copyright (C) 2016 by Raynet SAS a company of A.Raymond Network.

http://www.araymond.com
-------------------------------------------------------------------------

LICENSE

This file is part of Timezones management plugin for GLPI.

This file is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GLPI is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GLPI. If not, see <http://www.gnu.org/licenses/>.
--------------------------------------------------------------------------
 */


// ----------------------------------------------------------------------
// Original Author of file: Olivier Moron
// Purpose of file: Provides frame for masking button clicks and key pressed
// ----------------------------------------------------------------------

define ("PLUGIN_MASK_VERSION", "2.2.0");

function plugin_init_mask() {
   global $PLUGIN_HOOKS,$LANG,$CFG_GLPI;

   $PLUGIN_HOOKS['csrf_compliant']['mask'] = true;

   // Add specific files to add to the header : javascript or css
   $PLUGIN_HOOKS['add_javascript']['mask'] = ['js/mask.js'];
}


// Get the name and the version of the plugin
function plugin_version_mask() {

   return ['name'           => 'Mask',
            'version'        => PLUGIN_MASK_VERSION,
            'author'         => 'Olivier Moron',
            'license'        => 'GPLv2+',
            'homepage'       => 'https://github.com/tomolimo/mask',
            'minGlpiVersion' => '0.90'];
}


// Optional : check prerequisites before install : may print errors or add to message after redirect
function plugin_mask_check_prerequisites() {

   if (version_compare(GLPI_VERSION, '0.90', 'lt')) {
      echo "This plugin requires GLPI >= 0.90";
      return false;
   }
   return true;
}


// Check configuration process for plugin : need to return true if succeeded
// Can display a message only if failure and $verbose is true
function plugin_mask_check_config($verbose = false) {

   return true;
}
