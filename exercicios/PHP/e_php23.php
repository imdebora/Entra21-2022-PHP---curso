<!-- 23. Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Informe um número: <input type="float"  value="" name="numero">
    <input type = "submit" value = "Iniciar">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $numero = $_POST["numero"];
            echo "Tabuada de  $numero  : <br>";
            if($numero > 0 & $numero < 11){
                for($i = 0; $i < 11; $i++)
                echo "$i x $numero = " . $i*$numero . "<br>";
            }
        }
    ?>
</body>
</html>