<?php

/*
 * Classe Materia
 * Autor:wesley da silva pereira
 * Data: 21/07/2015
 * 
 */
class ClassMateria 
{
    private $id_materia;
    private $mat_nome;
    private $mat_info;
    private $id_professor;//chave da tb_professor aqui fazer um combobox
    
    function getId_materia() {
        return $this->id_materia;
    }

    function getMat_nome() {
        return $this->mat_nome;
    }

    function getMat_info() {
        return $this->mat_info;
    }

    function getId_professor() {
        return $this->id_professor;
    }

    function setId_materia($id_materia) {
        $this->id_materia = $id_materia;
    }

    function setMat_nome($mat_nome) {
        $this->mat_nome = $mat_nome;
    }

    function setMat_info($mat_info) {
        $this->mat_info = $mat_info;
    }

    function setId_professor($id_professor) {
        $this->id_professor = $id_professor;
    }

 
}
