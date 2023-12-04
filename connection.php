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

    function getMembros($conn){
        $sql = 'select * from membros';
        $result = mysqli_query($conn, $sql);
        $members = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $members;
    }

    function getEsportes($conn){
        $sql = 'select * from esportes';
        $result = mysqli_query($conn, $sql);
        $sports = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $sports;
    }

    function getEquipes($conn){
        $sql = 'select * from Equipes';
        $result = mysqli_query($conn, $sql);
        $teams = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $teams;
    }

    function getEventos($conn){
        $sql = 'select * from eventos';
        $result = mysqli_query($conn, $sql);
        $events = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $events;
    }

    function getInscricoes($conn){
        $sql = 'select * from inscricoes';
        $result = mysqli_query($conn, $sql);
        $subs = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $subs;
    }

    function getUsuarios($conn){
        $sql = 'select * from usuarios';
        $result = mysqli_query($conn, $sql);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $users;
    }
?>