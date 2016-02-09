<?php

/* @var $this \yii\web\View */
/* @var $content string */


use backend\assets\AppAsset;
use yii\helpers\Html;


$asset = AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('header',['baseUrl' => $baseUrl]) ?>
    <?= $this->render('leftmenu',['baseUrl' => $baseUrl]) ?>
    <?= $this->render('content',['content' => $content]) ?>
    <?= $this->render('footer',['baseUrl' => $baseUrl]) ?>
    <?= $this->render('rightside',['baseUrl' => $baseUrl]) ?>
    <div class="control-sidebar-bg"></div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
