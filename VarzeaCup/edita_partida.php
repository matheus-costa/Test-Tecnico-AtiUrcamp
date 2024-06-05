<?php
include_once('config/connection.php');

$sql2 = "select * from partida where id = " . $_REQUEST['id'] . "";
//$_REQUEST['id'] é um valor do PHP, por isso faço a concatenação para juntar com a consulta que é um SQL

$resultado3 = [];

$resultado2 = $conexao->query($sql2);
$resultado3 = $resultado2->fetch(); //resultado2 vai faz parte da exibição das variáveis
unset($conexao);
//$resultado = $conexao->query($sql)->fetchAll();

if ($resultado2) {
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="editapartida" method="POST" action="config/update.php">
        <p>Nome do Primeiro Time:<input type="text" name="timeA" value="<?= $resultado3['timea'] ?>" />
        </p>
        <p>Nome do Segundo Time: <input type="text" name="timeB" value="<?= $resultado['timeb'] ?>" />
        </p>

        <p>Gols do Primeiro Time: <input type="number" name="golstimeA" value="<?= $resultado['golstimea'] ?>" />
        </p>
        <p>Gols do Segundo Time: <input type="number" name="golstimeB" value="<?= $resultado['golstimeb'] ?>" />
        </p>

        <p>Horário da Partida: <input type="time" name="horaP" value="<?= $resultado['horap'] ?>" />
        </p>
        <p>Data da Partida: <input type="date" name="dataP" value="<?= $resultado['datap'] ?>" />
        </p>

        <p>Rodada da Partida: <input type="number" name="rodadaP" value="<?= $resultado['rodadap'] ?>" />
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>

</html>

<?php
}