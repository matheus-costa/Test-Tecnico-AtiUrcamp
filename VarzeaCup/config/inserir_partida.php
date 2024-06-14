<?php

$sql = " insert into partida values (default, '" .
    $_REQUEST['timeA'] . "', '" .
    $_REQUEST['timeB'] . "', '" .
    $_REQUEST['golstimeA'] . "', '" .
    $_REQUEST['golstimeB'] . "', '" .
    $_REQUEST['horaP'] . "', '" .
    $_REQUEST['dataP'] . "', '" .
    $_REQUEST['rodadaP'] .
    "' ); ";

var_dump($sql);

$conexao = new PDO('pgsql:host=localhost;port=5432;dbname=varzeacup;user= postgres; password=postgres');

$resultado = $conexao->exec($sql);
unset($conexao);


if ($resultado) {
?>
<p>Inserido com sucesso.</p>
<script>
setTimeout(function() {
    window.location.assign('lista_partida.php');
}, 2000);
</script>
<?php
} else {
?>
<p>Erro ao inserir.</p>
<script>
setTimeout(function() {
    window.history.back();
}, 2000);
</script>
<?php
}