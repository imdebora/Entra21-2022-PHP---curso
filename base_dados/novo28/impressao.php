<body>
    <table>
        <tr id="titulo">
            <td>Nome</td>
            <td>Idade</td>
            <td coldspan="2">CEP</td>
            <td>Saldo</td>
            <td>Excluir</td>
            <td>Alterar</td>
        </tr>
        <?php
        require_once 'config.php';

            $query="SELECT * FROM PESSOAS";
            foreach($db->query($query) as $pessoas => $valor){
                echo "<tr>";
                echo "<td>" . $valor['PESSOA_NOME'] . "</td>";
                echo "<td>" . $valor['PESSOA_IDADE'] . "</td>";
                echo "<td>" . $valor['PESSOA_CEP']. "</td>";
                echo "<td>" . $valor['PESSOA_SALDO']. "</td>";
                echo "<td>" . "<a href=excluir.php?Delete=" . $pessoas . "&nome=" . urldecode($valor['PESSOA_NOME']) . "> Excluir </a>" . "</td>";
                echo "<td>" . "<a href=alterar.php?Alterar=" . $pessoas . "&nome=" . urldecode($valor['PESSOA_NOME']) . "> Alterar </a>" . "</td>"; 
                echo "</tr>";        
            }
            ?>
    </table>
</body>