<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 14:10
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>
    <div class="row panel panel-default">

        <div class="panel-body">



            <div class="col-md-2" style="margin-left: -15px;">

                <img data-src="holder.js/150x150" alt="..." class="img-rounded">
            </div>
            <div class="col-md-8">

                <p class="h3" style="margin-top: 0px;"><?= Html::a($model->name,
                        Url::toRoute(['bearings/view', 'id'=>$model->id]))
//                        Url::to(['bearings/view','id'=>$model->id))])
                    ?></p>

                <p><?=$model->brand;?></p>
                <p><?=$model->description;?></p>
            </div>

            <div class="col-md-2">
                <p>d: <?=$model->inner_d;?> мм</p>
                <p>D: <?=$model->outer_d;?> мм</p>
                <p>B: <?=$model->B;?> мм</p>
                <p>Вес: <?=$model->weight;?> кг</p>

            </div>



        </div>
    </div>


