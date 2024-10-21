<?php
session_start();
$usuarioLogado = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mona Forum - Sustainability</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/i18next/21.6.12/i18next.min.js"></script>

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
       
        <!-- <a class="btn btn-success remover-borda" href="<?php echo $usuarioLogado === 'Visitante' ? '../login.html' : '../back/logout.php'; ?>" id="loginButton">
            <?php echo $usuarioLogado === 'Visitante' ? 'Login' : 'Deslogar'; ?>
        </a> -->
        <a href="index.php">
          <button id="changeLanguageBtn" class="btn btn-success remover-borda">Move to portuguese</button>
        </a>
    </div>
</nav>

  <main class="container my-5">
    <h2 class="text-center">Welcome <?php echo htmlspecialchars($usuarioLogado); ?>!</h2>
    <p class="text-center">A community dedicated to sustainability and eco-friendly living.</p>

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-tags"></i>Popular Categories</h5>
          </div>
          <div class="card-body">
            <ul id="categoriasMaisUsadas" class="list-group">
              <a href="#"><li>Sustained Powers</li></a>
              <a href="#"><li>Impacts of soil degradation</li></a>
              <a href="#"><li>How to improve by the smallest</li></a> 
              <a href="#"><li>Wind Power Plants</li></a> 
              <a href="#"><li>Biofuels from sugar-cane</li></a>
              <a href="#"><li>Biotechnology in the world</li></a>
             
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-comments"></i> Latest Discussions</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush" id="apitopicos">
              <!-- Lista dinamica -->
            <div class="col-12">
<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132907997?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Ehllias</strong>
        </div>
    </div>
    <p class="mt-2" >Sustainability is a principle that aims to balance the current needs of humanity without compromising the ability of future generations to meet their own needs. It’s about living in a way that respects the natural limits of the planet..</p>

    <div class="hashtags">
        <span class="badge bg-secondary">#sustainability and sustainability</span>
        <span class="badge bg-secondary">#TheusineEolica</span>
        <span class="badge bg-secondary">#ecology</span>
    </div>
  </div>
</div>
<div class="col-12">

<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132910876?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Mestre</strong>
        </div>
    </div>
    <p class="mt-2">Ecology in general is based on three main pillars: environmental, economic and social. The environmental pillar focuses on the conservation of natural resources and the protection of the ecosystem. It is about reducing environmental impact and preserving biodiversity.</p>

    <div class="hashtags">
    <span class="badge bg-secondary">#sustentabilidade</span>
        <span class="badge bg-secondary">#usinaEolica</span>
        <span class="badge bg-secondary">#ecologia</span>
    </div>
</div>

<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132910876?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Mestre</strong>
        </div>
    </div>
    <p class="mt-2">Recently the economic pillar is about creating long-term economic systems that are viable. This means promoting business practices that not only generate profit, but also take care of natural resources and support the well-being of communities.</p>

    <div class="hashtags">
    <span class="badge bg-secondary">#sustentabilidade</span>
        <span class="badge bg-secondary">#usinaEolica</span>
        <span class="badge bg-secondary">#ecologia</span>
    </div>
</div>

<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132910876?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Mestre</strong>
        </div>
    </div>
    <p class="mt-2">About the social pillar focuses on improving the quality of life of people. It includes issues such as social justice, equal opportunities and human rights. It is ensuring that all people have access to the resources they need to live a dignified and healthy life.</p>

    <div class="hashtags">
    <span class="badge bg-secondary">#sustentabilidade</span>
        <span class="badge bg-secondary">#usinaEolica</span>
        <span class="badge bg-secondary">#ecologia</span>
    </div>
</div>

<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132910876?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Mestre</strong>
        </div>
    </div>
    <p class="mt-2">Sustainability also means innovation and adaptation. It involves the search for new technologies and methods that can reduce our environmental impact and promote a more balanced and fair development.</p>

    <div class="hashtags">
    <span class="badge bg-secondary">#sustentabilidade</span>
        <span class="badge bg-secondary">#usinaEolica</span>
        <span class="badge bg-secondary">#ecologia</span>
    </div>
