<!DOCTYPE html>
<html lang="pt-br">
<?php include '../config.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de médicos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>model/css/style.css">
</head>
<body>
    <h1>Cadastro de médico</h1>

    <form method='post' action='../controller/medico-controller.php'>
        <input type='text' name='nome' placeholder='Insira o nome do profissional'/>
        <input type='text' name='email' placeholder='exemplo@dominio.com.br'/>
        <input type='password' name='senha' placeholder='Escolha um senha forte e segura'/>
        <button type='submit' name='cadastro'>Realizar cadastro</button>
    </form>
</body>
</html>