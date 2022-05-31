<?php  

abstract Class Poligono {
	protected $lados;

	abstract protected function perimetro();
	abstract protected function area();

	public function lados() {
		return 'Un ' . get_called_class() . ' tiene <mark> '. $this->lados. '</mark>';
	}
}