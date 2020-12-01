<style>
    .login-wrap{
        width:320px;
        margin: 0 auto;
        margin-top:100px;
        border:1px solid #eee;
        padding:15px;
        background: #f8f8f8;
        border-radius: 4px;
    }

    .form-group.last { margin-bottom:0px; }
</style>

<div class="container">
    <div class="row">
        <div class="login-wrap">
            <form class="form-horizontal" role="form" action="loga.php" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">
                        Usuário</label>
                    <div class="col-sm-9">
                        <input type="text" name="login" class="form-control" id="inputUser" placeholder="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">
                        Senha</label>
                    <div class="col-sm-9">
                        <input type="password" name="senha" class="form-control" id="inputPsw" placeholder="" required>
                    </div>
                </div>

                <div class="form-group">
                    <a href="cadUser.php">Criar usuário</a>
                </div>
                <div class="form-group last">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success btn-sm">
                           Login</button>
                        <button type="reset" class="btn btn-default btn-sm">
                            Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>