<body>
    <form action="" method="post">
        <fieldset>
            <legend>PHP</legend>
            <label>Nome </label>
            <input type="text" name="nome" placeholder="Seu nome aqui">
            <label>Idade </label>
            <input type="number" name="idade" placeholder="Sua idade aqui">
            <label>CEP </label>
            <input type="number" name="cep" placeholder="Seu CEP aqui">
            <br><br>
            <button type="submit" name="enviar"> Enviar Novo Cadastro </button>
            <button type="submit" name="restaura"> Restaurar ao Original </button>
        </fieldset>
    </form>
    <table>
        <tr id="titulo">
            <td>Nome</td>
            <td>Idade</td>
            <td coldspan="2">CEP</td>
        </tr>
        <?php
        if (isset($_POST['enivar'])){
            $nome=$_POST['nome'];
            $idade=$_POST['idade'];
            $cep=$_POST['cep'];
            
            $cadastro_novo = array("nome" => $nome, "idade" => $idade, "cep" => $cep);
            array_push($_SESSION['cadastro'], $cadastro_novo);
        }
        if(isset($_POST['restaura'])){
            $_SESSION['cadastro'] = $cadastro;
        }
        ?>


</body>