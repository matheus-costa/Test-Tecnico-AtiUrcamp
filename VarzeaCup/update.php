<?php

#update aluno set cpf = '"+cpf+"', nome = '"+nome+"', curso = '"+curso+"', ensinomedio = '', datahora = date('now') where  id = '" + id + "'; "      
$sql = "UPDATE partida SET \"timeA\"='" . $_REQUEST['timeA'] . "',\"timeB\"='" . $_REQUEST['timeB'] . "',\"golstimeA\"='" . $_REQUEST['golstimeA'] . "',\"golstimeB\"='" . $_REQUEST['golstimeB'] . "',\"horaP\"=null,\"dataP\"=null,\"rodadaP\"='" . $_REQUEST['rodadaP'] . "' where \"id\"='" . $_REQUEST['id'] . "'; ";

$conexao = new pdo('pgsql:host=localhost;port=5432;dbname=varzeacup;user=postgres; password=postgres');

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