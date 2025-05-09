<?php

require_once("modelo/Cards.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$link = $_POST['link'];
$evolucao = $_POST['evolucao'];
$tipo1 = $_POST['tipo1'];
$tipo2 = $_POST['tipo2'];

$Card = new Cards();
$Card->setNome($nome);
$Card->setDescricao($descricao);
$Card->setLink($link);
$Card->setEvolucao($evolucao);
$Card->setTipo1($tipo1);
$Card->setTipo2($tipo2);


echo "<h1>Pokémon Informado</h1>";

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo "Pokémon: " . $Card->getNome() . "<br>";
echo "Descrição: " . $Card->getDescricao() . "<br>";
echo "Fase evolutíva: " . $Card->getEvolucao() . "<br>";
echo "Tipo 1: <img style='width='70' height='70';  src='" . $Card->getVerificaTipo1() . "' />";
echo "Tipo 2: <img style='width='70' height='70'; src='" . $Card->getVerificaTipo2() . "' /><br>";
echo "<img style='width: 100%; height: auto;' src='" . $Card->getLink() . "' /><br>";
echo "</div>";

echo "<br><br>";
echo "<a href='filme_formulario.php' style = 'color: cadetblue;'>Cadastrar outro filme</a>";
