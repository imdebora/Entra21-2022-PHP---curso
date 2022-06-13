<?php
session_start();
require_once 'e_php29.php';
?>
<html>

<body>
    <form method="post" action=''>
        <input type="text" name="nome"> <br />
        <input type="submit" name="adicionar_cadastro" value="Adicionar cadastro">
    </form>
    <?php

    $b = "<br>";

    // if ($_GET['delete']){
    //     xxx
    //     xxx
    //     xxxx
    //     ????
    // }

    if (isset($_POST['restaura'])) {        
        $_SESSION['cadastro'] = $cadastro;
    };

    if (isset($_POST['adicionar_cadastro'])) {        
        array_push($_SESSION['cadastro'], array("nome" => $_POST['nome']));
    };

    // transforme esta impressao em links. 
     foreach ($_SESSION['cadastro'] as $id => $pessoa) {
        echo "Nome:" . $pessoa['nome'] ."<a href=excluir.php?Delete=" . $id . "&Nome=" . $pessoa['nome'] . ">   Excluir  </a>" . $b;
    }
    

    ?>

    <form method="post">
        <input type="submit" name="restaura" value="restaura">
    </form>

</body>

</html>