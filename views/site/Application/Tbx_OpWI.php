<?php

/* Application                   */
/* Operator Web Interface (OpWI) */

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

use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="btn-toolbar" role="toolbar">

	<div class="btn-group btn-group-lg btn-group-justified btn-group-fill-height">
			<a href="http://192.168.1.31/WM_AppYii/AppYii_DataSIM.php" class="btn btn-default" role="button">
			<img src="../images/WM_AppIcons_01.svg" title="Speed-1" alt="Speed-1" height="24" width="24">
			</a>			        
	</div>

	<?php 
	/*
	 * OpWI - Matrix Command
	 */
	
	// Create Rows
	for ($rw = 1; $rw <= $NrRows; ++$rw) {
	?>
	
	<div class="btn-group btn-group-lg btn-group-justified btn-group-fill-height">
  
		<?php
		$Tbx_WIValue= Yii::$app->params['Tbx_WIValue'];
		// Create Columns
		for ($cl = 1; $cl <= $NrClmn; ++$cl) {
		?>
		
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php
			$clVal = (($cl - 0) + (($rw-1) * 4));
			$clSel = (($cl - 1) + (($rw-1) * 4));
			// Button Active Op.Instruction
		    	echo $model[$TabNr]->DataCkValue($clVal);
		    	$OWIName = $model[$TabNr]->DataName($clVal);
			?>
		</button>
		
		<ul class="dropdown-menu">
			<?php  
			// Button Section Op.Instruction
			echo '<li><a href="'.Url::toRoute(['site/application', $OWIName => $Tbx_WIValue[$clSel][0] ]).'" >';
			echo $Tbx_WIValue[$clSel][0].'</a></li>';
			echo '<li><a href="'.Url::toRoute(['site/application', $OWIName => $Tbx_WIValue[$clSel][1] ]).'" >';
			echo $Tbx_WIValue[$clSel][1].'</a></li>';
			echo '<li><a href="'.Url::toRoute(['site/application', $OWIName => $Tbx_WIValue[$clSel][2] ]).'" >';
			echo $Tbx_WIValue[$clSel][2].'</a></li>';
			// Button Execution Op.Instruction
			echo '<li><a href="http://appyii.webemme.net/AppYii_DataSIM.php/'.'$B@1'.'" >' .'XX'.'</a></li>';
			?>
		</ul>

		</div>
	
	<?php
	} 
	echo '</div>';
	} 
	echo '</div>';
	?>

 
      
