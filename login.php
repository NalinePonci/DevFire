<?php

require_once 'conexao.php';

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit;
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, md5($_POST['senha']));


$verifica = "SELECT * FROM usuario WHERE email ='$email' 
AND senha = '$senha'";
$verificaexec = mysqli_query($conexao, $verifica);

if (mysqli_num_rows($verificaexec) <= 0) {
    echo "
        <script> 
            alert('Login ou senha incorreto');
            location.href='index.php';
        </script>
";
    die();
} else {
    echo "
        <script>
            alert('Logado com sucesso');
            location.href = 'pubc.php';
        </script>
    ";
    $idUsuario = "SELECT * FROM usuario WHERE email = '$email'";
    $idUsuario = mysqli_query($conexao, $idUsuario);
    $dados = mysqli_fetch_array($idUsuario);

    $_SESSION['logadoOk'] = 1;
    $_SESSION['dadosUser'] = $dados;
}
