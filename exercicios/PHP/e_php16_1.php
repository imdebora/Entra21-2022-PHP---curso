<!-- 16. Solicite duas variaveis: num1 e num2 . 
    1.  verifique se o valor de num1 é maior que o de num2. 
    2.  Verifique se os valores de num1 e de num2 são iguais.
    3.  Verifique se os valores de num1 e de num2 são diferentes. 
    4.  Verifique se o valor de num é é igual ou menor que 100.
    5.  Verifique se os valores de num1 e de num2 são iguais ou menores que sem. 
    6.  Verifique se os valores de num1 ou de num2 são iguais ou maiores que 100:
    7.  Verifique se o valor de num1 consta nos elementos de lista1 Sendo num1=100 e lista1= [10,100,1000,10000,100000].
    8.  Verifique caso o valor de num1 for maior que o do segundo, exiba em tela uma mensagem de acordo, caso contrario, exiba em tela uma mensagem dizendo que o primeiro valor digitado é menor que o segundo. 
    9.  Verifique se num1 e num2 são PAR(es) ou se é IMPAR(es): -->

    <html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite o Número 1: <input type="number" name="numero1">
        Digite o Número 2: <input type="number" name="numero2">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];

        $lista = array(10,100,1000,10000,100000);
        if($n1 > $n2) {
            echo 'O primeiro número é maior do que o segundo número<br>';
        }else if ($n1 < $n2) {
            echo 'O segundo número é maior do que o primeiro número<br>';
        }
        if($n1 == $n2) {
            echo 'O primeiro número é igual ao segundo número<br>';
        }
        if($n1 != $n2) {
            echo 'Os números digitados são diferentes!<br>';
        }
        if($n1 <= 100) {
            echo 'O primeiro número é menor ou igual a 100<br>';
        }else if($n1 > 100) {
            echo 'O primeiro número é superior a 100<br>';
        }
        if($n2 <= 100) {
            echo 'O segundo número é menor ou igual a 100<br>';
        }else if($n2 > 100) {
            echo 'O segundo número é superior a 100<br>';
        }
        foreach($lista as $indice => $copiaIndice) {
            if($lista[$indice] == $n1) {
                echo 'O primeiro número corresponde a um dos indices do array "Lista"<br>';
            }
        }
        if($n1 % 2 == 0) {
            echo 'O primeiro número é par<br>';
        }
        else {
            echo 'O primeiro número é ímpar<br>';
        }
        if($n2 % 2 == 0) {
            echo 'O segundo número é par<br>';
        }
        else {
            echo 'O segundo número é ímpar<br>';
        }
        
    }
?>