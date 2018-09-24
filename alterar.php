<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao;php");
$pessoa = selectIdPessoa($_POST["id"]);
//var_dump($pessoa);
?>
<meta charset="UTF-8"
<form name = "DadosPessoas" action = "conecção.php" method = "POST">
    <table border="1">
     
        <tbody>
            <tr>
                <td>nome</td>
                <td><input type="text" name="nome" value=<?=$pessoa["nome"]?> size="20" /></td>
            </tr>
            <tr>
                <td>nascimento</td>
                <td><input type="date" name="nascimento" value=<?=$pessoa["nascimento"]?> size="20" /></td>
            </tr>
            <tr>
                <td>telefone</td>
                <td><input type="text" name="telefone" value=<?=$pessoa["telefone"]?> size="20"/></td>
            </tr>
            <tr>
                <td>endereço</td>
                <td><input type="text" name="endereço" value=<?=$pessoa["endereço"]?> size="20"/></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="inserir" /></td>
                <td><input type="hidden" name="acao" value="alterar" /></td>
        <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
                <td><input type="submit" value="enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

