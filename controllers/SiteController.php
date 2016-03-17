<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SearchForm;

class SiteController extends Controller
{
    public function behaviors()
    {
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

    public function actions()
    {
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

    public function actionIndex()
		{
		 
			$model = new SearchForm();  
			if ($model->load(Yii::$app->request->get()) && $model->search())  { }
		 
			return $this->render('twitter', ['target2' => $model->answer,'model' =>  $model ]);
		}
	public function actionShow()
    {
		
	      $model = new SearchForm();
	   
	      if ($model->load(Yii::$app->request->post()) && $model->search())  {  }
          return $this->render('twitter', ['target2' => $model->answer ,'model' =>  $model ]);
    }

     

   

    
}
