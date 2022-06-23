<?php
require_once 'base.php';
?>
<body>
    <table>
        <tr id="titulo">
            <td>Nome</td>
            <td>Idade</td>
            <td coldspan="2">CEP</td>
            <td>Excluir</td>
            <td>alterar</td>
        </tr>
        <?php
        if (isset($_POST['enviar'])) {
            $nome=$_POST['nome'];
            $idade=$_POST['idade'];
            $cep=$_POST['cep'];
        
            $cadastro_novo_cadastro=array("nome" => $nome, "idade" => $idade, "cep" => $cep
            ); 
            array_push($_SESSION['cadastro'], $cadastro_novo_cadastro);
        
            }
            if(!isset($_POST['restaura'])){
                $_SESSION['cadastro'] = $cadastro;
            }
            foreach($cadastro as $pessoas => $valor){
                echo "<tr>";
                echo "<td>" . $valor['nome'] . "</td>";
                echo "<td>" . $valor['idade'] . "</td>";
                echo "<td>" . $valor['cep'] . "</td>";
                echo "<td>" . "<a href=excluir.php?id=" . $pessoas . "&nome=" . urldecode($valor['nome']) . "> Excluir </a>" . "</td>";
                echo "<td>" . "<a href=alterar.php?ID=" . $pessoas . "> Alterar </a>" . "</td>"; 
                echo "</tr>";        
            }
            ?>
    </table>
</body>