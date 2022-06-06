<!-- Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não.
 E exiba o resultado. : 
 A base do teto desaba. 
 A cara rajada da jararaca. 
 Acuda cadela da Leda caduca. 
 A dama admirou o rim da amada. 
 A Daniela ama a lei? Nada!
 Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. https://www.todamateria.com.br/palindromo/ -->

<!-- 1) Converter em array
2) converter tudo em minuscula ou maiscula
2.1) remover espacos em branco 
3) novamente para string 
4) comparar o inverso  -->


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

            $texto = (strtolower($texto));
            echo "<BR> : strtolower :" . $texto . ":";

            $texto = trim($texto);
            echo "<BR> : trim       :" . $texto . ":";

            $texto = str_replace(' ','',$texto);
            echo "<BR> : espacos    :" . $texto . ":";

            
            $a = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
            $b = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );

            $texto = str_replace( $a,$b,$texto);
            echo "<BR> : chars $#@   :" . $texto . ":";

            $texto = str_replace('_','',$texto);
            echo "<BR> : chars _     :" . $texto . ":";
            echo "<br>";             

            if(strrev($texto) == $texto){ 
                echo "É palindromo";
            }   
            else{
                echo "Não é palindromo";
            }      
        }
    ?>
</body>

</html>