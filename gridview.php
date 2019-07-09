<?php
/*categories*/
 GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
	
/*products*/
 GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'categoryId',
            'price:ntext',
			'hidden:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
?>