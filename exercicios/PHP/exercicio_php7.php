<!-- 7. Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado.  -->

<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Número: <input type="text" number="fnumber">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['fnumber'];
        echo $n;
    }
?>