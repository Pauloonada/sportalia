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
        $busca = $_SESSION['user'];
        $query = "select * from usuarios where nome = '$busca'";
        $users = mysqli_query($mysqli, $query);

        if (!$users){
            die("Erro na consulta: " . mysqli_error($mysqli));
        }

        $user = mysqli_fetch_assoc($users);

        $busca = $user['id'];
        $query = "select * from membros where usuario_id = $busca";
        $membro = mysqli_query($mysqli, $query);

        if (!$membro){
            die("Erro na consulta: " . mysqli_error($mysqli));
        }

        if (mysqli_num_rows($membro) == 0){
            echo '<p>Parece que você ainda não é um membro, deseja se <a href="inscrever.php">inscrever</a>?</p>';
        }

        if($_SESSION['user'] == 'admin'){
            echo '<p><a href="tables.php">ACESSAR BANCO DE DADOS</a></p>';
        }
    ?>
    <a href="sair.php">desconectar</a>
    <p><a href="index.php">Voltar a pagina inicial</a></p>
</body>
</html>