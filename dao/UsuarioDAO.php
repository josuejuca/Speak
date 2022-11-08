<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author alunoetc
 */

require_once 'conexao/conexao.php';
class UsuarioDAO {
    //put your code here
    
    public function Gravar(UsuarioDTO $UsuarioDTO){
        $pdo = conexao::getInstance();
        $sql = "insert into usuario (idPerfil, nome, email, login, senha) values(?,?,?,?,?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$UsuarioDTO ->getIdPerfil());
        $execucao ->bindValue(2,$UsuarioDTO ->getNome());
        $execucao ->bindValue(3,$UsuarioDTO ->getEmail());
        $execucao ->bindValue(4,$UsuarioDTO ->getLogin());
        $execucao ->bindValue(5,$UsuarioDTO ->getSenha());
        return $execucao ->execute();
    }
    public function Pesquisar(){
        $pdo = conexao::getInstance();
        $sql = "select * from usuario;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->execute();
        $pesquisa = "";
        $pesquisa = $execucao ->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    // fim
}