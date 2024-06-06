<?php
include_once('connection.php');
$data = $_POST;

$timea = $data["name"];
$timeb = $data["phone"];
$observations = $data["observations"];
$id = $data["id"];

#$sql = "UPDATE partida SET timea= ".$_REQUEST['timeA']."',timeb= '".$_REQUEST['timeB']."',golstimea= '".$_REQUEST['golstimeA']."',golstimeb= '".$_REQUEST['golstimeB']."',horap= '". $_REQUEST['horaP']."',datap='".$_REQUEST['dataP']."',rodadap='".$_REQUEST['rodadaP']."'where id='".$_REQUEST['id'];
$sql = "UPDATE partida SET timea = :timea. ";
#$query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";
#: é usado em variáveis que veem do banco
$resultado = $conexao->query($sql);



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
<p>Erro ao inserir.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}