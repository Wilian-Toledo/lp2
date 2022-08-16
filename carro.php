<?php

class Carro {

    // atributos 
    private $preco;
    private $ano;
    private $marca;
    private $modelo;

    //método especial: inicialização de dados do objeto
    function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    // métodos acessores (getters ou setters)
    public function setPreco($preco){
        $this->preco = $preco;
    }

    // métodos 
    public function vender() {}

    public function alugar() {}

    public function imprime(){
        $preco = isset($this->preco) ? ' - '.$this->preco : '';
        echo $this->marca.' - '.$this->modelo. $preco .'<br>';
    }
}

// modificadores de acesso 
// private: acesso apenas dentro da classe
// protected: acesso apenas nas classes filhas
// (default): acesso apenas no mesmo pacote
// public: acesso em qualquer lugar do universo

//teste de ambiente 15/08/2022