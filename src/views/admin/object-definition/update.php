<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var umbalaconmeogia\simpledatasystem\models\SdsObjectDefinition $model */

$this->title = Yii::t('app', 'Update Sds Object Definition: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sds Object Definitions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sds-object-definition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
