<!-- 29. Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: No, idade, Cep. A Chave primeria da Array será o numero 1,2,3,4,5.
I   
30. Utilizando o exercicio acima, (mantenha os 5 cadastros ja existentes e) faça um formulario permita insersão de novas pessoas.
      
31. Possibilite alterar um valor em seu banco.
    
32. Inclua um botão excluir um item da sua array. 
    
33. Inclua um campo Saldo em Carteira para cada pessoa, imprima o total em carteira de todo o cadastro.
     
34. Imprima o numero total de pessoas em seu cadastro no rodapé da pagina.  -->

<<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primária da Array será o numero 1,2,3,4,5. -->
<?php
$cadastro = array(
    1 => array(
        "nome" => "Alessandro",
        "idade" => "43",
        "CEP" => "91000-010"
    ),
    2 => array(
        "nome" => "Eliabe",
        "idade" => "20",
        "CEP" => "92000-020"
    ),
    3 => array(
        "nome" => "Jefferson",
        "idade" => "30",
        "CEP" => "93000-030"
    ),
    4 => array(
        "nome" => "Sebastiao",
        "idade" => "40",
        "CEP" => "94000-040"
    ),
    5 => array(
        "nome" => "Vinicius",
        "idade" => "50",
        "CEP" => "95000-050"
    )
);
?>
