<?php 
// PHP para manipulação de tópicos e categorias

session_start();
require_once 'config.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);   
$uri = explode('/', $uri);        
$endPoint = $_SERVER['PATH_INFO'];
$requestMethod = $_SERVER["REQUEST_METHOD"];

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (!$conexao) {
    die("A conexão falhou: " . mysqli_connect_error());
}

switch ($endPoint) {
    case '/mona/topicos':
        if ($requestMethod == 'GET') {
            $queryTopicos = "SELECT * FROM topicos ORDER BY ID;";
            $dadosTopicos = mysqli_query($conexao, $queryTopicos) or die(mysqli_error($conexao));
            $topicos = mysqli_fetch_all($dadosTopicos, MYSQLI_ASSOC);
            echo json_encode($topicos, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
        }
        break;

    case '/mona/categoriasMaisUsadas':
        if ($requestMethod == 'GET') {
            $queryCategorias = "SELECT categoria, COUNT(*) as uso FROM topicos GROUP BY categoria ORDER BY uso DESC LIMIT 5;";
            $dadosCategorias = mysqli_query($conexao, $queryCategorias) or die(mysqli_error($conexao));
            $categoriasMaisUsadas = mysqli_fetch_all($dadosCategorias, MYSQLI_ASSOC);
            echo json_encode($categoriasMaisUsadas);
        }
        break;

    case '/mona/inserirTopico':
        if ($requestMethod == 'POST') {
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $icone = $_POST['icone'];

            $queryInserir = "INSERT INTO topicos (titulo, categoria, icone) VALUES (?, ?, ?);";
            $stmt = mysqli_prepare($conexao, $queryInserir);
            mysqli_stmt_bind_param($stmt, 'sss', $titulo, $categoria, $icone);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $response = ['success' => true, 'message' => 'Tópico inserido com sucesso!'];
            } else {
                $response = ['success' => false, 'message' => 'Erro ao inserir tópico.'];
            }
            echo json_encode($response);
        }
        break;

    default:
        header("HTTP/1.1 404 Not Found");
        exit();
}
?>
