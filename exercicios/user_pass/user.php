<?php
session_start();
require_once 'conf.php';
require_once 'cabe.php';
$time = ($tt + $tt);

// require_once 'logi.php';

if(!isset($_SESSION['user']) or !isset($_SESSION['pass'])) {
    echo '<header><center><h1>Usuario não Logado!</h1></center></header>';
    header("refresh: $tt; index.php");
} else {
    echo '<header><center><h1>Bem Vindo!</h1></center></header>';
    echo '<div align="center">
    <img src="https://media.giphy.com/media/1mVs7zGEdTw4L8VzuL/giphy.gif" width="500px"/>
    </div>' . $b;
    echo '<center><a href=index.php> Voltar Para Página Inicial</center>';
    // header("refresh: $time; index.php");
}
?>
