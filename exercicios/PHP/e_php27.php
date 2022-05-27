<!-- 27. Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. https://www.todamateria.com.br/palindromo/ -->

<html>

    <head>
        <title>Exercicio_26</title>
    </head>

    <body>
        <form action="" method="post">
            Escreva uma frase ou uma palavra: <input type="text" name="texto" /><br />
            <input type="submit" name="submit" />
        </form>

        <?php
        $string = $_POST['texto'];
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            function Palindrome($string){
                if (strrev($string) == $string){
                    echo "É um palindromo! ";
                }else{
                    echo "Não é um palindromo!";
                }
            }
        }
        ?>

    </body>

</html>