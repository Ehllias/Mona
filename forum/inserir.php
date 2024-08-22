<?php
require_once 'config.php';

// Criar conexão
$conn = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

// Verificar conexão
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Falha na conexão: " . $conn->connect_error]));
}

// Pega os dados do POST
$titulo = $_POST['titulo'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$icone = $_POST['icone'] ?? '';

// Validar os dados
if (empty($titulo) || empty($categoria) || empty($icone)) {
    echo json_encode(["success" => false, "message" => "Todos os campos são obrigatórios."]);
    exit;
}

// Prepara e executa a consulta
$sql = "INSERT INTO topicos (titulo, categoria, icone) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    echo json_encode(["success" => false, "message" => "Erro ao preparar a consulta: " . $conn->error]);
    exit;
}

$stmt->bind_param("sss", $titulo, $categoria, $icone);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Tópico adicionado com sucesso."]);
} else {
    echo json_encode(["success" => false, "message" => "Erro ao adicionar tópico: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
