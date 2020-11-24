<?php 
    include '../header.php'; ?>
    <div class="form-container flex-column">
        <form class="flex-column" method='post' action='../controller/medico-controller.php'>
            <h1>Cadastro de médico</h1>
            <label for ="nome">Nome</label>
            <input type='text' name='nome' placeholder='Insira o nome do profissional' required/>
            <label for ="email">E-mail</label>
            <input type='text' name='email' placeholder='exemplo@dominio.com.br' required/>
            <label for ="senha">Senha</label>
            <input type='password' name='senha' placeholder='Escolha um senha forte e segura' required/>
            <button class="button" type='submit' name='cadastra'>Realizar cadastro</button>
        </form>

        <a href='../index.php'>Voltar para a Página Inicial</a>
    </div>
</div>
</body>
</html>