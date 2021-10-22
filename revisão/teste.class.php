<?php
require_once('pessoas.class.php');


class Teste{
private $pessoa;

public function __construct(){
$pessoa = new Pessoa();

$pessoa->setNome("Mateus Bandeira ");
echo $pessoa->getNome();
}
}new Teste();
?>