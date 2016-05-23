<?php
/**
 * Copyright (C) 2016 Martinelli Michele
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

use yii\web\Cookie;
use yii\web\CookieCollection;
use yii\web\Response;

/** 
 * Server to Local Data (StoL) Class 
 * Property $DataPmName Name of the DB Data
 * Property $DataDBRowss Number of the DB Data rows
 * Method DataName($id) Read DB Data Name from Params
 * return ['Name'];
 * Method DataDesc($id) Read DB Data Description from Params
 * return ['Description'];
 * DataDBValue($id) Read DB Data Value from Params
 * return ['Value'];
 * DataCkValue($id) Read Cookies Data Value
 * return ['Value'];
 * DataCkWrite() Write/Update Cookies Data Value 
 */
class WM_StoLData 
{

    public $DataPmName;
    public $DataDBRows;

    /**
    * Constructor
    */
    function __construct()
    { 
        $this->DataPmName = null; 
        $this->DataDBRows = null; 
    } 

    /**
     * DB Data Name
     * Read DB Data Name from Params
     * Data(id) -> return ['Name']
     */
    public function DataName($id) 
    {
        $DataDBName = $this->DataPmName;
        $id = $id -1;
        $Set0 = Yii::$app->params[$DataDBName]; 

        return $Set0[$id]['Name'];
    }

    /** 
     * DB Data Description
     * Read DB Data Description from Params	 
     * Data(id) -> return ['Description']
     */ 
    public function DataDesc($id) 
    {
        $DataDBName = $this->DataPmName;	
        $id = $id -1;
        $Set0 = Yii::$app->params[$DataDBName];
        
        return $Set0[$id]['Dscp'];
    }

    /** 
     * DB Data Value
     * Read DB Data Value from Params	 
     * Data(id) -> return ['Value']
     */ 
    public function DataDBValue($id) 
    {
        $DataDBName = $this->DataPmName;	
        $id = $id -1;
        $Set0 = Yii::$app->params[$DataDBName]; // Data DB Table Name 

        return $Set0[$id]['Vale'];
    }

    /** 
     * Read Cookies Data Value
     * Data(id) -> return ['Value']
     */ 	 
    public function DataCkValue($id) 
    {
        // Setting id Name
        $DataName= $this->DataName($id);
        $cookies = Yii::$app->request->cookies;
        $Set0 = $cookies->getValue($DataName, self::DataDBValue($id)); 

        return $Set0;
    }

    /** 
     * Write/Update Cookies Data Value
     * DataCkWrite([DB Name], [DB Nr.Rows])
     *
     */ 
    public function DataCkWrite($Name, $Rows) 
    {

	// Update-160202 
	$this->DataPmName = $Name;	
	$this->DataDBRows = $Rows;
	$DBRow = $this->DataDBRows;
	
        $cookies = Yii::$app->response->cookies;
        $request = Yii::$app->request;
	
        for ($id = 1; $id <= $DBRow ; ++$id) {

        // Setting id Name
        $DataName= $this->DataName($id);

        // Read GET Value
        $GetData = $request->get($DataName); 

        // Check if Exist GET Data
        if ($GetData != NULL){ 
            // Write Cookies
            $cookies->add(new \yii\web\Cookie([
                'name' => $DataName,
                'value' => $GetData,
            ]));
            }

        // Read Cookies Value
        $DataDBValue = $this->DataDBValue($id);

        // Check if Exist Cookies
        $cookie = $request->cookies[$DataName];
        if ($cookie == NULL){
            // Add New Cookies
            $cookies->add(new \yii\web\Cookie([
            'name' => $DataName,
            'value' => $DataDBValue,
            ]));
            }

        }
    }
}
