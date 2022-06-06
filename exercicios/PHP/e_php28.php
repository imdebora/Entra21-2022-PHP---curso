<!-- 28. Crie uma lista com 5 elementos atravez de 5 forms diferentes. (ao preencher informe um deles como Carlos).
    1.  Substitua o terceiro item de da lista nomes. 
    2.  Adicione um elemento na lista nomes. 
    3.  Adicione um elemento na segunda posição da lista nomes. 
    4.  Remova o elemento 'Carlos1 da lista nomes. 
    5.  Mostre o segundo, terceiro, quarto elemento da lista nomes. Mostre o ultimo elemento da lista. -->

    <html>

<body>
    <form action="" method="post">
         Digite 5 nomes sendo um deles Carlos<br/>
        <input type="text" name="nome1" value="Digite um nome" onfocus="this.value=''"><br />
        <input type="text" name="nome2" value="Digite outro nome" onfocus="this.value=''"><br />
        <input type="text" name="nome3" value="Digite outro nome" onfocus="this.value=''"><br />
        <input type="text" name="nome4" value="Digite outro nome" onfocus="this.value=''"><br />
        <input type="text" name="nome5" value="Digite outro nome" onfocus="this.value=''"><br />
        <input type="submit" name="enviar">
    </form>

    <?php
    //If form was submitted
        if (isset($_POST['enviar'])) {
            $nome1 = $_POST['nome1'];
            $nome2 = $_POST['nome2'];
            $nome3 = $_POST['nome3'];
            $nome4 = $_POST['nome4'];
            $nome5 = $_POST['nome5'];
            $vetor=array($nome1,$nome2,$nome3,$nome4,$nome5);

            //1.Substitua o terceiro item de da lista nomes.
            $vetor[2]="Alessandro";

            //2.Adicione um elemento na lista nomes. 
            array_unshift($vetor, "PHP");

            //3.Adicione um elemento na segunda posição da lista nomes.             
            array_splice($vetor, 2, 0, "Entra21");

            //4.Remova o elemento Carlos da lista nomes.
            $carlos_position = array_search("Carlos", $vetor);
            if($carlos_position!=0){
            array_splice($vetor, $carlos_position, 1);
            /*The example code bellow remove the entire index ***CAUTION***
            unset($vetor[$carlos_position]);
            */
            }

            $array_size = count($vetor)-1;
            
            var_dump(($vetor));

            //5.Mostre o segundo, terceiro, quarto elemento da lista nomes. Mostre o ultimo elemento da lista.
            echo "O segundo item da lista é $vetor[1] <br/>";
            echo "O terceiro item da lista é $vetor[2] <br/>";
            echo "O quarto item da lista é $vetor[3] <br/>";
            echo "O último item da lista é $vetor[$array_size] <br/>";             
            
        }
    ?>
</body>

</html>