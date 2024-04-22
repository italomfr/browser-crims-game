<?php
// Configurações do banco de dados
$host = "localhost"; // Host do banco de dados
$dbname = "thegangs_db"; // Nome do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados (deixe em branco se não houver senha)

// Tentativa de conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configuração adicional para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Se a conexão falhar, exibir mensagem de erro
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
