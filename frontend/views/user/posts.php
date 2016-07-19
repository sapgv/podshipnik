<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 19.07.16
 * Time: 23:52
 */
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="panel panel-default">

    <div class="panel-body">

        <div class="pull-left">
            <h3 style="margin-top: 0px;">Мои статьи</h3>
        </div>
        <div class="pull-right">
            <h3 class="text-right" style="margin-top: 0px;"><?= Html::a('Создать',Url::toRoute(['user/create-post']),['class'=>'btn btn-success pull-right']);
                ?></h3>
        </div>
        <div class="clearfix"></div>

        <?
        foreach ($models as $post)
        {

            echo Html::tag('a', $post->name, ['class'=>'h4 text-primary']);
            echo Html::tag('div', '', ['class'=>'clearfix']);

            echo Html::tag('span', "<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> " . User::findOne(['id'=>$post->user_id])->name, ['class'=>'text-muted'] );
            echo Html::tag('span', " <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> " . Yii::$app->formatter->asDate($post->created_at, 'long'), ['class'=>'text-muted'] );

            echo Html::tag('p', $post->content, ['class'=>'form-control-static text-justify', 'style'=>'margin-bottom:10px;']);

        }

        ?>

    </div>
</div>