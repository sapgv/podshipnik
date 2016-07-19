<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 14:49
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class HolderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/imsky/holder';
    public $js = [
        'holder.js',
    ];
}
