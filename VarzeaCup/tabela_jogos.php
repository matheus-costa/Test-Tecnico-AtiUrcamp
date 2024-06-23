<?php

$sql = "SELECT * FROM public.partida;";
//$times = '(SELECT id, "timeA" AS time FROM public.partida UNION ALL SELECT id, "timeB" AS time FROM public.partida);';
//UNION ALL SELECT \"id\"='".$_REQUEST['id']."', \"timeB\"='".$REQUEST['timeB'].          '; "; 
//SELECT id, "timeA" AS time FROM public.partida; UNION ALLSELECT id, "timeB" AS time FROM public.partida;


//. "'; ";
//UPDATE partida SET \"timeA\"='" . $_REQUEST['timeA'] . "',\"timeB\"='" . $_REQUEST['timeB'] .
$conexao = new PDO('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres;password=141222001');


$resultado = $conexao->query($sql)->fetchAll();
//$rtimes = $conexao->query($times);
unset($conexao);
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
	require 'menu.php';
	?>
    <form id="busca">
        <p>
            <input type="text" name="busca" autocomplete="off" />
            <button type="submit" formmethod="post" formaction="lista_partida.php">Buscar</button>
        </p>
    </form>
    <table border="1">
        <tr>
            <td>#</td>
            <td>clube</td>
            <td>Pontos</td>
            <td>Partidas Jogadas</td>
            <td>Vitórias</td>
            <td>Empates</td>
            <td>Derrotas</td>
            <td>Gols Marcados</td>
            <td>Gols Sofridos</td>
            <td>Saldo de Gols</td>

        </tr>
        <?php
		foreach ($resultado as $tupla) {
		?>
        <tr>
            <td><?php print $tupla['id']; ?></td>
            <td><?php print $tupla['timeA']; ?></td>
            <td><?php print $tupla['timeB']; ?></td>
            <td><?php print $tupla['golstimeA']; ?></td>
            <td><?php print $tupla['golstimeB']; ?></td>
            <td><?php print $tupla['null']; ?></td>
            <td><?php print $tupla['null']; ?></td>
            <td><?php print $tupla['null']; ?></td>
            <td><?php print $tupla['null']; ?></td>
            <td><?php print $tupla['null']; ?></td>
        </tr>
        <?php
		}
		?>
    </table>
</body>

</html>