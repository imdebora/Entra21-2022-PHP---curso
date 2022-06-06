<!-- 20. Crie um programa que le um valor de inicio e um valor de fim, exibindo em tela a contagem dos numeros dentro desse intervalo. -->

<html>

<body>
    <form action="" method="post">
        <input type="text" name="num1" value="Digite um número" onfocus="this.value=''">
        <input type="text" name="num2" value="Digite outro número" onfocus="this.value=''">
        <input type="submit" name="enviar">
    </form>

    <?php
        if (isset($_POST['enviar'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($num1 > $num2) {
               for($num1;$num1 >= $num2;$num1--){
                   print "$num1<br>";
               }
            }else if ($num1 < $num2) {
                for($num1;$num1 <= $num2;$num1++){
                    print "$num1<br>";
                }
            }else {
            echo "Os números são iguais <br>";
            }
        }
    ?>
</body>

</html>