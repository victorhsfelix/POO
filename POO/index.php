<?php
    require_once "Pessoa.php";
    require_once "Carro.php";
    require_once "Livro.php";

    $pessoa = new Pessoa();
    $pessoa->setNome("Carlos");
    $pessoa->setIdade(16);
    $pessoa->setPeso(60);
    $pessoa->setSexo("Masculino");

    $carro = new Carro();
    $carro->setMarca("Chevrolet");
    $carro->setCor("Vermelho");
    $carro->setPlaca("a1b-2c3d");
    $carro->setModelo("Camaro");

    $livro = new Livro();
    $livro->setTitulo("Harry Potter e a pedra filosofal");
    $livro->setAutor("J.K Rowling");
    $livro->setAno(1997);
    $livro->setEdicao(2);

    echo "<b>Pessoa</b></br>Nome: ".$pessoa->getNome()."</br>Idade: ".$pessoa->getIdade()."</br>Peso: ".$pessoa->getPeso()."KG</br>Sexo: ".$pessoa->getSexo();
    echo "</br><b>Carro</b></br>Marca: ".$carro->getMarca()."</br>Cor: ".$carro->getCor()."</br>Placa: ".$carro->getPlaca()."</br>Modelo: ".$carro->getModelo();
    echo "</br><b>Livro</b></br>Título: ".$livro->getTitulo()."</br>Autor: ".$livro->getAutor()."</br>Ano: ".$livro->getAno()."</br>Edição: ".$livro->getEdicao();
?>
