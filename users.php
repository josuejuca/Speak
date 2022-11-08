<?php
require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';
$usuarioDAO  = new UsuarioDAO;
$pesquisa = $usuarioDAO->Pesquisar();
//var_dump($pesquisa);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários - Speak</title>
  <!-- Bootstrap CSS -->
  <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://webpixels.io/vendor/icons/css/all.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-dark bg-primary border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
      <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="logo navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
          <img src="https://src-juca.netlify.app/web/php/speak/img/speak_logo.png" class="h-20" alt="...">
        </a>
        <div class="collapse navbar-collapse" id="sidebarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="bi bi-people"></i> Usuários
              </a>
            </li>
          </ul>
          <hr class="navbar-divider my-5 opacity-20">
        </div>
    </nav>
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
          <div class="mb-npx">
            <div class="row align-items-center">
              <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                <h1 class="h2 mb-0 ls-tight">Usuários</h1>
              </div>
              <div class="col-sm-6 col-12 text-sm-end">
                <div class="mx-n1">
                  <a href="#" class="btn d-inline-flex btn-sm btn-neutral mx-1">
                    <span class=" pe-2">
                      <i class="bi bi-pencil"></i>
                    </span>
                    <span>Editar</span>
                  </a>
                  <a href="cadastro.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                    <span class=" pe-2">
                      <i class="bi bi-plus"></i>
                    </span>
                    <span>Criar</span>
                  </a>
                </div>
              </div>
            </div>
            <ul class="nav nav-tabs mt-4 overflow-x border-0">
              <li class="nav-item ">
                <a href="#" class="nav-link active">Todos os usuários</a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
          <div class="card mb-7">
            <div class="card-header">
              <h5 class="mb-0">Usuários</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-nowrap">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Nome do usuário</th>
                    <th scope="col">ID do usuário</th>
                    <th scope="col">E-mail do usuário</th>
                    <th scope="col">Login do usuário</th>
                    <th scope="col">Tipo de usuário</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // echo '<tbody>';

                  foreach ($pesquisa as $p) {
                    echo '<tr>';

                    //echo"{$p["idUsuario"]}{$p["nome"]}{$p["email"]}{$p["login"]}{$p["idPerfil"]}AletarApagar";

                    echo " <td scope='row'><a class='text-heading font-semibold' href='#'>  {$p["nome"]} </a></td>";
                    echo "<td>  {$p["idUsuario"]} </td>";
                    echo "<td> {$p["email"]} </td>";
                    echo "<td> {$p["login"]} </td>";
                    echo "<td> {$p["idPerfil"]} </td>";
                    echo "<td class='text-end'><a href='#' class='btn btn-sm btn-neutral'>Alterar </a><button type='button' title='Apagar' class='btn btn-sm btn-square btn-neutral text-danger-hover'><i class='bi bi-trash'></i></button></td>";
                    echo '</tr>';
                  }
                  // echo '</tbody>';
                  ?>

                </tbody>
              </table>
            </div>
            <div class="card-footer border-0 py-5">
              <span class="text-muted text-sm">Vencemo!</span>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>