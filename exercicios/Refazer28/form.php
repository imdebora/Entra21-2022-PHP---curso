<?php
$valuenome = "";
$valueidade = "";
$valuecep = "";
if ($_SESSION['alterar'] == True){
    $valuenome = $_SESSION['alterar']['nome'];
    $valueidade = $_SESSION['alterar']['idade'];
    $valuecep = $_SESSION['alterar']['cep'];    
}
?>
<form method="post" action="">
        <fieldset>
            <legend>PHP</legend>
            <label>Nome: </label>
            <input type="text" value="<?php echo $valuenome ?>" name="nome" placeholder="Seu nome aqui">
            <label>Idade: </label>
            <input type="number" value="<?php echo $valueidade ?>" name="idade" placeholder="Sua idade aqui">
            <label>CEP: </label>
            <input type="text" value="<?php echo $valuecep ?>" name="cep" placeholder="Seu CEP aqui">
            <br><br>
            <?php
            if ($_SESSION['alterar'] == True){ ?>
                <button type="submit" name="atualizar"> Atualizar Cadastro </button>
            <?php
            } else { ?>
                <button type="submit" name="adicionar"> Adicionar Cadastro </button>
            <?php } ?>

            <button type="submit" name="restaura"> Restaurar ao Original </button>
        </fieldset>
</form>
