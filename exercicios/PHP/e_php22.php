<!-- Crie um programa que realiza a Progressão Aritmetica de 20 elementos, com primeiro termo e razão definidos pelo usuário.  (Progressão aritmética - Uma progressão aritmética é uma sequência numérica em que cada termo, a partir do segundo, é igual à soma do termo anterior com uma constante r. O número r é chamado de razão ou diferença comum da progressão aritmética.) -->

<html>

<body>
    <form action="" method="post">
        <input type="text" name="num1" value="Digite um número" onfocus="this.value=''">
        <input type="text" name="razao" value="Digite a razão da P.A." onfocus="this.value=''">
        <input type="submit" name="enviar">
    </form>

    <?php
    //If form was submitted
        if (isset($_POST['enviar'])) {
            $num1 = $_POST['num1'];
            $razao = $_POST['razao'];
            // $x é o contador de elementos
            for ($x = 1; $x <= 20; $x++) {                
                echo "$num1 <br>";
                $num1 += $razao;
            }
        }
    ?>
</body>

</html>
  