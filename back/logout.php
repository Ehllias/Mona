<?php
session_start();
session_destroy();

// Verifica se a variável HTTP_REFERER está disponível
if(isset($_SERVER['HTTP_REFERER'])) {
    // Redireciona o usuário para a página anterior
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Redireciona para uma página padrão se HTTP_REFERER não estiver disponível
    header('Location: index.php');
}
exit;


exit;
?>
