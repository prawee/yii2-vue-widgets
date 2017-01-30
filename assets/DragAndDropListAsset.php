<?php
/**
 * @link http://www.konkeanweb.com
 * 1/30/2017 AD 5:50 PM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\vue\widgets\assets;

use yii\web\AssetBundle;

class DragAndDropListAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-drag-and-drop-list/dist';

    public $js = [
        'vue-drag-and-drop-list.js',
    ];
    public $depends = [
        'prawee\vuejs\VueJsAsset',
    ];
}