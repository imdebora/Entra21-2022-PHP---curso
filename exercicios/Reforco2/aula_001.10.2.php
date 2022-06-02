# Require ..

require <arquivos>
<?php
// include 'tootls.php'; // include 'tools.php'; # gera warning se não encontrar o arquivo
require 'tootls.php';
echo "<br> Quadrado de 2 é: " . quadrado(2);
?>

## a unica diferença para o include é que o erro é fatal e não warning!!!