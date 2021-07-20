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
            <?php  if ($nivel == 1):?>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" ">
                        <a class="dropdown-item" href="cadCurso.php">Cadastrar Curso</a>
                        <a class="dropdown-item" href="deletaCurso.php">Deletar Curso</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cadAdmin.php">Cadastrar Administrador<span class="sr-only">(current)</span></a>
                </li>
            <?php endif; ?>
        </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active" >
                <a class="nav-link" href="Logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </ul>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>