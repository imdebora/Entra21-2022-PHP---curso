<!-- 8. peça para que o usuario digite um numero, em seguida o converta para float, exibindo em tela tanto o numero em si como o seu tipo de dado.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
<form method="post" >
        Número: <input type="floatval" name="num">
        <input type= "submit">
    </form>
    <?php
    $num = $_POST['num'];
    $num = (float) $num ;
    if (($num) == 0) {
        echo ''; }
     else {
        echo 'O número digitado foi: ', floatval($num), ' e seu tipo de dado é ', gettype($num);
    }
    ?>
    
</body>
</html>
