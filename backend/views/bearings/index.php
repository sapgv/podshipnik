<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="bearings-index">

    <?= Html::a('Создать', Url::toRoute(['bearings/create']),['class'=>'btn btn-success pull-right'])?>
    <?php
    echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <?
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_itemView',
    ]);

    ?>

</div>
