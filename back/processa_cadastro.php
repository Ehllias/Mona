<?php
// Conectar ao banco de dados
$host = 'localhost';
$db = 'mona'; // Substitua pelo nome do seu banco de dados
$user = 'root'; // Substitua pelo seu usuário do banco de dados
$password = ''; // Substitua pela sua senha do banco de dados

$conn = new mysqli($host, $user, $password, $db);

// Verificar conexão
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

// Validar senhas
if ($senha !== $confirmaSenha) {
    echo "<script>
        alert('Erro: As senhas não são iguais.');
        window.history.back(); // Volta para a página anterior
    </script>";
    exit();
}

// Verificar se o email já existe
$checkEmail = $conn->prepare("SELECT ID FROM usuario WHERE email = ?");
$checkEmail->bind_param('s', $email);
$checkEmail->execute();
$checkEmail->store_result();

if ($checkEmail->num_rows > 0) {
    echo "<script>
        alert('Erro: O email já está cadastrado.');
        window.history.back(); // Volta para a página anterior
    </script>";
    $checkEmail->close();
    $conn->close();
    exit();
}
$checkEmail->close();

// Verificar se o usuario já existe
$checkuser = $conn->prepare("SELECT ID FROM usuario WHERE usuario = ?");
$checkuser->bind_param('s', $usuario);
$checkuser->execute();
$checkuser->store_result();


if ($checkuser->num_rows > 0) {
    echo "<script>
        alert('Erro: O usuario já está cadastrado.');
        window.history.back(); // Volta para a página anterior
    </script>";
    $checkuser->close();
    $conn->close();
    exit();
}
$checkuser->close();

// Criptografar senha
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

// Preparar e executar a consulta SQL
$stmt = $conn->prepare("INSERT INTO usuario (nome, email, usuario, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param('ssss', $nome, $email, $usuario, $senhaCriptografada);

if ($stmt->execute()) {
    echo "<script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href = '../login.html'; // Redireciona para a página de login
    </script>";
} else {
    echo "<script>
        alert('Erro ao cadastrar usuário: {$stmt->error}');
        window.history.back(); // Volta para a página anterior
    </script>";
}

// Fechar conexões
$stmt->close();
$conn->close();
?>
