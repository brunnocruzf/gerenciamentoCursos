<?php
session_start();

$nivel = $_SESSION['nivel'];
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="listaCursos.php">Gerenciamento de Cursos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <?php if ($nivel == 1):?>
                <li class="nav-item active">
                    <a class="nav-link" href="listaCursos.php">Cursos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="meusCursos.php">Meus Cursos<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="certificados.php">Certificados<span class="sr-only">(current)</span></a>
                </li>
            <?php endif;?>
            <?php if($nivel == 2):?>
                <li class="nav-item active">
                    <a class="nav-link" href="cadCurso.php">Cadastrar Cursos<span class="sr-only">(current)</span></a>
                </li>
            <?php endif; ?>
            <li class="nav-item active">
                <a class="nav-link" href="Logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>