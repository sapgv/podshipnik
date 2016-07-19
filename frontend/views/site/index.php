<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php
    echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <?
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_itemView',
    ]);

//    echo GridView::widget([
//        'dataProvider' => $dataProvider,
////        'itemView' => '_itemView',
//    ]);

    ?>


</div>
