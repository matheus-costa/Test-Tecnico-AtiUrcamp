<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php
		require 'menu.php';
//nome do time, pontuação, quantidade de partidas jogadas, quantidade de vitórias, empates e derrotas.

?>
		<form id="cadastrotime">
			<p><input type="text" name="nomeTime" placeholder="nome do time" autocomplete="off" /></p>

			<p><input type="text" name="pontuacaoTime" placeholder="Pontuação  do time " autocomplete="off" /></p>

			<p><input type="text" name="qntdPartidas" placeholder="quantidade de partidas jogadas" autocomplete="off" /></p>

			<p><input type="text" name="qntdvitorias" placeholder="quantidade de vitória" autocomplete="off" /></p>
            
            <p><input type="text" name="qntdempates" placeholder="quantidade de empates" autocomplete="off" /></p>

            <p><input type="text" name="qntdderrotas" placeholder="quantidade de derrotas" autocomplete="off" /></p>
			
			<p><button type="submit" form="cadastro" formaction="inserir_partida.php" formmethod="post">Cadastrar</button></p>
		</form>
	</body>
</html>
