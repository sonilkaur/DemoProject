<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Makes */

$this->title = 'Create Makes';
$this->params['breadcrumbs'][] = ['label' => 'Makes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
