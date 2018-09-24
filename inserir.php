<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<meta charset="UTF-8"
<form name = "DadosPessoas" action = "conecção.php" method = "POST">
    <table border="1">
     
        <tbody>
            <tr>
                <td>nome</td>
                <td><input type="text" name="nome" value="" /></td>
            </tr>
            <tr>
                <td>nascimento</td>
                <td><input type="date" name="nascimento" value="" /></td>
            </tr>
            <tr>
                <td>telefone</td>
                <td><input type="text" name="telefone" value="" /></td>
            </tr>
            <tr>
                <td>endereço</td>
                <td><input type="text" name="endereço" value="" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="inserir" /></td>
                <td><input type="submit" value="enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

