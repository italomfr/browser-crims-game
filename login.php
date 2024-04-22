<?php
// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $database = "thegangs_db"; // Nome do banco de dados

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Recebe os dados do formulário de login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query SQL para verificar os dados de login no banco de dados
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se os dados estiverem corretos, redireciona para user.html
        header("Location: user.html");
        exit();
    } else {
        // Se os dados estiverem incorretos, exibe uma mensagem de erro
        $error_message = "Usuário ou senha incorretos.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
