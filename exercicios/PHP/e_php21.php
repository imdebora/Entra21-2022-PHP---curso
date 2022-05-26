<!-- 21. Crie um programa que realiza a contagem de 0 a 20, exibindo apenas os numeros pares. -->

<?php
while($cont<=20){  
if($num%2==0){
echo "$cont </br>"; /* tag </br> quebra de linha*/
}
$cont=$cont+2; /* aqui escolhe na contagem um atributo 1= lista todos, 2= numeros pares, 3= numeros impares */
}
?>

