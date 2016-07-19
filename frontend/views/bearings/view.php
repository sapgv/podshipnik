<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 16:32
 */
use yii\bootstrap\Tabs;

?>

<div class="panel">

    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">
                <h2><?= $model->name;?></h2>

            </div>


            <div class="col-md-9">
                <img data-src="holder.js/500x500" alt="">
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-12" style="margin-top: 20px;">

                <?

                echo Tabs::widget([
                    'items' => [
                        [
                            'label' => 'Описание',
                            'content' => 'Anim pariatur cliche...',
                            'active' => true
                        ],
                        [
                            'label' => 'Характеристики',
                            'content' => 'Anim pariatur cliche...',
                        //                            'headerOptions' => [...],
                        'options' => ['id' => 'myveryownID'],
                    ],


                    ],
                ]);
                ?>
            </div>

        </div>
    </div>
</div>

