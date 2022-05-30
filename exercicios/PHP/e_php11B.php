<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
pegar os dados de num1 e num2 de um form. COM METODO = GET
-->
<?php
    $num1 = 52;
    $num2 = 106;

if ($_GET["num1"]) {
    $num1 = $_GET["num1"];
}
if ($_GET["num2"]) {
    $num2 = $_GET["num2"];
}
?>
<form actions="" method="get">
    <input type="text" name="num1" value=<?php echo $num1 ?>>
    <input type="text" name="num2" value=<?php echo $num2 ?>>
    <input type="submit" name="enviar">
</form>
<?php
if (isset($_GET['enviar'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo "O núm1 digitado é $num1" . "<br>";
    echo "O núm2 digitado é $num2" . "<br>";
    $resultado = $num1 + $num2;
    echo "O resultado da soma dos valores é: $resultado";
}
?>