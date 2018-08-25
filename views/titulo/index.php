<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Titulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Titulo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'artista',
            'descricao',
            'ano_lancamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
