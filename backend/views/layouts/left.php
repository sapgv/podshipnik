<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">


        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Меню</li>',
                    ['label' => '<i class="fa fa-tachometer"></i><span>Главная</span>', 'url' => Url::toRoute(['site/index']),'active'=>$this->context->getUniqueId() ==='site'],
                    ['label' => '<i class="fa fa-file"></i><span>Подшипники</span>', 'url' => ['/bearings/index'], 'active'=>$this->context->getUniqueId() ==='post'],

                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                ],
            ]
        );
        ?>

    </section>

</aside>
