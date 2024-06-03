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
        <p>Nome do Primeiro Time:<input type="text" name="timeA" value="<?= $resultado3['timea']?>"
                autocomplete="off" /></p>
        <p>Nome do Segundo Time: <input type="text" name="timeB" placeholder="Nome do segundo time"
                autocomplete="off" /></p>

        <p>Gols do Primeiro Time: <input type="number" name="golstimeA" placeholder="Gols marcados pelo primeiro time"
                autocomplete="off" /></p>
        <p>Gols do Segundo Time: <input type="number" name="golstimeB" placeholder="Gols marcados pelo segundo time"
                autocomplete="off" /></p>

        <p>Horário da Partida: <input type="time" name="horaP" placeholder="Horário da partida" autocomplete="off" />
        </p>
        <p>Data da Partida: <input type="date" name="dataP" placeholder="Data da partida" autocomplete="off" /></p>

        <p>Rodada da Partida: <input type="number" name="rodadaP" placeholder="Rodada da Partida" autocomplete="off" />
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>

</html>

<?php
} else {
?>
<p>Erro ao alterar.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}