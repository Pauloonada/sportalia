<?php 
    require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABELAS ADMIN</title>
</head>
<body>

    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Membros</h1>
    <?php foreach(getMembros($mysqli) as $membro): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $membro['id'] ?></p>
            <p>usuario_id: <?php echo $membro['usuario_id'] ?></p>
            <p>nome: <?php echo $membro['nome'] ?></p>
            <p>idade: <?php echo $membro['idade'] ?></p>
            <p>endereço: <?php echo $membro['endereco'] ?></p>
            <p>telefone: <?php echo $membro['telefone'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br>
    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Esportes</h1>
    <?php foreach(getEsportes($mysqli) as $esporte): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $esporte['id'] ?></p>
            <p>nome: <?php echo $esporte['nome'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br>
    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Equipes</h1>
    <?php foreach(getEquipes($mysqli) as $equipe): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $equipe['id'] ?></p>
            <p>nome: <?php echo $equipe['nome'] ?></p>
            <p>esporte_id: <?php echo $equipe['esporte_id'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br>
    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Eventos</h1>
    <?php foreach(getEventos($mysqli) as $evento): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $evento['id'] ?></p>
            <p>nome: <?php echo $evento['nome'] ?></p>
            <p>data: <?php echo $evento['data'] ?></p>
            <p>local: <?php echo $evento['local'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br>
    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Inscrições</h1>
    <?php foreach(getInscricoes($mysqli) as $inscricao): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $inscricao['id'] ?></p>
            <p>membro_id: <?php echo $inscricao['membro_id'] ?></p>
            <p>equipe_id: <?php echo $inscricao['equipe_id'] ?></p>
            <p>evento_id: <?php echo $inscricao['evento_id'] ?></p>
            <p>data de inscrição<?php echo $inscricao['data_inscricao'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br>
    <div style="background-color:black; border-radius: 10px; padding: 30px">
        <h1 style="color: white;" align="center">Usuários</h1>
    <?php foreach(getUsuarios($mysqli) as $user): ?>
        <div align="center" style="background-color:aliceblue; padding: 5px; border-radius: 30px; margin: 20px">
            <p>id: <?php echo $user['id'] ?></p>
            <p>nome: <?php echo $user['nome'] ?></p>
            <p>email: <?php echo $user['email'] ?></p>
            <p>senha: <?php echo $user['senha'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
    <br><br><br>

    <style>
        footer {
	        position: fixed;
	        bottom: 0;
	        width: 100%;
	        background-color: red;
	        padding: 10px;
	        text-align: center;
        }
    </style>
    <footer>
    <p>
        <a href="perfil.php" style="text-decoration: none; color:white">Voltar ao perfil</a>
    </p>
    </footer>
</body>
</html>