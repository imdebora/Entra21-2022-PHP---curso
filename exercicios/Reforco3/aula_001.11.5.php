<!-- Funções Anonimas -->
<!-- lamba funcions no PHP são a Instancia de uma classe Closure -->

<!-- 
$remove_acento = function($str){
    $a = array('ç','Ç');
    $b = array('c','C');
    return str_replace($a, $b, $str);
};
echo $remove_acento('Açafrão');
echo '<br>'; 
-->

<?php
$remove_acento = function($str){
    $a = array('ã','Ã','é','É','ô','Ô','1975','!','*');
    $b = array('a','A','e','E','o','O','2022',',','!');
    return str_replace($a,$b,$str);
};
echo $remove_acento('Mamão');
echo '<br>';
echo $remove_acento('Café');
echo '<br>';
echo $remove_acento('Anônima');
echo '<br>';
echo $remove_acento('1975');
echo '<br>';
echo $remove_acento('Olá! bom dia*');
echo '<br>';
?>

<!-- Inserir na array, todos os acentos e seus substitutivos sem acento  -->
<?php
$palavras = array();
$palavras[] = 'conceiÇão';
$palavras[] = 'cação';
$palavras[] = 'caução';
$r = array_map($remove_acento, $palavras);
print_r($r);

?>