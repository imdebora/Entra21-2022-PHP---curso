<?php

    $carro = new stdClass;
    $carro->modelo='Palio';
    $carro->ano='2002';
    $carro->cor='Preto';
    $carro->Ligado=true;
    echo "<br>";
    print_r($carro);
    echo "<br>";
    print $carro->modelo;
    echo "<br>";
    print $carro->ano;
    echo "<br>";
    print $carro->cor;
    echo "<br>";
    if($carro->Ligado){
    print 'O carro está ligado!'; }

?>