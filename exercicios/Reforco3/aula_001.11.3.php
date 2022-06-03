<!-- Variaveis Estaticas -->

<?php
function percorre($quilometros){
    static $total;
    $total += $quilometros;
    echo "Percorreu maias $quilometros do total de $total <br>\n";
    
}
percorre(100);
percorre(200);
percorre(50);
?>