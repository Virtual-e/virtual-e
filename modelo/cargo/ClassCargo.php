<?php

/*
 * Classe Cargo
 * Autor:wesley da silva pereira
 * Data: 09/07/2015
 * 
 */
class ClassCargo
{
    private $id_cargo;
    private $car_nome;
    private $car_descricao;
    private $id_funcionario;//chave da tb_funcionario fazer combobox
    
    function getId_cargo() {
        return $this->id_cargo;
    }

    function getCar_nome() {
        return $this->car_nome;
    }

    function getCar_descricao() {
        return $this->car_descricao;
    }

    function getId_funcionario() {
        return $this->id_funcionario;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setCar_nome($car_nome) {
        $this->car_nome = $car_nome;
    }

    function setCar_descricao($car_descricao) {
        $this->car_descricao = $car_descricao;
    }

    function setId_funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
    }


}
