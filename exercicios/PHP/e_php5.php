<!-- 5. Crie uma variavel nome e atribua a mesma um nome digitado pelo usuario -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <form method="post">
        Nome: <input type="text" name="text">
        <input type= "submit">
    </form>
    <?php
    $nome = $_POST['text'];
    if ($nome == 0){
        echo '';
    } else {
        echo 'O nome digitado foi: ', $nome;
    }
    ?>
</body>
</html>