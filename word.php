<?php

use yii\helpers\StringHelper;

$title = 'я занимаюсь веб-программированием и рад 
поделиться с тобой своими знаниями и советами. 
Если тебе понравились мои статьи, ты можешь подписаться 
на рассылку блога, из неё ты узнаешь много интересного! узнаешь много интересного';

$word = \yii\helpers\StringHelper::truncateWords($title, 12, '...');
echo $word;