<?php 

require 'Poligono.php';
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';
require 'Hexagono.php';

echo "Triangulo";

$triangulo = new Triangulo(4, 8, 9, 10);
echo '<p>' .$triangulo->lados(). '</p>';
echo '<p>El perimetro del ' . get_class($triangulo) . ': <mark>' .$triangulo->perimetro().' </mark> </p>';
echo '<p>El area del ' . get_class($triangulo) . ': <mark>' .$triangulo->area().' </mark> </p>';

echo "Cuadrado";

$cuadrado = new Cuadrado(7);
echo '<p>' .$cuadrado->lados(). '</p>';
echo '<p>El perimetro del ' . get_class($cuadrado) . ': <mark>' .$cuadrado->perimetro().' </mark> </p>';
echo '<p>El area del ' . get_class($cuadrado) . ': <mark>' .$cuadrado->area().' </mark> </p>';
