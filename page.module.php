<?php /* $Id */

//  This is a module template replace all text between <<    >> with appropriate values
//  the word <<module>> is used in place of the actual module short name
//  this file must be renamed to page.<<moduleshortname>>.php

if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//This file is part of FreePBX.
//
//    This is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 2 of the License, or
//    (at your option) any later version.
//
//    This module is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    see <http://www.gnu.org/licenses/>.
//

$starter = FreePBX::create()->Starter; //Starter.class.php
echo $starter->showPage();