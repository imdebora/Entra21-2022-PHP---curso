<?php
// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
require_once 'conf.php';
require_once 'cabe.php';
require_once 'form.php';


if (($login == $usuario) && ($pass == $senha)){
    $_SESSION['user'] = $login;
    $_SESSION['pass'] = $pass;

    echo '<script>window.location="user.php";</script>';
}
else if(($login == "") && ($pass == "")){
    echo '<header><center><h1>Por favor, preencha todos os campos!</h1></center></header>';
    header("refresh: $tt; index.php");
} else {
    echo '<header><center><h1>Usuario e/ou Senha invalido!</h1></center></header>';
    header("refresh: $tt; index.php");

}

?>