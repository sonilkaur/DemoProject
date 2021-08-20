<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MakeYears */

$this->title = 'Create Make Years';
$this->params['breadcrumbs'][] = ['label' => 'Make Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="make-years-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
