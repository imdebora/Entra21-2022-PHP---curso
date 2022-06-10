<!-- 
28. Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primeria da Array será o numero 1,2,3,4,5.
29. Utilizando o exercicio acima, (mantenha os 5 cadastros ja existentes e) faça um formulario permita insersão de novas pessoas.
30. Possibilite alterar um valor em seu banco de dados (array)
31. Inclua um botão excluir um item da sua array.
32. Inclua um campo Saldo em Carteira para cada pessoa, imprima o total em carteira de todo o cadastro.
33. Imprima o numero total de pessoas em seu cadastro no rodapé da pagina.
34. Imprima a média de idade do seu cadastro no rodapé da página. -->

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