<body>
<!--Esta é a página pessoal do usuario-->

<?php
session_start();
require_once 'conf.php';
require_once 'form.php';
// require_once 'logi.php';

if(isset($_POST['login']) && isset($_POST['senha'])) {
    echo '<header><h1>Bem Vindo!</h1></header>';
    header("refresh: $tt; index.php");
} else {
    echo '<header><h1>Usuario não Logado!</h1></header>';
    header("refresh: $tt; index.php");
}
?>
</body>