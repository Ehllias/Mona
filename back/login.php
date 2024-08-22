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
$login = $_POST['login'];
$senha = $_POST['senha'];

// Preparar e executar a consulta SQL para obter o usuário
$stmt = $conn->prepare("SELECT senha FROM usuario WHERE usuario = ?");
$stmt->bind_param('s', $login);
$stmt->execute();
$stmt->store_result();

// Verificar se o usuário existe
if ($stmt->num_rows > 0) {
    $stmt->bind_result($senhaHash);
    $stmt->fetch();

    // Verificar a senha
    if (password_verify($senha, $senhaHash)) {
        // Iniciar a sessão
        session_start();
        // Armazenar informações do usuário na sessão
        $_SESSION['usuario'] = $login;
        // Você pode adicionar mais informações do usuário aqui

        // Redirecionar para a página PHP de destino
        header('Location: ../index.php');
        exit;
    } else {
        // Mensagem de erro
        echo "<script>
            alert('O nome de usuário ou senha inseridos estão incorretos. Por favor, verifique suas credenciais e tente novamente');
            window.history.back();
        </script>";
    }
} else {
    // Mensagem de erro
    echo "<script>
        alert('O nome de usuário ou senha inseridos estão incorretos. Por favor, verifique suas credenciais e tente novamente');
        window.history.back();
    </script>";
}

// Fechar conexões
$stmt->close();
$conn->close();
?>
