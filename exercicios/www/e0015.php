<html>
    <title> 
        <?php $titulo= "DéboraL"; echo $titulo ?>
    </title>

    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <form method="post" action="/e0015.php" >
            Nome: <input type="text" name="fname">
            <input type="submit">
        </form>
    </body>
</html>

<?php echo $_SERVER['PHP_SELF'] . "<br>" ; ?>
<?php echo $_SERVER["REQUEST_METHOD"] . "<br>" ; ?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Otimo... aqui é um POST posso pegar as variaveis sem mostrar nada na URL... mais seguro obvio! <br><BR>";

        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
?>