<?php

/*
 * Classe que vai fazer a listagem dos alunos buscando os 
 * parametros na camada model 
 */
/**
 * Description of _viewAluno
 *
 * @author wesley
 */


class _viewAluno 
{
    function listarEndereco()
            {
              include '../../modelo/endereco/ClassEndereco.php';
              include '../../modelo/aluno/ClassAluno.php';
               $endereco = new ClassEndereco();
               $aluno= new ClassAluno();
               
               $endereco->ListarEndereco();
              
               
            }    
}
