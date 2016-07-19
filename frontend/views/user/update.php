<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 19.07.16
 * Time: 0:32
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

?>

<div class="panel panel-default">
    <div class="panel-body">

        <div class="row">



            <div class="col-md-4">
                <?
                echo ImageAttachmentWidget::widget(
                    [
                        'model' => $model,
                        'behaviorName' => 'coverBehavior',
                        'apiRoute' => 'user/imgAttachApi',
                    ]
                );
                ?>
            </div>

            <div class="col-md-8">
                <?$form = ActiveForm::begin([ 'options' => [ 'class' => 'form-horizontal2' ] ]); ?>

                <?= $form->field(
                    $model, 'username',
                    [
//                        'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
//                        'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                        'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->username ],

                    ]
                )->textInput() ?>

                <?= $form->field(
                    $model, 'name',
                    [
//                        'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
//                        'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                        'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->name ],

                    ]
                )->textInput() ?>

                <?= $form->field(
                    $model, 'email',
                    [
//                        'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
//                        'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                        'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->email ],

                    ]
                )->textInput() ?>






            </div>

            <div class="col-md-12" style="margin-top: 10px;">

                <?= $form->field($model, 'description')->textarea();?>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-01 col-sm-10">
                    <?= Html::submitButton('Сохранить', [ 'class' => 'btn btn-sm btn-success']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>



    </div>
</div>
