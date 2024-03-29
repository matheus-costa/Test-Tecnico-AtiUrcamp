<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php
		require 'menu.php';
?>
		<form id="cadastropartida">
			<p><input type="text" name="timeA" placeholder="Nome do primeiro time" autocomplete="off" /></p>
			<p><input type="text" name="timeB" placeholder="Nome do segundo time" autocomplete="off" /></p>

			<p><input type="text" name="golstimeA" placeholder="Gols marcados pelo primeiro time" autocomplete="off" /></p>
			<p><input type="text" name="golstimeB" placeholder="Gols marcados pelo segundo time" autocomplete="off" /></p>

			<p><button type="submit" form="cadastro" formaction="inserir_partida.php" formmethod="post">Cadastrar</button></p>
		</form>
	</body>
</html>
