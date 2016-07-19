<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 18.07.16
 * Time: 0:52
 */
use common\models\Bearings;
use common\models\Brands;
use common\models\Rollings;
use common\models\Rows;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([ 'options' => [ 'class' => 'form-horizontal' ] ]); ?>
<div class="box">

    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

        <div class="box-tools">
            <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', [ 'class' => $model->isNewRecord ? 'btn btn-sm btn-success' : 'btn btn-sm btn-success' ]) ?>
        </div>
    </div>

    <div class="box-body">

        <?= $form->field(
            $model, 'name',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->textInput() ?>

        <?= $form->field(
            $model, 'brand',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->dropDownList(ArrayHelper::map(
            Brands::find()->all(),'name','name'
        )
        );

        echo $form->field(
            $model, 'rolling',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->dropDownList(ArrayHelper::map(
            Rollings::find()->all(),'name','name'
        )
        );

        echo $form->field(
            $model, 'inner_d',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->inner_d ],

            ]
        )->textInput();

        echo $form->field(
            $model, 'outer_d',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->outer_d ],

            ]
        )->textInput();

        echo $form->field(
            $model, 'B',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->B ],

            ]
        )->textInput();

        echo $form->field(
            $model, 'weight',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control', 'placeholder' => $model->weight ],

            ]
        )->textInput();

        echo $form->field(
            $model, 'row',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->dropDownList(ArrayHelper::map(
            Rows::find()->all(),'name','name'
        )
        );

        echo $form->field(
            $model, 'self_install',
            [
                'template'     => "{label}\n<div class='col-sm-10 col-sm-offset-2'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->checkbox();

        echo $form->field(
            $model, 'description',
            [
                'template'     => "{label}\n<div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                'labelOptions' => [ 'class' => 'control-label col-sm-2' ],
                'inputOptions' => [ 'class' => 'form-control'],

            ]
        )->textarea();




        ?>


    </div>

</div>
<?php ActiveForm::end(); ?>
