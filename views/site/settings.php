<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-settings">
    <h1><?= Html::encode($this->title) ?></h1>


</div>


<div class="col-md-6">

	<h4>DB App.Settings Value:</h4>
	<ul class="list-group">

	<?php 	
	$SetDBRow = Yii::$app->params['SetDBRow'];
	for ($id = 1; $id <= $SetDBRow; ++$id) {
		echo '<li class="list-group-item">';
		echo '<span class="badge">' .$model_app->DataDBValue($id). '</span>';
		echo $id; echo ' - '; 
		echo $model_app->DataName($id); echo ' - '; 
		echo $model_app->DataDesc($id); 
		echo '</li>';
	}

	echo '</br>';
	?>

	</ul>

</div>

<div class="col-md-6">

	<h4>Cookies App.Settings Value:</h4>
	<ul class="list-group">

	<?php 	
	$SetDBRow = Yii::$app->params['SetDBRow'];
	for ($id = 1; $id <= $SetDBRow; ++$id) {
	?>
		<li class="list-group-item">

		<div class="btn-group">

			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<?php  echo $model_app->DataCkValue($id); ?>
			</button>
			
		<?php  
		$SetName = $model_app->DataName($id);
		$SetValue = Yii::$app->params['SetValue'];
		?>
		
			<ul class="dropdown-menu" role="menu">
			<?php 
			echo '<li><a href="'.Url::toRoute(['site/settings', $SetName => $SetValue[$id-1][0] ]).'" >'
				.$SetValue[$id-1][0].'</a></li>';
			echo '<li><a href="'.Url::toRoute(['site/settings', $SetName => $SetValue[$id-1][1] ]).'" >'
				.$SetValue[$id-1][1].'</a></li>';
			?>
			
			</ul>
		</div>
			
		<?php 
		echo $id; echo ' - '; 
		echo $model_app->DataName($id); echo ' - '; 
		echo $model_app->DataDesc($id);  
		?>
		
		</li>
		
	<?php } ?>
	
	</br>
	

 	</ul>

</div>



<div class="col-md-6">

	<h4>DB Op.WI Settings Value:</h4>
	<ul class="list-group">

	<?php 	
	$SetOpWIRow = Yii::$app->params['SetOpWIRow'];
	for ($id = 1; $id <= $SetOpWIRow; ++$id) {
		echo '<li class="list-group-item">';
		echo '<span class="badge">' .$model_owi->DataDBValue($id). '</span>';
		echo $id; echo ' - '; 
		echo $model_owi->DataName($id); echo ' - '; 
		echo $model_owi->DataDesc($id); 
		echo '</li>';
	}

	echo '</br>';
	?>

	</ul>

</div>

<div class="col-md-6">

	<h4>Cookies Ap.WI Settings Value:</h4>
	<ul class="list-group">

	<?php 	
	$SetOpWIRow = Yii::$app->params['SetOpWIRow'];
	for ($id = 1; $id <= $SetOpWIRow; ++$id) {
	?>
		<li class="list-group-item">

		<div class="btn-group">

			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<?php  echo $model_owi->DataCkValue($id); ?>
			</button>
			
		<?php  
		$SetName = $model_owi->DataName($id);
		$SetOpWIVal= Yii::$app->params['SetOpWIVal'];
		?>
		
			<ul class="dropdown-menu" role="menu">
			<?php 
			echo '<li><a href="'.Url::toRoute(['site/settings', $SetName => $SetOpWIVal[$id-1][0] ]).'" >'
				.$SetOpWIVal[$id-1][0].'</a></li>';
			echo '<li><a href="'.Url::toRoute(['site/settings', $SetName => $SetOpWIVal[$id-1][1] ]).'" >'
				.$SetOpWIVal[$id-1][1].'</a></li>';
			?>
			
			</ul>
		</div>
			
		<?php 
		echo $id; echo ' - '; 
		echo $model_owi->DataName($id); echo ' - '; 
		echo $model_owi->DataDesc($id);  
		?>
		
		</li>
		
	<?php } ?>
	
	</br>
	

 	</ul>

</div>