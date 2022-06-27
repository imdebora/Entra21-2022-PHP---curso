<?php

$cadastro  = array(
    "1" => array(
        "titulo" => "Aeroporto Congonhas",
        "url" => "https://www.youtube.com/embed/nJtXALnntuI",
        "frame" => "<div class=yt><iframe src='https://www.youtube.com/embed/nJtXALnntuI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"
    ),
    "2" => array(
        "titulo" => "Ponte delle Guglie Venice",
        "url" => "https://www.youtube.com/embed/HpZAez2oYsA",
        "frame" => "<div class=yt><iframe src='https://www.youtube.com/embed/HpZAez2oYsA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"
    ),
    "3" => array(
        "titulo" => "Time Square",
        "url" => "https://www.youtube.com/embed/1-iS7LArMPA",
        "frame" => "<div><iframe width='100%' height='100%' src='https://www.youtube.com/embed/1-iS7LArMPA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"
    ),
    "4" => array(
        "titulo" => 'Rolling Cam World',
        "url" => 'https://www.youtube.com/embed/8KGXSjtS5pk',
        "frame" => "<div class=yt><iframe width='100%' height='100%' src='https://www.youtube.com/embed/8KGXSjtS5pk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"
    ),
    "5" => array(
        "titulo" => 'Balneario Orla',
        "url" => 'https://www.youtube.com/embed/8KGXSjtS5pk',
        "frame" => "<div><iframe width='560' height='315' src='https://www.youtube.com/embed/cfgrm8lDH8U' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>"                         
    )



    



);


if (!$_SESSION['cadastro']) {
    $_SESSION['cadastro'] = $cadastro;
}