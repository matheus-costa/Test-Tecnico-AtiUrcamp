<?php
	$sql = "update partida set timeA = '".$_REQUEST['timeA']
	."',
	timeB = '".$_REQUEST['timeB']."',
	golstimeA = '".$_REQUEST['golstimeA']
	."',
	golstimeB = '".$_REQUEST['golstimeB']
	."',
	horaP = '".$_REQUEST['horaP'].
	"',
	dataP = '".$_REQUEST['dataP'].
	"',
	rodadaP = '".$_REQUEST['rodadaP']."',
	where id = '".$_REQUEST['id']."' ";

	$conexao = new pdo ('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres; password=14122001');
	$resultado = $conexao->exec($sql);
	unset($conexao);
	if ( $resultado ) {
?>
		<p>Alterado com sucesso.</p>
		<script> setTimeout( function() { window.location.assign('lista_partida.php'); }, 2000); </script>
<?php
	} else {
?>
		<p>Erro ao remover.</p>
		<script> setTimeout( function() { window.history.back(); }, 2000); </script>
<?php
	}
