<?php
$word = 'created_at';

class TransformWord {
	private $word;
	
	public function __construct($word){
	 $this->word = $word;
	}
	
	public function transform(){
		$arr = explode('_', $this->word);
		$arr_result = array();
		
		foreach ($arr as $key => $result) {	
				$arr_result[] = ucfirst($result)	
		}
		$word_result = implode('', $arr_result);
		return $word_result;
	}
}

$word_final = new TransformWord($word);
echo $word_final->transform();
?>