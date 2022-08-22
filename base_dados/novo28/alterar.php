<?php 
    session_start();
    include_once "config.php";
    require_once 'config.php';
    require_once 'atualiza.php';
    require_once 'head.php';
?>
<form method="POST">
    <fieldset>     
        <legend>ALTERAR CADASTRO</legend>
            <br>
            Novo nome: <input type="text" name="nome_novo">
            <br><br>
            Nova idade: <input type="number" name="idade_nova">
            <br><br>
            Novo CEP: <input type="text" name="cep_novo">
            <br><br>
            Novo saldo: <input type="text" name="saldo_novo">
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