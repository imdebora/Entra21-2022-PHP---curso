<?php
$valuenome = "";
$valueidade = "";
$valuecep = "";
$valuesaldo = "";   
?>
<form method="post" action="">
        <fieldset>
            <legend>CADASTRAR USUÁRIO</legend>
            <label>Nome: </label>
            <input type="text" value="<?php echo $valuenome ?>" name="nome">
            <label>Idade: </label>
            <input type="number" value="<?php echo $valueidade ?>" name="idade">
            <label>CEP: </label>
            <input type="text" value="<?php echo $valuecep ?>" name="cep">
            <label>Saldo: </label>
            <input type="text" value="<?php echo $valuesaldo ?>" name="saldo">
            <br><br>
            <?php
            if (isset($_POST['atualizar'])){ ?>
                <button type="submit" name="atualizar"> Atualizar Cadastro </button>
            <?php
            } else { ?>
                <button type="submit" name="adicionar"> Adicionar Cadastro </button>
                <!-- <input type="submit" name="adicionar" value="Adicionar Cadastro"> -->
            <?php } ?>

            <!-- <button type="submit" name="restaura"> Restaurar ao Original </button> -->
        </fieldset>
</form>