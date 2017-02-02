<?php
/**
 * @link http://www.konkeanweb.com
 * 2/3/2017 AD 2:32 AM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\vue\widgets\assets;

use yii\web\AssetBundle;

class DraggableAsset extends AssetBundle
{
    public $sourcePath = '@npm/vuedraggable/dist';

    public $js = [
        'vuedraggable.js',
    ];
    public $depends = [
        'prawee\vuejs\VueJsAsset',
    ];
}