<?php

class Produto{


public $nome;
public $descricao;
public $preco;
public $qtd;
public $taxa;
public $frete;



public function Calculafrete($preco, $taxa, $qtd){




	$total = ($preco + $taxa) * $qtd;

 echo " valor total é: ". $total;

}



public function venda(){



	return "O cliente: " . $this->nome . " Comprou: " . $this->descricao;
}


}


$pdt = new Produto();

$pdt->nome = "Osvaldo";

$pdt->descricao = " Rolex";

echo $pdt->venda();

echo $pdt->Calculafrete(1000,1.5, 2);




?>