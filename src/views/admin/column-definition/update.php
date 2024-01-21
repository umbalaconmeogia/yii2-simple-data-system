<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var umbalaconmeogia\simpledatasystem\models\SdsColumnDefinition $model */

$this->title = Yii::t('app', 'Update Sds Column Definition: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sds Column Definitions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sds-column-definition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
