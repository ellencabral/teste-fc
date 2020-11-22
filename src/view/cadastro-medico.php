<?php include ('../header.php'); ?>

    <h1>Cadastro de médico</h1>

    <form method='post' action='../controller/medico-controller.php'>
        Nome
        <input type='text' name='nome' placeholder='Insira o nome do profissional' required/>
        E-mail
        <input type='text' name='email' placeholder='exemplo@dominio.com.br' required/>
        Senha
        <input type='password' name='senha' placeholder='Escolha um senha forte e segura' required/>
        <button type='submit' name='cadastra'>Realizar cadastro</button>
    </form>

    <a href='../index.php'>Voltar para a Página Inicial</a>
</body>
</html>