<?php 
    include('connection.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo 'digite um e-mail';
        }

        else if(strlen($_POST['password']) == 0){
            echo 'digite uma senha';
        }

        else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $user = $mysqli->real_escape_string($_POST['user']);
            $password = $mysqli->real_escape_string($_POST['password']);
            $confirm_password = $mysqli->real_escape_string($_POST['confirm-password']);

            $duplicate = mysqli_query($mysqli, "select * from usuarios where email = '$email' or nome = '$user'");
            if(mysqli_num_rows($duplicate) > 0){
                echo '<script> alert(\'Email ou usuário já cadastrado\'); </script>';
            }
            else{
                if($password == $confirm_password){
                    $query = "insert into usuarios(nome, email, senha) values('$user', '$email', '$password')";
                    mysqli_query($mysqli, $query);

                    echo '<script> alert(\'Cadastrado com sucesso\'); window.location.href = "index.php"; </script>';
                }

                else{
                    echo '<script> alert(\'As senhas preenchidas não são a mesma\');</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clube Socio Esportivo Sportalia</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Criar uma conta</h1>
    <form action="" method="post">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>

        <p>
            <label>Usuário</label>
            <input type="text" name="user">
        </p>

        <p>
            <label>Senha</label>
            <input type="password" name="password">
        </p>

        <p>
            <label>Confirmar senha</label>
            <input type="password" name="confirm-password">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

    <br>
    <p>Já tem uma conta? Entre <a href="entrar.php">aqui</a>
	<br><br>
    <footer>
        <p>&copy; 2023 Clube Sportalia</p>
    </footer>
</body>
</html>