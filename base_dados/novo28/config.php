<?php
$br = "<br><br>";
$time = 2;
$titulo = "Novo028:";
// session_start();
try
{
    // $db = new PDO("mysql:host=".$dbHostname.";dbname=".$dbDataBse, $dbUsername, $dbPassword);
    $db = new PDO('sqlite:exer28.sqlite');
    // print("Conectou");
}
catch(PDOException $e)
{
    print "<br> Não conectou! Algo deu errado, verifique!!!: <br>" . $e;
}

$_SESSION['db'] = $db;

?>