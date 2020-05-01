<?php

class Produto{


public $nome = "Relógio";
public $descricao = "Rolex";
public $preco;
public $qtd;
public $taxa;
public $frete;



public function Calculafrete($preco, $qtd, $taxa){




	$total = $preco + $qtd + $taxa;

 echo " valor total é: ". $total;

}






}


$pdt = new Produto();

echo "Produto" . $nome;

echo $pdt->Calculafrete(1000,1,1.5);



?>