<?php
$timeb =  $_REQUEST['timeB'];
$golstimea =  $_REQUEST['golstimeA'];
$golstimeb = $_REQUEST['golstimeB'];
$horap = $_REQUEST['horaP'];
$datap =  $_REQUEST['dataP'];
$rodadap = $_REQUEST['rodadaP'];
$id = $_REQUEST['id'];
      
$sql = "UPDATE partida SET  timea = " . $_REQUEST['timeA'].
      ",timeb= " . $_REQUEST['timeB'] . 
      ",golstimea= " . $_REQUEST['golstimeA'] . 
      ",golstimeb= " . $_REQUEST['golstimeB'] . 
      ",horap= " . $_REQUEST['horaP'] . 
      ",datap=" . $_REQUEST['dataP'] . 
      ",rodadap=" . $_REQUEST['rodadaP'] . 
      "where id=" . $_REQUEST['id'];
$conexao = new PDO('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres; password=postgres');

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
<p>Erro ao editar.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}