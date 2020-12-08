<?php
include('menu.php');
?>
<div class="content" style="margin-left:3%;width: 30%">
    <form action="insereCurso.php" method="get">
        <label for="exampleInputEmail1">Nome</label>
        <input required type="text" class="form-control" name="curso">

        <label for="exampleInputEmail1">Descrição do curso</label>
        <input required type="text" class="form-control" name="descCurso">

        <label for="exampleInputEmail1">Quantidade de aulas</label>
        <input required type="number" class="form-control" name="qntdeAulas">

        <button style="margin-top: 14px;" type="submit" class="btn btn-primary">Cadastrar Aulas</button>
    </form>
</div>
