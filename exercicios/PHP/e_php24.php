<!-- 24. Crie um programa que realiza a contagem regressiva de 20 segundos: (from time import sleep) -->
<?php
$t = 20;
?>

<script type="text/javascript">
var intervalo = "";
var i = <?php echo $t; ?>;

function start(){
var cont = document.getElementById('cont');
intervalo = window.setInterval(function(){
if(i == 0){
clearInterval(intervalo);
intervalo = "";
}
i--;
cont.innerHTML = i;

}, 1000);
}
onload = start;
</script>
<div id=cont><?php echo $t; ?></div>


