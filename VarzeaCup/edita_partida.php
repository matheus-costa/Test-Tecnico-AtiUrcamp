<?php


$sql2 = "select * from partida where id = " . $_REQUEST['id'] . "";
$conexao = new PDO('pgsql:host=localhost;port=5432;dbname=varzeacup;user=postgres; password=postgres');
//$_REQUEST['id'] é um valor do PHP, por isso faço a concatenação para juntar com a consulta que é um SQL

$resultado3 = [];

$resultado2 = $conexao->query($sql2);
$resultado3 = $resultado2->fetch(); //resultado2 vai faz parte da exibição das variáveis
unset($conexao);

if ($resultado3) {
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="editapartida" method="POST" action="update.php?id=<?php print $_REQUEST['id']; ?>">
        <p>Nome do Primeiro Time:<input type="text" name="timeA" value="<?= $resultado3['timeA'] ?>" />
        </p>
        <p>Nome do Segundo Time: <input type="text" name="timeB" value="<?= $resultado3['timeB'] ?>" />
        </p>

        <p>Gols do Primeiro Time: <input type="number" name="golstimeA" value="<?= $resultado3['golstimeA'] ?>" />
        </p>
        <p>Gols do Segundo Time: <input type="number" name="golstimeB" value="<?= $resultado3['golstimeB'] ?>" />
        </p>

        <p>Horário da Partida: <input type="time" name="horaP" value="<?= $resultado3['horaP'] ?>" />
        </p>
        <p>Data da Partida: <input type="date" name="dataP" value="<?= $resultado3['dataP'] ?>" />
        </p>

        <p>Rodada da Partida: <input type="number" name="rodadaP" value="<?= $resultado3['rodadaP'] ?>" />
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>

</html>

<?php
}