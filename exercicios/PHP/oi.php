
<html>

<head>
    <title>Apostila PHP Progressivo</title>
</head>

<body>
    <form action="" method="post">
        Digite um numero: <input type="number" name="number" /><br />
        <input type="submit" name="submit" value="testar" />
    </form>
    <?php
    $n = $_POST['number'];
    $divisores = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        for ($count = 2; $count < $n; $count++)
            if ($n % $count == 0){
                echo "Multiplo de $count<br />";
                $divisores++;
            }
            if ($divisores){
                echo "Não é, tem $divisores divisores além de 1 e ele mesmo";}
            else{
            echo "É primo!";}
    }   

    ?>
</body>

</html