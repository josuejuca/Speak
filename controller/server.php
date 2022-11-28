<?php
require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speak</title>
    <meta http-equiv="refresh" content="0; url=../view/users.php">
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);
        $idPerfil = $_POST["idPerfil"];

        if (($nome == "") or ( $email == "" ) or ($login == "") or ($senha == "") or ($idPerfil == ""))
        {
        echo "<script>";
        echo "alert ('Todas as opções devem ser marcadas!');";
        echo "window.location.href='../view/cadastro.php';";
        echo "</script>";
        }
        else
        {
            $usarioDTO = new UsuarioDTO;
           
            $usarioDTO ->setEmail($email);
            $usarioDTO ->setIdPerfil($idPerfil);
            $usarioDTO ->setLogin($login);
            $usarioDTO ->setNome($nome);
            $usarioDTO ->setSenha($senha);
           
            $usuarioDAO = new UsuarioDAO;
            $resutado = $usuarioDAO ->Gravar($usarioDTO);
        }
    ?>
</body>
</html>
