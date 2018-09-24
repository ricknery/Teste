<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include("conexao.php")
    $grupo = selectAllPessoa();
    

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Agenda Pessoal</h1>
        <a href="iserir.php">Add Pessoas</a>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($grupo as $pessoa) {?>          
               
                <tr>
                <td><?=$pessoa["nome"]?></td>
                    <td><?= formatoData ($pessoa["nascimento"])?></td>
                    <td><?=$pessoa["telefone"]?></td>
                    <td><?=$pessoa["endereço"]?></td>
                    <td>
                        <form name="alterar" action="alterar" method="POST">
                            <input type="hidden" name="id" value <?=$pessoa["id"]?> />
                            <input type="submit" value="Editar" name="editar" />
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="excluir" name="exluir" />
                        </form>
                        
                    </td>
                </tr>
                
                <?php }
                
                ?>
                
                </tbody>
        </table>

            
            <?php
        function formatoData($data);
            $array = explode("-". $data);
            $novaData = array[2]."/".$array["1"]."/".$array[0];
            return $novaData;
        ?>
    </body>
</html>
