<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 19.07.16
 * Time: 0:40
 */
use kartik\helpers\Html;
use yii\helpers\Url;

?>

<? $this->beginContent('@app/views/layouts/main.php'); ?>

<div class="row">
    <div class="col-md-3">
        <div class="pg-sidebar">

                    <?
                    echo Html::listGroup([
                        [
                            'content' => ['heading' => 'Мой профиль', 'body' => ''],
                            'url' => Url::toRoute(['user/index','id'=>Yii::$app->user->id]),
                            'active' => $this->context->route == 'user/index'
                        ],
                        [
                            'content' => ['heading' => 'Учетная запись', 'body' => ''],
                            'url' => Url::toRoute(['user/update','id'=>Yii::$app->user->id]),
                            'active' => $this->context->route == 'user/update'
                        ],
                        [
                            'content' => ['heading' => 'Клиенты', 'body' => ''],
                            'url' => '#',
                        ],
                        [
                            'content' => ['heading' => 'Товары', 'body' => ''],
                            'url' => '#',
                            'badge' => '2'
                        ],
                        [
                            'content' => ['heading' => 'Заказы', 'body' => ''],
                            'url' => '#',
                            'badge' => '1'
                        ],
                        [
                            'content' => ['heading' => 'Объявления', 'body' => ''],
                            'url' => '#',
                            'badge' => '1'
                        ],
                        [
                            'content' => ['heading' => 'Статьи', 'body' => ''],
                            'url' => Url::toRoute(['user/posts','id'=>Yii::$app->user->id]),
                            'active' => ($this->context->route == 'user/posts' or $this->context->route == 'user/create-post')
                        ],
                    ]);

                    ?>


        </div>
    </div>
    <div class="col-md-9">
        <?= $content; ?>
    </div>
</div>
<? $this->endContent(); ?>
