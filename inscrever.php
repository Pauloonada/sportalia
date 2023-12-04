<?php
    require('connection.php');

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST)){
        if(strlen($_POST['nome']) == 0){
            echo 'preencha seu nome';
        }

        else if(strlen($_POST['idade']) == 0){
            echo 'preencha sua idade';
        }

        else if(strlen($_POST['endereco']) == 0){
            echo 'preencha seu endereço';
        }

        else if(strlen($_POST['telefone']) == 0){
            echo 'preencha seu telefone';
        }

        else{
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $idade = $_POST['idade'];
            $endereco = $mysqli->real_escape_string($_POST['endereco']);
            $telefone = $mysqli->real_escape_string($_POST['telefone']);

            $query = "select * from membros where telefone = '$telefone'";
            $duplicate = mysqli_query($mysqli, $query);
            if(mysqli_num_rows($duplicate) > 0){
                echo '<script> alert(\'Telefone já cadastrado\') </script>';
            }

            else{
                $busca = $_SESSION['user'];
                $query = "select id from usuarios where nome = '$busca'";
                $usuario = mysqli_fetch_row(mysqli_query($mysqli, $query));
                $usuarioid = $usuario['0'];

                $query = "insert into membros(usuario_id, nome, idade, endereco, telefone) values('$usuarioid', '$nome', '$idade', '$endereco', '$telefone')";
                mysqli_query($mysqli, $query);

                echo '<script> alert(\'Cadastrado com sucesso\'); window.location.href = "perfil.php"; </script>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrever-se</title>
</head>
<body>
    <h1>Inscrever-se</h1>
    <form action="" method="post">
        <p>
            <label>Nome</label>
            <input type="text" name="nome">
        </p>

        <p>
            <label>Idade</label>
            <input type="number" name="idade" min="14" max="100">
        </p>

        <p>
            <label>Endereço</label>
            <input type="text" name="endereco">
        </p>

        <p>
            <label>Telefone</label>
            <input type="tel" name="telefone">
        </p>

        <p>
            <button type="submit">Inscrever</button>
        </p>
    </form>
</body>
</html>