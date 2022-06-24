<?php
session_start();
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
            foreach($cadastro as $pessoas => $valor){
                echo "<tr>";
                echo "<td>" . $valor['nome'] . "</td>";
                echo "<td>" . $valor['idade'] . "</td>";
                echo "<td>" . $valor['cep'] . "</td>";
                echo "<td>" . "<a href=excluir.php?Delete=" . $pessoas . "&nome=" . urldecode($valor['nome']) . "> Excluir </a>" . "</td>";
                echo "<td>" . "<a href=alterar.php?ID=" . $pessoas . "> Alterar </a>" . "</td>"; 
                echo "</tr>";        
            }
            ?>
    </table>
</body>