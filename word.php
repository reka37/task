<?php
// добавляем файл в корень по адресу app/components/
namespace yii\helpers;

class ArrayHelper extends BaseArrayHelper
{
    public static function cutWord($word)
    {
		$arr = explode(' ', $word);
		$arr_result = array();
		
		foreach ($arr as $key => $result) {
			if ($key < 30) {
				$arr_result[] = $result;
			}
		}
		$word_result = implode(' ', $arr_result);
		return $word_result;
    }
}



//во входном скрипте вызываем метод класса
use yii\helpers\Html;

$this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title></title>
    <?php $this->head() ?>
</head>
<body>

<div class="container">
	<div class="row">
								<ul class="nav nav-pills">
				  <li class="nav-item">
					<a class="nav-link active" href="#">Active</a>
				  </li>
				  <li class="nav-item">
					<?= Html::a('Test', '/web/') ?>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>
				</ul>
				<?php 
				$word = 'я занимаюсь веб-программированием и рад 
поделиться с тобой своими знаниями и советами. 
Если тебе понравились мои статьи, ты можешь подписаться 
на рассылку блога, из неё ты узнаешь много интересного! узнаешь много интересного';
				$value = \yii\helpers\ArrayHelper::cutWord($word);
				echo $value;

				?>
	</div>
</div>

<?php $this->beginBody() ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
?>