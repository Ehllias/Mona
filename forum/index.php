<?php
session_start();
$usuarioLogado = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fórum Mona - Sustentabilidade</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="../">
            <img class="logo" src="../assets/img/logo nova.svg" alt="Logo AI-SEFER">
        </a>
       
        <a class="btn btn-success remover-borda" href="<?php echo $usuarioLogado === 'Visitante' ? '../login.html' : '../back/logout.php'; ?>" id="loginButton">
            <?php echo $usuarioLogado === 'Visitante' ? 'Login' : 'Deslogar'; ?>
        </a>
    </div>
</nav>

  <main class="container my-5">
    <h2 class="text-center">Bem-vindo, <?php echo htmlspecialchars($usuarioLogado); ?>!</h2>
    <p class="text-center">Uma comunidade dedicada à sustentabilidade e ao estilo de vida ecológico.</p>

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-tags"></i> Categorias Populares</h5>
          </div>
          <div class="card-body">
            <ul id="categoriasMaisUsadas" class="list-group">
             
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-comments"></i> Últimas Discussões</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush" id="apitopicos">
              <!-- Lista de tópicos será preenchida dinamicamente -->
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-pen"></i> Participe da Conversa</h5>
          </div>
          <div class="card-body">
            <p>Compartilhe seus pensamentos, ideias e experiências sobre sustentabilidade com outros indivíduos de mentalidade semelhante.</p>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#novoTopicoModal">Criar um Novo Tópico</a>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-search"></i> Pesquisar Discussões</h5>
          </div>
          <div class="card-body">
            <form class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar discussões">
              <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="novoTopicoModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Criar um Novo Tópico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="inserir.php" method="post">
              <div class="mb-3">
                <label for="tituloTopico" class="form-label">Título do Tópico</label>
                <input type="text" class="form-control" id="tituloTopico">
              </div>
              <div class="mb-3">
                <label for="categoriaTopico" class="form-label">Categoria</label>
                <select class="form-select" id="categoriaTopico">
                  <!-- Opções existentes -->
                  <option>Energia renovável</option>
                  <option>Vida sustentável</option>
                  <option>Produtos ecológicos</option>
                  <option>Mudanças climáticas</option>
                  <option>Ativismo ambiental</option>
                  <!-- Novas opções -->
                  <option>Conservação da água</option>
                  <option>Agricultura sustentável</option>
                  <option>Educação ambiental</option>
                  <option>Transporte verde</option>
                  <option>Poluição zero</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="iconeTopico" class="form-label">Ícone</label>
                <div class="icon-select-container">
                  <i id="selectIcon" class="fas fa-question-circle"></i>
                  <select class="form-select" id="iconeTopico">
                    <!-- Opções existentes -->
                    <option value="fas fa-solar-panel">Painel solar</option>
                    <option value="fas fa-leaf">Folha</option>
                    <option value="fas fa-recycle">Reciclagem</option>
                    <option value="fas fa-temperature-high">Temperatura alta</option>
                    <option value="fas fa-globe">Globo</option>
                    <!-- Novas opções -->
                    <option value="fas fa-water">Água</option>
                    <option value="fas fa-seedling">Plantação</option>
                    <option value="fas fa-graduation-cap">Educação</option>
                    <option value="fas fa-bicycle">Bicicleta</option>
                    <option value="fas fa-wind">Energia eólica</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" id="salvarTopico">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </main>


  <footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">Sobre</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contato</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Termos de uso</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Política de Privacidade</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; AI-SEFER 2024. Todos os direitos reservados.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4">
                        <a target="_blank" href="#!"><i class="bi-facebook fs-3"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a target="_blank" href="#!"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank"
                            href="https://github.com/DrMadneesss/IA-generativa-sustentabiiade/tree/main"><i
                                class="bi-github fs-3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget({
            rootPah: '/app',
            personalization: 'https://vlibras.gov.br/config/default_logo.json',
            opacity: 0.5,
            position: 'R',
            avatar: 'random',
        });
    </script>
</footer>
  
  <script src="index.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById("iconeTopico");
    const iconElement = document.getElementById("selectIcon");

    selectElement.addEventListener("change", function () {
        const selectedValue = selectElement.value;
        iconElement.className = selectedValue || "fas fa-question-circle";
    });
});


$(document).ready(function() {
    $('.navbar-toggler').click(function() {
      $(this).toggleClass('collapsed');
      $('.navbar-collapse').toggleClass('show');
    });
  });
  
  </script>
</body>


<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "composerPlaceholder": "Fala com a Mona",
      "botConversationDescription": "Mona é uma IA focada em sustentabilidade",
      "botId": "0f674a8b-03ea-464f-b013-0987f5d347ce",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "0f674a8b-03ea-464f-b013-0987f5d347ce",
      "webhookId": "4d24b37c-1f33-4994-babd-0707c2a134b3",
      "lazySocket": true,
      "themeName": "prism",
      "botName": "Mona",
      "avatarUrl": "https://fatecspgov.sharepoint.com/sites/Mona2/Shared%20Documents/General/mona2.0.jfif",
      "frontendVersion": "v1",
      "enableConversationDeletion": true,
      "showPoweredBy": false,
      "theme": "prism",
      "themeColor": "#2563eb",
      "allowedOrigins": []
  });
</script>
</html>
