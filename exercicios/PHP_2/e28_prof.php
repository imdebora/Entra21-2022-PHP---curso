<?php
$array = array(
    "1" => array(
        "nome" => "Adriano",
        "idade" => "81",
        "CEP" => "89110-000",
        "emails" => array(
            '1' => "adriano@gmail.com",
            '2' => "adriano@hotmail.com"
        )
    ),
    "2" => array(
        "nome" => "Carlos",
        "idade" => "47",
        "CEP" => "79010-330",
        "emails" => array(
            '1' => "carlos@machado.tec.br",
            '2' => "carlos@obomprofessor.app.br"
        )
    )
);


var_dump($array['1']['nome']);
var_dump($array['1']['idade']);
var_dump($array['1']['CEP']);
var_dump($array['1']['emails']['1']);
var_dump($array['1']['emails']['2']);

// var_dump($array['2']['nome']);
// var_dump($array['2']['idade']);
// var_dump($array['2']['CEP']);
// var_dump($array['2']['emails']['1']);
// var_dump($array['2']['emails']['2']);

?>