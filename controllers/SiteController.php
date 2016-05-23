<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\Login;
use app\models\Contact;
use app\models\Settings;
use app\models\Application;

class SiteController extends Controller
{
	public function behaviors() {

		return [
			'access' => [
				'class' => AccessControl::className(),
		        	'only' => ['logout'],
		        	'rules' => [
		            		[
					'actions' => ['logout'],
		        		'allow' => true,
		        		'roles' => ['@'],
		            		],
		        	],
		    	],
		    'verbs' => [
		      	'class' => VerbFilter::className(),
		       	'actions' => [
		       		'logout' => ['post'],
		    	   		],
		    		],
			];

	    }

	public function actions() {

		return [
		    'error' => [
		        'class' => 'yii\web\ErrorAction',
		    ],
		    'captcha' => [
		        'class' => 'yii\captcha\CaptchaAction',
		        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
		    ],
		];

	}

	// Site Index Page
	public function actionIndex() {

		return $this->render('index');

	}

	// Site Page Login
	public function actionLogin() {

		if (!\Yii::$app->user->isGuest) { return $this->goHome(); }

	        $model = new Login();
	        
	        if ($model->load(Yii::$app->request->post()) && $model->login()) {
	            return $this->goBack();
	        }
	        return $this->render('login', ['model' => $model,]);


    	}

    	public function actionLogout() {

        	Yii::$app->user->logout();
        	return $this->goHome();

    	}

	// Site Page Contact
    	public function actionContact() {

		$model = new Contact();
		if ($model->load(Yii::$app->request->post()) && 
						$model->contact(Yii::$app->params['adminEmail'])) {
		    Yii::$app->session->setFlash('contactFormSubmitted');
		return $this->refresh();
		} else {
		    	return $this->render('contact', ['model' => $model,]);
			}
    	}

	// Site Page Settings 
	public function actionSettings() {

		if (!Yii::$app->user->isGuest) { 
			$Settings= new Settings();
			$AppSettRead = $Settings->AppSettRead();
			$OpWISetRead = $Settings->OpWISetRead();
			return $this->render('settings', [
					'model_app' => $AppSettRead,
					'model_owi' => $OpWISetRead,
					]); 
				 }
		// Go to Login Page
		if (Yii::$app->user->isGuest) {
		$model = new Login();
	        
	        if ($model->load(Yii::$app->request->post()) && $model->login()) {
	            return $this->goBack();
	        }
	        return $this->render('login', ['model' => $model,]);
				 }			 

	}

	// Site Page About
	public function actionAbout() {

		if (!Yii::$app->user->isGuest) {
			return $this->render('about');
				 }
		// Go to Login Page
		if (Yii::$app->user->isGuest) {
		$model = new Login();
	        
	        if ($model->load(Yii::$app->request->post()) && $model->login()) {
	            return $this->goBack();
	        }
	        return $this->render('login', ['model' => $model,]);
				 }			 

	}

	// Site Page Application
	public function actionApplication() {

		if (!Yii::$app->user->isGuest) { 
			$Application = new Application();
			// Data Cookies Tabs
			$Tbx_Cookies = $Application->Tbx_Cookies();
			// Read Tabs
			$Tbx_model = array();
			for ($Tb = 1; $Tb <= 8; ++$Tb) {
			$Tbx_model[$Tb] = $Application->Tbx_Read($Tb);
			}
			return $this->render('application', ['model' => $Tbx_model,]); 
				 }
		// Go to Login Page
		if (Yii::$app->user->isGuest) {
		$model = new Login();
	        
	        if ($model->load(Yii::$app->request->post()) && $model->login()) {
	            return $this->goBack();
	        }
	        return $this->render('login', [
	            'model' => $model,
	        ]);
				 } 

	}	


}