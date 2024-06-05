<?php
include_once('connection.php');


$sql = "update partida set timea= " . $_REQUEST['timeA']
    . "',timeb= '" . $_REQUEST['timeB']
    . "',golstimea= '" . $_REQUEST['golstimeA']
    . "',golstimeb= '" . $_REQUEST['golstimeB']
    . "',horap= '" . $_REQUEST['horaP']
    . "',datap= '" . $_REQUEST['dataP']
    . "',rodadap='" . $_REQUEST['rodadaP']
    . "'where id='" . $_REQUEST['id'];

$resultado = $conexao->query($sql);


unset($conexao);
if ($resultado) {
?>
<p>Inserido com sucesso.</p>
<script>
setTimeout(function() {
    window.location.assign('lista_partida.php');
}, 2000);
</script>
<?php
} else {
?>
<p>Erro ao inserir.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}