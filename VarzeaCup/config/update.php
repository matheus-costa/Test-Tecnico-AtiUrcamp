<?php
require_once('connection.php');
   
$sql = "UPDATE partida SET \"timeA\"='" . $_REQUEST['timeA'] . "',\"timeB\"='" . $_REQUEST['timeB'] . "',\"golstimeA\"='" . $_REQUEST['golstimeA'] . "',\"golstimeB\"='" . $_REQUEST['golstimeB'] . "',\"horaP\"='". $_REQUEST['horaP'] . "',\"dataP\"='" .$_REQUEST['dataP']."',\"rodadaP\"='" . $_REQUEST['rodadaP'] . "' where \"id\"='" . $_REQUEST['id'] . "'; ";

$resultado = $conexao->exec($sql);

unset($conexao);
if ($resultado) {
?>
<p>Editado com sucesso.</p>
<script>
setTimeout(function() {
    window.location.assign('lista_partida.php');
}, 2000);
</script>
<?php
} else {
?>
<p>Erro ao editar.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}