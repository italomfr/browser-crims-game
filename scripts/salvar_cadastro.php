<?php
// Configurações do banco de dados
$servername = "127.0.0.1";
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$database = "thegangs_db"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Query SQL para inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    // Se a inserção for bem-sucedida, envia uma resposta de sucesso
    http_response_code(200);
    // Redireciona para user.html após 3 segundos
    header("refresh:3;url=user.html");
    echo "Conta criada e salva no banco de dados com sucesso! Redirecionando...";
} else {
    // Se ocorrer um erro na inserção, envia uma resposta de erro
    http_response_code(500);
    echo "Erro ao salvar a conta no banco de dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
