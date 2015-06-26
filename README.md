# yii2-googleplacesautocomplete
Google Places Auto Complete widget for Yii2


##Installation



```
composer require globaloxs/yii2-gpaci

```

Or add below to your `composer.json` file

```
    "require": {
        "globaloxs/yii2-gpaci" : "*"
    }
```

##Usage

Using widget and model.

```
use globaloxs\widgets\InputPlace;

echo InputPlace::widget([
    'model' => $model,
    'attribute' => 'location'
]);
```

Using widget for custom field name and value.

```
echo InputPlace::widget([
    'name' => 'place'
    'value' => 'Mexico'
]);

```

