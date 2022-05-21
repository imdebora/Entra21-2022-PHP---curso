<?php
    echo 'Nome:   ' . htmlspecialchars($_GET["nome"]) . '<br>';    
    echo 'Idade:  ' . htmlspecialchars($_GET["idade"]) . '<br>';
    echo 'Cidade: ' . htmlspecialchars($_GET["cidade"]) . '<br>';
    echo 'Estado: ' . htmlspecialchars($_GET["estado"]) . '<br>';
    
    echo $_SERVER['PHP_SELF'];
    
    // var_dump($_GET);
    
    // echo 'Dump da variavel $_GET' . '<br>';
    // ar_dump($_GET);

    // echo "<br><p> Listando Valores das variaveis:<br>";
    // foreach($_GET as $i  ){        
    //      print_r($i);
    //      echo"<br>";    
    // }
     echo "</p>"
?>