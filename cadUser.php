<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="content" style="width: 50%">
    <form action="insereUsuario.php" method="get">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome">

            <label for="exampleInputEmail1">CPF</label>
            <input type="text" class="form-control" name="cpf">

            <label for="exampleInputEmail1">telefone</label>
            <input type="text" class="form-control" name="telefone">

            <label for="exampleInputEmail1">Senha</label>
            <input type="password" class="form-control" name="senha">
            <input type="hidden" name="nivel" value="1">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
