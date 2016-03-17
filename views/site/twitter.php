<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$provider = new ArrayDataProvider([
    'allModels' => $target2,
    'sort' => [
        'attributes' => ['id', 'text', 'created_at'],
    ],
    'pagination' => [
        'pageSize' => 10,
    ],
]);
 
echo GridView::widget([
    'dataProvider' => $provider,
 
    'columns' => [
        'id',
        'text',
        'created_at'
    ],
]); 
?>
<div class="site-search">
<?php $form = ActiveForm::begin([
    'id' => 'search-form',
    'options' => ['class' => 'form-horizontal'],
	'method' => 'get',
]) ?>
   <?= $form->field($model, 'tweet')->textInput(['autofocus' => true]) ?>
   
    

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
         
			          <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'name' => 'Search-button']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
    

    <div class="col-lg-offset-1" style="color:#999;">
      
	 
    </div>
</div>
