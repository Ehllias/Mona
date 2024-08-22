<?php
session_start();


$usuarioLogado = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="AI-Inteligencia Artificial, Sustentabilidade, Prezervação do Planeta" />
    <title>AI-SEFER</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="slides/slider.css">
</head>

<body>
    <!-- Navegação-->
    <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#!">
            <img class="logo" src="assets/img/logo nova.svg" alt="Logo AI-SEFER">
        </a>
        <h1>Bem-vindo, <?php echo htmlspecialchars($usuarioLogado); ?>!</h1>
        <a class="btn btn-success remover-borda" href="<?php echo $usuarioLogado === 'Visitante' ? 'login.html' : 'back/logout.php'; ?>" id="loginButton">
            <?php echo $usuarioLogado === 'Visitante' ? 'Login' : 'Deslogar'; ?>
        </a>
    </div>
</nav>

    <!-- Cabeçalho-->
    <header class="">
        <div class="container-fluid">
            <div class="carousel slide w-100" data-bs-ride="carousel" id="ads">
     
                 <div class="carousel-indicators">
                     <button class="active" data-bs-target="#ads" data-bs-slide-to="0"></button>
                     <button data-bs-target="#ads" data-bs-slide-to="1"></button>
                     <button data-bs-target="#ads" data-bs-slide-to="2"></button>
                     <button data-bs-target="#ads" data-bs-slide-to="3"></button>
                     <button data-bs-target="#ads" data-bs-slide-to="4"></button>
                     <button data-bs-target="#ads" data-bs-slide-to="5"></button>
                 </div>
     
                 <div class="carousel-inner">
                     <div class="carousel-item active" data-bs-interval="5000">
                         <img src="slides/image/svs5.gif" alt="" class="d-block w-100">
                         <div class="carousel-caption"> </div>
                           
                     </div>
                     
                     <div class="carousel-item" data-bs-interval="5000">
                         <img src="slides/image/svs4.gif" alt="" class="d-block w-100">
                         <div class="carousel-caption">
                             
                             <div class="sleideP">
                                 <p><a href="#"class="saiba-mais btn btn-primary">Fale com a Mona</a></p>
                             </div> 
                         </div>
                     </div>
     
                     <div class="carousel-item" data-bs-interval="7000">
                         <img src="slides/image/svs3.gif" alt="" class="d-block w-100">
                         <div class="carousel-caption"></div>
                     </div>
                     <div class="carousel-item" data-bs-interval="7000">
                         <img src="slides/image/SEG.gif" alt="" class="d-block w-100">
                         <div class="carousel-caption"></div>
                     </div>
     
                     <div class="carousel-item" data-bs-interval="5000">
                         <img src="slides/image/svs2.jpg" alt="" class="d-block w-100">
                         <div class="carousel-caption"></div>
                          
                         
                     </div>
     
                     <div class="carousel-item" data-bs-interval="5000">
                         <img src="slides/image/svs1.jpg" alt="" class="d-block w-100">
                         <div class="carousel-caption"> </div>
                             
                     </div>
                 </div>
                 
                 <button class="carousel-control-prev" data-bs-target="#ads" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
     
                 <button class="carousel-control-next" data-bs-target="#ads" data-bs-slide="next">
                     <span class="carousel-control-next-icon"></span>
                 </button>
             </div>
         </div>
    </header>
    <!-- Grade de ícones-->
    <main>
        <section class="features-icons bg-light text-center textoarrumado">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <img src="assets/img/reciclagem.svg"
                                    alt="Animação de lixeira com símbolo de reciclagem, demonstrando a conscientização ambiental. A lixeira se forma progressivamente, destacando o compromisso com a reciclagem. Um ícone de sustentabilidade e cuidado ambiental, representado pela animação da lixeira e seu distintivo de reciclagem."
                                    width="100%" height="100%">
                            </div>
                            <h3>Objetivo</h3>
                            <p class="lead">
                                O Fórum de Sustentabilidade é mais do que um espaço virtual: é um movimento, uma
                                comunidade e uma promessa de um futuro melhor. Junte-se a nós e faça parte da solução!
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <img src="assets/img/engrenagem.svg"
                                    alt="Animação de engrenagem em processo de formação, revelando gradualmente suas partes que se encaixam com precisão. O movimento destaca a montagem suave, simbolizando perfeição e funcionalidade."
                                    width="100%">
                            </div>
                            <h3>Tecnologia e Inovação</h3>
                            <p class="lead">O diferencial desse fórum é a integração de um chatbot baseado em GPT,
                                especificamente adaptado para abordar tópicos sustentáveis.</p>
                        </div>
                    </div>
                    <p class="button"><a href="forum" class="ir-forum btn">Ir para o forum</a></p>
                </div>
            </div>
        </section>
        <!-- Vitrines de imagens-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img"
                        style="background-image: url('assets/img/mona2.0.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Mona</h2>
                        <p class="lead textoarrumado ">A Mona, desenvolvida com a tecnologia avançada da OpenAI, é uma
                            inteligência
                            artificial dedicada exclusivamente à sustentabilidade ambiental. Seu objetivo principal é
                            otimizar e promover práticas ecologicamente responsáveis em diversas áreas, desde a gestão
                            de
                            recursos naturais até a criação de soluções inovadoras para desafios ambientais.</p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img"
                        style="background-image: url('assets/img/logo nova.svg'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="col-lg-6 my-auto showcase-text ">
                        <h2>Sobre a AI-SEFER</h2>
                        <p class="lead mb-0 textoarrumado">Olá, somos um grupo de alunos do curso de Sistemas para Internet da Fatec
                            de
                            Taquaritinga e estamos desenvolvendo um projeto sobre sustentabilidade usando inteligência
                            artificial. Queremos criar um site que informe e conscientize as pessoas sobre a importância
                            de
                            preservar o meio ambiente e reduzir o impacto ambiental das nossas atividades. A
                            inteligência
                            artificial nos ajuda a analisar dados, gerar conteúdo e interagir com os usuários de forma
                            dinâmica e personalizada. Estamos muito animados com esse projeto e esperamos que ele possa
                            contribuir para um mundo mais sustentável</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img"
                        style="background-image: url('assets/img/planeta.svg'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>O nosso planeta é a nossa casa</h2>
                        <p class="lead mb-0 textoarrumado">

                            Nós vivemos em um planeta maravilhoso, cheio de vida, beleza e diversidade. Ele nos oferece
                            tudo
                            o que precisamos para viver: água, ar, solo, alimentos, energia, recursos naturais e muito
                            mais.
                            Mas ele também enfrenta muitos problemas, causados pela ação humana: poluição, desmatamento,
                            aquecimento global, extinção de espécies, desigualdade social e outros.
                            Precisamos respeitar a natureza, usar os recursos de forma consciente, reduzir o nosso
                            impacto ambiental, promover a
                            justiça e a paz, e cooperar uns com os outros. Precisamos fazer a nossa parte, individual e
                            coletivamente, para garantir um futuro sustentável para nós e para as próximas gerações.
                            Esta imagem é um símbolo de esperança, de que é possível construir um mundo melhor, mais
                            verde e
                            mais sustentável. Ela é um convite à ação, de que cada um de nós pode fazer a diferença, com
                            pequenos gestos ou grandes projetos. Ela é uma mensagem de amor, de que o nosso planeta é a
                            nossa casa, e que devemos cuidar dele como tal.</p>
                    </div>
                </div>
            </div>
        </section>




        <div class="fixed-buttons">
            <div>
                <button class="btn btn-primary" onclick="zoomIn()">
                    <i class="bi bi-zoom-in"></i>
                </button>
            </div>
            <div>
                <button class="btn btn-primary" onclick="zoomOut()">
                    <i class="bi bi-zoom-out"></i>
                </button>
            </div>
        </div>
        </section>
    </main>
    <!-- Footer-->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>

    <script>
var usuarioLogado = <?php echo json_encode($usuarioLogado); ?>;

// Se estiver logado, alterar o botão para 'Deslogar'
if (usuarioLogado !== 'Visitante') {
    var loginButton = document.getElementById('loginButton');
    loginButton.textContent = 'Deslogar';
} else {
    var loginButton = document.getElementById('loginButton');
    loginButton.textContent = 'Login';
}
</script>

</body>

</html>




