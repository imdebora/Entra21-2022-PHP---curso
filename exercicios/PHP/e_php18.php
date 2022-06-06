<!-- 18. Crie uma estrutura de repetição que percorre a string 'Projeto Entra21': -->

<?php
$vetor = array('Projeto Entra21','Projeto Entra21','Projeto Entra21','Projeto Entra21');
$count = 1; 
for ($count; $count <= count($vetor); $count++){
    print $count.' - '.$vetor[$count-1]. "<br>";
}
?>
<?php
$str = "Projeto Entra21";
$array = str_split($str);
foreach($array as $x){
    echo " : " . $x . " : <br>";
}
?>