<?php

$sql = "SELECT * FROM partida;";

$qtd_gols_sofridos_timeb = "SELECT \"golstimeA\"='" . $_REQUEST['golstimeA'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timea = "SELECT \"golstimeB\"='" . $_REQUEST['golstimeB'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$saldo_gols_timeb = "SELECT \"golstimeB\"='" . $_REQUEST['golstimeB'] . "-" . "\golstimeA\"='" . $_REQUEST['golstimeA'] . '" FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$saldo_gols_timea = "SELECT \"golstimeA\"='" . $_REQUEST['golstimeA'] . "-" . "\golstimeB\"='" . $_REQUEST['golstimeB'] . '" FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timeb = "SELECT \"timeB\"='" . $_REQUEST['timeB'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timea = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$empate = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . "',\timeB\"='" . $_REQUEST['timeB'] . "',\golstimeA\"='" . $_REQUEST['golstimeA'] . "',\golstimeB\"='" . $_REQUEST['golstimeB'] . "'FROM partida WHERE \"golstimeA\"='" . $_REQUEST['golstimeA'] . "';";
$timeb_venceu = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . "',\timeB\"='" . $_REQUEST['timeB'] . "',\golstimeA\"='" . $_REQUEST['golstimeA'] . "',\golstimeB\"='" . $_REQUEST['golstimeB'] . "'FROM partida WHERE \"golstimeB\"='" . $_REQUEST['golstimeB'] . ">" . "\"golstimeA\"='" . $_REQUEST['golstimeA'] . ";";
$timea_venceu = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . "',\timeB\"='" . $_REQUEST['timeB'] . "',\golstimeA\"='" . $_REQUEST['golstimeA'] . "',\golstimeB\"='" . $_REQUEST['golstimeB'] . "'FROM partida WHERE \"golstimeA\"='" . $_REQUEST['golstimeA'] . ">" . "\golstimeB\"='" . $_REQUEST['golstimeB'] . "';";

require_once('config/connection.php');

$resultado = $conexao->query($sql)->fetchAll();

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
            <td><?php print $tupla['horaP']; ?></td>
            <td><?php print $tupla['dataP']; ?></td>
            <td><?php print $tupla['rodadaP']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>