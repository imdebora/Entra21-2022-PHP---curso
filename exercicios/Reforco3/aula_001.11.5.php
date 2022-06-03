<!-- Funções Anonimas -->
<!-- lamba funcions no PHP são a Instancia de uma classe Closure -->

<?php
$remove_acento = function($str){
    $a = array('ç','Ç');
    $b = array('c','C');
    return str_replace($a, $b, $str);
};
echo $remove_acento('açafrão');
echo '<br>';
?>
<?php
$remove_acento = function($str){
    $a = array('ã','Ã','é','É','ô','Ô');
    $b = array('a','A','e','E','o','O');
    return str_replace($a,$b,$str);
};
echo $remove_acento('Mamão');
echo '<br>';
echo $remove_acento('Café');
echo '<br>';
echo $remove_acento('Anônima');
echo '<br>';
?>