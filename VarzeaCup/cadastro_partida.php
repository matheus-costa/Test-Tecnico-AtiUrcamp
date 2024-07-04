<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        require 'menu.php';
        ?>
    <form id="cadastrapartida" action="config/inserir_partida.php">
        <p>Nome do Primeiro Time:<input type="text" name="timeA" placeholder="Nome do primeiro time"
                autocomplete="off" /></p>
        <p>Nome do Segundo Time: <input type="text" name="timeB" placeholder="Nome do segundo time"
                autocomplete="off" /></p>

        <p>Gols do Primeiro Time: <input type="number" name="golstimeA" placeholder="Gols marcados pelo primeiro time"
                autocomplete="off" /></p>
        <p>Gols do Segundo Time: <input type="number" name="golstimeB" placeholder="Gols marcados pelo segundo time"
                autocomplete="off" /></p>

        <p>Horário da Partida: <input type="time" name="horaP" placeholder="Horário da partida" autocomplete="off" />
        </p>
        <p>Data da Partida: <input type="date" name=" dataP" placeholder="Data da partida" autocomplete="off" /></p>

        <p>Rodada da Partida: <input type="number" name="rodadaP" placeholder="Rodada da Partida" autocomplete="off" />
        </p>

        <button type="submit">Cadastrar Partida</button>
    </form>
</body>

</html>