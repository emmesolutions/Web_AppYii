<?php
/* Main NavBar Menu */
?>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
	
	$NavBrandUrl = Yii::$app->homeUrl;
	// NavBar Style 
	$NavBarStyle = 'navbar-fixed-top';
        if ($StoLData->DataCkValue(3) == 'Style00') {
				$NavBarStyle = 'navbar-inverse navbar-fixed-top'; } 
	if ($StoLData->DataCkValue(3) == 'Style01') {
				$NavBarStyle = 'navbar-wmStyle01 navbar-inverse navbar-fixed-top'; }
				
	// NavMenu Position
        if ($StoLData->DataCkValue(5) == 'Right') { 
        	$NaMenuOptions = 'navbar-nav navbar-right' ; 
        	$NaLogoOptions = 'nav navbar-header navbar-left' ; 
        	} 
	if ($StoLData->DataCkValue(5) == 'Left') { 
		$NaMenuOptions = 'navbar-nav navbar-left' ; 
		$NaLogoOptions = 'nav navbar-header navbar-right' ; 
		} 

	$BrandLabel = [
			'options' => [ 'class' => $NavBarStyle, ],
		    ];

	$NavMenu = [
                'options' => ['class' => $NaMenuOptions],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ];

	$AdmMenu = [
                'options' => ['class' => $NaMenuOptions],
                'items' => [
		    ['label' => 'Settings', 'url' => ['/site/settings']],
                    ['label' => 'About', 'url' => ['/site/about']],
                ],
            ];


NavBar::begin( $BrandLabel );
	
?>
       			
	<div class= <?php echo '"'.$NaLogoOptions.'" >' ?>	
	      <a class="navbar-brand" href= <?php echo '"'.$NavBrandUrl.'" >' ?>
	        <img alt="Brand" src="../images/WM_AppLogo_01.svg">
	      </a>
	</div>
	  
<?php

// Hide - Show Menu
if ($StoLData->DataCkValue(6) == 'Show') {
	
	if (!Yii::$app->user->isGuest) { 
		echo Nav::widget( $AdmMenu );
		echo Nav::widget( $NavMenu );
		 }
	if (Yii::$app->user->isGuest) { 
		echo Nav::widget( $NavMenu );
		 }

} 

NavBar::end();
	
?>