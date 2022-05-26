<!-- Crie um programa que realiza a Progressão Aritmetica de 20 elementos, com primeiro termo e razão definidos pelo usuário.  (Progressão aritmética - Uma progressão aritmética é uma sequência numérica em que cada termo, a partir do segundo, é igual à soma do termo anterior com uma constante r. O número r é chamado de razão ou diferença comum da progressão aritmética.) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressão Aritmetica</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Entre com o Primeiro Termos da P.A: <input type="float" name="numero1">
        Entre com a Razão da P.A: <input type="float" name="numero2">
        <input type="submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $n3 = $n1+$n2;

        for ($n1&$n2; $n3 <= 20; $n3++){
            echo $n3;
        }
    }
    ?>
</body>
</html>