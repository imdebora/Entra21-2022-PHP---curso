<!-- 26. Crie um programa que pede ao usuário um número qualquer, em seguida retorno se este número é primo ou não, caso não, retorne também quantas vezes esse número é divisível.  -->

<html>

<head>
    <title>Exercicio_26</title>
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
