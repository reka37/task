<?php
$word = 'я занимаюсь веб-программированием и рад 
поделиться с тобой своими знаниями и советами. 
Если тебе понравились мои статьи, ты можешь подписаться 
на рассылку блога, из неё ты узнаешь много интересного! узнаешь много интересного';
 
class CutWord {
	private $words;
	
	public function __construct($words){
	 $this->words = $words;
	}
	
	public function cut(){
		$arr = explode(' ', $this->words);
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

$words = new CutWord($word);
echo $words->cut();
?>