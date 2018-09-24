<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_post["acao"])){
if ($_POST["acao"] == "inseir"){
    inserirpessoa(); 
    }
    if ($_POST("acao")=="alterar"){
        alterarPessoa();
    }
    if($_POST["acao"]=="excluir"){
        exluirPessoa();
    }
}


function abrirBranco(){
    $concexao = new mysqli("localhost", "root", "", "agenda");
    return $conexao;
}
    function inserirpessoa() {
     $banco = abrirBranco();       
     $sql = "(INSERT INTO pessoas(nome, nascimento, endereço, telefone)"
        ."VALUES ('{$_POST["nome"]},{$_POST ["nascimento"]}, {$_POST["endereço"]},{$_POST["telefone"]},[value-5]')";
         
     $banco->query($sql);
     $banco->close();
     voltarIndex();
    }
    
    function alterarpessoa() {
     $banco = abrirBranco();       
     $sql = "UPDATE pessoas SET nome='{$_POST[nome]}',"
     ."nacimento'={$_POST[nascimento]}', endereço`={$POST_[endereço]}',"
     ."telefone'={$_POST["telefone"]}' WHERE id='{$POST_["id"]}'"; 
     $banco->query($sql);
     $banco->close();
     voltarIndex();
    }
    
     function alterarpessoa() {
     $banco = abrirBranco();       
     $sql = "UPDATE pessoas SET nome='{$_POST[nome]}',"
     ."nacimento'={$_POST[nascimento]}', endereço`={$POST_[endereço]}',"
     ."telefone'={$_POST["telefone"]}' WHERE id='{$POST_["id"]}'"; 
     $banco->query($sql);
     $banco->close();
     voltarIndex();
    }
    
    
    
    function excluirPessoa(){
        $banco = abrirBranco();
        $sql = "SELECT FROM pessoa WHERE id='{$_POST["id"]}'";
        $resultado = $banco->query($sql);
        while ($row = mysqli_fetch_array($resultadp)) {
            $grupo [] = $row;
        }
        return $grupo;
        }        
    
      function selectIdPessoa($id){
        $banco = abrirBranco();
        $sql = "SELECT = FROM pessoa WHERE id =".$id;
        $resultado = $banco->query($sql);
        $pessoa = mysqli_fetch_assoc($resultado); {
        }
        return $pessoa;
        }        
        
 function voltatIndex() {
    header("Location:index.php");
     
}
