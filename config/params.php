<?php
/*
	[WM_AppYii]
	Web eMMe - Simply Yii-Powered Application

    	Copyright (C) 2016 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

    /**
    * Application Parameters
    */

// DB Connection
$pm = require(__DIR__ . '/db.php');
$db = new yii\db\Connection([
    	'dsn' => $pm['dsn'],
    	'username' => $pm['username'],
    	'password' => $pm['password'],
    	'charset' => $pm['charset'], 
	]);


/* Settings Parameters */	
// DB Table Name
	$Table = 'Settings';
// DB Read Data from Table
	$Settings = $db->createCommand('SELECT * FROM '.$Table)->queryAll();
// DB Read NumRow from Table
	$Row0 = $db->createCommand('SELECT COUNT(*) FROM '.$Table)->queryAll();
	$SetDBRow = $Row0['0']['COUNT(*)'];
// Data Selections
$SetValue = array(
		array('Demo','Online'),
		array('English','Italiano'),
		array('Style00','Style01'),
		array('Default','-'),
		array('Right','Left'),
		array('Show','Hide'),
		array('01','02'),
		array('01','02')
		);
	

/* Operator Web Interface (OpWI) Parameters 	*/
/* Settings					*/
// DB Table Name
	$Table = 'SetOpWI';
// DB Read Data from Table
	$SetngsOpWI = $db->createCommand('SELECT * FROM '.$Table)->queryAll();
// DB Read NumRow from Table
	$Row0 = $db->createCommand('SELECT COUNT(*) FROM '.$Table)->queryAll();
	$SetOpWIRow = $Row0['0']['COUNT(*)'];
// Data Selections
$SetOpWIVal= array(
		array('2','4','6','8'),
		array('1','2','3','4'),
		array('1','2','3','4'),
		array('1','2','3','4'),
		array('1','2','3','4'),
		array('1','2','3','4'),
		array('1','2','3','4'),
		array('1','2','3','4')
		);
/* Operator Web Interface (OpWI) Parameters 	*/		
/* Tabs  					*/
$OpWI_NrTabs = 6; // Number Tables (Max 8)
$OpWI_NrRows = 4; // Number Rows   (Max 8)
$OpWI_NrClmn = 2; // Number Column (Max 4)
// DB Tables Names
$Tbx_TbsName = array(
		'Tb1_AppOpWI',
		'Tb2_AppOpWI',
		'Tb3_AppOpWI',
		'Tb4_AppOpWI',
		'Tb5_AppOpWI',
		'Tb6_AppOpWI',
		'Tb7_AppOpWI',
		'Tb8_AppOpWI'
		);	
$Tbx_AppOpWI = array();
$Tbx_TbsRows = array();
for ($Tb = 1; $Tb <= 8; ++$Tb) {
	$Tbx_AppOpWI[$Tb] = $db->createCommand('SELECT * FROM '.$Tbx_TbsName[$Tb-1])->queryAll();
	$Row0 = $db->createCommand('SELECT COUNT(*) FROM '.$Tbx_TbsName[$Tb-1])->queryAll();
	$Tbx_TbsRows[$Tb] = $Row0['0']['COUNT(*)'];
}
	
// Data Selections All Tabs
$Tbx_WIValue = array(
		// Row 01
		array('11','12','13'),
		array('12','13','14'),
		array('13','14','15'),
		array('14','15','16'),
		// Row 02
		array('21','22','23'),
		array('22','23','24'),
		array('23','24','25'),
		array('24','25','26'),
		// Row 03
		array('31','32','33'),
		array('32','33','34'),
		array('33','34','35'),
		array('34','35','36'),
		// Row 04
		array('41','42','43'),
		array('42','43','44'),
		array('43','44','45'),
		array('44','45','46'),
		// Row 05
		array('51','52','53'),
		array('52','53','54'),
		array('53','54','55'),
		array('54','55','56'),
		// Row 06
		array('61','62','63'),
		array('62','63','64'),
		array('63','64','65'),
		array('64','65','66'),
		// Row 07
		array('71','72','73'),
		array('72','73','74'),
		array('73','74','75'),
		array('74','75','76'),
		// Row 08
		array('81','82','83'),
		array('82','83','84'),
		array('83','84','85'),
		array('84','85','86')
	);

/* Return Data */
return [
	'Settings' => $Settings,
	'SetDBRow' => $SetDBRow,
	'SetValue' => $SetValue,
	'SetngsOpWI' => $SetngsOpWI,
	'SetOpWIRow' => $SetOpWIRow,
	'SetOpWIVal' => $SetOpWIVal,
	'OpWI_NrTabs' => $OpWI_NrTabs,
	'OpWI_NrRows' => $OpWI_NrRows,
	'OpWI_NrClmn' => $OpWI_NrClmn,
	'Tbx_TbsName' => $Tbx_TbsName,
	'Tbx_TbsRows' => $Tbx_TbsRows,
	'Tbx_WIValue' => $Tbx_WIValue,	
	'Tb1_AppOpWI' => $Tbx_AppOpWI[1],
	'Tb2_AppOpWI' => $Tbx_AppOpWI[2],
	'Tb3_AppOpWI' => $Tbx_AppOpWI[3],	
	'Tb4_AppOpWI' => $Tbx_AppOpWI[4],
	'Tb5_AppOpWI' => $Tbx_AppOpWI[5],
	'Tb6_AppOpWI' => $Tbx_AppOpWI[6],
	'Tb7_AppOpWI' => $Tbx_AppOpWI[7],	
	'Tb8_AppOpWI' => $Tbx_AppOpWI[8],		
	'BrandLabel' => 'Simply Yii-Powered Application',
	'adminEmail' => 'webmaster@webemme.net',
];