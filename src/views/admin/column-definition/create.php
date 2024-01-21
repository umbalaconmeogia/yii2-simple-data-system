<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var umbalaconmeogia\simpledatasystem\models\SdsColumnDefinition $model */

$this->title = Yii::t('app', 'Create Sds Column Definition');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sds Column Definitions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sds-column-definition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
