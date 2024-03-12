<?php
require __DIR__ . '/../vendor/autoload.php';

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Service\CalculadorPontuacao;

$curso = new Curso("Teste");
$aluraMais = new AluraMais("Video teste", "Categoria Teste");

//POrque nao usar isto 
// echo $aluraMais->recuperarPontuacao(). "<br>";
// echo $curso->recuperarPontuacao(). "<br>";

//ao inves disto?
$calculador = new CalculadorPontuacao();
echo $calculador->recuperarPontuacao($curso). "<br>";
echo $calculador->recuperarPontuacao($aluraMais). "<br>";
