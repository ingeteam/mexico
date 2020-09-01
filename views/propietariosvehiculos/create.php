<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\propietariosvehiculos */

$this->title = 'Crear Propietarios de vehiculos';
$this->params['breadcrumbs'][] = ['label' => 'Propietarios de vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propietariosvehiculos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
