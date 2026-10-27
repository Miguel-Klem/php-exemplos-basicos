<?php
// Página de Perfil
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: 15d_login.php");
    exit();
}

$cor = $_SESSION['cor'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
</head>
<!-- Aqui a tag style ela define a cor de fundo e exibe com o echo a variavel $cor escolhida pelo Usuário -->
<body style="background-color: <?php echo $cor; ?>;">
    <!-- Mensagem com o nome do Usuário (A Array $_SESSION ela busca a variavel informada em uma sessão específica) -->
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Esta é a sua página de perfil.</p>
    <!-- Logout -->
    <a href="15d_logout.php">Sair do Sistema</a>
</body>
</html>