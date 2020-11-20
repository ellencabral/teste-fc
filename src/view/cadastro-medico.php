<?php include ('../header.php'); ?>

    <h1>Cadastro de médico</h1>

    <form method='post' action='../controller/medico-controller.php'>
        Nome
        <input type='text' name='nome' placeholder='Insira o nome do profissional'/>
        E-mail
        <input type='text' name='email' placeholder='exemplo@dominio.com.br'/>
        Senha
        <input type='password' name='senha' placeholder='Escolha um senha forte e segura'/>
        <button type='submit' name='cadastro'>Realizar cadastro</button>
    </form>

    <a href='../index.php'>Voltar para a Página Inicial</a>
</body>
</html>