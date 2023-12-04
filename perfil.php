<?php 
    include('connection.php');

    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu perfil</title>
</head>
<body>
    <p>Seja bem vindo ao seu perfil, <?php echo $_SESSION['user']?></p>

    <?php
        if($_SESSION['user'] == 'admin'){
            echo '<p><a href="tables.php">ACESSAR BANCO DE DADOS</a></p>';
        }
    ?>
    <a href="sair.php">desconectar</a>
</body>
</html>