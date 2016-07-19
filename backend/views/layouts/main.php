<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */




if (class_exists('backend\assets\AppAsset')) {
    backend\assets\AppAsset::register($this);
    frontend\assets\HolderAsset::register($this);
} else {
    frontend\assets\AppAsset::register($this);
}

dmstr\web\AdminLteAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?
        if (! \Yii::$app->user->isGuest ) {

            echo $this->render(
                'header.php',
                ['directoryAsset' => $directoryAsset]
            );

            echo $this->render(
                'left.php',
                ['directoryAsset' => $directoryAsset]
            );

            echo $this->render(
                'content.php',
                ['content' => $content, 'directoryAsset' => $directoryAsset]
            );
        }

        else {
            echo $this->render(
                'empty.php',
                ['content' => $content, 'directoryAsset' => $directoryAsset]
            );

        }


        ?>




        ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
<?php  ?>
<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 29.06.16
 * Time: 22:42
 */