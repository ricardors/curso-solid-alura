<?php
require __DIR__ . '/../vendor/autoload.php';

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Service\CalculadorPontuacao;

$curso = new Curso("Teste");
$aluraMais = new AluraMais("Video teste", "Categoria Teste");
$calculador = new CalculadorPontuacao();

echo $calculador->recuperarPontuacao($curso). "<br>";
echo $calculador->recuperarPontuacao($aluraMais). "<br>";