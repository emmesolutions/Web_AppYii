<?php

/* Application */

/*
	[WM_AppYii]
	Simply Yii-Powered Application
	
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

namespace app\models;

use Yii;
use yii\base\Model;
use app\helpers\WM_StoLData;

/**
 * This is the model class for Application.
 */

class Application extends Model {

	// Data Cookies Tabs
	public function Tbx_Cookies() {
	
	$Tbx_TbsName = Yii::$app->params['Tbx_TbsName'];
	$Tbx_TbsRows = Yii::$app->params['Tbx_TbsRows'];
	$OpWI_NrTabs = Yii::$app->params['OpWI_NrTabs']; 
	$Tbx_StoLData = array();
	for ($Tb = 1; $Tb <= $OpWI_NrTabs ; ++$Tb) {
		// Data Cookies Tabs Op.WI Paramters
		 $Tbx_StoLData = new \WM_StoLData; 
		 $Tbx_StoLData->DataCkWrite($Tbx_TbsName[$Tb-1],$Tbx_TbsRows[$Tb]);
		}

	return ;

	}
	
	// Read Tabs
	public function Tbx_Read($tb) {
	
		$Tbx_TbsName= Yii::$app->params['Tbx_TbsName'];	
		$Tbx_Read= new \WM_StoLData;
		$Tbx_Read->DataPmName = $Tbx_TbsName[$tb-1];

	return $Tbx_Read;

	}
	
	
}