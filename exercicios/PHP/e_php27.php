<!-- 27. Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. https://www.todamateria.com.br/palindromo/ -->

    <html>

<body>
    <form action="" method="post">
        <input type="text" name="texto" value="Digite um texto" onfocus="this.value=''">
        <input type="submit" name="enviar">
    </form>

    <?php
    //If form was submitted
        if (isset($_POST['enviar'])) {
            $texto = $_POST['texto'];
            $remove_acento = function($str){
                $a = array('A', 'E', 'I', 'O', 'U', 'ã', 'é', 'Ã', 'É',' ');
                $b = array('a', 'e', 'i', 'o', 'u', 'a', 'e', 'a', 'e', '');
                return str_replace($a,$b,$str);
            };
            $text = $remove_acento($texto);
            
            if(strrev($text) == $text){
                echo "É palindromo";
            }   
            else{
                echo "Não é palindromo";
            }      
        }
    ?>
</body>

</html>