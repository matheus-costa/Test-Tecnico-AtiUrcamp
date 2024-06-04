<?php
include_once('connection.php');

$sql = "update partida set timea = '" . $_REQUEST['timeA'] . "',timeb = '" . $_REQUEST['timeB'] . "',golstimea = '" . $_REQUEST['golstimeA'] . "',golstimeb = '" . $_REQUEST['golstimeB'] . "', horap= '" . $_REQUEST['horaP'] . "', datap='" . $_REQUEST['dataP'] . "',rodadap='" . $_REQUEST['rodadaP'].'" where id = 3"';

$resultado = $conexao->query($sql);