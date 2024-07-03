<?php

$sql = "SELECT * FROM public.partida;";
//$times = "SELECT \"id\"='".$_REQUEST['id']."',\"timeA\"='".$_REQUEST['timeA']."AS time FROM public.partida UNION ALL SELECT id, "timeB" AS time FROM public.partida);'; UNION ALL SELECT \"id\"='".$_REQUEST['id']."', \"timeB\"='".$REQUEST['timeB'].';. ";  SELECT id, "timeA" AS time FROM public.partida; UNION ALLSELECT id, "timeB" AS time FROM public.partida"."';

$qtd_gols_sofridos_timeb = "SELECT \"golstimeA\"='" . $_REQUEST['golstimeA'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timea = "SELECT \"golstimeB\"='" . $_REQUEST['golstimeB'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$saldo_gols_timeb = "SELECT \"golstimeB\"='" . $_REQUEST['golstimeB'] - "\golstimeA\"='" . $_REQUEST['golstimeA'] . '" FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$saldo_gols_timea = "SELECT \"golstimeA\"='" . $_REQUEST['golstimeA'] - "\golstimeB\"='" . $_REQUEST['golstimeB'] . '" FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timeb = "SELECT \"timeB\"='" . $_REQUEST['timeB'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$qtd_gols_sofridos_timea = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . '"FROM partida WHERE id = "' . $_REQUEST['id'] . "";
$empate = "SELECT \"timeA\"='" . $_REQUEST['timeA'] . "',\"timeB\"='" . $_REQUEST['timeB'] . "',\"golstimeA\"='" . $_REQUEST['golstimeA'] . "',\"golstimeB\"='" . $_REQUEST['golstimeB'] . "' FROM partida WHERE \"golstimeA\"='" . $_REQUEST['golstimeA'] . "';";
#$timeb_venceu = "select "timeA","timeB","golstimeA","golstimeB" from partida where "golstimeB" > "golstimeA";";
#$timea_venceu = "SELECT \"timeA\"='".$_REQUEST['timeA']. "',\"timeB\"='".$_REQUEST['timeB']."',\"golstimeA\"='".$_REQUEST['golstimeA']."',\"golstimeB\"='".$_REQUEST['golstimeB'].from partida where "\golstimeA\"='".$_REQUEST['golstimeA']. '>' ."\golstimeB\"='".$_REQUEST['golstimeB']. "'; ";
$sql = "UPDATE partida SET \"timeA\"='" . $_REQUEST['timeA'] . "',\"timeB\"='" . $_REQUEST['timeB'] . "',\"golstimeA\"='" . $_REQUEST['golstimeA'] . "',\"golstimeB\"='" . $_REQUEST['golstimeB'] . "',\"horaP\"='" . $_REQUEST['horaP'] . "',\"dataP\"='" . $_REQUEST['dataP'] . "',\"rodadaP\"='" . $_REQUEST['rodadaP'] .
    $sql = "select * from partida where id = " . $_REQUEST['id'] . "";
"' where \"id\"='" . $_REQUEST['id'] . "'; ";

$conexao = new PDO('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres;password=postgres');


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