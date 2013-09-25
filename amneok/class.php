<?php

require("connect.php");


class question{
public $question_number="oo";
public $question="Not set";
public $response="Not set";

public function get_question(){
	global $question;
	return $this->question;
}
public function get_question_number(){
	global $question_number;

	return $this->question_number;
}
public function get_response(){
	global $response;
	echo "q rimash ".$this->get_question(). " answer ".$response;
}



public function set_question($s,$i){
	global $question, $question_number;
    $this->question=$s;
    
	$this->question_number=$i;
	
	echo "<div>
	<td>$this->question</td>
	<td><input type='radio' name='$this->question_number' value='1'></input>	</td>
	<td><input type='radio' name='$this->question_number' value='2'></input>	</td>
	<td><input type='radio' name='$this->question_number' value='3'></input>	</td>
	<td><input type='radio' name='$this->question_number' value='4'></input>	</td>
	

</div>";
}
public function printz(){

	echo "q n- ".$this->get_question_number()." q- ".$this->get_question();

}

public function set_response($r,$id){
	$i=$this->get_question_number();
	
	global $response,$mysql;
	$response=$r;
	if($r==1){
		echo "Question number".$i. "marked one </br>";
		$mysql->query("UPDATE `user` SET `$i`='$r' WHERE `id`='$id'");
		
	}else if($r==2){
		echo "Question number".$i. "marked two </br>";
		$mysql->query("UPDATE `user` SET `$i`='$r' WHERE `id`='$id'");
	}else if($r==3){
		echo "Question number".$i. "marked three </br>";
		$mysql->query("UPDATE `user` SET `$i`='$r' WHERE `id`='$id'");
	}else if($r==4){
		echo "Question number".$i. "marked four </br>";
		$mysql->query("UPDATE `user` SET `$i`='$r' WHERE `id`='$id'");
	}else{
		echo "null  </br>";
			$mysql->query("UPDATE `user` SET `$i`=0 WHERE `id`='$id'");
	}
	//echo "answer for ".$question_number."is ".$response;
	return $response;

}






}

/*class score{


}*/
?>



