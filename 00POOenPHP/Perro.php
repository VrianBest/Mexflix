<?php

Class Perro {

	//ATRIBUTOS
	public $nombre;
	public $raza;
	public $edad;
	public $sexo;
	public $adiestrado;
	public $foto;
	public $comida;

	//METODOS MAGICOS
	//CONSTRUCTOR
	public function __construct($n, $r, $e, $s, $a, $f){
		$this->nombre = $n;
		$this->raza = $r;
		$this->edad = $e. ' años';
		$this->sexo = ($s) ? 'Macho': 'Hembra';
		$this->adiestrado = ($a) ? 'Adiestrado': 'No Adiestrado';
		$this->foto = $f;
	}
	//DESTRUCTOR
	public function __destruct(){}

	//METODOS
	public function ladrar(){

	}
	public function comer($c){

	}
	public function aparecer(){}
}

//instanciar un objeto de la clase
$rocky = new Perro('Rocky','Labrador', 3, true, true, 'Sin foto');

//var_dump($rocky);