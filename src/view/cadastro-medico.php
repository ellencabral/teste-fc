<?php 
    include '../header.php'; ?>
    <div class="form-container flex-column">
        <form class="flex-column" name="cadastro-medico" method='post' onsubmit="return validaForm()" action='../controller/medico-controller.php'>
            <h1>Cadastro de médico</h1>
            <label for ="nome">Nome</label>
            <input class="campo" type='text' name='nome' placeholder='Insira o nome do profissional' />
            <div class='mensagem'></div>

            <label for ="email">E-mail</label>
            <input class="campo" type='text' name='email' placeholder='exemplo@dominio.com.br' />
            <div class='mensagem'></div>

            <label for ="senha">Senha</label>
            <input class="campo" type='password' name='senha' placeholder='Escolha um senha forte e segura' />
            <div class='mensagem'></div>
            
            <button class="button" type='submit' name='cadastra'>Realizar cadastro</button>
        </form>

        <a href='../index.php'>Voltar para a Página Inicial</a>
    </div>
</div>
</body>
</html>