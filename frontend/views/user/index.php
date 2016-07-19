<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 19.07.16
 * Time: 0:32
 */
use yii\helpers\Html;

?>

<div class="panel panel-default">
    <div class="panel-body">

        <div class="row">


            <div class="col-md-3">
                <?
                if ($model->getBehavior('coverBehavior')->hasImage()) {
                    echo Html::img($model->getBehavior('coverBehavior')->getUrl('medium'),['class'=>'img-responsive']);
                }
                else {
                    echo Html::img(['data-src'=>'holder.js/150x150'],['class'=>'img-responsive']);


                }
                ?>
            </div>
            <div class="col-md-9">

                <h3><?= $model->name;?></h3>

                <?=$this->context->route == 'site/login'?>
            </div>
        </div>

    </div>
</div>
