<?php
$word = '���� �����';

class TranslitWord {
	private $word;
	
	public function __construct($word){
	 $this->word = $word;
	}
	
	public function transform(){
		
		$arr_result = array();	
		$res = $this->translit($this->word);
		$res = str_replace("_"," ",$res);
		return $res;
	}
	public function translit($str){
		$tr = array(
			"�"=>"A","�"=>"B","�"=>"V","�"=>"G",
			"�"=>"D","�"=>"E","�"=>"J","�"=>"Z","�"=>"I",
			"�"=>"Y","�"=>"K","�"=>"L","�"=>"M","�"=>"N",
			"�"=>"O","�"=>"P","�"=>"R","�"=>"S","�"=>"T",
			"�"=>"U","�"=>"F","�"=>"H","�"=>"TS","�"=>"CH",
			"�"=>"SH","�"=>"SCH","�"=>"","�"=>"YI","�"=>"",
			"�"=>"E","�"=>"YU","�"=>"YA","�"=>"a","�"=>"b",
			"�"=>"v","�"=>"g","�"=>"d","�"=>"e","�"=>"j",
			"�"=>"z","�"=>"i","�"=>"y","�"=>"k","�"=>"l",
			"�"=>"m","�"=>"n","�"=>"o","�"=>"p","�"=>"r",
			"�"=>"s","�"=>"t","�"=>"u","�"=>"f","�"=>"h",
			"�"=>"ts","�"=>"ch","�"=>"sh","�"=>"sch","�"=>"y",
			"�"=>"yi","�"=>"'","�"=>"e","�"=>"yu","�"=>"ya",
		"."=>"_"," "=>"_","?"=>"_","/"=>"_","\\"=>"_",
		"*"=>"_",":"=>"_","*"=>"_","\""=>"_","<"=>"_",
		">"=>"_","|"=>"_"
		);
		return strtr($str,$tr);
	}
}

$word_final = new TranslitWord($word);
echo $word_final->transform();



?>