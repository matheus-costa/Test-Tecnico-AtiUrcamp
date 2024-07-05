<?php
require_once('config/connection.php');

$sql = "SELECT * FROM partida;";

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
            <td>Time A</td>
            <td>Time B</td>
            <td>Gols do Time A</td>
            <td>Gols do Time B</td>
            <td>Hora da Partida</td>
            <td>Data da Partida</td>
            <td>Rodada da Partida</td>
            <td>Remover</td>
            <td>Editar</td>
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

                <td><a href="exclui_partida.php?id=<?php print $tupla['id']; ?>"> X </a></td>
                <td><a href="edita_partida.php?id=<?php print $tupla['id']; ?>"> Y </a></td>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>