</div>

<div class="message-box border p-3 mb-3">
    <div class="d-flex align-items-center">
        <div class="user-image me-2">
            <img src="https://avatars.githubusercontent.com/u/132910876?v=4" class="rounded-circle" width="40" height="40">
        </div>
        <div>
            <strong>Mestre</strong>
        </div>
    </div>
    <p class="mt-2">Sustainability is about finding a balance between human needs and our planet’s ability to sustain life. It is a holistic approach that seeks harmony between economic development, environmental protection and social equity.</p>

    <div class="hashtags">
    <span class="badge bg-secondary">#sustentabilidade</span>
        <span class="badge bg-secondary">#usinaEolica</span>
        <span class="badge bg-secondary">#ecologia</span>
    </div>
</div>

</div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-pen"></i> Join the Conversation</h5>
          </div>
          <div class="card-body">
            <p>Share your thoughts, ideas, and experiences about sustainability with other like-minded individuals.</p>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#novoTopicoModal">Create a new topic</a>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-search"></i> Search Discussions</h5>
          </div>
          <div class="card-body">
            <form class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search forum..." aria-label="Search Discussions">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="novoTopicoModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create a new topic</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="inserir.php" method="post">
              <div class="mb-3">
                <label for="tituloTopico" class="form-label">Title topic</label>
                <input type="text" class="form-control" id="tituloTopico">
              </div>
              <div class="mb-3">
                <label for="categoriaTopico" class="form-label">Category</label>
                <select class="form-select" id="categoriaTopico">
                  <!-- Opções existentes -->
                  <option>Renewable energy</option>
                  <option>Sustainable living</option>
                  <option>Ecological products</option>
                  <option>Climate change</option>
                  <option>Environmental activism</option>
                  <!-- Novas opções -->
                  <option>Water conservation</option>
                  <option>Agricultura sustentável</option>
                  <option>Environmental education</option>
                  <option>Green transport</option>
                  <option>Poluição zero</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="iconeTopico" class="form-label">Icon</label>
                <div class="icon-select-container">
                  <i id="selectIcon" class="fas fa-question-circle"></i>
                  <select class="form-select" id="iconeTopico">
                    <!-- Opções existentes -->
                    <option value="fas fa-solar-panel">Solar panel</option>
                    <option value="fas fa-leaf">Tree leaves</option>
                    <option value="fas fa-recycle">Recycling</option>
                    <option value="fas fa-temperature-high">High temperature</option>
                    <option value="fas fa-globe">Planet</option>
                    <!-- Novas opções -->
                    <option value="fas fa-water">Water</option>
                    <option value="fas fa-seedling">Plantation</option>
                    <option value="fas fa-graduation-cap">Education</option>
                    <option value="fas fa-bicycle">Digital Waste</option>
                    <option value="fas fa-wind">Wild power</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="salvarTopico">Save</button>
          </div>
        </div>
      </div>
    </div>
    <img id="toggleColorBtn" href="./assets/img/troca-cor.png" class="btn btn-toggle" style="Width: 15px, heath: 15px, translatepxX:150;"><button id="toggleColorBtn" class="btn btn-toggle"></button></img>

  </main>


  <footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">About</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Terms of use</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; AI-SEFER 2024. Copyright All Rights Reserved.</p>
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
<script>
    document.getElementById('changeLanguageBtn').addEventListener('click', function() {
      i18next.changeLanguage('en', function(err, t) {
        updateContent();
      });
    });

    function updateContent() {
      document.querySelectorAll('[data-i18n]').forEach(function(element) {
        element.innerText = i18next.t(element.getAttribute('data-i18n'));
      });
    }

    i18next.init({
      lng: 'pt', // Idioma inicial
      resources: {
        en: {
          translation: {
            "greeting": "Hello, World!",
            "question": "How are you?"
          }
        },
        pt: {
          translation: {
            "greeting": "Olá, Mundo!",
            "question": "Como você está?"
          }
        }
      }
    }, function(err, t) {
      updateContent(); // Inicializa com o conteúdo em português
    

</html>
