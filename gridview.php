<?php
use yii\grid\GridView;
use yii\data\ArrayDataProvider;


$data = [
    ['id' => 1, 'name' => 'name 1'],
    ['id' => 2, 'name' => null],
    ['id' => 100, 'name' => 'name 100'],
];

$provider = new ArrayDataProvider([
    'allModels' => $data,	
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => ['id', 'name'],
    ],
]);

echo GridView::widget([
    'dataProvider' => $provider,
	'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '[нет данных]'],
])
?>