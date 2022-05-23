Operadores Lógicos

<?php
echo "<br>------------------<br>";
$vai_chover = TRUE;
$esta_frio = TRUE;
if ($vai_chover AND $esta_frio){
    echo "Não vou sair de casa";
}

echo "<br>------------------<br>";
$vai_chover = TRUE;
$esta_frio = FALSE;
if ($vai_chover xor $esta_frio){
    echo "Vou ficar em casa";
}

echo "<br>-----LINHA 21------<br>";
// echo "Os dois não podem ser verdadeiros.. excluem um ao outro.. forma exclusiva<br>";
$vai_chover = TRUE;
$esta_frio = false;
if($vai_chover xor $esta_frio){
    echo "Vou pensar duas vezes antes de sair";
}

echo "<br> linha 29 ---- NOT => !$a <br>";
$a = false;
if (!$a){
    echo "Entrou aqui";
}

echo "<br> && Se ambos operadores são verdadeiros<br>";
$a = true;
$b = true;
if ($a && $b){
    echo "Ambos são TRUE <br>";
}

echo "<br> && Se a ou B são verdadeiros<br>";
$a = true;
$b = true;
if ($a || $b){
    echo "A ou B são TRUE <br>";
}
