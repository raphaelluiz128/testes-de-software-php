<?php

class usuarios {
	private $idade;
	public function __construct(){
	    $this->idade =(int)0;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function envelhecer($anos){
	    $this->idade += $anos;
	}
}
?>
