<?php
/* Layout Main */
?>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

// use app\helpers;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

	<?php 
	// Cookies Settings
	$StoLData = new WM_StoLData; 
	$SetDBRow = Yii::$app->params['SetDBRow'];
	$StoLData ->DataCkWrite('Settings', $SetDBRow);
	// Cookies Op.WI Settings
	$SetngsOpWI = new WM_StoLData; 
	$SetOpWIRow = Yii::$app->params['SetDBRow'];
	$SetngsOpWI ->DataCkWrite('SetngsOpWI', $SetOpWIRow);
	?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>

	<!-- Javascript Refresh Data -->	
	<script type="text/javascript"> 
	var Refresh= "http://appyii.webemme.net/AppYii_DataSIM.php/";
	</script>
	<script type="text/javascript" src="../assets/Application.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

	<?php  
	echo '<body>';
	// XHRequest Refresh Data	
	// echo '<body onload="XHRequest();">';
	echo '<div id="WM_XHRequest"></div>';
	?>


<?php $this->beginBody() ?>

<div class="wrap">

     	<!-- NavBar Menu... -->   
	<?php require('wm_navmenu.php'); ?>

<div class="container">
  
	<div class="container">
	
	     <!-- Application Menu... -->        
	     <?php require('wm_appmenu.php'); ?>
	     
	</div>
	
	
	<div class="container">
	
		<!-- Breadcrumbs + Contents -->
		<?= Breadcrumbs::widget([
		              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
			            
		<?= $content ?>
		       
	</div>

</div>

</div>

     	<!-- Footer... -->   
	<?php require('wm_footer.php'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
