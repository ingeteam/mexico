<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\propietariosvehiculosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propietarios de vehiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propietariosvehiculos-index">

    <h1><?php Html::encode($this->title) ?></h1>

    <p>
        <?php Html::a('Crear nuevo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
