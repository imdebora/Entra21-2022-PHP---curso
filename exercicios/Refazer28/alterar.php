<?php
session_start();
require_once 'base.php';
$alteracao = $_SESSION['cadastro'][$_GET['ID']];
?>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Realizar Alteração: </legend>
            <label>Nome: </label>
            <input type="text" name="nome" value="<?php echo $alteracao['nome'];?>">
            <label>Idade: </label>
            <input type="number" name="idade" value="<?php echo $alteracao['idade'];?>">
            <label>CEP: </label>
            <input type="number" name="cep" value="<?php echo $alteracao['cep'];?>">
            <br><br>
            <button type="submit" name="enviar">Realizar Alteração</button>        
        </fieldset>
    </form>
    <?php
    if (isset($_POST['enviar'])){
        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $cep=$_POST['cep'];

        $_SESSION['cadastro'][$_GET['ID']]['nome'] = $nome;
        $_SESSION['cadastro'][$_GET['ID']]['idade'] = $idade;
        $_SESSION['cadastro'][$_GET['ID']]['cep'] = $cep;

        header("refresh: $time;impressao.php");
    }
    ?>
</body>