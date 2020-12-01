<?php
include('menu.php');
?>
<div class="content" style="width: 50%">
    <form action="insereCurso.php" method="get">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="curso">

        <label for="exampleInputEmail1">Quantidade de aulas</label>
        <input type="number" class="form-control" name="qntdeAulas">

        <button type="submit" class="btn btn-primary">Cadastrar Aulas</button>
    </form>
</div>
