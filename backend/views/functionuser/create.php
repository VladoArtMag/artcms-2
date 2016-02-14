<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FunctionUser */

$this->title = Yii::t('app', 'Create Function User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Function Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="function-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
