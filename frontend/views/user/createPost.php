<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 20.07.16
 * Time: 0:01
 */
use dosamigos\tinymce\TinyMce;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>

<div class="panel panel-default">

    <div class="panel-body">

        <h3 style="margin-top: 0px;">Новая статья</h3>

        <?
        $form = ActiveForm::begin();

        echo $form->field($model,'name');

        echo $form->field($model, 'content')->widget(TinyMce::className(), [
            'options' => ['rows' => 6],
            'language' => 'ru',
            'clientOptions' => [
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]);

        echo Html::submitButton('Сохранить',['class'=>'btn btn-default']);

        $form->end();

        ?>
    </div>
</div>
