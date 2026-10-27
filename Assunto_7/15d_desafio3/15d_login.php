<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuário</title>
</head>
<h2>Login do Usuário</h2>
<body>
    <form method="post" action="">
        <!-- Campo para informar o Usuário -->
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br><br>
        <!-- Campo para informar a Senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        <!-- Campo para informar a Cor -->
        <label for="color">Cor de Fundo:</label>
        <input type="color" name="color" required><br><br>
        <!-- Botão de Entrar -->
        <button type="submit">Entrar</button>
    </form>

<?php
// Inicio da Sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recebe os valores enviados pelo formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cor = $_POST['color'];

    // Conecta ao BD
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta o usuário no BD
    $sql = "SELECT * FROM usuarios 
            WHERE usuario = '$usuario' AND senha = '$senha'";

    $result = $conn->query($sql);

    // Verifica se encontrou o usuário
    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['cor'] = $cor;

        header("Location: 15d_perfil.php");
        exit();
    } else {
        echo "<p style='color: #8e0808;'>Usuário ou senha incorretos!</p>";
    }

    // Fecha a conexão
    $conn->close();
}

?>

</body>
</html>