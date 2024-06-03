<?php
    include_once('connection.php');

    $sql = "update partida set timea = '".$_REQUEST['timeA']"', timeb='sl2',golstimea = 1, golstimeb=2, horap='12:12:10', datap='121212',rodadap=1 where id = 3"; //aqui eu recebo o ID de qual elemento vou alterar 
    $resultado = $conexao->query($sql);

?>