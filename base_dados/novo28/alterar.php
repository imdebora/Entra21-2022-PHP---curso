<?php 
    session_start();
    include_once "config.php";
    require_once 'config.php';
    require_once 'atualiza.php';
    require_once 'head.php';
?>
<form method="POST">
    <fieldset>     
        <legend>Alterar cadastro</legend>
            <br>
            Nome novo: <input type="text" name="nome_novo">
            <br><br>
            Idade nova: <input type="number" name="idade_nova">
            <br><br>
            CEP novo: <input type="text" name="cep_novo">
            <br><br>
            Saldo novo: <input type="text" name="saldo_novo">
            <br><br>
            <input type="submit" name="alterar" value="Alterar">
    </fieldset>
    <?php 
    if(isset($_POST['alterar'])){
        require_once 'atualiza.php';
        AtualizarPessoa(
            $_POST['nome_novo'],
            $_POST['idade_nova'],
            $_POST['cep_novo'],
            $_POST['saldo_novo']
        );
        header("refresh: $time; index.php");
    }
        ?>
</html>