<?php
    $path = "./";
    $diretorio = dir($path);
    echo "Indice de arquivos de aula'<strong>".$path."</strong>':<br />";
    while($arquivo = $diretorio -> read()){
        echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
    }
    $diretorio -> close();
?>