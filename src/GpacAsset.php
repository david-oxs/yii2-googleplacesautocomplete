<?php

namespace globaloxs\widgets;
use yii\web\AssetBundle;

class GpacAsset extends AssetBundle
{
    public $sourcePath = '@bower/geocomplete';
    public $js = [
        '//maps.googleapis.com/maps/api/js?libraries=places&sensor=false',
        'jquery.geocomplete.js',
    ];
    public $css = [
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
