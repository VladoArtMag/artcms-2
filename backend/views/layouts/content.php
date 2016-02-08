<?php
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $this->title ?>
        </h1>
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Алмин','url' => ['//admin']],
            'itemTemplate' => "<li><i>{link}</i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </section>

 <!-- Main content -->
    <section class="content">
        <?= $content ?>
    </section><!-- .content -->

</div><!-- .content-wrapper -->
