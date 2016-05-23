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

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Application';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-application">

	<?php 
	/*
	 * Application - Tabs Selection
	 */
	 
	$NrTabs = Yii::$app->params['OpWI_NrTabs'];
	$NrRows = Yii::$app->params['OpWI_NrRows'];
	$NrClmn = Yii::$app->params['OpWI_NrClmn']; 
	?>
		 
	<div>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#tab01" aria-controls="home" role="tab" data-toggle="tab">Tab01</a></li>
<?php  
for ($Tb = 2; $Tb <= $NrTabs; ++$Tb) {
?>	    
	    <li role="presentation"><a href=<?php echo'"#tab0'.$Tb.'"' ?> aria-controls="messages" role="tab" data-toggle="tab">Tab0<?php echo $Tb.'</a></li>' ?>

<?php 
 }
?>	    

	  </ul>
	  
	<!-- Tab panes -->
	
	  <div class="tab-content">

<?php  
for ($Tb = 1; $Tb <= $NrTabs; ++$Tb) {
?>		
		
	  <div role="tabpanel"  
	  		<?php 
	  			// Check Active Tabs
	  			echo 'class="tab-pane'; 
	  			if ($Tb == 1) { echo ' active"' ; }
	  			else  { echo ' "' ;}
	  		?>
	  		<?php echo'id="tab0'.$Tb.'">' ?>
	      <div class="jumbotron">
	        <p class="lead"> Application Tab0<?php echo $Tb.'</p>' ?> 
		<?php $TabNr = $Tb; ?>
   		<!-- Operator Web Interface (OpWI) -->   
		<?php require('../views/site/Application/Tbx_OpWI.php'); ?>
     	      </div>  
	  </div>
	  
<?php 
 }
?>	
	    
	  </div>
	  
	</div>

      
</div>