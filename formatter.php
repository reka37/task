<?php

namespace common\components;

use yii\i18n\Formatter;

class FormatterHelper extends Formatter {

    public function asPhone($value) {
        return preg_replace("/^(\d{3})(\d{3})(\d{2})(\d{2})$/", "($1)-$2-$3-$4", $value);
    }
}

echo Yii::$app->formatter->asPhone('123456789');

/**
  *нижеуказанная часть кода в файл common\config\main.php
  */
  
'formatter' => [
    'class' => '\common\components\FormatterHelper',
    'locale' => 'en-US',
    'dateFormat' => 'yyyy-MM-dd',
    'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
    'decimalSeparator' => '.',
    'thousandSeparator' => ',',
    'currencyCode' => 'USD'
],