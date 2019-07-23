<?php
use yii\helpers\StringHelper;
$word = 'created_at';
$array_word = \yii\helpers\StringHelper::explode($word, '_');
$str = '';

foreach ($array_word as $word) {
	$word = \yii\helpers\StringHelper::mb_ucfirst($word);
	$str .= $word;
}
echo $str;
?>