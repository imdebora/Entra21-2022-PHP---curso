<?php
session_start();
if(!isset($_SESSION["required"])){
    $_SESSION['required'] = true;
    require_once('e_php29.php');
    $_SESSION['cadastro'] = $cadastro;
}
?>

<html>
    <body>
        <!-- Adicionar Cadastro !-->
        <form method="post">
            <input type="text" name="nome" value="Digite um nome" onfocus="this.value=''"> <br/>
            <input type="text" name="idade" value="Digite a idade" onfocus="this.value=''"> <br/>
            <input type="text" name="cep" value="Digite o CEP" onfocus="this.value=''"> <br/>
            <input type="submit" name="adicionar_cadastro" value="Adicionar cadastro">
        </form>

        <?php   
        if (isset($_POST['adicionar_cadastro'])) {
            $nome=$_POST['nome'];
            $idade=$_POST['idade'];
            $cep=$_POST['cep'];

            $cadastro_novo_cadastro=array(
                    "nome" => $nome,
                    "idade" => $idade,
                    "CEP" => $cep
            );      

            array_push($_SESSION['cadastro'], $cadastro_novo_cadastro);

            foreach($_SESSION['cadastro'] as $pessoa) {
                echo "Nome: ".$pessoa['nome']. "<br />Idade: ".$pessoa['idade']."<br />CEP: ".$pessoa['CEP']."<br /><br />"; 
            }
        }        
        ?>
    </body>
</html>