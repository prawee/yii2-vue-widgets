<?php
/**
 * @link http://www.konkeanweb.com
 * 1/29/2017 AD 6:29 PM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\vue\widgets;

use yii\web\AssetBundle;

class DragAndDropAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-drag-and-drop';

    public $js = [
        'vue.drag-and-drop.js',
    ];
    public $depends = [
        'prawee\vuejs\VueJsAsset',
    ];
}