<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marcasvehiculos */

$this->title = 'Crear una Marca de vehiculo';
$this->params['breadcrumbs'][] = ['label' => 'Marcas de Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marcasvehiculos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
