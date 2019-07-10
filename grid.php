<?php
/*components */
'formatter' => [
        'class' => 'yii\i18n\Formatter',
        'nullDisplay' => '[нет данных]',
]
/*Установить в настройках GridView при конкретном выводе*/
GridView::widget([
    'dataProvider' => $someProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => ''],
    'columns'      => [
        ...
    ],
]);

/*метод — проверка непосредственно на выводе колонки:
GridView:*/
GridView::widget([
    'dataProvider' => $myProvider,
    'columns'      => [
        ...
        [
            'attribute' => 'some_attribute',
            'format'    => 'raw',
            'value'     => function (ModelClass $model) {
                if ($model->some_attribute != null) {
                    return $model->some_attribute; 
              //or: return Html::encode($model->some_attribute)
                } else {
                    return '';
                }
            },
        ],
        ...
    ],
]);

/*DetailView*/
DetailView::widget([
    'model'      => $model,
    'attributes' => [
        ...
        [
            'attribute' => 'some_attribute',
            'value' => $model->some_attribute != null ? $model->some_attribute : '', 
      //or: 'value' => $model->some_attribute != null ? Html::encode($model->some_attribute) : '',
        ],
        ...
    ],
])
?>