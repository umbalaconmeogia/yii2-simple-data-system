<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var umbalaconmeogia\simpledatasystem\models\SdsObjectDefinition $model */

$this->title = Yii::t('app', 'Create Sds Object Definition');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sds Object Definitions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sds-object-definition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
