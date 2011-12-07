<?php

interface animal(){
	public function hacer_sonido();
}

class gato implements animal{
	function hacer_sonido() {
		$this->maullar();
	}
	function maullar(){
		echo "miauu..";
	}
}
