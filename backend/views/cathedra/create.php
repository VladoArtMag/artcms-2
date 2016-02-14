<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cathedra */

$this->title = Yii::t('app', 'Create Cathedra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cathedras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cathedra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
