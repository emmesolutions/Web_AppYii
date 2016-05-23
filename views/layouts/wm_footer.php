        <?php
	// Footer Style 
	$FooterStyle = '"footer"';
        if ($StoLData->DataCkValue(3) == 'Style00') {
				$FooterStyle = '"footer-Inverse footer"'; } 
	if ($StoLData->DataCkValue(3) == 'Style01') {
				$FooterStyle = '"footer-wmStyle01 footer"'; }
        ?>
        
    <footer class= <?= $FooterStyle ?> >
     
     <div class="container">
	     <div class="row">
	            <div class="col-lg-4">
	                <p>Footer 01
	                </p>
	            </div>
	            <div class="col-lg-4">
	                <p>Footer 02
	                </p>
	            </div>
	            <div class="col-lg-4">
	                <p>Footer 03
	                </p>
	            </div>
	       </div>
       </div>

        <div class="container">
        <div class="row">
            <p class="pull-left">&copy;  <?= Yii::$app->params['BrandLabel'] ?>  <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p> 
        </div> 
        
        <div class="row">
            <p class="pull-left"> Powered by Web eMMe - Free and Open Source Solutions for Web Develops</p>
        </div>         
        </div>

    </footer>
    