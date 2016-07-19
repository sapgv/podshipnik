<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 14:03
 */
//use yii\bootstrap\ActiveForm;
use common\models\Bearings;
use kartik\field\FieldRange;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
//use \yii\widgets\ActiveForm;
use \kartik\form\ActiveForm;
?>
<h3>Поиск</h3>
<div class="bearings-search">

    <?php
    $form = ActiveForm::begin([
//        'layout' => 'horizontal',
        'method' => 'get',
        'fieldConfig' => [
//            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
//            'horizontalCssClasses' => [
////                'label' => 'col-sm-2',
////                'offset' => 'col-sm-offset-4',
////                'wrapper' => 'col-sm-10',
////                'error' => '',
////                'hint' => '',
//            ],
        ],
    ]);
    ?>

<div class="row">

    <div class="col-md-6">
        <?= $form->field($model, 'name') ?>

    </div>

    <div class="col-md-6">
        <?
        echo $form->field($model, 'brand')->dropDownList(
                                                ArrayHelper::map(
                                                    Bearings::find()->all(),'brand','brand'
                                                ),
                                                $params = [
                                                    'prompt' => 'Не важно'
                                                ]
                                            );
        ?>

    </div>

</div>
    <div class="row">

        <div class="col-md-3">
            <?
            //inner_d range field
            echo FieldRange::widget([
                'form' => $form,
                'model' => $model,
                'label' => 'Внутренний диаметр',
                'attribute1' => 'inner_d_from',
                'attribute2' => 'inner_d_to',
                'type' => FieldRange::INPUT_TEXT,
                'separator' => '≤ d, мм ≤',
//                'fieldConfig1' => ['addon'=>[
//                    'prepend' => ['content'=>'мм'],
//                ]],
//                'fieldConfig2' => ['addon'=>[
//                    'append' => ['content'=>'мм']
//                ]],
            ]);

            ?>
        </div>

        <div class="col-md-3">
            <?
            //outer_d range field
            echo FieldRange::widget([
                'form' => $form,
                'model' => $model,
                'label' => 'Наружный диаметр',
                'attribute1' => 'outer_d_from',
                'attribute2' => 'outer_d_to',
                'type' => FieldRange::INPUT_TEXT,
                'separator' => '≤ D, мм ≤',
//                'fieldConfig1' => ['addon'=>[
//                    'prepend' => ['content'=>'мм'],
//                ]],
//                'fieldConfig2' => ['addon'=>[
//                    'append' => ['content'=>'мм']
//                ]],
            ]);
            ?>

        </div>

        <div class="col-md-3">

            <?
            //B range field
            echo FieldRange::widget([
                'form' => $form,
                'model' => $model,
                'label' => 'Ширина',
                'attribute1' => 'b_from',
                'attribute2' => 'b_to',
                'type' => FieldRange::INPUT_TEXT,
                'separator' => '≤ B, мм ≤',
//                'fieldConfig1' => ['addon'=>[
//                    'prepend' => ['content'=>'мм'],
//                ]],
//                'fieldConfig2' => ['addon'=>[
//                    'append' => ['content'=>'мм']
//                ]],
            ]);

            ?>
        </div>

        <div class="col-md-3">


            <?
            //B range field
            echo FieldRange::widget([
            'form' => $form,
            'model' => $model,
            'label' => 'Вес',
            'attribute1' => 'weight_from',
            'attribute2' => 'weight_to',
            'type' => FieldRange::INPUT_TEXT,
            'separator' => '≤ Вес, кг ≤',
            //                'fieldConfig1' => ['addon'=>[
            //                    'prepend' => ['content'=>'мм'],
            //                ]],
            //                'fieldConfig2' => ['addon'=>[
            //                    'append' => ['content'=>'мм']
            //                ]],
            ]);
            ?>
        </div>
    </div>




<div class="form-group col-sm-offset-0">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
<!--    --><?//= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>