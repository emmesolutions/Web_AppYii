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

// comment out the following two lines when deployed to production
// defined('YII_ENV') or define('YII_ENV', 'dev');
defined('YII_ENV') or define('YII_ENV', 'prod');
// defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_DEBUG') or define('YII_DEBUG', false);

require(__DIR__ . '/../../Yii_Framework/vendor/autoload.php');
require(__DIR__ . '/../../Yii_Framework/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
