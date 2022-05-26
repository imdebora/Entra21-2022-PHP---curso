<!-- 7. Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <form method="post">
            Número: <input type="floatval" name="num">
            <input type= "submit">
    </form>
    <?php
        $num = $_POST['num'];
        if (empty($num) == FALSE);{
        echo 'O número digitado foi: ', $num;
        }
    ?>
</body>
</html>