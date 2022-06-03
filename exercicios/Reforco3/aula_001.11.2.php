<!-- VARIAVEIS GLOBAIS -->
<?php
$total = 0;
function km2mi($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}
echo "<br> Percorreu" . km2mi(100) . "milhas<br>\n";
echo "<br> Percorreu" . km2mi(200) . "milhas<br>\n";
echo "<br> Percorreu um total de " . $total . "quilometros<br>\n";

// Variaveis globais não são boa pratica.
?>