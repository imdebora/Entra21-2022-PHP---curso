<?php session_start(); ?> 
 
<head> 
    <title>Ex 028b</title> 
    <style> 
        <?php include '../../css_form.css' ?><?php include 'alterar_dados.css' ?> 
    </style> 
</head> 
<?php 
 
require_once 'e_php28.php'; 
?> 
 
<body> 
    <form method="post" action=""> 
        <ul class="lista" id="adiciona_na_lista"> 
            <label for="nome">Digite o Nome:</label> 
            <li class="primeira-lista"><input type="text" name="nome" placeholder="Insira o nome sem acentos"></li> 
 
            <label for="idade">Digite a Idade:</label> 
            <li class="primeira-lista"><input type="number" name="idade" placeholder="1 a 100"></li> 
 
            <label for="cep">Digite o CEP:</label> 
            <li class="primeira-lista"> <input type="number" name="cep" placeholder="000000-000"></li> 
            <li class="primeira-lista"><input type="submit" value="adicionar" name="adicionar"></li> 
 
        </ul> 
    </form> 
 
    <?php 
    if (isset($_GET['apagar'])) { 
        array_splice($_SESSION['cadastro'], $_GET['apagar'], 1); 
    } 
 
    if (isset($_POST['restaura'])) { 
        $_SESSION['cadastro'] = $cadastro; 
    } 
 
 
    if (isset($_POST['adicionar'])) { 
        array_push( 
            $_SESSION['cadastro'], 
            array("nome" => $_POST["nome"], "idade" => $_POST["idade"], "cep" => $_POST["cep"]) 
        ); 
    } 
 
    foreach ($_SESSION['cadastro'] as $indice) { 
        ["nome" => $nome, "idade" => $idade, "cep" => $cep] = $indice; 
        echo "<a href='e_phpexcluir.php'><input type='submit' name='apagar' value='Apagar Cadastro' {$nome}'><a/>"; 
        echo "<div class='informacoes-gerais'> Nome: {$nome} </div>"; 
        echo "<div class='informacoes-gerais'> Idade: {$idade}</div>"; 
        echo "<div class='informacoes-gerais'> CEP: {$cep}</div>"; 
 
        echo "</div>"; 
        echo "<br>"; 
    } 
 
    ?> 
    <form method="post"> 
        <input type="submit" name="restaura" value="restaura"> 
    </form> 
</body>