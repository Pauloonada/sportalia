<?php
    $user = 'root';
    $pass = '';
    $database = 'sportalia';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $pass, $database);

    if($mysqli->error){
        die("Erro ao se conectar ao banco de dados" . $mysqli->error);
    }

    else{
        echo 'Conectado com sucesso';
    }
?>