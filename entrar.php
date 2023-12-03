<?php 
    include('connection.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo 'Preencha seu email';
        }

        else if(strlen($_POST['password']) == 0){
            echo 'Preencha sua senha';
        }

        else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);

            $code = "select * from usuarios where email = '$email' and senha = '$password'";
            $query = $mysqli->query($code) or die("Falha na execução do código SQL: $mysqli->error");

            $quantity = $query->num_rows;

            if($quantity == 1){
                $user = $query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['user'] = $user['nome'];
                
                echo'<script>alert(\'conectado com sucesso!\')</script>';

                header("Location: index.php");
            }

            else{
                echo 'Falha ao logar! E-mail ou senha incorretos';
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
    <h1>Entrar</h1>
    <form action="" method="post">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>

        <p>
            <label>Senha</label>
            <input type="password" name="password">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

    <br>
    <p>Não tem uma conta? Crie a sua <a href="criar.php">aqui</a>
	<br><br>
    <footer>
        <p>&copy; 2023 Clube Sportalia</p>
    </footer>
</body>
</html>