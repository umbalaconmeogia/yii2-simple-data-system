<?php

use umbalaconmeogia\simpledatasystem\models\SdsColumnDefinition;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var umbalaconmeogia\simpledatasystem\models\SdsColumnDefinitionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Sds Column Definitions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sds-column-definition-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sds Column Definition'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            //'object_definition_code',
            //'name',
            //'code',
            //'type',
            //'description:ntext',
            //'i18n',
            //'value_format',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SdsColumnDefinition $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
