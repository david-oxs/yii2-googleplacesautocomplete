<?php

namespace globaloxs\widgets;

use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;


class InputPlace extends InputWidget {

    const API_URL = 'http://maps.googleapis.com/maps/api/js?';

    public $libraries = 'places';

    public $sensor = true;

    public $pluginOptions = [];

    /**
     * Renders the widget.
     */
    public function run(){
      GpacAsset::register($this->getView());
      $this->registarControles();

      if(isset($this->options['class'])){
        $clases=explode(' ',$this->options['class']);
        array_push($clases,"geoinput");
        $this->options['class']=implode(" ",$clases);
      }else $this->options['class']="geoinput";
        // $this->registerClientScript();
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
    }

    public function registarControles()
    {
      $scriptOptions = Json::encode($this->pluginOptions);
      $this->getView()->registerJs("
          (function(){
          $('.geoinput').geocomplete($scriptOptions);
          })();
      "
      , \yii\web\View::POS_READY);
        }


}
