<!-- SWITCH -->

<!-- A=30;

CASE A:
    10;
        ..
    20;
        ..
    30;
        ..
    *; -->

<?php
$variavel = 30;
switch($variavel){
    case 10:
        print "entrou aqui 10";
        break;
    case 20:
        print "entrou aqui 20";
        break;
    case 30:
        print "entrou aqui 30";
        break;
    default:
        print "entrou no default";
}