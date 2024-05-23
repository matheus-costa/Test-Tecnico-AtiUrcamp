<?php
	$sql = " delete from partida where id = '" . $_REQUEST['id'] . "' ";
	$conexao = new pdo ('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres; password=14122001');
	$resultado = $conexao->exec($sql);
	unset($conexao);
	if ( $resultado ) {
?>
		<p>Removido com sucesso.</p>
		<script> setTimeout( function() { window.location.assign('lista_partida.php'); }, 2000); </script>
<?php
	} else {
?>
		<p>Erro ao remover.</p>
		<script> setTimeout( function() { window.history.back(); }, 2000); </script>
<?php
	}
