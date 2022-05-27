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
        $a = $_POST['numero1'];
        $d = $_POST['numero2'];
        $b = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
        $arr = range($a,$b,$d);
  
        echo implode(", ",$arr);

        for($i = 1; $i <= 10; $i++) {
            echo $a . "\n";
            $a = $a + $r;
      
        }

        
  
    }
    ?>
</body>
</html>
<?php
  